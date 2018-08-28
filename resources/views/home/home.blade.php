@extends('homelayout')

@section('maincontent')

		   <div class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="home/assets/img/slider/1.jpg" alt="" title="#slider-direction-1" />
                <img src="home/assets/img/slider/2.jpg" alt="" title="#slider-direction-2" />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="container">
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">amazing Collections</h1>
                            <h2 class="title2">new arrivals !</h2>
                            <h3 class="title3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt <br> doloremque maiores odit
                                perferendis unde et</h3>
                            <a class="btn-hover" href="shop-page.html">shop now <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="container">
                    <div class="slider-content s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">amazing Collections</h1>
                            <h2 class="title2">new arrivals !</h2>
                            <h3 class="title3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt <br> doloremque maiores odit
                                perferendis unde et</h3>
                            <a class="btn-hover" href="shop-page.html">shop now <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider end -->
    <!-- service area start  -->
    <div class="service-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="single-service addm">
                        <div class="service-icon">
                            <i class="fa fa-bus"></i>
                        </div>
                        <div class="service-text">
                            <h3>FREE SHIIPPING</h3>
                            <p>Guaranteed delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="single-service addm">
                        <div class="service-icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="service-text">
                            <h3>MONEY BACK</h3>
                            <p>30 Days return guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="single-service addm">
                        <div class="service-icon">
                            <i class="pe-7s-headphones"></i>
                        </div>
                        <div class="service-text">
                            <h3>online support</h3>
                            <p>Call us (+100) 456 7890</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="service-text">
                            <h3>BONUS PLUS</h3>
                            <p>Make fun of shopping</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		

	    <div class="portfolio-area ptb-100">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>Featured Collections <i class="fa fa-shopping-cart"></i></h2>
            </div>

            
            <div class="shop-menu portfolio-left-menu text-center mb-50">
            	 <button class="active" data-filter="*">ALL</button>
            	@foreach($category as $value1)
                <button data-filter="<?php echo '.' . $value1->mix_class_name?>">{{$value1->category_name}} </button>
                @endforeach
            </div>

            <div class="row portfolio-style-2">
                <div class="grid">
                	@foreach($product as $value)
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item {{$value->mix_class_name}} mb-50">
                    	
                        <div class="single-shop">
                            <div class="shop-img">
                                <a href="#"><img src="/image/{{$value->product_image_1}}" alt="" /></a>
                                @if($value->new_level == 1)
                                <div class="price-up-down">
                                    <span class="sale-new">New</span>
                                </div>
                                @endif
                                <div class="button-group">
                                    <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a href="{{route('product.single',['id'=>$value->id ])}}" title="Details">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="shop-text-all">
                                <div class="title-color fix">
                                    <div class="shop-title f-left">
                                        <h3 class="text-warning"><a  href="#">{{$value->product_name}}</a></h3>
                                    </div>
                                    <div class="price f-right">
                                        <span class="new text-info">{{$value->product_price}}TK</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    @endforeach 
                    
                </div>
            </div>
            <div class="text-center">
                <a class="hvr-shutter-out-horizontal" href="shop-page.html">view more <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
    <!-- shop area end -->
    <!-- subscribe area start -->
    <div class="offer-area shop-text bg-opacity-black-90">
        <div class="container">
            <div class="subscribe-bg ptb-80">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
                        <div class="offer-text text-center">
                            <h3>unlimited offer</h3>
                            <div class="text-center">
                                <a class="hvr-shutter-out-horizontal" href="shop-page.html">shop now <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe area end -->
    <!-- special-offer area start -->
    <div class="special-offer ptb-100">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>New Collections <i class="fa fa-shopping-cart"></i></h2>
            </div>
            <div class="row">
                <div class="special-slider-active owl-carousel">
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <a href="#"><img src="home/assets/img/shop/equal/1.jpg" alt="" /></a>
                                    <div class="price-up-down">
                                        <span class="sale-new">new</span>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">Tops</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">$120.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <a href="#"><img src="home/assets/img/shop/equal/2.jpg" alt="" /></a>
                                    <div class="price-up-down">
                                        <span class="sale-new">new</span>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">Handbag</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">$670.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <a href="#"><img src="home/assets/img/shop/equal/3.jpg" alt="" /></a>
                                    <div class="price-up-down">
                                        <span class="sale-new">new</span>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">Perfume</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">$340.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <a href="#"><img src="home/assets/img/shop/equal/4.jpg" alt="" /></a>
                                    <div class="price-up-down">
                                        <span class="sale-new">new</span>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">Shirt</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">$230.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection