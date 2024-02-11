@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0 m-0 shadow-lg">
        <div class="row">
            <div class="col home-banner" style="position: relative; text-align: center; color: white;">
                <img src="{{ asset('img/pricing/banner.png') }}" alt="Banner Image">
                <div class="display-6 custom-text-red" style=" position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%);">
                    Maximize your benefits <br> with Karokh WiFi.
                    <p class="text-secondary">Service Selection, Your Style, Your Smile!</p>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
               <div>
                   <p class="display-5">
                       Monthly Flex: Plans to Boost Customer Buzz from Day One!
                   </p>
                   <p class="text-secondary">
                       A safe online space to sell and oversee various venues. Just need an internet connection to handle it
                       anywhere, Anytime.!
                       Select a plan that suits your needs. KAROKH WIFI LLC offers you unparalleled flexibility and scalability
                       Every plan comes with all available features. Begin your journey today for free.
                   </p>
               </div>
                <div>
                    <p class="display-5">
                        Connect with our specialists to delve into the details of your needs.
                    </p>
                    <p class="text-secondary">
                        Every partner has different budgets and needs based on their selling plans and properties. We'll create a proposal that suits your specific requirements.
                    </p>
                    <button class="btn custom-red rounded text-white" style="width: 200px;">Get in touch</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    <img class="shadow rounded rounded-5" src="{{ asset('img/pricing/side-image-1.png') }}" alt="Image 1">
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    <img class="shadow rounded rounded-5" src="{{ asset('img/pricing/side-image-2.png') }}" alt="Image 1">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <p class="display-5 custom-text-red mt-5 mt-md-0">
                        Why should I subscribe, you might wonder?
                    </p>
                    <p class="text-secondary">
                        Because you will get
                    </p>
                </div>
                <div class="row mt-5">
                   <div class="col-12 col-md-6 text-center">
                       <img style="height: 150px; width: auto;" class="mb-5" src="{{ asset('img/pricing/white-label.png') }}" alt="White label">
                       <p class="text-secondary">100% White Label</p>
                   </div>
                   <div class="col-12 col-md-6 text-center">
                       <img style="height: 150px; width: auto;" class="mb-5" src="{{ asset('img/pricing/wifi.png') }}" alt="White label">
                       <p class="text-secondary">100% White Label</p>
                   </div>
                </div>
            </div>

        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

    <div class="container-fluid bg-secondary py-5" style="box-shadow: inset 0 0 50px #2f2f2f;">
        <div class="container p-3">
            <div class="row gap-5 justify-content-center">

                <div class="col-12 col-md-3 text-center text-white bg-dark p-3 rounded"  style="line-height: 40px;">
                    <h5>Standard</h5>
                    <p>
                        Improve on-site experiences by giving clients access to the platform
                    </p>
                    <h3>
                        19.99$ /mo
                    </h3>
                    <h3 class="custom-text-red">
                        Free Trial for 30 Days
                    </h3>
                    <p>
                        Venue with <span class="text-decoration-underline">little</span> density <br>
                        Users indefinitely <br>
                        Zero-cost activation <br>
                        Feeds and Social Logins <br>
                        Guest Inquiries <br>
                        PMS Integration <br>
                        Payment Gateways <br>
                        Automated Processes <br>
                        Reports <br>
                    </p>
                </div>
                <div class="col-12 col-md-3 text-center text-white bg-dark p-3 rounded"  style="line-height: 40px;">
                    <h5>Standard</h5>
                    <p>
                        Improve on-site experiences by giving clients access to the platform
                    </p>
                    <h3>
                        19.99$ /mo
                    </h3>
                    <h3 class="custom-text-red">
                        Free Trial for 30 Days
                    </h3>
                    <p>
                        Venue with <span class="text-decoration-underline">medium</span> density <br>
                        Users indefinitely <br>
                        Zero-cost activation <br>
                        Feeds and Social Logins <br>
                        Guest Inquiries <br>
                        PMS Integration <br>
                        Payment Gateways <br>
                        Automated Processes <br>
                        Reports <br>
                    </p>
                </div>
                <div class="col-12 col-md-3 text-center text-white bg-dark p-3 rounded"  style="line-height: 40px;">
                    <h5>Standard</h5>
                    <p>
                        Improve on-site experiences by giving clients access to the platform
                    </p>
                    <h3>
                        19.99$ /mo
                    </h3>
                    <h3 class="custom-text-red">
                        Free Trial for 30 Days
                    </h3>
                    <p>
                        Venue with <span class="text-decoration-underline">high</span> density <br>
                        Users indefinitely <br>
                        Zero-cost activation <br>
                        Feeds and Social Logins <br>
                        Guest Inquiries <br>
                        PMS Integration <br>
                        Payment Gateways <br>
                        Automated Processes <br>
                        Reports <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

@endsection
