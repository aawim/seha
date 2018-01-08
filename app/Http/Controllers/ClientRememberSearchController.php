<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\RememberSearch;
class ClientRememberSearchController extends Controller
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
        
    }

 
    public function store(Request $request)
    {
        return "Added to ";
    }

  
    public function show($id)
    {
        //
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
