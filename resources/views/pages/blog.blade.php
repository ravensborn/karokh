@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0 m-0 shadow-lg">
        <div class="row">
            <div class="col home-banner" style="position: relative; text-align: center; color: white;">
                <img src="{{ asset('img/blog/banner.png') }}" alt="Banner Image">
                <div class="display-6 text-start text-dark"
                     style=" position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%);">
                    See how <span class="custom-text-red">Karokh tech</span> can boost <br> your business fun and easy!
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 100px;"></div>


    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    Sample Text
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="text-center display-6">
                    Sample Text
                </div>
            </div>
        </div>
    </div>


    <div style="margin-bottom: 200px;"></div>

@endsection
