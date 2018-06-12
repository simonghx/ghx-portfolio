@extends('layouts.front')

@section('content')

<!-- Portfolio Section -->
        <section id="portfolio" class="section-padding">
            <div class="container text-center">
                <h1>All my projects</h1>
                <p class="lead-lg max-width-700 mb-60">Eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
            </div>

            <!-- Portfolio -->
            <div class="container">
                <ul class="portfolio-filter categories-filter">
                    <li><a data-filter="*" class="categories active">All</a></li>
                    <li><a data-filter=".branding" class="categories">Branding</a></li>
                    <li><a data-filter=".creative" class="categories">Creative</a></li>
                    <li><a data-filter=".photography" class="categories">Photography</a></li>
                    <li><a data-filter=".coffee" class="categories">coffee</a></li>
                </ul>

                <div class="rows portfolio-grid gallery-popup">

                    @foreach($projects as $project)
                        @include('components.project')
                    @endforeach

                </div>

            </div>
            <!-- End Portfolio -->

        </section>
        <!-- End Portfolio Section -->

@endsection