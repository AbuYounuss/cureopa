@extends('layouts.app')

@section('title', 'Contact Us | Your Website')

@section('content')
@component('components.header') @endcomponent

<!-- Contact Us Section Start -->
<div class="contact-us-section py-5">
    <div class="container">
        <div class="row">
            <!-- Left Side: Contact Information -->
             <!-- Left Side: Contact Information -->
    <div class="col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="contact-info-box shadow-lg rounded-lg p-5 bg-light">
            <h3 class="text-center custom-color mb-4">Get in Touch</h3>

            <!-- Location Info -->
            <div class="contact-info-item mb-4">
                <div class="icon-box bg-primary text-white p-3 rounded-circle d-inline-block">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-info-content d-inline-block ml-3">
                    <h4>Our Location</h4>
                    <p>New York, Tillman Rd #D West Point, NY 10996</p>
                </div>
            </div>

            <!-- Working Hours -->
            <div class="contact-info-item mb-4">
                <div class="icon-box bg-success text-white p-3 rounded-circle d-inline-block">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="contact-info-content d-inline-block ml-3">
                    <h4>Working Hours</h4>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-item">
                <div class="icon-box bg-danger text-white p-3 rounded-circle d-inline-block">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-info-content d-inline-block ml-3">
                    <h4>Need Help?</h4>
                    <p><a href="tel:+123456789">+(123) 456-789</a></p>
                </div>
            </div>
        </div>
    </div>

            <!-- Right Side: Contact Form -->
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="contact-form-box shadow-lg rounded-lg p-5 bg-light">
                    <h3 class="text-center custom-color mb-4">Contact Us</h3>

                    <form id="contactForm" action="#" method="post">
                        <div class="form-group mb-3">
                            <input type="text" name="first_name" class="form-control rounded-pill" placeholder="Full Name" required />
                        </div>

                        <div class="form-group mb-3">
                            <input type="email" name="email" class="form-control rounded-pill" placeholder="Your Email Address" required />
                        </div>

                        <div class="form-group mb-3">
                            <input type="tel" name="phone" class="form-control rounded-pill" placeholder="Phone Number" required />
                        </div>

                        <div class="form-group mb-3">
                            <textarea name="message" class="form-control rounded-pill" rows="1" placeholder="Your Message..." required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-gradient text-white">Send Message</button>
                        </div>
                    </form>

                    <div id="msgSubmit" class="h4 text-center" style="display:none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Section End -->

@component('components.footer') @endcomponent

@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">  <!-- Font Awesome CDN -->
@endpush

@push('scripts')
<!-- jQuery validation and AJAX submission -->
<script>
    $(document).ready(function () {
        // Handle form submission
        $("#contactForm").on("submit", function (event) {
            event.preventDefault();
            submitForm();
        });

        function submitForm() {
            // AJAX call to submit the form
            $.ajax({
                type: "POST",
                url: "form-process.php", // Adjust URL for your back-end script
                data: $("#contactForm").serialize(),
                success: function (response) {
                    if (response === "success") {
                        formSuccess();
                    } else {
                        submitMSG(false, response);
                    }
                },
                error: function () {
                    submitMSG(false, "Your country is not supported. Please try again.");
                }
            });
        }

        function formSuccess() {
            $("#contactForm")[0].reset();
            submitMSG(true, "Message Sent Successfully!");
        }

        function submitMSG(valid, msg) {
            var msgClasses = valid ? "h4 text-success" : "h4 text-danger";
            $("#msgSubmit").removeClass().addClass(msgClasses).text(msg).fadeIn();
        }
    });
</script>
@endpush
