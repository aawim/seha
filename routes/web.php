<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function() {
//     try
//     {
//         $pdo = DB::connection('mysql')->getPdo();
//        // if($pdo){
//  return redirect()->url('/home');

            
//         }
       
//    }
//     catch(PDOException $exception)
//     {
       
//        return view('error.error');
//         // return " There is a data base error";//Response::make('Database error! ' . $exception->getCode());
//     }
   
     // HOME CONTROLLER
  // return 'all fine';
//});
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

 



// PAGE CONTROLLER
Route::get('/info/aboutus', 'PagesController@aboutus');
Route::get('/info/faq', 'PagesController@faq');
Route::get('/info/termsconditions', 'PagesController@termsconditions');
Route::get('/info/privacypolicy', 'PagesController@privacypolicy');
Route::get('/info/delivery', 'PagesController@delivery');
Route::get('/info/customerservice', 'PagesController@customerservice');
Route::get('/info/payment', 'PagesController@payment');
Route::get('/info/shipping', 'PagesController@shipping');
Route::resource('/subscribing', 'SubscriberController');

// SEARCH CONTROLLER
Route::get('wellhome','SearchController@liveSearch'); 
Route::get('find','SearchController@search'); 
Route::get('find/free','SearchController@free'); 
Route::get('stores','SearchController@viewStores');
Route::get('store/{id}','SearchController@oneStore'); 
Route::get('find/{id}','SearchController@catesearch'); 
Route::get('shop/{id}','SearchController@shopProductSearch'); 
Route::get('category','SearchController@allCategory'); 
//Route::post('client/contact','SearchController@userSearch'); 




// PRODUCT CONTROLLER
Route::get('scat','ProductController@getscat'); 
Route::get('findSubCat', 'ProductController@findSubCatgeoryName');
// PRODUCT DEATAIL CONTROLLER
Route::resource('/item', 'ProductDetailController');
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::prefix('manage')->group(function(){
     Route::get('/home', 'HomeController@dash')->name('index');
     Route::resource('/category', 'CategoryController');
     Route::resource('/subcat', 'SubcatController');
     Route::resource('/brand', 'BrandController');
     Route::resource('/product', 'ProductController');
     Route::resource('/store', 'StoreController');
     Route::resource('/review', 'ReviewController');
     Route::resource('/photo', 'ProductPhotoController');
     Route::resource('/carousel', 'CarouselController');

 // STORE CONTROLLER
Route::post('manage/store/storecreate', 'StoreController@adminstorecreate');

// PRODUCT PHPTO CONTROLLER
Route::get('/manage/photo/{id}', 'ProductPhotoController@addPhoto');
Route::get('/manage/view/{id}', 'ProductPhotoController@viewPhoto');
     
});
});

Route::group(['middleware' => 'App\Http\Middleware\ClientMiddleware'], function()
{
    Route::prefix('client')->group(function(){
        Route::resource('/cart', 'CartController');
        Route::resource('/myaccount', 'ClientController');
        Route::resource('/contact', 'ContactController');
        Route::resource('/order', 'OrderController');
        Route::resource('/mail', 'MailController');
        Route::resource('/review', 'ReviewController');
        Route::resource('/reply', 'ReplyController');
        Route::resource('/address', 'AddressBookController');
        Route::resource('/clientProduct', 'ClientProductController');

    });
});






Auth::routes();
Route::prefix('manage')->group(function(){
   // Route::get('/home', 'HomeController@dash')->name('index');
    // Route::resource('/category', 'CategoryController');
    // Route::resource('/subcat', 'SubcatController');
    // Route::resource('/brand', 'BrandController');
    // Route::resource('/product', 'ProductController');
    // Route::resource('/store', 'StoreController');
    // Route::resource('/review', 'ReviewController');
    // Route::resource('/photo', 'ProductPhotoController');
    // Route::resource('/carousel', 'CarouselController');
    
});
    Route::prefix('client')->group(function(){
   // Route::resource('/category', 'CategoryController');
    // Route::resource('/cart', 'CartController');
    // Route::resource('/myaccount', 'ClientController');
    // Route::resource('/contact', 'ContactController');
    // Route::resource('/order', 'OrderController');
    // Route::resource('/mail', 'MailController');
    // Route::resource('/reply', 'ReplyController');
    // Route::resource('/address', 'AddressBookController');
    // Route::resource('/clientProduct', 'ClientProductController');
});


// ORDER CONTROLLER
Route::get('client/orderds/{id}','OrderController@index'); 
Route::get('client/orderdetail/{id}','OrderController@orderdetail');
// MY ACCOUNT CONTROLLER
Route::get('/client/myaccountchange/{id}', 'MyAccountController@editAccountInformation');