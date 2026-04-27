{{-- ===================================== --}}


@extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')

@section('content')


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
    @component('components.header') @endcomponent
    {{-- <div class="breadcrumbs-area ptb-10 bg-4 mb-30">
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
    </div> --}}

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


                        </div>
                    </div>

                    {{-- <div class="comments-2-area p-30-20 mtb-50 bg-2">
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
                    </div> --}}
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
                    <br>
                    {{-- <div class="categories-area border-2 mtb-35">
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
                    </div> --}}

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

                    {{-- <div class="Archives-area border-2">
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
                    </div> --}}

                    {{-- <div class="Meta-area border-2 mtb-30">
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
                    </div> --}}
                </div>

            </div>
        </div>
    </div>

    @component('components.footer') @endcomponent
@endsection
