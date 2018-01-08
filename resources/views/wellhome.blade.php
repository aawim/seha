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
  <title>Metronic Shop UI</title>

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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  





<style type="text/css">




.carousel-inner > .item > img, .carousel-inner > .item > a > img {
        display: block;
        height: 400px;
        min-width: 100%;
        width: 100%;
        max-width: 100%;
        line-height: 1;
         
    }

/* font Awesome http://fontawesome.io*/
/* @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css); */
  /* Animation.css*/
  /* @import url(https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css);
  
  .col-item {
    border: 1px solid #E1E1E1;
    background: #FFF;
    margin-bottom:12px;
  }
  .col-item .options {
    position:absolute;
    top:6px;
    right:22px;
  }
  .col-item .photo {
    overflow: hidden;
  }
  .col-item .photo .options {
    display:none;
  }
  .col-item .photo img {
    margin: 0 auto;
    width: 100%;
  }
  
  .col-item .options-cart {
    position:absolute;
    left:22px;
    top:6px;
    display:none;
  }
  .col-item .photo:hover .options,
  .col-item .photo:hover .options-cart {
    display:block;
    -webkit-animation: fadeIn .5s ease;
    -moz-animation: fadeIn .5s ease;
    -ms-animation: fadeIn .5s ease;
    -o-animation: fadeIn .5s ease;
    animation: fadeIn .5s ease;
  }
  .col-item .options-cart-round {
    position:absolute;
    left:42%;
    top:22%;
    display:none;
  }
  .col-item .options-cart-round button {
    border-radius: 50%;
    padding:14px 16px;
    
  }
  .col-item .options-cart-round button .fa {
    font-size:22px;
  }
  .col-item .photo:hover .options-cart-round {
    display:block;
    -webkit-animation: fadeInDown .5s ease;
    -moz-animation: fadeInDown .5s ease;
    -ms-animation: fadeInDown .5s ease;
    -o-animation: fadeInDown .5s ease;
    animation: fadeInDown .5s ease;
  }
  .col-item .info {
    padding: 10px;
    margin-top: 1px;
  }
  .col-item .price-details {
    width: 100%;
    margin-top: 5px;
  }
  .col-item .price-details h1 {
    font-size: 14px;
    line-height: 20px;
    margin: 0;
    float:left;
  }
  .col-item .price-details .details {
    margin-bottom: 0px;
    font-size:12px;
  }
  .col-item .price-details span {
    float:right;
  }
  .col-item .price-details .price-new {
    font-size:16px;
  }
  .col-item .price-details .price-old {
    font-size:18px;
    text-decoration:line-through;
  }
  .col-item .separator {
    border-top: 1px solid #E1E1E1;
  }
  
  .col-item .clear-left {
    clear: left;
  }
  .col-item .separator a {
    text-decoration:none;
  }
  .col-item .separator p {
    margin-bottom: 0;
    margin-top: 6px;
    text-align: center;
  }
  
  .col-item .separator p i {
    margin-right: 5px;
  }
  .col-item .btn-add {
    width: 60%;
    float: left;
  }
  .col-item .btn-add a {
    display:inline-block !important;
  }
  .col-item .btn-add {
    border-right: 1px solid #E1E1E1;
  }
  .col-item .btn-details {
    width: 40%;
    float: left;
    padding-left: 10px;
  }
  .col-item .btn-details a {
    display:inline-block !important;
  }
  .col-item .btn-details a:first-child {
    margin-right:12px;
  }



 */





 



/*
Removes white gap between slides - chagnge to base color of slide images
*/
.carousel {
  background:#007aeb;
}

/*
Forces image to be 100% width and not max width of 100%
*/
.carousel-item .img-fluid {
  width:100%;
}

/* 
anchors are inline so you need ot make them block to go full width
*/
.carousel-item a {
  display: block;
  width:100%;
}


</style>







</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
{!! Toastr::message() !!}

    <!-- BEGIN STYLE CUSTOMIZER -->
    <!-- <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div> -->
    <!-- END BEGIN STYLE CUSTOMIZER --> 

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
     
      
     
 


<div class="container">

<!-- search box container starts  -->
<!-- <div class="search">
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="input-group">
                    <span class="input-group-addon"   style="color: white; background-color: rgb(124,77,255);">PRODUCT SEARCH</span>
                    <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter Blog Product Name Here">
               </div>
               <div class="container">
                <div id="txtHint" class="title-color" style="padding-top:9px;    text-align:center; width:97%; z-index: 2; padding-left:-205;  background-color:none; " ></div>
            </div>
            
            </div>
        </div>   
    </div>  
</div>  -->
<!-- search box container ends  -->

    </div>
    <!-- Header END -->


 <div class="margin-bottom-40 ">
    <!-- BEGIN SLIDER -->
 <div id="myCarousel" class="carousel slide">


    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="" contenteditable="false"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active" contenteditable="false"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="" contenteditable="false"></li>
    </ol>
    <div class="carousel-inner">

 
        <div class="item ">
            <!-- <img src="{{url('/').'/assets/pages/img/index-sliders/slide1.jpg'}}" alt="" class=""> -->
           
             
                  <picture >
                  <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide1.jpg'}}" media="(min-width: 2000%)">    
                  <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide1.jpg'}}" media="(min-width: 1400px)">
                      <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500//slide1.jpg'}}" media="(min-width: 769px)">
                       <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500//slide1.jpg'}}" media="(min-width: 577px)">
                      <img srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500//slide1.jpg'}}" alt="responsive image" class="d-block img-fluid">
                    </picture>
            
                  


           
           
            <div class="carousel-caption">
                <h4 class="">First Slide Title</h4>
                <p class="">
                   Description for First Slide, this First Slide.
                </p>
            </div>
        </div>
















        <div class="item active">
        <picture>
        <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide2.jpg'}}" media="(min-width: 2000%)">               
        <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide2.jpg'}}" media="(min-width: 1400px)">
                      <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide2.jpg'}}" media="(min-width: 769px)">
                       <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide2.jpg'}}" media="(min-width: 577px)">
                      <img srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide2.jpg'}}" alt="responsive image" class="d-block img-fluid">
                    </picture>
            <div class="carousel-caption">
                <h4 class="">Second Slide Title</h4>

                <p class="">
                   Description for Second Slide, this is Second Slide.
                </p>
            </div>
        </div>


        <div class="item" style="">
        <picture>
        <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide3.jpg'}}" media="(min-width: 2000%)">               
        <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500/slide3.jpg'}}" media="(min-width: 1400px)">
                      <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500//slide3.jpg'}}" media="(min-width: 769px)">
                       <source srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500//slide3.jpg'}}" media="(min-width: 577px)">
                      <img srcset="{{url('/').'/assets/pages/img/index-sliders/2000x500//slide3.jpg'}}" alt="responsive image" class="d-block img-fluid">
                    </picture>
            <div class="carousel-caption">
                <h4 class="">Third Slide Title</h4>

                            <p class="">
                   Description for Third Slide, this is Third Slide.
                </p>
            </div>
        </div>

    </div>    

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>


</div>

</div>
    <!-- END SLIDER -->

























    <div class="main">
      <div class="container">


      

      <div class="row margin-bottom-40">
        <h2 style="padding-left:20px;">New Items</h2>
        <p>
            <!-- This snippent uses <a href="http://daneden.github.io/animate.css/" target="_blank">Animate.css</a> for the animation of the buttons. -->
        </p>




        @foreach ($products as $count => $product)


        <div class="col-md-3 col-sm-3 col-xs-6">
        	<article class="col-item">
        		<div class="photo">
            <div class="pi-img-wrapper">
        			<a href="#"> <img src="{{url('/').'/'.$product->image}}" style="width:250px; height:200px;" class="img-responsive" alt="Product Image" /> </a>
            </div>
  </div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-12 col-sm-12 col-xs-12">
        					<p class="details">

                   
                   {{substr($product->description ,0,50)}} 
        					</p>
                  <h1>{{$product->name}}</h1>
                  

                @if($product->price < 1)
                  <span class="price-new" style="color:red">FREE</span>
                @else

                  <span class="price-new">MVR {{$product->price}}</span>

                  @endif

        				</div>
        			</div>
        			<div class="separator clear-left">
        				<p class="btn-add">
        				 <a href="#product-pop-up{{$count}}" class="hidden-sm  fancybox-fast-view"> Quick View</a>
        				</p>
        				<p class="btn-details">
        					<!-- <a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Add to wish list"><i class="fa fa-heart"></i></a>
        					<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-exchange"></i></a> -->
        				</p>



                @if ($product->availability === 0)
            <!-- <button class="btn btn-primary pull-right" disabled  type="submit">Add to cart</button> -->
            <div class="sticker sticker-out"></div>
              @else
                  <!-- <div class="sticker sticker-new"></div> -->
              @endif


        			</div>
        			<div class="clearfix"></div>
        		</div>
        	</article>
        </div>
    
        @endforeach 

    

	</div>








        @foreach ($products as $count => $product)
      
        
        <!-- BEGIN fast view of a product -->
        <div id="product-pop-up{{$count}}" style="display: none; width: 700px;">
       
        <form class="form-horizontal" action="{{route('cart.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                  <div class="product-page product-pop-up">
                    <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="product-main-image">
                          <img src="{{url('/').'/'.$product->image}}"  alt="Cool green dress with red bell" class="img-responsive">
                        </div>
                        <!-- <div class="product-other-images">
                          <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="assets/pages/img/products/model3.jpg"></a>
                          <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
                          <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
                        </div> -->
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <h2>Cool green dress with red bell </h2>
                        <div class="price-availability-block clearfix">
                          <div class="price">
                            <strong><span>$</span>{{$product->price}}</strong>
                            <em>$<span>62.00</span></em>
                          </div>
                          <div class="availability">
                          Availability: <strong> @if ($product->availability === 0)
                                                    Out of stock 
                                                @else
                                                In Stock
                                                @endif
                                             
                                                
                                                </strong>
                      </div>
                        </div>
                        <div class="description">
                          <p>{{$product->description}}</p>
                        </div>
                        <div class="product-page-options">
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
                        </div>
                        <div class="product-page-cart">
                    
                          <!-- <button class="btn btn-primary" type="submit" onClick="{{route('store.create')}}">Add to cart</button> -->
                                               
                      
                        <input type="hidden" class="form-control" name="product_id" id="product_id"   value="{{$product->id}}">
                                              <a href="{{route('item.show', $product->id)}}" class="btn btn-default">More details</a>
                        </div>
                      </div>
      
                      <!-- <div class="sticker sticker-sale"></div> -->
                    </div>
                  </div>
          </div>
      
          </form>
           
          <!-- END fast view of a product -->
      
        
          @endforeach  









        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
     
          
          <ul class="list-group margin-bottom-25 sidebar-menu">
            <li class="list-group-item clearfix"><a href="{{url('find')}}">
              <i class="fa fa-angle-right"></i>All</a></li>
              @foreach ($categories as $count => $catrgory)
              
                  <li class="list-group-item clearfix"><a href="{{url('find/'. $catrgory->id)}}">
                  <i class="fa fa-angle-right"></i>{{$catrgory->name}} </a></li>
             
              @endforeach

            </ul>
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
         
         
         
          <div class="col-md-9 col-sm-8">
            <h2>Three items</h2>
            <div class="owl-carousel owl-carousel3">
              <div>
                <div class="product-item">
                 
                
                
                <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>


                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary pull-right" >Add to cart</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary pull-right" >Add to cart</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary pull-right" >Add to cart</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                  <div class="sticker sticker-sale"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->











        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">
          <!-- BEGIN TWO PRODUCTS -->
          <div class="col-md-6 two-items-bottom-items">
            <h2>Two items</h2>
            <div class="owl-carousel owl-carousel2">
              
              
              
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress XXXXXXXXXXXXX</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                </div>
              </div>
            
            
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress EEEEEEEEEEEEE</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                </div>
              </div>


              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                </div>
              </div>



              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                </div>
              </div>




              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <!-- <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a> -->

                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                </div>
              </div>






              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="assets/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <!-- <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a> -->
                  <a href="{{route('cart.index')}}" class="btn btn-primary" >Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END TWO PRODUCTS -->



          
          <!-- BEGIN PROMO -->
          <div class="col-md-6 shop-index-carousel">
            <div class="content-slider">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="assets/pages/img/index-sliders/slide1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <div class="item">
                    <img src="assets/pages/img/index-sliders/slide2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <div class="item">
                    <img src="assets/pages/img/index-sliders/slide3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PROMO -->
        </div>        
        <!-- END TWO PRODUCTS & PROMO -->
      </div>
    </div>

  

    <!-- BEGIN FOOTER -->
    @include('includes.clientfooter')
    <!-- END FOOTER -->




    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{url('/').'/assets/plugins/respond.min.js'}}"></script>  
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

    <script src="{{url('/').'/assets/corporate/scripts/layout.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/pages/scripts/bs-carousel.js'}}" type="text/javascript"></script>


    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });





        $('#myCarousel').carousel();
    var winWidth = $(window).innerWidth();
    $(window).resize(function () {

        if ($(window).innerWidth() < winWidth) {
            $('.carousel-inner>.item>img').css({
                'min-width': winWidth, 'width': winWidth
            });
        }
        else {
            winWidth = $(window).innerWidth();
            $('.carousel-inner>.item>img').css({
                'min-width':'', 'width': ''
                
            });
        }
    });




    </script>




<script>
$(document).ready(function(){
   $("#search").keyup(function(){
       var str=  $("#search").val();
       if(str == "") {
               $( "#txtHint" ).html("<b></b>"); 
       }else {
               $.get( "{{ url('wellhome?id=') }}"+str, function( data ) {
                   $( "#txtHint" ).html( data );  
            });
       }
   });  
}); 
</script>









    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>