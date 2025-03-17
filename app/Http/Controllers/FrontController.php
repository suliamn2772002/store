<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $products = [] ;
        if(isset($_GET['category']) && $_GET['category']!= '#'){
            $products = Product::where('category' , $_GET['category'])->get();
        }else {
            $products = Product::all();
        }
        $categories = Category::all();
        return view('home.index', compact('products' , "categories"));
    }
}
