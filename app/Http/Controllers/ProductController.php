<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $totalproducts=Product::count();
        $products=Product::all();
        $categories=Category::all();
        return view("frontend.pages.products",compact("products","totalproducts","categories"));
    }
    public function showProduct(Product $product){
        $products=Product::all();
        return view("frontend.pages.show_SingleProduct",compact("products","product"));
    }

    // public function categoryClicked(Category $categoryClicked){ //! perhaps not the right idea 
    //     return view("frontend.pages.products",compact("categoryClicked"));
    // }

    //* ADD Product
    //* Update Product
    //* Delete Product
    
}
