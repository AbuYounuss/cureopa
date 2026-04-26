{{-- @extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')


@section('content')
    @component('components.header') @endcomponent

    <div class="blog-details">
		<div class="container">
			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					<div class="blog-wrapper bg-2">
						<div class="blog-img single-blog-img">
							<img src="assets/images/blog/2.webp" alt="" />
							<div class="date-post">
								<span class="month text-uppercase">Jun</span>
								<span class="day">29</span>
							</div>
						</div>
						<div class="blog-content single-blog-content">
							<h3 class="text-uppercase">Curabitur lobortis</h3>
							<div class="blog-meta">
								<span>April 18, 2016</span>
								<span>0 Comment(s)</span>
							</div>
							<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.</p>
							<div class="detals p-20 bg-1">
								<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
							</div>
							<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
							<p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
							<div class="entry-meta-category-tag border-bottom border-top ptb-20">
								<div class="category">
									<i class="fa fa-folder-open"></i>
									<span class="cat-title">Categories:</span>
									<a href="#">Uncategorized</a>
								</div>
							</div>
							<div class="eliment  pt-15 clear">
								<div class="entry-counter floatleft">
									<i class="fa fa-comments"></i><span>0</span>
									<i class="fa fa-eye"></i><span>104</span>
								</div>
							</div>
						</div>
					</div>
					<!-- comments-area -->
					<div class="comments-2-area p-30-20 mtb-50 bg-2">
						<div class="single-blog-form">
							<h3 class="single-blog-title border-bottom">Leave a Reply </h3>
							<p>Your email address will not be published. Required fields are marked *</p>
							<div class="message-wrapper mb-30">
								<form action="#">
									<span>Comment</span>
									<textarea name="#" id="comment" cols="30" rows="10"></textarea>
								</form>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-info">
										<form action="#">
											<span>Name *</span>
											<input type="text" />
											<span>Website *</span>
											<input type="text" />
										</form>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-info">
										<form action="#">
											<span>Email *</span>
											<input type="email" />
										</form>
									</div>
								</div>
							</div>
							<div class="single-blog-btn">
								<input type="submit" value="post comment" />
							</div>
						</div>
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
								<li><a href="#">Creative</a></li>
								<li><a href="#">Image</a></li>
								<li><a href="#">Music</a></li>
								<li><a href="#">Photography</a></li>
								<li><a href="#">Travel</a></li>
								<li><a href="#">Uncategorized</a></li>
								<li><a href="#">Videos</a></li>
								<li><a href="#">WordPress</a></li>
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
									<img src="assets/images/comment/1.webp" alt="" />
								</div>
								<div class="comment-info">
									<h6>admin</h6>
									<p>Nunc pulvinar sollicitudin molestie.</p>
									<span>on <a href="#"> Post Format:Gallery</a></span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<img src="assets/images/comment/1.webp" alt="" />
								</div>
								<div class="comment-info">
									<h6>alex</h6>
									<p>Aenean et tempor eros, vitae...</p>
									<span>on <a href="#">Vivamus gravida</a></span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<img src="assets/images/comment/1.webp" alt="" />
								</div>
								<div class="comment-info">
									<h6>admin</h6>
									<p>Nunc pulvinar sollicitudin molestie.</p>
									<span>on <a href="#"> Post Format:Image</a></span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<img src="assets/images/comment/1.webp" alt="" />
								</div>
								<div class="comment-info">
									<h6>admin</h6>
									<p>Etiam varius enim nec quam...</p>
									<span>on <a href="#"> Post Format:Image</a></span>
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
									<a href="#">Hello world !</a>
									<span>January 29, 2016</span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/2.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Curabitur lobortis</a>
									<span>January 29, 2016</span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/3.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Vivamus gravida</a>
									<span>January 29, 2016</span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/4.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Post Format:Image</a>
									<span>January 29, 2016</span>
								</div>
							</div>
							<div class="single-comments clear mb-20">
								<div class="comment-img floatleft">
									<a href="#"><img src="assets/images/post/5.webp" alt="" /></a>
								</div>
								<div class="comment-info">
									<a href="#">Post Format: Gallery</a>
									<span>January 29, 2016</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Archives-area start -->
					<div class="Archives-area border-2">
						<div class="product-title text-uppercase bg-5">
							<h3>Recent post</h3>
						</div>
						<div class="shop-categories-menu p-20">
							<ul>
								<li><a href="#">January 2016</a></li>
								<li><a href="#">December 2015</a></li>
								<li><a href="#">November 2015</a></li>
							</ul>
						</div>
					</div>
					<!-- Meta-area start -->
					<div class="Meta-area border-2 mtb-30">
						<div class="product-title text-uppercase bg-5">
							<h3>Recent post</h3>
						</div>
						<div class="shop-categories-menu p-20">
							<ul>
								<li><a href="#">Log in</a></li>
								<li><a href="#">Entries <span>RSS</span></a></li>
								<li><a href="#">Comments <span>RSS</span></a></li>
								<li><a href="#">WordPress.org</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



    @component('components.footer') @endcomponent
@endsection --}}





{{-- ===================================== --}}


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
                'month_short' => 'Sep',
                'year' => '2025',
                'date' => 'September 08, 2025',
                'category' => 'Skincare',
                'views' => 184,
                'comments' => 3,
                'content' => [
                    'Healthy glowing skin starts with a consistent routine, not expensive products only. A simple routine with cleansing, moisturizing, and sun protection can make a big difference over time.',
                    'Start by washing your face gently twice a day. Avoid harsh scrubs because they can damage the skin barrier. After cleansing, use a moisturizer that suits your skin type.',
                    'Sunscreen is one of the most important skincare steps. It helps protect your skin from sun damage, dark spots, early aging, and uneven tone.',
                    'Also, drink enough water, sleep properly, and avoid changing products too often. Give your skin time to adjust before judging whether a product works or not.',
                ],
                'highlight' => 'The best skincare routine is simple, regular, and suitable for your own skin type.',
            ],
            [
                'slug' => 'natural-hair-care-remedies-for-healthy-locks',
                'title' => 'Natural Hair Care Remedies for Healthy Locks',
                'image' => 'assets/images/blog/2.webp',
                'day' => '08',
                'month' => 'September',
                'month_short' => 'Sep',
                'year' => '2026',
                'date' => 'September 08, 2026',
                'category' => 'Hair Care',
                'views' => 156,
                'comments' => 2,
                'content' => [
                    'Healthy hair needs gentle care, proper nourishment, and regular maintenance. Natural remedies can support your hair, but they work best when used consistently.',
                    'Coconut oil, aloe vera, and natural hair masks can help reduce dryness and improve shine. However, avoid overusing oils because too much product can make the scalp heavy and greasy.',
                    'Use a mild shampoo, avoid excessive heat styling, and trim split ends when needed. These small habits help keep your hair stronger and easier to manage.',
                    'A balanced diet also matters. Protein, iron, vitamins, and enough water support better hair growth and overall scalp health.',
                ],
                'highlight' => 'Natural hair care works best when combined with good diet, gentle products, and less heat damage.',
            ],
            [
                'slug' => 'benefits-of-meditation-for-mental-wellness',
                'title' => 'The Benefits of Meditation for Mental Wellness',
                'image' => 'assets/images/blog/2.webp',
                'day' => '08',
                'month' => 'September',
                'month_short' => 'Sep',
                'year' => '2026',
                'date' => 'September 08, 2026',
                'category' => 'Wellness',
                'views' => 209,
                'comments' => 4,
                'content' => [
                    'Meditation is a simple habit that can improve mental wellness by helping the mind slow down. It does not require a perfect environment or long hours.',
                    'Even five to ten minutes of quiet breathing can help reduce stress, improve focus, and create a calmer mood throughout the day.',
                    'Beginners can start by sitting comfortably, closing the eyes, and focusing on breathing. When the mind gets distracted, gently bring attention back to the breath.',
                    'With regular practice, meditation can support emotional balance, better sleep, and more mindful decision-making.',
                ],
                'highlight' => 'Meditation is not about stopping thoughts; it is about learning how to observe them calmly.',
            ],
            [
                'slug' => 'top-beauty-products-for-2026',
                'title' => 'Top Beauty Products for 2026: Expert Reviews',
                'image' => 'assets/images/blog/3.webp',
                'day' => '08',
                'month' => 'September',
                'month_short' => 'Sep',
                'year' => '2026',
                'date' => 'September 08, 2026',
                'category' => 'Beauty Tips',
                'views' => 132,
                'comments' => 1,
                'content' => [
                    'Choosing the right beauty products can make your routine easier and more effective. The best product is not always the most expensive one.',
                    'Before buying any skincare or makeup product, check your skin type, ingredients, and daily needs. A product that works for oily skin may not work well for dry skin.',
                    'In 2026, lightweight moisturizers, gentle cleansers, hydrating serums, and multi-use makeup products are becoming more popular.',
                    'Focus on products that solve your real problem instead of buying everything that is trending online.',
                ],
                'highlight' => 'Good beauty shopping means choosing products based on your skin needs, not only social media hype.',
            ],
            [
                'slug' => 'healthy-eating-habits-for-better-skin',
                'title' => 'Healthy Eating Habits for Better Skin',
                'image' => 'assets/images/blog/4.webp',
                'day' => '08',
                'month' => 'September',
                'month_short' => 'Sep',
                'year' => '2026',
                'date' => 'September 08, 2026',
                'category' => 'Nutrition',
                'views' => 198,
                'comments' => 5,
                'content' => [
                    'Your skin reflects many parts of your lifestyle, and diet is one of them. Healthy food can support clearer, stronger, and more glowing skin.',
                    'Fruits, vegetables, nuts, fish, eggs, and enough water can help your body get the nutrients it needs for skin repair and hydration.',
                    'Too much sugar, oily food, and processed snacks may affect some people’s skin badly. It can increase dullness, breakouts, or inflammation.',
                    'You do not need a perfect diet. Start with small changes like drinking more water, eating more vegetables, and reducing unnecessary junk food.',
                ],
                'highlight' => 'Better skin is not only about what you apply outside, but also what you feed your body inside.',
            ],
            [
                'slug' => 'anti-aging-secrets-look-younger-naturally',
                'title' => 'Anti-Aging Secrets: Look Younger Naturally',
                'image' => 'assets/images/blog/5.webp',
                'day' => '08',
                'month' => 'September',
                'month_short' => 'Sep',
                'year' => '2026',
                'date' => 'September 08, 2026',
                'category' => 'Anti-Aging',
                'views' => 241,
                'comments' => 6,
                'content' => [
                    'Natural anti-aging starts with prevention. Protecting your skin early is easier than fixing damage later.',
                    'Use sunscreen, sleep well, stay hydrated, and keep your skincare routine consistent. These habits help reduce early fine lines and dullness.',
                    'Antioxidant-rich foods, gentle skincare, and stress management can also support youthful skin over time.',
                    'Avoid smoking, excessive sun exposure, and poor sleep habits because they can make skin look older faster.',
                ],
                'highlight' => 'The secret to younger-looking skin is consistency, protection, and a healthy lifestyle.',
            ],
            [
                'slug' => 'essential-vitamins-for-healthy-skin-and-hair',
                'title' => 'Essential Vitamins for Healthy Skin and Hair',
                'image' => 'assets/images/blog/1.webp',
                'day' => '08',
                'month' => 'September',
                'month_short' => 'Sep',
                'year' => '2021',
                'date' => 'September 08, 2021',
                'category' => 'Nutrition',
                'views' => 118,
                'comments' => 2,
                'content' => [
                    'Vitamins play an important role in keeping skin and hair healthy. They support repair, growth, hydration, and protection.',
                    'Vitamin C helps support collagen production, while vitamin E supports skin protection. Biotin, zinc, and iron are also connected with hair health.',
                    'The best way to get vitamins is through a balanced diet. Supplements should be used carefully, especially if you already have health conditions.',
                    'If you notice serious hair fall or skin problems, it is better to consult a health professional instead of guessing the cause.',
                ],
                'highlight' => 'Vitamins can support beauty, but balance and proper guidance are important.',
            ],
            [
                'slug' => 'morning-routines-for-beauty-and-wellness',
                'title' => 'Morning Routines for Beauty and Wellness',
                'image' => 'assets/images/blog/5.webp',
                'day' => '08',
                'month' => 'September',
                'month_short' => 'Sep',
                'year' => '2026',
                'date' => 'September 08, 2026',
                'category' => 'Wellness',
                'views' => 167,
                'comments' => 3,
                'content' => [
                    'A good morning routine sets the tone for the whole day. It does not need to be complicated or time-consuming.',
                    'Start with water, light stretching, basic skincare, and a few quiet minutes to plan your day. These small actions can improve both mood and appearance.',
                    'Avoid checking your phone immediately after waking up. Give your mind a calm start before jumping into messages and social media.',
                    'When your morning feels organized, your whole day becomes easier to manage.',
                ],
                'highlight' => 'A simple morning routine can improve your beauty, wellness, and daily confidence.',
            ],
        ];

        $currentSlug = $slug ?? request()->route('slug');
        $blog = collect($blogs)->firstWhere('slug', $currentSlug);

        if (!$blog) {
            abort(404);
        }
    @endphp

    <div class="breadcrumbs-area ptb-10 bg-4 mb-30">
        <div class="container">
            <div class="woocommerce-breadcrumb ptb-15">
                <div class="menu">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="active"><a href="#">{{ $blog['title'] }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-details">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="blog-wrapper bg-2">
                        <div class="blog-img single-blog-img">
                            <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" />

                            <div class="date-post">
                                <span class="month text-uppercase">{{ $blog['month_short'] }}</span>
                                <span class="day">{{ $blog['day'] }}</span>
                            </div>
                        </div>

                        <div class="blog-content single-blog-content">
                            <h3 class="text-uppercase">{{ $blog['title'] }}</h3>

                            <div class="blog-meta">
                                <span>{{ $blog['date'] }}</span>
                                <span>{{ $blog['comments'] }} Comment(s)</span>
                            </div>

                            @foreach($blog['content'] as $index => $paragraph)
                                @if($index == 1)
                                    <div class="detals p-20 bg-1">
                                        <p>{{ $blog['highlight'] }}</p>
                                    </div>
                                @endif

                                <p>{{ $paragraph }}</p>
                            @endforeach

                            <div class="entry-meta-category-tag border-bottom border-top ptb-20">
                                <div class="category">
                                    <i class="fa fa-folder-open"></i>
                                    <span class="cat-title">Categories:</span>
                                    <a href="#">{{ $blog['category'] }}</a>
                                </div>
                            </div>

                            <div class="eliment pt-15 clear">
                                <div class="entry-counter floatleft">
                                    <i class="fa fa-comments"></i><span>{{ $blog['comments'] }}</span>
                                    <i class="fa fa-eye"></i><span>{{ $blog['views'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comments-2-area p-30-20 mtb-50 bg-2">
                        <div class="single-blog-form">
                            <h3 class="single-blog-title border-bottom">Leave a Reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>

                            <div class="message-wrapper mb-30">
                                <form action="#">
                                    <span>Comment</span>
                                    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                                </form>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-info">
                                        <form action="#">
                                            <span>Name *</span>
                                            <input type="text" />

                                            <span>Website *</span>
                                            <input type="text" />
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-info">
                                        <form action="#">
                                            <span>Email *</span>
                                            <input type="email" />
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="single-blog-btn">
                                <input type="submit" value="post comment" />
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
                                <li><a href="{{url('shop')}}">Skincare</a></li>
                                <li><a href="{{url('shop')}}">Hair Care</a></li>
                                <li><a href="{{url('shop')}}">Wellness</a></li>
                                <li><a href="{{url('shop')}}">Beauty Tips</a></li>
                                <li><a href="{{url('shop')}}">Nutrition</a></li>
                                <li><a href="{{url('shop')}}">Anti-Aging</a></li>
                                <li><a href="{{url('shop')}}">Natural Remedies</a></li>
                                <li><a href="{{url('shop')}}">Makeup</a></li>
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
                                    <img src="{{ asset('assets/images/comment/1.webp') }}" alt="" />
                                </div>
                                <div class="comment-info">
                                    <h6>admin</h6>
                                    <p>Very helpful beauty tips. I will try this routine.</p>
                                    <span>on <a href="#">{{ $blog['title'] }}</a></span>
                                </div>
                            </div>

                            <div class="single-comments clear mb-20">
                                <div class="comment-img floatleft">
                                    <img src="{{ asset('assets/images/comment/1.webp') }}" alt="" />
                                </div>
                                <div class="comment-info">
                                    <h6>alex</h6>
                                    <p>This article explains everything in a simple way.</p>
                                    <span>on <a href="#">{{ $blog['category'] }}</a></span>
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

    @component('components.footer') @endcomponent
@endsection
