<!-- header start -->
    <header class="header-area">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-3 col-5">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo/cureopafinal.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-7">
                    <div class="header-wrapper">
                        <div class="mainmenu-area d-none d-lg-block">
                            <div class="top-bar">
                                <div class="top-bar-left">
                                    <div class="hotline">
                                        <div class="hotline-content d-flex align-items-center gap-2">
                                            <i class="fa fa-phone" style="color: #ff6b6b; font-size: 18px;"></i>
                                            <span class="hotline-text">Order online or call us:</span>
                                            <a  class="hotline-number" style="color: #ff6b6b; font-weight: 600; text-decoration: none; font-size: 16px;">+1 (210) 792-4219</a>
                                        </div>
                                    </div>
                                    {{-- <div class="topbar-language">

                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><span>USD $</span></a>

                                            <ul class="dropdown-menu">
                                                <li><a href="#">USD $</a></li>
                                                <li><a href="#">Euro €</a></li>
                                                <li><a href="#">Euro €</a></li>
                                            </ul>
                                        </div>

                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><img src="{{ asset('assets/images/flag/01.webp') }}" alt="">English</a>

                                            <ul class="dropdown-menu">
                                                <li><a href="#"><img src="{{ asset('assets/images/flag/01.webp') }}" alt="">English</a></li>
                                                <li><a href="#"><img src="{{ asset('assets/images/flag/02.webp') }}" alt=""> اللغة العربية</a></li>
                                                <li><a href="#"><img src="{{ asset('assets/images/flag/03.webp') }}" alt=""> Spanish</a></li>
                                            </ul>
                                        </div>

                                    </div> --}}
                                </div>
                                <div class="top-bar-right">
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="search" placeholder="Search here ....."/>
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mainmenu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/shop') }}">Shop </a></li>
                                        {{-- about page --}}
                                        <li><a href="{{ url('/about') }}">About Us</a></li>
                                        <li><a href="{{ url('/#PersonalCare') }}">Personal Care </a></li>
                                        <li><a href="{{ url('/project') }}">Project</a></li>
                                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="header-action">

                            <div class="cart-area dropdown">
                                {{-- <button class="cart-btn" data-bs-toggle="dropdown">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span>3</span>
                                </button> --}}
                                <div class="dropdown-menu dropdown-cart">
                                    <div class="cart-content">
                                        <ul class="cart-items">
                                            <li>
                                                <!-- Single Cart Item Start -->
                                                <div class="single-cart-item">
                                                    <div class="cart-thumb">
                                                        <a href="#"><img src="{{ asset('assets/images/product/1.webp') }}" alt=""></a>
                                                    </div>
                                                    <div class="cart-item-content">
                                                    <h6 class="product-name">Organic Vitamin C Serum</h6>
                                                    <span class="product-price">$24.99</span>
                                                        <div class="attributes-content">
                                                        <span><strong>Size:</strong> 30ml </span>
                                                        <span><strong>Type:</strong> Anti-Aging </span>
                                                        </div>
                                                        <a href="#" class="remove-cart"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Cart Item End -->
                                            </li>
                                            <li>
                                                <!-- Single Cart Item Start -->
                                                <div class="single-cart-item">
                                                    <div class="cart-thumb">
                                                        <a href="#"><img src="{{ asset('assets/images/product/2.webp') }}" alt=""></a>
                                                    </div>
                                                    <div class="cart-item-content">
                                                    <h6 class="product-name">Hydrating Facial Cleanser</h6>
                                                    <span class="product-price">$18.50</span>
                                                        <div class="attributes-content">
                                                        <span><strong>Size:</strong> 200ml </span>
                                                        <span><strong>Skin:</strong> Dry/Sensitive </span>
                                                        </div>
                                                        <a href="#" class="remove-cart"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Cart Item End -->
                                            </li>
                                            <li>
                                                <!-- Single Cart Item Start -->
                                                <div class="single-cart-item">
                                                    <div class="cart-thumb">
                                                        <a href="#"><img src="{{ asset('assets/images/product/3.webp') }}" alt=""></a>
                                                    </div>
                                                    <div class="cart-item-content">
                                                    <h6 class="product-name">Aromatherapy Essential Oil Diffuser</h6>
                                                    <span class="product-price">$35.00</span>
                                                        <div class="attributes-content">
                                                        <span><strong>Size:</strong> Standard </span>
                                                        <span><strong>Color:</strong> Wood Grain </span>
                                                        </div>
                                                        <a href="#" class="remove-cart"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Cart Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-price">
                                        <div class="cart-subtotals">
                                            <div class="price-inline">
                                                <span class="label">Subtotal</span>
                                                <span class="value">$78.49</span>
                                            </div>
                                            <div class="price-inline">
                                                <span class="label">Shipping</span>
                                                <span class="value">$7.00</span>
                                            </div>
                                            <div class="price-inline">
                                                <span class="label">Taxes</span>
                                                <span class="value">$2.50</span>
                                            </div>
                                        </div>
                                        <div class="cart-total">
                                            <div class="price-inline">
                                                <span class="label">Total</span>
                                                <span class="value">$87.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout-btn">
                                        <a href="{{ url('/cart') }}" class="btn">View Cart</a>
                                        <a href="{{ url('/checkout') }}" class="btn">Checkout</a>
                                    </div>
                                </div>
                            </div>

                            <div class="header-toggle d-lg-none">
                                <button class="toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
