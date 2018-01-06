<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>My Account </title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{url('/').'/assets/plugins/font-awesome/css/font-awesome.min.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/plugins/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{url('/').'/assets/pages/css/animate.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/plugins/fancybox/source/jquery.fancybox.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/plugins/owl.carousel/assets/owl.carousel.css'}}" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{url('/').'/assets/pages/css/components.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/pages/css/slider.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/pages/css/style-shop.css'}}" rel="stylesheet" type="text/css">
  <link href="{{url('/').'/assets/corporate/css/style.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/corporate/css/style-responsive.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/corporate/css/themes/red.css'}}" rel="stylesheet" id="style-color">
  <link href="{{url('/').'/assets/corporate/css/custom.css'}}" rel="stylesheet">
  <!-- Theme styles END -->


    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  

    
 

  </head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
 
{!! Toastr::message() !!}
    
    <!-- BEGIN TOP BAR -->
    @include('includes.topbar')
    <!-- END TOP BAR -->
     

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
      <a class="site-logo" href="{{ url('/') }}"><img src="{{url('/').'/assets/corporate/img/logos/logo-shop-red.png'}}" alt="Metronic Shop UI"></a>
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->

     

        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        @include('includes.topmanu')
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
    
    

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">My Account Page</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Login/Register</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Restore Password</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> My account</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Address book</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Wish list</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Returns</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Newsletter</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="right_col" role="main">
          
         
         <div class="row">
         
          
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="x_panel">
                           <div class="x_title">
                             <h2>Create New Product</h2>
                             <ul class="nav navbar-right panel_toolbox">
                               <li>
                              <a href="{{route('clientProduct.index')}}"><button type="submit" class="btn btn-success">View Products</button></a>
                           </li>
                              </ul>
                             <div class="clearfix"></div>
                           </div>
                           <div class="x_content">
                           <br />
                        
                           @if ($errors->any())
                               <div class="alert alert-danger">
                                   <ul>
                                       @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                       @endforeach
                                   </ul>
                               </div>
                               @endif
                                <form class="form-horizontal" action="{{route('clientProduct.store')}}" method="POST" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                     <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Name</label>
                               <div class="col-md-9 col-sm-9 col-xs-12">
                               <input type="text" class="form-control " name="name" id="name"  required placeholder="Product Name">
                               </div>
                             </div>
                       
         
          
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                               <div class="col-md-9 col-sm-9 col-xs-12">
                               <select class="form-control cat" id="cat" name="cat" required>
                                    <option value="" selected required > Select  </option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                      @endforeach
                                </select>
                              </div>
                                </div>
         
         
         
         
         
                             <div class="form-group scat">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Category</label>
                               <div class="col-md-9 col-sm-9 col-xs-12">
                               
                               <select class="form-control scat" id="scat" name="scat" required>
                                 <option value="" selected required > Select  </option>
              
                            </select>
                           </div>
                             </div>
         
     
         
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Brand</label>
                               <div class="col-md-9 col-sm-9 col-xs-12">
                               
                               <select class="form-control" id="brand" name="brand" required>
                                  <option value="" selected required > Select  </option>
                                  <option value="0"> Other  </option>
                                  @foreach($brands as $brand)
                                       <option value="{{$brand->id}}" >{{$brand->name}}</option>
                                   @endforeach
                              </select>
              
                             </div>
                             </div>
          
         
          
         
         
         
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Size</label>
                               <div class="col-md-9 col-sm-9 col-xs-12">
                               <input type="text" class="form-control" name="size" id="size"     value="0">
                               </div>
                             </div>
         
                 
                             
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                               <div class="col-md-9 col-sm-9 col-xs-12">
                                 <span>Note: For free items, leave the price field as 0.</span>
                               <input type="text" class="form-control" name="price" id="price"  value="0">
                               </div>
                             </div>
                              
         
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Qty</label>
                               <div class="col-md-9 col-sm-9 col-xs-12">
                               <input type="text" class="form-control" name="qty" id="qty" value="0" required>
                               </div>
                             </div>
         



                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact</label>
                               <div class="col-md-9 col-sm-9 col-xs-12">
                               <input type="text" class="form-control" name="contact" id="contact"   required placeholder="Mobile number">
                               </div>
                             </div>




                             <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                               <div class="col-xs-9">
                                   <input type="file" class="form-control" id="icon" name="icon"  value="{{ old('icon') }}" required>
                               </div>
                           </div>
               

                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                               <div class="col-xs-9">
                               <span>Note:There should be atlease FIVE word the gives some information about the product.
                                  You may want to include how long the product is been used.</span> <p></p>
                                <textarea name="description" rows="4" cols="60" required></textarea>
                               </div>
                           </div>




                             <div class="ln_solid"></div>
                         
                             <div class="form-group">
                                                   <div class="col-xs-offset-2 col-xs-10">
                                                       <button type="submit" class="btn btn-primary">Create</button>
                                                   </div>
                                               </div>
                       
                       
                           </form>
                         </div>
                         </div>
                      
         
         
         
         
         
               
         
             </div>
           </div>
         </div>
         </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>


      
     





    <!-- BEGIN FOOTER -->
    @include('includes.clientfooter')
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="{{url('/').'/assets/plugins/jquery.min.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/jquery-migrate.min.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/bootstrap/js/bootstrap.min.js'}}" type="text/javascript"></script>      
    <script src="{{url('/').'/assets/corporate/scripts/back-to-top.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{url('/').'/assets/plugins/fancybox/source/jquery.fancybox.pack.js'}}" type="text/javascript"></script><!-- pop up -->
    <script src="{{url('/').'/assets/plugins/owl.carousel/owl.carousel.min.js'}}" type="text/javascript"></script><!-- slider for products -->

    <script src="{{url('/').'/assets/corporate/scripts/layout.js'}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
        });
    </script>

     
 <script type="text/javascript">

// $('#cat').on('change', function(e){
//   console.log(e);
//   var id = e.target.value;

// $.get('scat?id=' + id, function(data){
//   $('#scat').empty();
// $.each(data, function(wellhome, subcatObj){
//   $('#scat').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');

// });

// });


// });

$(document).ready(function(){
  $(document).on('change','.cat', function(){
 //console.log("Change");
 var cat_id=$(this).val();
 //console.log(cat_id);
 //var div=$(this).parent();
var op=" ";
$.ajax({
  type:'get',
  url:'{!!URL::to('findSubCat')!!}',
  data:{'id':cat_id},
  
  success:function(data){
     // console.log(data);
    // console.log(data.length);
   

$('#scat').html(" ");
op+='<option value="0" selected disabled> choose a category</option>';
for(var i=0;i<data.length;i++){
 // op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
 
  $("#scat").append( // Append an object to the inside of the select box
            $("<option></option>") // Yes you can do this.
                .text(data[i].name)
                .val(data[i].id)
        );


  }




div.find('#scat').html(" ");
div.find('#scat').append(op);

  },
  error:function(){

    console.log('Error');
 
  }
});

  });
});




 </script>

 

    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>