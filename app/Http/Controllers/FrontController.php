<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $products = [] ;
        if(isset($_GET['category']) && $_GET['category']!= '#'){
            $products = Product::where('category_id' , $_GET['category'])->paginate(3);
        }else {
            $products = Product::paginate(3);
        }
        $categories = Category::all();
        return view('home.index', compact('products' , "categories"));
    }
}
