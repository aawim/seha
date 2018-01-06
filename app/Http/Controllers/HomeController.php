<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use App\carousel;
 
use Auth;
class HomeController extends Controller
{
 
    private  $products;

    public function __construct()
    {
       // $this->middleware('auth');
       // $this->products = Product::where('is_active','1')->orderBy('name')->get();
     
       
      
    }
     public function index()
    {
        if (Auth::check()){
        $carousels  = carousel::where('is_active','0')->get();
        $categories = Category::where('is_active','1')->orderBy('name')->limit(7)->get();
        $products = Product::where('is_active','1')->where('availability','1')->limit(4)->inRandomOrder()->get();
        return view('wellhome',['products' => $products,  'categories' => $categories,'carousels'=>$carousels  ]);
        }else{

        $carousels  = carousel::where('is_active','0')->get();
        $categories = Category::where('is_active','1')->orderBy('name')->limit(7)->get();
        $products = Product::where('is_active','1')->where('availability','1')->limit(4)->inRandomOrder()->get();
        return view('wellhome',['products' => $products, 'categories' => $categories,'carousels'=>$carousels]);
       }
}

    public function dash()
    {

        
        return view('dash.index' );
    }


}
