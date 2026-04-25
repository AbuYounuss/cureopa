@extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')


@section('content')
    @component('components.header') @endcomponent


    <!-- offcanvas Menu Start -->
    <div class="offcanvas offcanvas-start" id="offcanvasMenu">

        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <nav class="canvas-menu">
                <ul>
                    <li class="active"><a href="#">Home</a>
                    </li>
                    <li><a href="{{ url('shop') }}">Shop</a>
                        <ul class="mega-sub-menu">
                            <li>
                                <a class="mega-title" href="#">Tops & Tees</a>
                                <ul class="menu-item">
                                    <li><a href="{{ url('shop') }}">Polo Short Sleeve</a></li>
                                    <li><a href="{{ url('shop') }}">Polo Short Sleeve</a></li>
                                    <li><a href="{{ url('shop') }}">Sleeveless</a></li>
                                    <li><a href="{{ url('shop') }}">Sleeveless</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="mega-title" href="#">Jackets</a>
                                <ul class="menu-item">
                                    <li><a href="{{ url('shop') }}">Sweaters</a></li>
                                    <li><a href="{{ url('shop') }}">Hoodies</a></li>
                                    <li><a href="{{ url('shop') }}">Wedges</a></li>
                                    <li><a href="{{ url('shop') }}">Vests</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="mega-title" href="#">Jeans pants</a>
                                <ul class="menu-item">
                                    <li><a href="{{ url('shop') }}">Polo Short Sleeve</a></li>
                                    <li><a href="{{ url('shop') }}">Sleeveless</a></li>
                                    <li><a href="{{ url('shop') }}">Graphic T-Shirts</a></li>
                                    <li><a href="{{ url('shop') }}">Hoodies</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{-- <li><a href="{{ route('/about') }}">About</a> --}}

                    </li>
                    <li><a href="#">womem's</a>
                        <ul class="mega-sub-menu">
                            <li>
                                <a class="mega-title" href="#">Books</a>
                                <ul class="menu-item">
                                    <li><a href="{{ url('shop') }}">Shirts</a></li>
                                    <li><a href="{{ url('shop') }}">Florals</a></li>
                                    <li><a href="{{ url('shop') }}">Crochet</a></li>
                                    <li><a href="{{ url('shop') }}">Stripes</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="mega-title" href="#">Electtronic</a>
                                <ul class="menu-item">
                                    <li><a href="{{ url('shop') }}">Shorts</a></li>
                                    <li><a href="{{ url('shop') }}">Shorts</a></li>
                                    <li><a href="{{ url('shop') }}">Dresses</a></li>
                                    <li><a href="{{ url('shop') }}">Jeans</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="mega-title" href="#">Tablet</a>
                                <ul class="menu-item">
                                    <li><a href="{{ url('shop') }}">Heeled sandals</a></li>
                                    <li><a href="{{ url('shop') }}">Flat sandals</a></li>
                                    <li><a href="{{ url('shop') }}">Wedges</a></li>
                                    <li><a href="{{ url('shop') }}">Ankle boots</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">pages</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/cart') }}">Cart</a></li>
                            <li><a href="{{ url('/wishlist') }}">Wishlist</a></li>
                            <li><a href="{{ url('/checkout') }}">checkout</a></li>
                            <li><a href="{{ url('/compare') }}">compare</a></li>
                            <li><a href="{{ url('/account') }}">my-account</a></li>
                            <li><a href="{{ url('/login-register') }}">login-register</a></li>
                            <li><a href="{{ url('/about') }}">about</a></li>
                            <li><a href="{{ url('/404') }}">404</a></li>
                            <li><a href="{{ url('/blog') }}">blog</a></li>
                            <li><a href="{{ url('/blog-details') }}">blog details</a></li>
                            <li><a href="{{ url('/contact') }}">contact</a></li>
                            {{-- <li><a href="shop.html">shop</a></li> --}}
                            <li><a href="{{ url('/shop-single-product') }}">shop single product</a></li>
                            <li><a href="{{ url('/product-details-affiliate') }}">Product Details Affiliate</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </nav>
        </div>

    </div>
    <!-- offcanvas Menu end -->

    <!-- slider area start -->
    <div class="slider-area">
        <div id="slider-active">
            <img src="assets/images/slider/home1/1.webp" alt="banner image" title="#active1"/>
            <img src="assets/images/slider/home1/2.webp" alt="banner image" title="#active2"/>
        </div>
        <div id="active1" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-11 col-xs-12 col-sm-12">
                        <div class="slide1-text text-left">
                            <div class="middle-text">
                                <div class="cap-dec wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".5s">
                                    <h1>Face Cleanser</h1>
                                </div>
                                <div class="cap-title wow fadeInLeft text-uppercase" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                    <h3>Mega - Mushroom Skin Relief</h3>
                                </div>
                                <div class="cap-title wow flipInX d-none d-md-block" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit <br /> esse molestie consequat.</p>
                                </div>
                                <div class="cap-readmore wow flipInX organic-btn d-none d-md-block" data-wow-duration="1.6s" data-wow-delay=".5s">
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="active2" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-11 col-xs-12 col-sm-12">
                        <div class="slide1-text text-left">
                            <div class="middle-text">
                                <div class="cap-dec wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".5s">
                                    <h3>Comes From Healthy.</h3>
                                </div>
                                <div class="cap-title wow fadeInLeft text-uppercase" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                    <h1>Rock And Glamour</h1>
                                </div>
                                <div class="cap-title wow flipInX d-none d-md-block" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit <br /> esse molestie consequat.</p>
                                </div>
                                <div class="cap-readmore wow flipInX organic-btn d-none d-md-block" data-wow-duration="1.6s" data-wow-delay=".5s">
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end -->

    <!-- banner area  start-->
    <div class="banner-area fix">
        <div class="single-banner pull-left">
            <a href="#"><img src="assets/images/banner/1.webp" alt="" /></a>
        </div>
        <div class="single-banner pull-right">
            <a href="#"><img src="assets/images/banner/2.webp" alt="" /></a>
        </div>
    </div>
    <!-- banner area  end-->

    <!-- product area start -->
    <div class="product-area bg-1 ptb-100">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>new products</h2>
            </div>
            <div class="product-active owl-carousel next-prev-style">
                <div class="single-product">
                    <div class="product-img">
                        <a href="shop-single-product.html"><img src="assets/images/product/11.webp" alt="" /></a>
                        <span class="sale">Sale</span>
                    </div>
                    <div class="product-item-details text-center">
                        <div class="product-name-review tab-product-name-review">
                            <div class="product-name mt-30 ">
                                <span>Sample Category</span>
                                <strong><a href="shop-single-product.html">Chaz Kangeroo Hoodie1</a></strong>
                            </div>
                            <div class="product-review">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="special-price">$ 50.00</span>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <a href="shop-single-product.html"><img src="assets/images/product/7.webp" alt="" /></a>
                        <span class="new">new</span>
                    </div>
                    <div class="product-item-details text-center">
                        <div class="product-name-review tab-product-name-review">
                            <div class="product-name mt-30 ">
                                <span>Sample Category</span>
                                <strong><a href="shop-single-product.html">MH01-Black</a></strong>
                            </div>
                            <div class="product-review">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="special-price">$ 30.00</span>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <a href="shop-single-product.html"><img src="assets/images/product/8.webp" alt="" /></a>
                        <span class="sale">Sale</span>
                    </div>
                    <div class="product-item-details text-center">
                        <div class="product-name-review tab-product-name-review">
                            <div class="product-name mt-30 ">
                                <span>Sample Category</span>
                                <strong><a href="shop-single-product.html">Rival Field Messenger</a></strong>
                            </div>
                            <div class="product-review">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="special-price">$ 45.00</span>
                                <span class="old-price">
                                    <del>$ 46.00</del>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <a href="shop-single-product.html"><img src="assets/images/product/6.webp" alt="" /></a>
                        <span class="new">new</span>
                    </div>
                    <div class="product-item-details text-center">
                        <div class="product-name-review tab-product-name-review">
                            <div class="product-name mt-30 ">
                                <span>Sample Category</span>
                                <strong><a href="shop-single-product.html">Strive Shoulder Pack</a></strong>
                            </div>
                            <div class="product-review">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="special-price">$ 45.00</span>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <a href="shop-single-product.html"><img src="assets/images/product/8.webp" alt="" /></a>
                        <span class="sale">Sale</span>
                    </div>
                    <div class="product-item-details text-center">
                        <div class="product-name-review tab-product-name-review">
                            <div class="product-name mt-30 ">
                                <span>Sample Category</span>
                                <strong><a href="shop-single-product.html">Wayfarer Messenger Bag</a></strong>
                            </div>
                            <div class="product-review">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="special-price">$ 45.00</span>
                                <span class="old-price">
                                    <del>$ 46.00</del>
                                </span>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->

    <!-- New arrivals area start -->
    <div class="new-arrivals-area bg-img-1">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-7 col-lg-6 col-sm-8">
                    <div class="new-arrivals-content text-center">
                        <h3>New arrivals</h3>
                        <h1>Organic</h1>
                        <h2>up to 80% off</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="organic-btn new-arrivals-btn mt-35">
                            <a href="#">Read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New arrivals area end -->

    <!-- tab area start  -->
    <div class="tab-area mtb-100">
        <div class="container">
            <div class="tab-menu  text-center mb-30">
                <ul class="nav">
                    <li><a class="active" href="#new-products" data-bs-toggle="tab">New Products</a></li>
                    <li><a href="#onsale" data-bs-toggle="tab"> OnSale</a></li>
                    <li><a href="#featured" data-bs-toggle="tab">Featured</a></li>
                </ul>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="new-products">
                    <div class="tab-active owl-carousel next-prev-style">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/11.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Chaz Kangeroo Hoodie1</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/10.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Fusion Backpack</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 55.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/9.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Joust Duffle Bag1</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 40.00</span>
                                        <span class="old-price">
                                            <del>$ 44.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/7.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">MH01-Black</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 30.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/8.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Rival Field Messenger</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                        <span class="old-price">
                                            <del>$ 46.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/6.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Strive Shoulder Pack</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/8.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Wayfarer Messenger Bag</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                        <span class="old-price">
                                            <del>$ 46.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="onsale">
                    <div class="tab-active owl-carousel next-prev-style">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/8.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Chaz Kangeroo Hoodie1</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/11.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Fusion Backpack</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 55.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/9.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Joust Duffle Bag1</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 40.00</span>
                                        <span class="old-price">
                                            <del>$ 44.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/8.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">MH01-Black</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 30.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/6.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Rival Field Messenger</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                        <span class="old-price">
                                            <del>$ 46.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/7.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Strive Shoulder Pack</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/10.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Wayfarer Messenger Bag</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                        <span class="old-price">
                                            <del>$ 46.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="featured">
                    <div class="tab-active owl-carousel next-prev-style">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/10.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Chaz Kangeroo Hoodie1</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/10.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Fusion Backpack</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 55.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/9.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Joust Duffle Bag1</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 40.00</span>
                                        <span class="old-price">
                                            <del>$ 44.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/8.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">MH01-Black</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 30.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/7.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Rival Field Messenger</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                        <span class="old-price">
                                            <del>$ 46.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/6.webp" alt="" /></a>
                                <span class="new">new</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Strive Shoulder Pack</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-product">
                            <div class="product-img">
                                <a href="shop-single-product.html"><img src="assets/images/product/11.webp" alt="" /></a>
                                <span class="sale">Sale</span>
                            </div>
                            <div class="product-item-details text-center">
                                <div class="product-name-review tab-product-name-review">
                                    <div class="product-name mt-30 ">
                                        <span>Sample Category</span>
                                        <strong><a href="shop-single-product.html">Wayfarer Messenger Bag</a></strong>
                                    </div>
                                    <div class="product-review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="special-price">$ 45.00</span>
                                        <span class="old-price">
                                            <del>$ 46.00</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tab area end  -->

    <!-- testmonial area start -->
<div class="testimonial-main-area">
    <div class="testimonial bg-img-2">
        <div class="testimo-slider">
            <div class="test-active owl-carousel next-prev-style">
                <div class="single-test text-center pt-90">
                    <div class="test-img">
                        <a href="#">
                            <img src="assets/images/test/1.webp" alt="Customer Review" />
                        </a>
                    </div>
                    <div class="test-content mtb-35 plr-55">
                        <p>Coreopa gives me a calm and trusted place to explore health, beauty, and self-care ideas. The content feels helpful, fresh, and easy to follow for my daily wellness routine.</p>
                        <div class="test-info mt-30">
                            <a href="#">Sophia Carter</a>
                            <span>Beauty Enthusiast</span>
                            <span class="location">Los Angeles, CA</span>
                        </div>
                    </div>
                </div>
                <div class="single-test text-center pt-90">
                    <div class="test-img">
                        <a href="#">
                            <img src="assets/images/test/2.webp" alt="Customer Review" />
                        </a>
                    </div>
                    <div class="test-content mtb-35 plr-55">
                        <p>I really like how Coreopa presents beauty and wellness in a simple and elegant way. It feels inspiring, clean, and useful for anyone who wants to care for their skin and lifestyle.</p>
                        <div class="test-info mt-30">
                            <a href="#">Emily Watson</a>
                            <span>Wellness Lover</span>
                            <span class="location">New York, NY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Newsletter-area bg-img-3 ptl-100">
        <div class="news-taitle">
            <h3>Sign up for</h3>
            <h1>Coreopa</h1>
            <h2>Newsletter</h2>
        </div>
        <div class="newsletter">
            <form action="#">
                <input type="email" placeholder="Enter your email address"/><br />
                <button>Subscribe <i class="fa fa-long-arrow-right"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- testmonial area end -->

    <!-- blog area start -->
    <div class="blog-area mtb-60">
        <div class="container">
            <div class="section-title text-center mt-25 mb-10">
                <h2>Blog posts</h2>
            </div>

            <div class=" blog-active owl-carousel next-prev-style">
                <div class="blog-wrap text-center">
                    <div class="blog-img fix">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/1.webp" alt="" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>08</span>
                            <span>/</span>
                            <span>September</span>
                            <span>/</span>
                            <span>2016</span>
                        </div>
                        <div class="blog-info">
                            <h3>
                                <a href="blog-details.html">Pellentesque massa erat, blandit eget tincidunt porta, eleifend nec .</a>
                            </h3>
                            <p>We're releasing 2 premium Magento templates each month. Every template is designed with different styles and targeted for each business trend</p>
                            <div class="readmore-btn">
                                <a href="#">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap text-center">
                    <div class="blog-img fix">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/2.webp" alt="" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>08</span>
                            <span>/</span>
                            <span>September</span>
                            <span>/</span>
                            <span>2016</span>
                        </div>
                        <div class="blog-info">
                            <h3>
                                <a href="blog-details.html">Pellentesque massa erat, blandit eget tincidunt porta, eleifend nec .</a>
                            </h3>
                            <p>We're releasing 2 premium Magento templates each month. Every template is designed with different styles and targeted for each business trend</p>
                            <div class="readmore-btn">
                                <a href="#">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap text-center">
                    <div class="blog-img fix">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/3.webp" alt="" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>08</span>
                            <span>/</span>
                            <span>September</span>
                            <span>/</span>
                            <span>2016</span>
                        </div>
                        <div class="blog-info">
                            <h3>
                                <a href="blog-details.html">Pellentesque massa erat, blandit eget tincidunt porta, eleifend nec .</a>
                            </h3>
                            <p>We're releasing 2 premium Magento templates each month. Every template is designed with different styles and targeted for each business trend</p>
                            <div class="readmore-btn">
                                <a href="#">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap text-center">
                    <div class="blog-img fix">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/2.webp" alt="" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>08</span>
                            <span>/</span>
                            <span>September</span>
                            <span>/</span>
                            <span>2016</span>
                        </div>
                        <div class="blog-info">
                            <h3>
                                <a href="blog-details.html">Pellentesque massa erat, blandit eget tincidunt porta, eleifend nec .</a>
                            </h3>
                            <p>We're releasing 2 premium Magento templates each month. Every template is designed with different styles and targeted for each business trend</p>
                            <div class="readmore-btn">
                                <a href="#">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap text-center">
                    <div class="blog-img fix">
                        <a href="blog-details.html">
                            <img src="assets/images/blog/1.webp" alt="" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>08</span>
                            <span>/</span>
                            <span>September</span>
                            <span>/</span>
                            <span>2016</span>
                        </div>
                        <div class="blog-info">
                            <h3>
                                <a href="blog-details.html">Pellentesque massa erat, blandit eget tincidunt porta, eleifend nec .</a>
                            </h3>
                            <p>We're releasing 2 premium Magento templates each month. Every template is designed with different styles and targeted for each business trend</p>
                            <div class="readmore-btn">
                                <a href="#">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->

    <!-- brand-area start -->
    <div class="brand-area text-center mb-100">
        <div class="container">
            <div class="brand-active owl-carousel next-prev-style">
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/agroexa.png" alt="" />
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/aidvly.png" alt="" />
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/bookvly.png" alt="" />
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/cartvly.png" alt="" />
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/coreopa.png" alt="" />
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/landvly.png" alt="" />
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/netvly.png" alt="" />
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/texvaz.png" alt="" />
                    </a>
                </div>
                <div class="single-brand">
                    <a href="#">
                        <img src="assets/images/brand/vextroza.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->

    {{-- footer area start --}}
    @component('components.footer') @endcomponent
@endsection
