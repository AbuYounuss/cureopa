@extends('layouts.app')

@section('title', 'Cureopa.com (Health & Beauty)')


@section('content')

    @component('components.header') @endcomponent

    <!-- Privacy Policy Area Start -->
    <div class="privacy-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-40 text-center">
                    <div class="section-title">
                        <h2>Privacy Policy</h2>
                        <p>Your privacy is critically important to us at Cureopa.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-content">
                        <h3>1. Introduction</h3>
                        <p>Welcome to Cureopa.com. We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about our policy, or our practices with regards to your personal information, please contact us at info@cureopa.com.</p>

                        <h3 class="mt-30">2. Information We Collect</h3>
                        <p>We collect personal information that you voluntarily provide to us when registering at Cureopa, expressing an interest in obtaining information about us or our health and beauty products, or otherwise contacting us.</p>
                        <ul style="list-style-type: disc; margin-left: 20px; color: #888; line-height: 28px;">
                            <li><strong>Personal Details:</strong> Name, email address, contact number, and shipping address.</li>
                            <li><strong>Payment Data:</strong> We collect data necessary to process your payment if you make purchases.</li>
                        </ul>

                        <h3 class="mt-30">3. How We Use Your Information</h3>
                        <p>We use the information we collect or receive to process your orders, facilitate delivery, and to manage your account. We may also use your information to send you marketing and promotional communications regarding new skincare and wellness products, provided you have opted in.</p>

                        <h3 class="mt-30">4. Data Security</h3>
                        <p>We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, please also remember that we cannot guarantee that the internet itself is 100% secure.</p>

                        <h3 class="mt-30">5. Contact Us</h3>
                        <p>If you have questions or comments about this policy, you may email us at info@cureopa.com or by post to:<br>
                        <strong>Cureopa</strong><br>
                        47 W 13th St, New York, NY 10011, USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Policy Area End -->

    @component('components.footer') @endcomponent

@endsection
