<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $totalproducts=Product::count();
        $products=Product::all();
        return view("frontend.pages.products",compact("products","totalproducts"));
    }
    public function showProduct(Product $product){
        $products=Product::all();
        return view("frontend.pages.show_SingleProduct",compact("products","product"));
    }
}
