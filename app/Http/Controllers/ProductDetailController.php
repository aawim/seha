<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductPhoto;
use App\Category;
use App\Review;
use App\Cart;
use App\User;
use Auth;
class ProductDetailController extends Controller
{
    
    public function index()
    {
        $reviews = Review::where('is_active','1')->get();     
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        return view('pages.detail',['categories'=> $categories, 'reviews' => $reviews]);
    }

 
  
   

    
    public function show($id)
    {
   
 // if (Auth::check()){
        //     $otherPhotoes = ProductPhoto::where('product_id',$id)->get();
        //     $reviews = Review::where('is_active','1')->where('product_id',$id)->get(); 
        //     $categories = Category::where('is_active','1')->orderBy('name')->get();
        //     $product = Product::find($id);
        //     $users = User::all();
        //    if(count($product)>0){
        //     return view('pages.detail',['product'=>$product, 'users'=>$users, 'categories'=> $categories , 'reviews' => $reviews,'otherPhotoes'=> $otherPhotoes ]);
        //    }else{
        //    }
                     
        //     }else{
        //         $users = User::all();
        //         $otherPhotoes = ProductPhoto::where('product_id',$id)->get();
        //         $reviews = Review::where('is_active','1')->get(); 
        //         $categories = Category::where('is_active','1')->orderBy('name')->get();
        //         $product = Product::find($id);
          
          
        //   if(count($product)>0){
        //     return view('pages.detail',['product'=>$product, 'categories'=> $categories , 'reviews' => $reviews,'otherPhotoes'=> $otherPhotoes  ]);
        //    }else{

            
        //    }



            $otherPhotoes = ProductPhoto::where('product_id',$id)->get();
            $reviews = Review::where('is_active','1')->where('product_id',$id)->inRandomOrder()->get();
            $reviewsum = Review::sum('rating'); 
            $categories = Category::where('is_active','1')->orderBy('name')->get();
            $product = Product::find($id);
            $users = User::all();
            if(count($product)>0){
                    return view('pages.detail',['reviewsum'=>$reviewsum,'product'=>$product, 'users'=>$users, 'categories'=> $categories , 'reviews' => $reviews,'otherPhotoes'=> $otherPhotoes ]);
                   }else{

                }

       

         }







 

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }
 
    public function destroy($id)
    {
        //
    }
}
