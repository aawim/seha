<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductPhoto;
use App\RememberSearch;
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
       
                if(Auth::check()){
                   
             
                           $d = new RememberSearch();
                           $d->user_id = Auth::user()->id;
                           $d->product_id = $id;
                           $d->count = 1;
                           $d->save();
                       }

        
           $ratingSum = Review::where('is_active','1')->where('product_id',$id)->sum('rating');
           $ratingCount = Review::where('is_active','1')->where('product_id',$id)->get();
           $otherPhotoes = ProductPhoto::where('product_id',$id)->get();
           $reviews = Review::where('is_active','1')->where('product_id',$id)->inRandomOrder()->get();
           $categories = Category::where('is_active','1')->orderBy('name')->get();
           $product = Product::find($id);
           $productss = Product::where('is_active','1')->get();
          
          
           $searches = RememberSearch::select('product_id')->limit(3)->inRandomOrder()->groupBy('product_id')->get();

            

           $users = User::all();
           if(count($product)>0){
            return view('pages.detail',['productss'=>$productss, 'searches'=>$searches, 'product'=>$product, 'ratingCount'=>$ratingCount, 'ratingSum'=>$ratingSum, 'users'=>$users, 'categories'=> $categories , 'reviews' => $reviews,'otherPhotoes'=> $otherPhotoes ]);
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
