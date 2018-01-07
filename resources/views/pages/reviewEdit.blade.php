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
  <title>Cool green dress with red bell | Metronic Shop UI</title>

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
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{url('/').'/assets/plugins/font-awesome/css/font-awesome.min.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/plugins/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{url('/').'/assets/plugins/fancybox/source/jquery.fancybox.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/plugins/owl.carousel/assets/owl.carousel.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/plugins/uniform/css/uniform.default.css'}}" rel="stylesheet" type="text/css">
  <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"><!-- for slider-range -->
  <link href="{{url('/').'/assets/plugins/rateit/src/rateit.css'}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{url('/').'/assets/pages/css/components.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/corporate/css/style.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/pages/css/style-shop.css'}}" rel="stylesheet" type="text/css">
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
         
            <!-- BEGIN TOP BAR MENU -->
            @include('includes.topmanu')
            <!-- END TOP BAR MENU -->
      </div>
    </div>
    <!-- Header END -->
    
    <div class="main">
      <div class="container">


        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Cool green dress with red bell</li>
        </ul>



        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-5">
          <ul class="list-group margin-bottom-25 sidebar-menu">
          <li class="list-group-item clearfix"><a href="{{url('find')}}">
            <i class="fa fa-angle-right"></i>All</a></li>
          @foreach ($categories as $count => $catrgory)
            <li class="list-group-item clearfix"><a href="{{url('find/'. $catrgory->id)}}">
            <i class="fa fa-angle-right"></i>{{$catrgory->name}}</a></li>
             
          @endforeach
       </ul>

            <div class="sidebar-products clearfix">
      
      


            </div>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
             
          

                <div class="product-page-content">
                  <ul id="myTab" class="nav nav-tabs">
                    <li><a href="#Description" data-toggle="tab">View All Review</a></li>
                   <!--  <li><a href="#Information" data-toggle="tab">Information</a></li> -->
                    <li class="active"><a href="#Reviews" data-toggle="tab">Reviews ({{count($reviews)}})</a></li>
                  </ul>
                  
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="Description">
                    @foreach ($reviews as $count2 => $review)
                      @foreach ($users as $count => $user)
                      @if($review->user_id === $user->id)
                     
                      
                      <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong>Author : {{UCfirst($user->name)}} </strong>
                          <em>{{$review->created_at}}</em>
                          <div class="rateit" data-rateit-value="{{$review->rating}}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p>{{$review->description}}</p>
                        </div>
                      </div>
                      
                      @endif

                      @endforeach
                      @endforeach
                    </div>
                   
                  
                    <div class="tab-pane fade in active" id="Reviews">
                      <!--<p>There are no reviews for this product.</p>-->
                      @foreach ($reviews as $count2 => $review)
                      @foreach ($users as $count => $user)
                      @if($review->user_id === $user->id)
                      @if($count2 > 2)
                      @else
                      
                        <div class="review-item-submitted">
                          <strong>Author : {{UCfirst($user->name)}} </strong>
                          <em>{{$review->created_at}}</em>
                          <div class="rateit" data-rateit-value="{{$review->rating}}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>                                              
                        <div class="review-item-content">
                        <h2>This is what you said: </h2> <p>{{$review->description}}  
                            
                            
                            </p>

                        </div>
                       
                      @endif
                      @endif

                      @endforeach
                      @endforeach

                      
                    
                     <!-- BEGIN FORM-->
                    @if(Auth::check())
                      <form class="form-horizontal" action="{{route('review.update', $review->id)}}" method="POST" enctype="multipart/form-data">
                      {{method_field('PUT')}} {{ csrf_field() }}
                        
                        <div class="form-group">
                          <!-- <label for="name">Name <span class="require">*</span></label> -->
                          <input type="hidden" class="form-control" id="name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                          <!-- <label for="email">Email</label> -->
                          <input type="hidden" class="form-control" id="email" value="{{Auth::user()->email}}">
                        </div>
                        <div class="form-group">
                          <label for="review"><h2>Write what you want to say:</h2><span class="require"></span></label>
                          <textarea class="form-control" rows="8" name="description" id="description" required >{{$review->description}}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="email">Rating</label>
                          <input type="range" name="backing5"  value="{{$review->rating}}" step="" id="backing5" required>
                          <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                          </div>
                        </div>
                        <div class="padding-top-20">  
                                    
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                      <!-- END FORM--> 
                      @else
                      <strong> Please <a href="{{ route('login') }}"> login  </a> to write a review </strong>
                      @endif
                    </div>
                  </div>
                </div>


               
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->


 


  
    <!-- BEGIN PRE-FOOTER -->
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
    <script src="{{url('/').'/assets/plugins/zoom/jquery.zoom.min.js'}}" type="text/javascript"></script><!-- product zoom -->
    <script src="{{url('/').'/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js'}}" type="text/javascript"></script><!-- Quantity -->
    <script src="{{url('/').'/assets/plugins/uniform/jquery.uniform.min.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/rateit/src/jquery.rateit.js'}}" type="text/javascript"></script>

    <script src="{{url('/').'/assets/corporate/scripts/layout.js'}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>