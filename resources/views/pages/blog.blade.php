{{-- @extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')


@section('content')
    @component('components.header') @endcomponent

    <section>
        <!-- blog-area start -->
	<div class="breadcrumbs-area ptb-10 bg-4 mb-30">
		<div class="container">
			<div class="woocommerce-breadcrumb ptb-15">
				<div class="menu">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="blog.html">Blog</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="blog-area">
		<div class="container">
			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					<div class="blog-area">
						<div class="row">
							<div class="col-md-6">
								<div class="blog-wrap text-center mb-35">
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
											<span>2025</span>
										</div>
										<div class="blog-info">
											<h3>
												<a href="blog-details.html">10 Essential Skincare Tips for Glowing Skin</a>
											</h3>
											<p>Discover the secrets to achieving radiant, healthy skin with our comprehensive guide to daily skincare routines, product recommendations, and expert tips tailored for all skin types.</p>
											<div class="readmore-btn">
												<a href="{{url('blog-details')}}">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="blog-wrap text-center  mb-35">
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
											<span>2026</span>
										</div>
										<div class="blog-info">
											<h3>
												<a href="blog-details.html">Natural Hair Care Remedies for Healthy Locks</a>
											</h3>
											<p>Transform your hair with these proven natural remedies using ingredients from your kitchen. Learn about masks, oils, and treatments that promote hair growth and shine.</p>
											<div class="readmore-btn">
												<a href="{{url('blog-details')}}">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="blog-wrap text-center  mb-35">
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
											<span>2026</span>
										</div>
										<div class="blog-info">
											<h3>
												<a href="blog-details.html">The Benefits of Meditation for Mental Wellness</a>
											</h3>
											<p>Explore how regular meditation practices can improve mental health, reduce stress, and enhance overall well-being. Learn simple techniques to incorporate mindfulness into your daily routine.</p>
											<div class="readmore-btn">
												<a href="{{url('blog-details')}}">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="blog-wrap text-center mb-35">
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
											<span>2026</span>
										</div>
										<div class="blog-info">
											<h3>
												<a href="blog-details.html">Top Beauty Products for 2026: Expert Reviews</a>
											</h3>
											<p>Stay ahead of the beauty trends with our in-depth reviews of the latest skincare, makeup, and hair care products. Find out which ones are worth your investment.</p>
											<div class="readmore-btn">
												<a href="{{url('blog-details')}}">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="blog-wrap text-center  mb-35">
									<div class="blog-img fix">
										<a href="blog-details.html">
											<img src="assets/images/blog/4.webp" alt="" />
										</a>
									</div>
									<div class="blog-content">
										<div class="blog-meta">
											<span>08</span>
											<span>/</span>
											<span>September</span>
											<span>/</span>
											<span>2026</span>
										</div>
										<div class="blog-info">
											<h3>
												<a href="blog-details.html">Healthy Eating Habits for Better Skin</a>
											</h3>
											<p>Learn how your diet affects your skin health. Discover nutrient-rich foods that promote collagen production, reduce inflammation, and give you that natural glow.</p>
											<div class="readmore-btn">
												<a href="{{url('blog-details')}}">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="blog-wrap text-center  mb-35">
									<div class="blog-img fix">
										<a href="blog-details.html">
											<img src="assets/images/blog/5.webp" alt="" />
										</a>
									</div>
									<div class="blog-content">
										<div class="blog-meta">
											<span>08</span>
											<span>/</span>
											<span>September</span>
											<span>/</span>
											<span>2026</span>
										</div>
										<div class="blog-info">
											<h3>
												<a href="blog-details.html">Anti-Aging Secrets: Look Younger Naturally</a>
											</h3>
											<p>Uncover the most effective anti-aging strategies that go beyond expensive treatments. From lifestyle changes to natural remedies, learn how to maintain youthful skin.</p>
											<div class="readmore-btn">
												<a href="{{url('blog-details')}}">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="blog-wrap  mb-35 text-center ">
									<div class="blog-img">
										<div class="single-blog-active owl-carousel next-prev-style">
											<div class="blog-img">
												<a class="image-link" href="assets/images/blog/1.webp"><img src="assets/images/blog/1.webp" alt="" /></a>
											</div>
											<div class="blog-img">
												<a class="image-link" href="assets/images/blog/2.webp"><img src="assets/images/blog/2.webp" alt="" /></a>
											</div>
											<div class="blog-img">
												<a class="image-link" href="assets/images/blog/3.webp"><img src="assets/images/blog/3.webp" alt="" /></a>
											</div>
											<div class="blog-img">
												<a class="image-link" href="assets/images/blog/4.webp"><img src="assets/images/blog/4.webp" alt="" /></a>
											</div>
											<div class="blog-img">
												<a class="image-link" href="assets/images/blog/5.webp"><img src="assets/images/blog/5.webp" alt="" /></a>
											</div>
										</div>
									</div>
									<div class="blog-content">
										<div class="blog-meta">
											<span>08</span>
											<span>/</span>
											<span>September</span>
											<span>/</span>
											<span>2021</span>
										</div>
										<div class="blog-info">
											<h3>
												<a href="blog-details.html">Essential Vitamins for Healthy Skin and Hair</a>
											</h3>
											<p>Discover which vitamins are crucial for maintaining healthy skin and hair. Learn about vitamin deficiencies, food sources, and when to consider supplements for optimal beauty.</p>
											<div class="readmore-btn">
												<a href="{{url('blog-details')}}">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="blog-wrap  text-center  mb-35">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe src="https://www.youtube.com/embed/Bph709EqnHk" allowfullscreen=""></iframe>
									</div>
									<div class="blog-content">
										<div class="blog-meta">
											<span>08</span>
											<span>/</span>
											<span>September</span>
											<span>/</span>
											<span>2026</span>
										</div>
										<div class="blog-info">
											<h3>
												<a href="blog-details.html">Morning Routines for Beauty and Wellness</a>
											</h3>
											<p>Start your day right with these beauty and wellness morning routines. From skincare rituals to mindfulness practices, learn how to set a positive tone for the entire day.</p>
											<div class="readmore-btn">
												<a href="{{url('blog-details')}}">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="woocommerce-pagination-area ptb-15 mb-30 bg-4">
									<div class="woocommerce-pagination text-center">
										<ul>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- woocommerce-pagination-area -->
					</div>
				</div>

				<div class="col-lg-3">
					<!-- Search-area -->
					<div class="Search-area border-2">
						<div class="product-title text-uppercase bg-5">
							<h3>Search</h3>
						</div>
						<div class="search p-20 mt-20">
							<form action="#">
								<input type="text" placeholder="Search...." />
								<button><i class="fa fa-paper-plane-o"></i></button>
							</form>
						</div>
					</div>
					<!-- categories-area start -->
					<div class="categories-area border-2 mtb-35">
						<div class="product-title text-uppercase bg-5">
							<h3>Categories</h3>
						</div>
						<div class="shop-categories-menu p-20">
							<ul>
								<li><a href="#">Skincare</a></li>
								<li><a href="#">Hair Care</a></li>
								<li><a href="#">Wellness</a></li>
								<li><a href="#">Beauty Tips</a></li>
								<li><a href="#">Nutrition</a></li>
								<li><a href="#">Anti-Aging</a></li>
								<li><a href="#">Natural Remedies</a></li>
								<li><a href="#">Makeup</a></li>
							</ul>
						</div>
					</div>
					<!-- comment-area -->
					<div class="recent-comment-area border-2">
						<div class="product-title text-uppercase bg-5">
							<h3>Recent Comment</h3>
						</div>
						<div class="comment  p-20-15 ">
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<img src="assets/images/comment/1.png" alt="" />
								</div>
								<div class="comment-info">
									<h6>admin</h6>
									<p>Great tips on natural skincare! The vitamin C routine really works.</p>
									<span>on <a href="#">10 Essential Skincare Tips</a></span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<img src="assets/images/comment/2.png" alt="" />
								</div>
								<div class="comment-info">
									<h6>alex</h6>
									<p>These hair care remedies are amazing! My hair feels so much healthier now.</p>
									<span>on <a href="#">Natural Hair Care Remedies</a></span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<img src="assets/images/comment/3.png" alt="" />
								</div>
								<div class="comment-info">
									<h6>admin</h6>
									<p>Meditation has transformed my daily routine. Thanks for the wellness tips!</p>
									<span>on <a href="#">Benefits of Meditation</a></span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<img src="assets/images/comment/1.webp" alt="" />
								</div>
								<div class="comment-info">
									<h6>admin</h6>
									<p>The anti-aging advice is spot on. Natural methods work best for me.</p>
									<span>on <a href="#">Anti-Aging Secrets</a></span>
								</div>
							</div>
						</div>
					</div>
					<!-- comment-area -->
					<div class="recent-comment-area border-2 mtb-30">
						<div class="product-title text-uppercase bg-5">
							<h3>Recent post</h3>
						</div>
						<div class="comment  p-20-15 ">
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/1.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Welcome to Cureopa Beauty Blog</a>
									<span>January 29, 2024</span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/2.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Skincare Routine Essentials</a>
									<span>January 29, 2026</span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/3.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Natural Beauty Remedies</a>
									<span>January 29, 2025</span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/4.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Beauty Product Reviews</a>
									<span>January 29, 2026</span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/5.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Wellness and Self-Care</a>
									<span>January 29, 2019</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Archives-area start -->
					<div class="Archives-area border-2">
						<div class="product-title text-uppercase bg-5">
							<h3>Archives</h3>
						</div>
						<div class="shop-categories-menu p-20">
							<ul>
								<li><a href="#">January 2024</a></li>
								<li><a href="#">December 2025</a></li>
								<li><a href="#">November 2025</a></li>
							</ul>
						</div>
					</div>
					<!-- Meta-area start -->
					<div class="Meta-area border-2 mtb-30">
						<div class="product-title text-uppercase bg-5">
							<h3>Beauty Resources</h3>
						</div>
						<div class="shop-categories-menu p-20">
							<ul>
								<li><a href="#">Skincare Guide</a></li>
								<li><a href="#">Product Reviews</a></li>
								<li><a href="#">Wellness Tips</a></li>
								<li><a href="#">Natural Remedies</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- blog-area end -->
    </section>

    @component('components.footer') @endcomponent
@endsection --}}






@extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')

@section('content')
    @component('components.header') @endcomponent

    @php
        $blogs = [
            [
                'slug' => 'essential-skincare-tips-for-glowing-skin',
                'title' => '10 Essential Skincare Tips for Glowing Skin',
                'image' => 'assets/images/blog/1.webp',
                'day' => '08',
                'month' => 'September',
                'year' => '2025',
                'category' => 'Skincare',
                'excerpt' => 'Discover simple daily skincare habits that help your skin look fresh, healthy, and naturally glowing.',
            ],
            [
                'slug' => 'natural-hair-care-remedies-for-healthy-locks',
                'title' => 'Natural Hair Care Remedies for Healthy Locks',
                'image' => 'assets/images/blog/2.webp',
                'day' => '08',
                'month' => 'September',
                'year' => '2026',
                'category' => 'Hair Care',
                'excerpt' => 'Transform your hair with natural remedies, oils, masks, and easy home care tips for stronger, shinier hair.',
            ],
            [
                'slug' => 'benefits-of-meditation-for-mental-wellness',
                'title' => 'The Benefits of Meditation for Mental Wellness',
                'image' => 'assets/images/blog/2.webp',
                'day' => '08',
                'month' => 'September',
                'year' => '2026',
                'category' => 'Wellness',
                'excerpt' => 'Learn how meditation can reduce stress, improve focus, and bring more balance into your daily life.',
            ],
            [
                'slug' => 'top-beauty-products-for-2026',
                'title' => 'Top Beauty Products for 2026: Expert Reviews',
                'image' => 'assets/images/blog/3.webp',
                'day' => '08',
                'month' => 'September',
                'year' => '2026',
                'category' => 'Beauty Tips',
                'excerpt' => 'Explore useful skincare, makeup, and hair care products that can make your beauty routine easier and better.',
            ],
            [
                'slug' => 'healthy-eating-habits-for-better-skin',
                'title' => 'Healthy Eating Habits for Better Skin',
                'image' => 'assets/images/blog/4.webp',
                'day' => '08',
                'month' => 'September',
                'year' => '2026',
                'category' => 'Nutrition',
                'excerpt' => 'Understand how food affects your skin and which healthy habits can support a clear, glowing complexion.',
            ],
            [
                'slug' => 'anti-aging-secrets-look-younger-naturally',
                'title' => 'Anti-Aging Secrets: Look Younger Naturally',
                'image' => 'assets/images/blog/5.webp',
                'day' => '08',
                'month' => 'September',
                'year' => '2026',
                'category' => 'Anti-Aging',
                'excerpt' => 'Discover natural anti-aging habits, lifestyle tips, and skincare practices to keep your skin looking youthful.',
            ],
            [
                'slug' => 'essential-vitamins-for-healthy-skin-and-hair',
                'title' => 'Essential Vitamins for Healthy Skin and Hair',
                'image' => 'assets/images/blog/1.webp',
                'day' => '08',
                'month' => 'September',
                'year' => '2021',
                'category' => 'Nutrition',
                'excerpt' => 'Find out which vitamins support healthy skin and hair, and how to include them in your daily routine.',
            ],
            [
                'slug' => 'morning-routines-for-beauty-and-wellness',
                'title' => 'Morning Routines for Beauty and Wellness',
                'image' => 'assets/images/blog/5.webp',
                'day' => '08',
                'month' => 'September',
                'year' => '2026',
                'category' => 'Wellness',
                'excerpt' => 'Start your morning with simple beauty and wellness habits that keep you fresh, calm, and confident.',
            ],
        ];
    @endphp

    <section>
        <div class="breadcrumbs-area ptb-10 bg-4 mb-30">
            <div class="container">
                <div class="woocommerce-breadcrumb ptb-15">
                    <div class="menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><a href="{{ route('blog') }}">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-area">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="blog-area">
                            <div class="row">

                                @foreach($blogs as $blog)
                                    <div class="col-md-6">
                                        <div class="blog-wrap text-center mb-35">
                                            <div class="blog-img fix">
                                                <a href="{{ route('blog.details', $blog['slug']) }}">
                                                    <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" />
                                                </a>
                                            </div>

                                            <div class="blog-content">
                                                <div class="blog-meta">
                                                    <span>{{ $blog['day'] }}</span>
                                                    <span>/</span>
                                                    <span>{{ $blog['month'] }}</span>
                                                    <span>/</span>
                                                    <span>{{ $blog['year'] }}</span>
                                                </div>

                                                <div class="blog-info">
                                                    <h3>
                                                        <a href="{{ route('blog.details', $blog['slug']) }}">
                                                            {{ $blog['title'] }}
                                                        </a>
                                                    </h3>

                                                    <p>{{ $blog['excerpt'] }}</p>

                                                    <div class="readmore-btn">
                                                        <a href="{{ route('blog.details', $blog['slug']) }}">
                                                            Read more <i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-md-12">
                                    <div class="woocommerce-pagination-area ptb-15 mb-30 bg-4">
                                        <div class="woocommerce-pagination text-center">
                                            <ul>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="Search-area border-2">
                            <div class="product-title text-uppercase bg-5">
                                <h3>Search</h3>
                            </div>
                            <div class="search p-20 mt-20">
                                <form action="#">
                                    <input type="text" placeholder="Search...." />
                                    <button><i class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="categories-area border-2 mtb-35">
                            <div class="product-title text-uppercase bg-5">
                                <h3>Categories</h3>
                            </div>
                            <div class="shop-categories-menu p-20">
                                <ul>
                                    <li><a href="#">Skincare</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li><a href="#">Wellness</a></li>
                                    <li><a href="#">Beauty Tips</a></li>
                                    <li><a href="#">Nutrition</a></li>
                                    <li><a href="#">Anti-Aging</a></li>
                                    <li><a href="#">Natural Remedies</a></li>
                                    <li><a href="#">Makeup</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="recent-comment-area border-2">
                            <div class="product-title text-uppercase bg-5">
                                <h3>Recent Comment</h3>
                            </div>
                            <div class="comment p-20-15">
                                <div class="single-comments clear mb-20">
                                    <div class="comment-img floatleft">
                                        <img src="{{ asset('assets/images/comment/1.png') }}" alt="" />
                                    </div>
                                    <div class="comment-info">
                                        <h6>admin</h6>
                                        <p>Great tips on natural skincare! The vitamin C routine really works.</p>
                                        <span>on <a href="#">10 Essential Skincare Tips</a></span>
                                    </div>
                                </div>

                                <div class="single-comments clear mb-20">
                                    <div class="comment-img floatleft">
                                        <img src="{{ asset('assets/images/comment/2.png') }}" alt="" />
                                    </div>
                                    <div class="comment-info">
                                        <h6>alex</h6>
                                        <p>These hair care remedies are amazing! My hair feels healthier now.</p>
                                        <span>on <a href="#">Natural Hair Care Remedies</a></span>
                                    </div>
                                </div>

                                <div class="single-comments clear mb-20">
                                    <div class="comment-img floatleft">
                                        <img src="{{ asset('assets/images/comment/3.png') }}" alt="" />
                                    </div>
                                    <div class="comment-info">
                                        <h6>admin</h6>
                                        <p>Meditation has transformed my daily routine.</p>
                                        <span>on <a href="#">Benefits of Meditation</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="recent-comment-area border-2 mtb-30">
                            <div class="product-title text-uppercase bg-5">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="comment p-20-15">
                                @foreach(array_slice($blogs, 0, 5) as $recent)
                                    <div class="single-comments clear mb-20">
                                        <div class="comment-img floatleft">
                                            <a href="{{ route('blog.details', $recent['slug']) }}">
                                                <img src="{{ asset($recent['image']) }}" alt="{{ $recent['title'] }}" />
                                            </a>
                                        </div>
                                        <div class="comment-info">
                                            <a href="{{ route('blog.details', $recent['slug']) }}">
                                                {{ $recent['title'] }}
                                            </a>
                                            <span>{{ $recent['month'] }} {{ $recent['day'] }}, {{ $recent['year'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="Archives-area border-2">
                            <div class="product-title text-uppercase bg-5">
                                <h3>Archives</h3>
                            </div>
                            <div class="shop-categories-menu p-20">
                                <ul>
                                    <li><a href="#">January 2026</a></li>
                                    <li><a href="#">December 2025</a></li>
                                    <li><a href="#">November 2025</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="Meta-area border-2 mtb-30">
                            <div class="product-title text-uppercase bg-5">
                                <h3>Beauty Resources</h3>
                            </div>
                            <div class="shop-categories-menu p-20">
                                <ul>
                                    <li><a href="#">Skincare Guide</a></li>
                                    <li><a href="#">Product Reviews</a></li>
                                    <li><a href="#">Wellness Tips</a></li>
                                    <li><a href="#">Natural Remedies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @component('components.footer') @endcomponent
@endsection
