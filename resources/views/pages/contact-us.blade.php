@extends('layouts.app')

@section('content')

    <div style="margin-bottom: 100px;"></div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6">
                <div class="text-center display-6">

                    <div class="display-6">
                        Curious to see how it works?
                    </div>

                    <div class="mt-5">
                        Reach out for a demo and let's make things simple!
                    </div>

                    <div class="mt-5">
                        <img style="width: 200px;" src="{{ asset('img/contact-us/hotspot-manager.png') }}" alt="Image">
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6">
                <form action="">

                    <div class="row">
                        <div class="col-4">
                            <label class="form-label" for="name">Your Full Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="col-8">
                            <label class="form-label" for="email">Your E-Mail Address <span class="text-danger">*</span></label>
                            <input type="text" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <label class="form-label" for="phone">Your Phone Number <span class="text-danger">*</span></label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-4">
                            <label class="form-label" for="company_name">Your Company Name <span class="text-danger">*</span></label>
                            <input type="text" id="company_name" class="form-control">
                        </div>
                        <div class="col-8">
                            <label class="form-label" for="company_type">Your Company Type <span class="text-danger">*</span></label>
                            <input type="text" id="company_type" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <label class="form-label" for="country">Your Country <span class="text-danger">*</span></label>
                            <input type="text" id="country" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <label class="form-label" for="message">Your Message <span class="text-danger">*</span></label>
                            <textarea id="message" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                           <button class="btn custom-red text-white" style="width: 200px;">Contact Karokh WiFi</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div style="margin-bottom: 200px;"></div>

@endsection
