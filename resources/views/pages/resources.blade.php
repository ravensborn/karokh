@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0 m-0 shadow-lg">
        <div class="row">
            <div class="col home-banner" style="position: relative; text-align: center; color: white;">
                <img src="{{ asset('img/resources/banner.png') }}" alt="Banner Image">
                <div class="display-6 text-start"
                     style=" position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%);">
                    Maximize your experience on <span class="custom-text-red">Karokh <br> WiFi</span> with our easy-to-follow guides <br> and tutorials
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 100px;"></div>

    <div class="row">
        <div class="col-12">
            <p class="text-center display-6">
                Expand your knowledge with us
            </p>
        </div>
    </div>

    <div style="margin-bottom: 100px;"></div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    <div>
                        <img class="rounded rounded" src="{{ asset('img/resources/left-side-1.png') }}"
                             alt="Image 1">
                    </div>
                   <div class="mt-3">
                       <button class="btn custom-red text-white">Learn More</button>
                   </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    <img class="rounded rounded-5" src="{{ asset('img/resources/right-side-1.png') }}"
                         alt="Image 2">
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    <img class="rounded rounded-5" src="{{ asset('img/resources/right-side-2.png') }}"
                         alt="Image 2">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    <div>
                        <img class="rounded rounded" src="{{ asset('img/resources/left-side-2.png') }}"
                             alt="Image 1">
                    </div>
                    <div class="mt-3">
                        <button class="btn custom-red text-white">Watch Tutorials</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    <div>
                        <img class="rounded rounded" src="{{ asset('img/resources/left-side-3.png') }}"
                             alt="Image 1">
                    </div>
                    <div class="mt-3">
                        <button class="btn custom-red text-white">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    <img class="rounded rounded-5" src="{{ asset('img/resources/right-side-3.png') }}"
                         alt="Image 2">
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

@endsection
