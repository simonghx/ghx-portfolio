@extends('layouts.front')

@section('content')
     <!-- Intro -->
        <!-- Intro -->
        <section id="intro" class="intro">
            <!-- Static Intro -->
            <div class="bg-image overlay-light parallax parallax-background2" data-background-img="{{asset('theme/img/full/16.jpg')}}">
                <div class="js-fullscreen-height container">
                    <div class="intro-content">
                        <div class="intro-content-inner">
                            <h5 class="alt-title intro-sub-title">We Are awesome Creativity</h5>
                            <h1 class="intro-title mb-50">Apollo Creative Digital<br>
                                Agency</h1>
                            <a href="#portfolio" class="btn btn-black-outline btn-lg scroll-down">Start Exploring</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Static Intro -->
        </section>
        <!-- End Intro -->
        <!-- End Intro -->

        @include('partials.about')

        @include('partials.skills')

        @include('partials.team')      

        @include('partials.testimonials')

        @include('partials.portfolio')

        @include('partials.counter')

        @include('partials.service')

        @include('partials.statement')

        @include('partials.form')

        @include('partials.infobar')
        
@endsection

        

   