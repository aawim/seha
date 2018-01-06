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


<style type="text/css">

a>div { display: none; }
a:hover>div { display: block; }

</style>

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
   
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-80">
               <div class=" col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Products are in the system.</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                    <!-- <li><a class=" " href=""><i class="btn btn-round btn-success">Create New Category</i></a> -->
                  <li>  <a href="{{route('clientProduct.create')}}"><button type="submit" class="btn btn-success" style="a:hover:padding:0px;">Add New Product</button></a>
                    
                  </li>
              
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Brand</th>
                          <th>Size</th>
                          <th>Price</th>
                          
                          <th>Image</th>
                          <th>Qty</th>
                        
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>




                    
                      @foreach ($products->where('user_id',Auth::user()->id) as $count => $product)

                       
                                            <tr>
                                                <th>{{$count+1}} </th>
                                                <td>{{$product->name}} </td>
                                                <td> 


                                                @if($product->category()->first()!= null)
                                                  
                                                {{$product->category()->first()->name }} 

                                                @else 

                                                -

                                                @endif


                                                </td>
                                                <td>

                                                @if($product->brand()->first()!= null)
                                                  
                                                {{$product->brand()->first()->name }} 

                                                @else 

                                                -

                                                @endif
                                              
                                              </td>
                                                <td>{{$product->size}} </td>
                                                <td>{{$product->price}} </td>
                                                
                                                <td width="100px">
                                                    
                                               
                                                 <a href="{{url('/').'/'.$product->image}}" target="_blank" > 
                                                 <!-- <div class="product-main-image">-->
                                                 View Image
                                                 <div>
                                                   <img src="{{url('/').'/'.$product->image}}" alt="Cool green dress with red bell" class="img-responsive">                                        
                                                </div> 
                                                
                                                </a> 
                                            
                                            
                                            
                                            </td>
                                                <td>{{$product->qty}} </td>
                                              
                                                
                                                <td>
                                                @if($product->is_active == 1)
                                                 <span style="color:green"> Active </span>
                                                  @else
                                                  <span style="color:orange">  Pending activation </span> 
                                                  @endif        
                                            
                                            </td>
                                                <td>
                                                
                              <a href="{{route('clientProduct.edit', $product->id)}}">Edit</a> 
                                 <a href="#" data-toggle="modal" data-target="#deleteModal{{$count}}"
                                data-delete-id="{{$product->id}}" onclick="$('#delete-id').val($(this).data('delete-id'));">Delete</a>
                                                 
                                                </td>
                                              
                                            </tr>







<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="deleteModal{{$count}}" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">

    <form class="form-horizontal" action="{{route('clientProduct.destroy',$product->id)}} " method="POST">

    {{method_field('DELETE')}}  {!! csrf_field() !!} 

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to permanently delete this item ?</p>
        <input type="text" id="delete-id" name="id" value="0" hidden />
      </div>
      <div class="modal-footer">
        <span id="delete-dialog-link">
          <button type="submit"  class="btn btn-danger">Confirm</button>
        </span>
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>

    </form>

  </div>

</div>
</div>



@endforeach                             


 
                  


                      </tbody>
                    </table>
                  </div>
                </div>
             





      

  </div>
</div>
           




        </div>
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

     
 
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>