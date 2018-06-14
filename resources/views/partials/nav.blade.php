<!-- Header -->
  <header id="header" class="header header-light">
      <div class="header-inner">

          <!-- Logo -->
          <div class="logo">
              <a href="{{route('main')}}">
                  <img class="logo-dark" src="{{asset('theme/img/logo-dark.png')}}" alt="Apollo" />
              </a>
          </div>
          <!-- End Logo -->

          <!-- Mobile Navbar Icon -->
          <div class="nav-mobile nav-bar-icon">
              <span></span>
          </div>
          <!-- End Mobile Navbar Icon -->

          <!-- Navbar Navigation -->
          @if(\Request::route()->getName() == "main")
          <div class="nav-menu singlepage-nav">
                    <ul class="nav-menu-inner">
                        <li>
                            <a class="current" href="/#intro">Home</a>
                        </li>
                        <li>
                            <a class="" href="/#about">About</a>
                        </li>
                        <li>
                            <a class="" href="/#portfolio">Portfolio</a>   
                        </li>
                        <li>
                            <a class="" href="/#service">Service</a>
                        </li>
                        <li>
                            <a class="" href="/#contact-us">Contact</a>
                        </li>
                    </ul>
                </div>
                @else
                <div class="nav-menu">
                    <ul class="nav-menu-inner">
                        <li>
                            <a href="{{route('main')}}#intro">Home</a>
                        </li>
                        <li>
                            <a href="{{route('projects')}}">Portfolio</a>
                        </li>
                    </ul>
                </div>
                @endif 
          
          <!-- End Navbar Navigation -->

      </div>
  </header>
  <!-- End Header -->
