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
              <h2>Bestsellers</h2>
              <div class="item">
                <a href="shop-item.html"><img src="{{url('/').'/assets/pages/img/products/k1.jpg'}}" alt="Some Shoes in Animal with Cut Out"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$31.00</div>
              </div>
              <div class="item">
                <a href="shop-item.html"><img src="{{url('/').'/assets/pages/img/products/k4.jpg'}}" alt="Some Shoes in Animal with Cut Out"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$23.00</div>
              </div>
              <div class="item">
                <a href="shop-item.html"><img src="{{url('/').'/assets/pages/img/products/k3.jpg'}}" alt="Some Shoes in Animal with Cut Out"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$86.00</div>
              </div>
            </div>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                    <form class="form-horizontal" action="{{route('cart.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="hidden" class="form-control" name="product_id" id="product_id"   value="{{$product->id}}">
                      <input type="hidden" class="form-control" name="store_id" id="store_id"   value="{{$product->store_id}}">
                  <div class="product-main-image">
                    <img src="{{url('/').'/'.$product->image}}" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="{{url('/').'/'.$product->image}}">
                  </div>


                  <div class="product-other-images">
                   

                  @foreach ($otherPhotoes as $count => $photo)
                    <a href="{{url('/').'/'.$photo->name}}" class="fancybox-button" rel="photos-lib">
                    <img alt="Berry Lace Dress1" src="{{url('/').'/'.$photo->name}}">
                    </a>
                    @endforeach
                  </div>


                </div>
                <div class="col-md-6 col-sm-6">
                  <h1>     <div class="price">
                      <strong> Contact : {{ $product->contact }} 
                       </strong>

                    </div> </h1>
                  <div class="price-availability-block clearfix">
                    
                   <div class="price">
                     
                    @if($product->price < 1)
                    
                      <strong>PRICE : <span></span>FREE </strong>

                    @else
                    <strong>PRICE : <span>$</span> {{ $product->price }}  </strong>

                    @endif
                   
                    </div>

                    

                   
                    <div class="availability">
                    <h4> Availability: </h4> @if ($product->availability === 0)
                                             <h5 style="color:red">Out of stock</h5> 
                                              @else
                                              <h5 style="color:green"> In Stock</h5>
                                              @endif
                                           
                                              
                                              
                    </div>

                    
                  </div>
                  <div class="description">
                  <h3>Description</h3>  
                  <p>{{$product->description}} </p>
                  </div>
                  <!-- <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm" disabled>
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm" disabled>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div> -->
                   
                  <div class="product-page-cart">
                   
                        <!-- <input id="qty" name="qty"  type="text" value="1"   class="form-control input-sm"> -->

                   <!-- <div class="col-sm-3">
                        @if ($product->availability === 0)
                        <input type="text" class="form-control" name="qty" id="qty"   disabled value="1">
                        @else
                        <input type="text" class="form-control" name="qty" id="qty"   required value="1">
                        @endif
                        </div>
                    
                       @if ($product->availability === 0)
                      <button class="btn btn-primary" disabled  type="submit">Add to cart</button>
                      @else
                      <button class="btn btn-primary"   type="submit">Add to cart</button>
                      @endif -->
                  </div>


                  
                  </form>


              





                  <!-- <div class="review">
                  <h3>Overoll User Reviews</h3>
                  @if(count($reviews)>0)
                    <input type="range" value="{{$reviewsum / count($reviews) }}" step="0.25" id="backing4">
                   @endif
                    <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                    </div>
                      
                    <a href="javascript:;"> {{count($reviews)}} </a>
                  </div> -->

                  <h3>Location: </h3> <p> Please call for more information</p>
                  <h3>Delivery: </h3> <p> If delivery to the user is required, charges applied.</p>


                  </div>
                </div>

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
                   
                   
                   
                    <!-- <div class="tab-pane fade" id="Information">
                      <table class="datasheet">
                        <tr>
                          <th colspan="2">Additional features</th>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 1</td>
                          <td>21 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 2</td>
                          <td>700 gr.</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 3</td>
                          <td>10 person</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 4</td>
                          <td>14 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 5</td>
                          <td>plastic</td>
                        </tr>
                      </table>
                    </div> -->
                    <div class="tab-pane fade in active" id="Reviews">
                      <!--<p>There are no reviews for this product.</p>-->
                      @foreach ($reviews as $count2 => $review)
                      @foreach ($users as $count => $user)
                      @if($review->user_id === $user->id)
                      @if($count2 > 2)
                      @else
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
                      @endif

                      @endforeach
                      @endforeach


                    
                     <!-- BEGIN FORM-->
                    @if(Auth::check())
                      <form class="form-horizontal" action="{{route('review.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        
                        <div class="form-group">
                          <!-- <label for="name">Name <span class="require">*</span></label> -->
                          <input type="hidden" class="form-control" id="name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                          <!-- <label for="email">Email</label> -->
                          <input type="hidden" class="form-control" id="email" value="{{Auth::user()->email}}">
                        </div>
                        <div class="form-group">
                          <label for="review"><h2>Write a review</h2><span class="require"></span></label>
                          <textarea class="form-control" rows="8" name="description" id="description" required ></textarea>
                        </div>
                        <div class="form-group">
                          <label for="email">Rating</label>
                          <input type="range" name="backing5"  value="0" step="0.25" id="backing5" required>
                          <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                          </div>
                        </div>
                        <div class="padding-top-20">  
                        <input type="hidden" value="{{$product->id}}" name="product_id" id="product_id" >                
                          <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                      </form>
                      <!-- END FORM--> 
                      @else
                      <strong> Please <a href="{{ route('login') }}"> login  </a> to write a review </strong>
                      @endif
                    </div>
                  </div>
                </div>



                    
                @if ($product->availability === 0)
           
                <div class="sticker sticker-out"></div>
@else
<!-- <div class="sticker sticker-new"></div> -->
 

@endif
               
              


                
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->


 


  
    <!-- BEGIN PRE-FOOTER -->
    @include('includes.clientfooter')
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="{{url('/').'/assets/pages/img/products/model7.jpg'}}" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="assets/pages/img/products/model3.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h2>Cool green dress with red bell</h2> 
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>47.00</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat 
Nostrud duis molestie at dolore.</p>
                  </div>
                  <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity2" type="text" value="1" readonly class="form-control input-sm">
                    </div>
                    <!-- <button class="btn btn-primary" type="submit">Add to cart</button> -->
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                  </div>
                </div>

                <!-- <div class="sticker sticker-sale"></div> -->
              </div>
            </div>
    </div>
    <!-- END fast view of a product -->






















    
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