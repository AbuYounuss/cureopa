@extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')


@section('content')
@component('components.header')@endcomponent

<div>
    	<!-- about-area start -->

	{{-- <div class="about-main-area">
		<div class="about-title-area pb-50">
			<div class="container">
				<div class="about-heading">
					<h1>About us</h1>
				</div>
			</div>
		</div> --}}

		<div class="about-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-content mb-30">
							<div class="about-title mb-30">
								<h2>Welcome to Cureopa</h2>
							</div>
							<p>At Cureopa, we believe that health and beauty go hand in hand. Our mission is to provide you with the highest quality wellness and skincare products that empower you to look and feel your absolute best. From natural supplements to luxurious beauty essentials, every item in our store is carefully curated to support your holistic lifestyle.</p>
							<p>We are committed to authenticity, purity, and sustainability. Our team works tirelessly to source ingredients and products that are safe, effective, and ethically produced. Whether you are beginning your skincare journey or looking for advanced health solutions, Cureopa is here to support you with products you can trust.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-img mb-30">
							<div class="about-img-3D">
								<img src="assets/images/about/1.webp" alt="" />
							</div>
						</div>
					</div>
				</div>

				<!-- team-area -->
				<div class="team-area mt-50">
					<div class="team-title mb-40">
						<h2>Meet Our Team</h2>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="team-wrapper bg-fff mb-50">
								<div class="team-img about-img">
									<img src="assets/images/about/2.webp" alt="" />
								</div>
								<div class="team-info p-20">
									<h3>Nick Monroe</h3>
									<span>Skin Care Specialist</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="team-wrapper bg-fff mb-50">
								<div class="team-img about-img">
									<img src="assets/images/about/3.webp" alt="" />
								</div>
								<div class="team-info p-20">
									<h3>Diana Grey</h3>
									<span>Wellness Advisor</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="team-wrapper bg-fff mb-50">
								<div class="team-img about-img">
									<img src="assets/images/about/4.webp" alt="" />
								</div>
								<div class="team-info p-20">
									<h3>Anthony Scott</h3>
									<span>Product Manager</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="skill-area mb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="skill-wrapper mb-35">
							<div class="skill-title mb-30">
								<h2>Our Commitment</h2>
							</div>
							<h5><em>Dedicated to your health, beauty, and overall well-being.</em></h5>
							<p>We prioritize quality and transparency above all else. At Cureopa, we strive to maintain the highest standards in the health and beauty industry, ensuring that our products meet your expectations for safety, efficacy, and environmental responsibility. We carefully vet every brand and ingredient to bring you only the best.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="skill-wrapper">
							<div class="progress">
								<div class="progress-bar wow fadeInLeftBig progress-bar-1" role="progressbar">
									<span>Natural Ingredients</span> <span>95%</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar  wow fadeInLeftBig progress-bar-2" role="progressbar">
									<span>Cruelty-Free </span> <span>100%</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar  wow fadeInLeftBig progress-bar-3" role="progressbar">
									<span>Customer Satisfaction</span> <span>98%</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar  wow fadeInLeftBig progress-bar-4" role="progressbar">
									<span>Quality Assurance </span> <span>95%</span>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar  wow fadeInLeftBig progress-bar-5" role="progressbar">
									<span>Global Sourcing</span> <span>90%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @component('components.footer')@endcomponent

</div>

@endsection
