@extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')


@section('content')

    @component('components.header') @endcomponent

    <!-- Return Policy Area Start -->
    <div class="privacy-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-40 text-center">
                    <div class="section-title">
                        <h2>Return Policy</h2>
                        <p>Your satisfaction is our priority. Please review our return policy below.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-content">
                        <h3>1. Eligibility for Returns</h3>
                        <p>To be eligible for a return, your item must be unused and in the same condition that you received it. It must also be in the original packaging. Certain products, such as opened cosmetics and skincare items, are not eligible for return due to hygiene reasons.</p>
                        <h3 class="mt-30">2. Return Process</h3>
                        <p>If you are not satisfied with your purchase, please contact our customer support team within
                            14 days of receiving your order. We will provide you with instructions on how to return the item. Please ensure that the item is securely packaged to prevent damage during transit.</p>
                        <h3 class="mt-30">3. Refunds</h3>
                        <p>Once we receive your returned item, we will inspect it and notify you of the status of your refund. If your return is approved, we will process the refund to your original method of payment within a reasonable timeframe. Please note that shipping costs are non-refundable.</p>
                        <h3 class="mt-30">4. Contact Information</h3>
                        <p>If you have any questions about our return policy, please contact our support team:<br>
                        <strong>Email:</strong> info@cureopa.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Return Policy Area End -->


    @component('components.footer') @endcomponent

@endsection
