<!-- header start -->
    <header class="header-area">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-3 col-5">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="assets/images/logo/cureopafinal.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-7">
                    <div class="header-wrapper">
                        <div class="mainmenu-area d-none d-lg-block">
                            <div class="top-bar">
                                <div class="top-bar-left">
                                    <div class="hotline">
                                        <p>Order online or call us : +12107924219</p>
                                    </div>
                                    <div class="topbar-language">

                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><span>USD $</span></a>

                                            <ul class="dropdown-menu">
                                                <li><a href="#">USD $</a></li>
                                                <li><a href="#">Euro €</a></li>
                                                <li><a href="#">Euro €</a></li>
                                            </ul>
                                        </div>

                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><img src="assets/images/flag/01.webp" alt="">English</a>

                                            <ul class="dropdown-menu">
                                                <li><a href="#"><img src="assets/images/flag/01.webp" alt="">English</a></li>
                                                <li><a href="#"><img src="assets/images/flag/02.webp" alt=""> اللغة العربية</a></li>
                                                <li><a href="#"><img src="assets/images/flag/03.webp" alt=""> Spanish</a></li>
                                            </ul>
                                        </div>

                                    </div>
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
                                        <li><a href="{{ url('/shop') }}">Shop <i class="fa fa-chevron-down"></i></a>
                                            <ul class="mega-sub-menu">
                                                <li>
                                                    <a class="mega-title" href="#">Skincare</a>
                                                    <ul class="menu-item">
                                                        <li><a href="{{ url('/shop') }}">Cleansers & Toners</a></li>
                                                        <li><a href="{{ url('/shop') }}">Moisturizers</a></li>
                                                        <li><a href="{{ url('/shop') }}">Serums & Treatments</a></li>
                                                        <li><a href="{{ url('/shop') }}">Sun Care</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="mega-title" href="#">Makeup</a>
                                                    <ul class="menu-item">
                                                        <li><a href="{{ url('/shop') }}">Face</a></li>
                                                        <li><a href="{{ url('/shop') }}">Eyes</a></li>
                                                        <li><a href="{{ url('/shop') }}">Lips</a></li>
                                                        <li><a href="{{ url('/shop') }}">Nails</a></li>
                                                        <li><a href="{{ url('/shop') }}">Brushes & Tools</a></li>
                                                        <li><a href="{{ url('/shop') }}">Makeup Palettes</a></li>
                                                        <li><a href="{{ url('/shop') }}">Makeup Removers</a></li>
                                                        <li><a href="{{ url('/shop') }}">Vegan Beauty</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="mega-title" href="#">Wellness & Health</a>
                                                    <ul class="menu-item">
                                                        <li><a href="{{ url('/shop') }}">Vitamins & Supplements</a></li>
                                                        <li><a href="{{ url('/shop') }}">Aromatherapy</a></li>
                                                        <li><a href="{{ url('/shop') }}">Massage & Relaxation</a></li>
                                                        <li><a href="{{ url('/shop') }}">Fitness Accessories</a></li>
                                                        <li><a href="{{ url('/shop') }}">Essential Oils</a></li>
                                                        <li><a href="{{ url('/shop') }}">Sleep Support</a></li>
                                                        <li><a href="{{ url('/shop') }}">Immune Support</a></li>
                                                        <li><a href="{{ url('/shop') }}">Weight Management</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- about page --}}
                                        <li><a href="{{ url('/about') }}">About Us</a></li>

                                        <li><a href="#">Personal Care <i class="fa fa-chevron-down"></i></a>
                                            <ul class="mega-sub-menu">
                                                <li>
                                                    <a class="mega-title" href="#">Hair Care</a>
                                                    <ul class="menu-item">
                                                        <li><a href="{{ url('/shop') }}">Shampoo & Conditioner</a></li>
                                                        <li><a href="{{ url('/shop') }}">Hair Masks & Treatments</a></li>
                                                        <li><a href="{{ url('/shop') }}">Styling Products</a></li>
                                                        <li><a href="{{ url('/shop') }}">Hair Color</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="mega-title" href="#">Body & Bath</a>
                                                    <ul class="menu-item">
                                                        <li><a href="{{ url('/shop') }}">Body Wash & Shower Gels</a></li>
                                                        <li><a href="{{ url('/shop') }}">Lotions & Creams</a></li>
                                                        <li><a href="{{ url('/shop') }}">Body Scrubs</a></li>
                                                        <li><a href="{{ url('/shop') }}">Deodorants & Antiperspirants</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="mega-title" href="#">Fragrance</a>
                                                    <ul class="menu-item">
                                                        <li><a href="{{ url('/shop') }}">Women's Perfume</a></li>
                                                        <li><a href="{{ url('/shop') }}">Men's Cologne</a></li>
                                                        <li><a href="{{ url('/shop') }}">Body Sprays & Mists</a></li>
                                                        <li><a href="{{ url('/shop') }}">Gift Sets</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
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
                                                        <a href="#"><img src="assets/images/product/1.webp" alt=""></a>
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
                                                        <a href="#"><img src="assets/images/product/2.webp" alt=""></a>
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
                                                        <a href="#"><img src="assets/images/product/3.webp" alt=""></a>
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
