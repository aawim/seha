<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use App\Category;
use App\Subcategory;
use App\ProductPhoto;
use Auth;
use App\Store;
use Toastr;
class ClientProductController extends Controller
{
   
    private  $categories, $brands, $products, $scategories;
    public function __construct()
    {
        $this->middleware('auth');
        $this->results = ["Document", "Electronic format" ];
        $this->brands = Brand::orderBy('name')->get();
        $this->categories = Category::where('is_active', 1)->orderBy('name')->get();
        $this->scategories = Subcategory::where('is_active', 1)->orderBy('name')->get();
        $this->products = Product::orderBy('name')->get();
    }


    public function index()
    {

        return view('client.pages.productIndex',['products' => $this->products] );
        
    }

   
    public function create($cat_id = null)
    {




        $scategories = Subcategory::where('cat_id', '=', $cat_id)->get();
        
               return view('client.pages.createproduct', 
               [   'results' => $this->results,
                   'brands' => $this->brands,
                   'categories' => $this->categories,
                   'scategories' => $scategories,
               ]);

         
    }

  
    public function store(Request $request)
    {
        $d = new Product();
        $d->name = $request->name;
        $d->cat_id = $request->cat;
        $d->scat_id =$request->scat;
        $d->brand_id =$request->brand;
        $d->size =$request->size;
        $d->price = $request->price;
        $d->contact = $request->contact;
        $d->user_id = Auth::user()->id;
        $d->dprice = 0;
        $d->qty = $request->qty;
        $d->availability = 0;
      
        $d->color = 'None';
        
        if($request->description === null){
            
            $d->description = 'None';
                    }else{
                        $d->description = $request->description;
            
                    }       
        
       
     
        $d->is_active = 0;
 
        if ($request->hasFile('icon')) {
            $imgName = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            $d->image = $product;
            }else{
                $d->image = "None";
             }


      
             $d->save();
             Toastr::success('New product added and sent for verification!', 'OOSMV', ["positionClass" => "toast-top-right"]);
             return redirect()->route('clientProduct.create');


    }

   
    public function show($id)
    {
        
  
        
    }

 
    public function edit($id)
    {


        $d = Product::findOrFail($id);
        $scategories = Subcategory::where('is_active', 1)->orderBy('name')->get();

        return view('client.pages.clientProductEdit', 
        [   'results' => $this->results,
            'brands' => $this->brands,
            'categories' => $this->categories,
            'scategories' => $scategories,
            'd' => $d,
             
        ]);
    }

  
    public function update(Request $request, $id)
    {
       
       
       
       
        $d = Product::findOrFail($id);

if($d->user_id === Auth::user()->id){
         $d->name = $request->name;
        $d->cat_id = $request->cate;
        $d->scat_id =$request->scat;
        $d->brand_id =$request->brand;
        $d->size =$request->size;
        $d->price =$request->price;
        $d->dprice =$request->dprice;
        $d->qty = $request->qty;
        $d->contact = $request->contact;
        $d->user_id = Auth::user()->id;

        if($request->is_active === null){
            $d->is_active = $d->is_active;
        }else{
            $d->is_active = $d->is_active;
        }
        $d->availability = $request->availability;
        if ($request->hasFile('image_file')) {
            $imgName = $request->file('image_file')->getClientOriginalName();
            $request->file('image_file')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            $d->image = $product;
            }else{
                $d->image = $d->image;
            }
             $d->save();
        Toastr::success('A product updated successfully.', 'SSOMV', ["positionClass" => "toast-top-right"]);
        return redirect()->route('clientProduct.index');
}else{
      Toastr::error('Access Denied!. Contact Administrator', 'SSOMV', ["positionClass" => "toast-top-right"]);
      return redirect()->route('clientProduct.index');
}


   







    }

 

















    public function destroy($id)
    {
       
       
       
       $pp = ProductPhoto::where('product_id',$id)->get();
       if($pp->count()>0){

         Toastr::warning('The selected product has other records in product photos. Please delete them first.', 'SSOMV', ["positionClass" => "toast-top-right"]);
        return redirect()->route('clientProduct.index');

       }else{
        $d = Product::findOrFail($id);
        $d->delete();
        Toastr::success('A product deleted successfully.', 'SSOMV', ["positionClass" => "toast-top-right"]);
        return redirect()->route('clientProduct.index');

       }
       
       
       
    }
}
