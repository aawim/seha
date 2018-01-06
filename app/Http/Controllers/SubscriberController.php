<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use Toastr;
class SubscriberController extends Controller
{
   
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
      

        $ifMailExixts = Subscriber::where('mail', $request->mail)->get();
         if($request->mail === null){
            Toastr::info('Please enter a velid email', 'Subscribing', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
                  
        }elseif($ifMailExixts->count()>0){


        //Toastr::info('Thank you. You already have subscribed', 'Subscribing', ["positionClass" => "toast-top-right"]);
        return redirect()->back();

         }else{


        $subscribers = new Subscriber();
        $subscribers->mail = $request->mail;
        $subscribers->is_active = 1;
        $subscribers->flag = 1;
        $subscribers->save();
        Toastr::success('Thank you for subscribing. We will notify you when new items are added to the system', 'Subscribing', ["positionClass" => "toast-top-right"]);
        return redirect()->back();


      }
   


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
