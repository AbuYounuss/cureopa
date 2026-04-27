@extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')


@section('content')

    @component('components.header') @endcomponent

<!-- Terms & Conditions Area Start -->
    <div class="privacy-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-40 text-center">
                    <div class="section-title">
                        <h2>Terms & Conditions</h2>
                        <p>Please read these terms carefully before using Cureopa.com.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-content">
                        <h3>1. Agreement to Terms</h3>
                        <p>By accessing and purchasing from Cureopa.com, you agree to be bound by these Terms & Conditions. If you do not agree with any part of these terms, please do not use our website.</p>

                        <h3 class="mt-30">2. Products & Medical Disclaimer</h3>
                        <p>All health, wellness, and beauty products sold on Cureopa are for personal use only. The information provided on our website is for educational purposes and is not intended as a substitute for professional medical advice, diagnosis, or treatment. Always consult with a qualified healthcare provider before starting any new skincare or supplement regimen.</p>

                        <h3 class="mt-30">3. Orders, Pricing, and Payments</h3>
                        <p>We strive to ensure all details, descriptions, and prices are accurate. However, errors may occur. We reserve the right to cancel or refuse any order placed for a product listed at an incorrect price. Payment is required in full before your order is dispatched.</p>

                        <h3 class="mt-30">4. Returns & Refunds</h3>
                        <p>Customer satisfaction is our priority. If you are not satisfied with your purchase, please contact us within 14 days of receipt. Products must be returned in their original, unopened packaging to be eligible for a refund. For hygiene reasons, certain cosmetic and skincare products cannot be returned once opened.</p>

                        <h3 class="mt-30">5. Contact Information</h3>
                        <p>If you have any questions regarding these Terms & Conditions, please reach out to our support team:<br>
                        <strong>Email:</strong> info@cureopa.com<br>
                        <strong>Phone:</strong> +1 210 792 4219<br>
                        <strong>Address:</strong> 47 W 13th St, New York, NY 10011, USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Terms & Conditions Area End -->

    @component('components.footer') @endcomponent

@endsection
