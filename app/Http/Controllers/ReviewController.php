<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
 
use App\Category;
use App\Product;
use App\User;
use Auth;
use Toastr;
class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }
 
    public function create()
    {
        //
    }
   
    public function store(Request $request)
    {

        $d = new Review();
        $d->user_id = Auth::user()->id;
        $d->product_id = $request->product_id;
        $d->rating = $request->backing5;
        $d->description = $request->description;
        $d->is_active = 1;
        $d->save();
        Toastr::success('We have recieved you review, Thank you.', 'OOSMV', ["positionClass" => "toast-top-right"]);
        return redirect()->back();


    }
 
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        
        $reviews = Review::where('is_active','1')->where('id',$id)->get();
         
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $product = Product::find($id);
        $users = User::all();
        if(count($reviews)>0){
                return view('pages.reviewEdit',[  'users'=>$users, 'categories'=> $categories , 'reviews' => $reviews,  'product' => $product, ]);
               }else{

            }
    }

    
  
    public function update(Request $request, $id)
    {
       
        $d = Review::findOrFail($id);
        $d->user_id =  $d->user_id ;
        $d->product_id = $d->product_id;
        $d->rating = $request->backing5;
        $d->description = $request->description;
        $d->is_active = 1;
        $d->save();
        Toastr::success('Review saved.', 'OOSMV', ["positionClass" => "toast-top-right"]);
        //return redirect()->back();
        return redirect()->route('item.show',$d->product_id);
    }

    
    public function destroy($id)
    {
        //
    }
}
