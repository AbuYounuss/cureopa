@extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')


@section('content')

    @component('components.header') @endcomponent

<!-- shop-area start -->
	<div class="breadcrumbs-area ptb-10 bg-4 mb-30">
		<div class="container">
			<div class="woocommerce-breadcrumb ptb-15">
				<div class="menu">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="javascript:void(0);">Shop</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row flex-row-reverse">
			<!-- product-vew area start -->
			<div class="col-xl-9 col-lg-8">
				<div class="slider mb-20">
					<img src="assets/images/shop/1.webp" alt="" />
				</div>
				<div class="tab-area shop-tab-area">
					<div class="shop-taitle mb-20">
						<h2>Shop</h2>
					</div>
					<div class="tab-menu-area border-bottom mb-30">
						<div class="row">
							<div class="col-md-7 col-sm-6">
								<div class="shop-tab-menu">
									<ul class="nav">
										<li><a class="active" href="#tab1" data-bs-toggle="tab"><i class="fa fa-th-list"></i></a></li>
										<li><a href="#tab2" data-bs-toggle="tab"><i class="fa fa-th-list"></i></a></li>
									</ul>
									<span> Items 1-9 of 13</span>
								</div>
							</div>
							<div class=" col-md-5 col-sm-6">
								<div class="woocommerce-ordering text-end">
									<strong>Sort By </strong>
									<select name="orderby">
										<option value="menu_order" selected="selected">Position</option>
										<option value="popularity">Product Name</option>
										<option value="rating">Price</option>
									</select>
									<a href="#"><i class="fa fa-arrow-up"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade show active" id="tab1">
							<div class="row">
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/1.webp" alt="" /></a>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product  mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/2.webp" alt="" /></a>
											<span class="new">New</span>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product  mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/3.webp" alt="" /></a>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product  mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/4.webp" alt="" /></a>
											<span class="new">New</span>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product  mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/5.webp" alt="" /></a>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product  mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/2.webp" alt="" /></a>
											<span class="new">New</span>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product  mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/7.webp" alt="" /></a>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product  mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/8.webp" alt="" /></a>
											<span class="new">New</span>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
									<div class="single-product  mb-30">
										<div class="product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/9.webp" alt="" /></a>
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
											<div class="add-to-cart-area clear ptb-35">
												{{-- <div class="add-to-cart text-uppercase">
													<button>add to cart</button>
												</div> --}}
												<div class="add-to-links">
													<ul>
														<li class="left">
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li class="right">
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab2">
							<div class="row">
								<div class="col-sm-12">
									<div class="product-wrapper clear border-bottom mb-30">
										<div class="product-img shop-product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/9.webp" alt="" /></a>
										</div>
										<div class="product-item-details shop-product-item-details">
											<div class="product-name-review">
												<div class="product-name ">
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
													<small>1 Review Add Your Review</small><br />
													<span class="special-price">$ 50.00</span>
													<span class="old-price">
														<del>$ 46.00</del>
													</span>
													<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare, it's ideal for athletes with places to go.</p>
													<div class="readmore-btn">
														<a href="#">Learn More<i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
											<div class="add-to-cart text-uppercase ptb-35">
												<ul>
													<li><button>add to cart</button></li>
													<li>
														<a href="#"><i class="fa fa-adjust"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="product-wrapper clear border-bottom mb-30">
										<div class="product-img shop-product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/2.webp" alt="" /></a>
										</div>
										<div class="product-item-details shop-product-item-details">
											<div class="product-name-review">
												<div class="product-name ">
													<strong><a href="shop-single-product.html"> Fusion Backpack</a></strong>
												</div>
												<div class="product-review">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
													</ul>
													<small>1 Review Add Your Review</small><br />
													<span class="special-price">$ 60.00</span>
													<p>With the Fusion Backpack strapped on, every trek is an adventure - even a bus ride to work. That's partly because two large zippered compartments store everything you need, while a front zippered pocket and side mesh pouches are perfect for stashing those little extras, in case you change your mind and take the day off.</p>
													<div class="readmore-btn">
														<a href="#">Learn More<i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
											<div class="add-to-cart text-uppercase ptb-35">
												<ul>
													<li><button>add to cart</button></li>
													<li>
														<a href="#"><i class="fa fa-adjust"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="product-wrapper  clear border-bottom mb-30">
										<div class="product-img shop-product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/3.webp" alt="" /></a>
										</div>
										<div class="product-item-details shop-product-item-details">
											<div class="product-name-review">
												<div class="product-name">
													<strong><a href="shop-single-product.html">MH01-Gray</a></strong>
												</div>
												<div class="product-review">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
													</ul>
													<small>1 Review Add Your Review</small><br />
													<span class="special-price">$ 50.00</span>
													<span class="old-price">
														<del>$ 46.00</del>
													</span>
													<p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.</p>
													<p>• Two-tone gray heather hoodie. <br />• Drawstring-adjustable hood. <br /> • Machine wash/dry.</p>
													<div class="readmore-btn">
														<a href="#">Learn More<i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
											<div class="add-to-cart-area clear ptb-35">
												<div class="add-to-cart text-uppercase">
													<ul>
														<li><button>add to cart</button></li>
														<li>
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li>
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="product-wrapper  clear border-bottom mb-30">
										<div class="product-img shop-product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/4.webp" alt="" /></a>
										</div>
										<div class="product-item-details shop-product-item-details">
											<div class="product-name-review">
												<div class="product-name ">
													<strong><a href="shop-single-product.html">Rival Field Messenger </a></strong>
												</div>
												<div class="product-review">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
													</ul>
													<small>1 Review Add Your Review</small><br />
													<span class="special-price">$ 35.00</span>
													<p>The Rival Field Messenger packs all your campus, studio or trail essentials inside a unique design of soft, textured leather - with loads of character to spare. Two exterior pockets keep all your smaller items handy, and the roomy interior offers even more space.</p>
													<div class="readmore-btn">
														<a href="#">Learn More<i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
											<div class="add-to-cart-area clear ptb-35">
												<div class="add-to-cart text-uppercase">
													<ul>
														<li><button>add to cart</button></li>
														<li>
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li>
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="product-wrapper  clear border-bottom mb-30">
										<div class="product-img shop-product-img">
											<a href="shop-single-product.html"><img src="assets/images/product/5.webp" alt="" /></a>
										</div>
										<div class="product-item-details shop-product-item-details">
											<div class="product-name-review">
												<div class="product-name ">
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
													<small>1 Review Add Your Review</small><br />
													<span class="special-price">$ 40.00</span>
													<p>Perfect for class, work or the gym, the Wayfarer Messenger Bag is packed with pockets. The dual-buckle flap closure reveals an organizational panel, and the roomy main compartment has spaces for your laptop and a change of clothes. An adjustable shoulder strap and easy-grip handle promise easy carrying.</p>
													<div class="readmore-btn">
														<a href="#">Learn More<i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
											<div class="add-to-cart-area clear ptb-35">
												<div class="add-to-cart text-uppercase">
													<ul>
														<li><button>add to cart</button></li>
														<li>
															<a href="#"><i class="fa fa-adjust"></i></a>
														</li>
														<li>
															<a href="#"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- woocommerce-pagination-area -->
				<div class="woocommerce-pagination-area d-flex justify-content-between pb-40 mb-100 border-bottom">
					<div class="woocommerce-pagination">
						<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</div>
					<div class="woocommerce-ordering">
						<strong>Show</strong>
						<select name="orderby">
							<option value="menu_order" selected="selected">1</option>
							<option value="popularity">2</option>
							<option value="rating">3</option>
						</select>
						<span> per page</span>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-4">
				{{-- <div class="categories-area mb-35 border-2">
					<div class="product-title text-uppercase bg-5">
						<h3>Shop By</h3>
					</div>
					<div class="shop-categories-menu p-20">
						<ul>
							<li><strong>Shopping Options</strong></li>
							<li><a href="#">Color</a></li>
							<li><a href="#">Manufacturer <i class="opener-1 fa fa-angle-right pull-right"></i></a>
								<ul class="toggle-1">
									<li><a href="#"> Adidas 4 items</a></li>
									<li><a href="#">Chanel 6 items</a></li>
									<li><a href="#">DKNY 2 items</a></li>
									<li><a href="#">Dolce 1 item</a></li>
									<li><a href="#">Gabbana 1 item</a></li>
									<li><a href="#">Nike 2 items</a></li>
									<li><a href="#">Other 2</a></li>
								</ul>
							</li>
							<li><a href="#">Price <i class="opener-2 fa fa-angle-right pull-right"></i></a>
								<ul class="toggle-2">
									<li><a href="#"> $0.00 - $9.99 1 items</a></li>
									<li><a href="#">$30.00 - $39.99 5 items</a></li>
									<li><a href="#">$40.00 - $49.99 2 items</a></li>
									<li><a href="#">$50.00 - $59.99 4 items</a></li>
									<li><a href="#">$70.00 and above 1</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div> --}}

				{{-- <!-- compare-area start -->
				<div class="compare-area border-2">
					<div class="product-title text-uppercase bg-5">
						<h3>Compare</h3>
					</div>
					<div class="compare-menu p-20">
						<p>No products to compare</p>
						<a href="#">Clear all</a>
						<a href="#" data-toggle="tooltip" title="Compare" class="pull-right compare text-uppercase">Compare </a>
					</div>
				</div> --}}

				<!-- compare-area start -->
				{{-- <div class="compare-area border-2">
					<div class="product-title text-uppercase bg-5">
						<h3>My Wishlist</h3>
					</div>
					<div class="wishlist p-20">
						<p>You have no items in your wish list.</p>
					</div>
				</div> --}}

				<!-- banner-area start -->
				<div class="banner-area mtb-35">
					<div class="single-banner home2-single-banner mb-30">
						<a href="#"><img src="assets/images/banner/home2/5.png" alt="" /></a>
					</div>
					<div class="single-banner home2-single-banner">
						<a href="#"><img src="assets/images/banner/home2/2.webp" alt="" /></a>
					</div>
				</div>
				<!-- banner-area start -->
				<div class="banner-area mtb-35">
					<div class="single-banner home2-single-banner mb-30">
						<a href="#"><img src="assets/images/banner/home2/1.webp" alt="" /></a>
					</div>
					<div class="single-banner home2-single-banner">
						<a href="#"><img src="assets/images/banner/home2/3.png" alt="" /></a>
					</div>
				</div>
				<!-- banner-area start -->
				<div class="banner-area mtb-35">

					<div class="single-banner home2-single-banner">
						<a href="#"><img src="assets/images/banner/home2/2.webp" alt="" /></a>
					</div>
				</div>

				<!-- Mostviewed area -->
				<div class="mostviewed-area mb-35 border-2">
					<div class="product-title text-uppercase bg-5">
						<h3>Mostviewed</h3>
					</div>
					<div class="mostviewed-slider-active owl-carousel  next-prev-style">
						<div class="new-product-wrap shop-new-product-wrap">
							<div class="new-product-item clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/1.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Udon chicken soup</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 45.00</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/2.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Rival Field Messenger</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 55.00</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/3.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Miso soup</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 55.00</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/1.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Fusion Backpack</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 55.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="new-product-wrap shop-new-product-wrap">
							<div class="new-product-item clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/6.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Udon chicken soup</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 45.00</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/8.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Rival Field Messenger</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 55.00</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/3.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Miso soup</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 55.00</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/3.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Fusion Backpack</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 55.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="new-product-wrap shop-new-product-wrap">
							<div class="new-product-item  clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/5.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Spicy soup seafood</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 30.00</span>
										<span class="old-price">
											<del>$ 46.00</del>
										</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/7.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">MH01-Black</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 25.00</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15 border-bottom">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/10.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Miso soup with</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 25.00</span>
									</div>
								</div>
							</div>
							<div class="new-product-item clear ptb-15">
								<div class="product-img home2-product-img pull-left">
									<a href="shop-single-product.html"><img src="assets/images/product/home5/1.webp" alt="" /></a>
								</div>
								<div class="product-item-details  pull-right home2-product-item-details">
									<div class="product-name">
										<strong><a href="shop-single-product.html">Cream soup with</a></strong>
									</div>
									<div class="product-review">
										<span class="special-price">$ 25.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    @component('components.footer') @endcomponent

@endsection
