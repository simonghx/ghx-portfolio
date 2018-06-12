<!-- Portfolio Section -->
        <section id="portfolio" class="section-padding">
            <div class="container text-center">
                <h1>My Portfolio</h1>
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

            <div class="container mt-60">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="action-box-title">Do you want to see more ?</h3>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a class="scroll-down btn btn-xlg btn-color-outline" href="#contact-us">More Projects</a>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Portfolio Section -->