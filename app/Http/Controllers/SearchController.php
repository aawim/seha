<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Product;
use App\Cart;
use App\Category;
use App\Subcategory;
use Auth;
class SearchController extends Controller
{
   
   
   
   
   public function free(Request $request){
        
            $search = $request->id;
            $categories = Category::where('is_active',1)->orderBy('name')->get();
            $productsprice = Product::where('is_active',1)->where('price','<', 1 )->orderBy('name')->get();
            $products = Product::where('is_active',1)->orderBy('name')->get();
            if (is_null($search))
            {
               return view('pages.free',['products' => $products, 'productsprice'=>$productsprice, 'categories' => $categories  ]);		   
            }
            else
            {
                $products = Product::where('name','LIKE',"%{$search}%")->where('is_active','1')->where('price','<', 1 )->get();
                return view('pages.livesearchajax',['products' => $products ]);
            }
    
    
    
    
    
   }
   
   
   
   
   
    public function liveSearch(Request $request)
    { 
        $search = $request->id;

        if (is_null($search))
        {
           return view('pages.products');		   
        }
        else
        {
            $products = Product::where('name','LIKE',"%{$search}%")->get();
            return view('pages.livesearchajax',['products' => $products ]);
        }

    }




    public function userSearch(Request $request)
    {
        $user = User::findOrFail($request->searchText);
        dd($user);

        return "asas";
    }






//    public function viewStores()
//     {

//         if (Auth::check()){
            
            
//             $stores = Store::where('is_active','1')->orderBy('name')->get();
//             return view('pages.stores',[ 'stores'=> $stores] );
//             }else{
//             $stores = Store::where('is_active','1')->orderBy('name')->get();
//             return view('pages.stores',[ 'stores'=> $stores  ] );
//            }
                
//     }

    // public function oneStore($id)
    // {
    //     if (Auth::check()){
          
    //         $stores = Store::where('is_active','1')->where('id',$id)->orderBy('name')->get();
    //         return view('pages.onestore',[ 'stores'=> $stores] );
    //         }else{
    //         $stores = Store::where('is_active','1')->orderBy('name')->get();
    //         return view('pages.onestore',[ 'stores'=> $stores  ] );
    //        }
    // }







    // public function shopProductSearch($id)
    // {
    //      if (Auth::check()){
    //         $categories = Category::where('is_active','1')->orderBy('name')->limit(7)->get();
          
    //         $products = Product::where('is_active','1')->where('store_id',$id)->orderBy('name')->get();
    //         return view('pages.shop',['products' => $products,  'categories' => $categories] );
    //         }else{
    //         $categories = Category::where('is_active','1')->orderBy('name')->limit(7)->get();
    //         $products = Product::where('is_active','1')->where('store_id',$id)->orderBy('name')->get();
    //         return view('pages.shop',['products' => $products, 'categories' => $categories, ] );
    //        }
   
    //   }



    public function allCategory()
    {
        
        
        $scategories = Subcategory::where('is_active', 1)->orderBy('name')->get();
        $categories = Category::where('is_active',1)->orderBy('name')->get();
        $products = Product::where('is_active',1)->orderBy('name')->get();


        
        return view('pages.allcategory',['scategories' => $scategories, 'categories' => $categories, 'products' => $products ]);

    }


public function search()
    {
         
            $categories = Category::where('is_active',1)->orderBy('name')->get();
            $products = Product::where('is_active',1)->orderBy('name')->get();
            $products_byId = Product::where('is_active',1)->orderBy('name')->get();
            return view('pages.new_product',['products' => $products, 'products_byId'=>$products_byId, 'categories' => $categories, ] );
            
       
      }



      public function catesearch(Request $request)
      {
       
              $categories = Category::where('is_active',1)->orderBy('name')->get();
              $products_byId = Product::where('is_active',1)->where('cat_id',$request->id)->orderBy('name')->get();
              $products = Product::where('is_active',1)->orderBy('name')->get();
              return view('pages.new_product',['products' => $products,'products_byId'=>$products_byId, 'categories' => $categories, ] );
             
           
 

 

        }


}
