@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col home-banner">
                <img src="{{ asset('img/home-banner.png') }}" alt="Banner Image">
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-6">
                    KAROKH WIFI LLC: Your smart solution for managing hotspots. Most hotel guests want Wi-Fi, and 98.4% expect
                    it when booking.
                </h1>
                <p class="text-center lead custom-text-red">
                    Seamless Wi-Fi for your clients, valuable insights for your business.
                </p>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>


    <div class="container-fluid">

        <div class="row" style="background-color: black;">
            <div class="col-12">
                <img class="img-fluid" style="width: 100%; height: auto; padding: 40px;" src="{{ asset('img/app.jpg') }}" alt="Karokh App">
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center display-6">
                    Main Aspects
                </p>

                <div class="row mt-5">
                    <div class="col-12 col-md-4 text-center">
                        <img src="{{ asset('img/main-aspects/1.png') }}" style="width: 80px; height: auto;"
                             alt="Main Aspect">
                        <p class="display-6 mt-3">Access Anywhere, Anytime</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img src="{{ asset('img/main-aspects/2.png') }}" style="width: 80px; height: auto;"
                             alt="Main Aspect">
                        <p class="display-6 mt-3">Simple Management and Installment</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img src="{{ asset('img/main-aspects/3.png') }}" style="width: 80px; height: auto;"
                             alt="Main Aspect">
                        <p class="display-6 mt-3">Unlimited Scalability</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="display-6 text-center">
                    Who uses Karokh Wi-Fi?
                </div>

                <div style="margin-top: 80px;"></div>

                <div class="row">
                    <div class="col-6">
                        <img class="" src="{{ asset('img/uses/1.png') }}" alt="Uses">
                    </div>
                    <div class="col-6">
                        <img class="" src="{{ asset('img/uses/2.png') }}" alt="Uses">
                    </div>
                    <div class="col-6">
                        <img class="" src="{{ asset('img/uses/3.png') }}" alt="Uses">
                    </div>
                    <div class="col-6">
                        <img class="" src="{{ asset('img/uses/4.png') }}" alt="Uses">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 200px;"></div>

@endsection
