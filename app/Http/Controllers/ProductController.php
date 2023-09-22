<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $totalproducts = Product::count();
        $products = Product::all();
        $categories = Category::all();
        return view("frontend.pages.products", compact("products", "totalproducts", "categories"));
    }
    public function showProduct(Product $product)
    {
        $products = Product::all();
        return view("frontend.pages.show_SingleProduct", compact("products", "product"));
    }

    // public function categoryClicked(Category $categoryClicked){ //! perhaps not the right idea 
    //     return view("frontend.pages.products",compact("categoryClicked"));
    // }

    //* ADD Product 
    public function addProduct(Request $request)
    { //! Something is wrong
        request()->validate([
            'image' => "required|image|mimes:png,jpg,jpeg,gif|max:2048",
            'name' => "required",
            'desc' => "required",
            'price' => "required|integer",
            'stock' => "required|integer",
            "category_id" => "required",
        ]);
        //? store the image in folder
        $request->file("image")->storePublicly('img/product/', 'public');
        $data = [
            "image" => $request->file("image")->hashName(),
            "name" => $request->name,
            "desc" => $request->desc,
            "price" => $request->price,
            "stock" => $request->stock,
            "category_id" => $request->category_id,
            "user_id" => auth()->user()->id,
        ];
        Product::create($data);
        return back()->with('success', 'Product has been added successfully');
    }

    //* Update Product
    public function updateProduct(Request $request, Product $product)
    {
        request()->validate([
            'image' => "image|mimes:png,jpg,jpeg,gif|max:2048",
        ]);
        $images = ["product_1.png", "product_2.png", "product_3.png", "product_4.png", "product_5.png", "product_6.png", "product_7.png", "product_8.png"];
        if ($request->file('image') != null) {
            // delete image from folder if it is not one of our basic images
            foreach ($images as $image) {
                if ($request->file('image') == $image) {
                    Storage::disk("public")->delete('img/product/' . $product->image);
                }
            }
            $request->file("image")->storePublicly('img/product/', 'public');
            if ($request->category_id != null) {
                $data = [
                    "image" => $request->file("image")->hashName(),
                    "name" => $request->name,
                    "desc" => $request->desc,
                    "price" => $request->price,
                    "stock" => $request->stock,
                    "category_id" => $request->category_id,
                    "user_id" => auth()->user()->id,
                ];
                $product->update($data);
            } else {
                $data = [
                    "image" => $request->file("image")->hashName(),
                    "name" => $request->name,
                    "desc" => $request->desc,
                    "price" => $request->price,
                    "stock" => $request->stock,
                    "category_id" => $product->category_id,
                    "user_id" => auth()->user()->id,
                ];
                $product->update($data);
            }
        } else {
            $product->name = $request->name;
            $product->desc = $request->desc;
            $product->price = $request->price;
            $product->stock = $request->stock;
            if ($request->category_id != null) {
                $product->category_id = $request->category_id;
            }
            $product->save();
        }
        return back()->with('warning', 'Product has been Edited successfully');
    }

    //* Delete Product
    public function destroyProduct(Product $product)
    {
        $check = Str::contains($product->image, 'product_');
        if (!$check) {
            // delete image from folder & DB if it is not one of our basic images
            Storage::disk("public")->delete('img/product/' . $product->image);
            $product->delete();
        } else {
            // delete image from DB ONLY
            $product->delete();
        }
        return back()->with('error', 'Product has been deleted successfully');
    }
}
