@extends('layouts.app')

@section('content')

    <div style="margin-bottom: 100px;"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <div class="display-6">
                    Give it a spin with the demo. Dive into the <br> Welcome Portal adventure!
                </div>
                <div class="text-secondary mt-3">
                    The Welcome Portal is where guests land after connecting to WiFi. Check out what you can <br> do with your Karokh WIFI!
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 100px;"></div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <div class="display-6">
                        <img  src="{{ asset('img/gallery/1.png') }}" alt="Image">
                    </div>
                    <div class="text-secondary mt-3">
                        Mobile Version
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <div class="display-6">
                        <img  src="{{ asset('img/gallery/2.png') }}" alt="Image">
                    </div>
                    <div class="text-secondary mt-3">
                        Tablet Version
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <div class="display-6">
                        <img  src="{{ asset('img/gallery/3.png') }}" alt="Image">
                    </div>
                    <div class="text-secondary mt-3">
                        Laptop Version
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="margin-bottom: 200px;"></div>

@endsection
