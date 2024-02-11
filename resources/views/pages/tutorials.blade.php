@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col home-banner" style="position: relative; text-align: center; color: white;">
                <img src="{{ asset('img/tutorials/banner.png') }}" alt="Banner Image">
                <div class="display-6 custom-text-red" style=" position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%);">
                    Maximize your benefits <br> with KAROKH WIFI LLC.
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 100px;"></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center display-6">
                    Unlock the fun – dive into these videos for expert tips!
                </p>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 100px;"></div>

   <div class="container">
       <div class="row">
           <div class="col-6">
               <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/_fZG-HtoTbY?si=yR5loIXKLsyuYLB9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           </div>
           <div class="col-6">
               <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/4tV-Q15Hce4?si=MWP1ebOSO_gyUDQU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           </div>
           <div class="col-6">
               <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/9qHb6hQTGtk?si=Pz76jwNG5chql8tV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           </div>
           <div class="col-6">
               <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/kqnvrjgyEMc?si=88oTNk10EqdwfGu3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           </div>
       </div>
   </div>

    <div style="margin-bottom: 200px;"></div>

@endsection
