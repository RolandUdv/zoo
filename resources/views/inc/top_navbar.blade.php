  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #014e2e">
      <div class="container">
          <a href="{{ url('/') }}">
              <img src="{{ asset('../resources/img/zoo-logo2.jpeg') }}" style="height:8em; padding-left: 4em;"
                  alt="zoo-logo" class="d-flex justify-content-center mx-auto"></a>
          {{-- <a href="{{ url('/') }}" class="navbar-brand text-white">{{config('app.name', 'Brand')}}</a> --}}

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
              aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item text-white">
                      <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/buy') }}">Buy Tickets</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/animal') }}">Animals</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/events') }}">Events</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/news') }}">News</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/schools') }}">Schools</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/adopt') }}">Adopt an animal</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/contact') }}">Contact Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/about') }}">About Us</a>
                  </li>
                  {{-- @if  (\Auth::user()->isAdmin == '1')  --}}
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ url('/admin') }}">Admin</a>
                  </li>
                  {{-- @else
                  @endif --}}

                  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              </ul>
          </div>
      </div>
  </nav>



{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
