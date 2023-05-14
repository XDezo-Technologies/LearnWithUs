<body>
    <header>
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img width="70" height="50"
                        src="{{ asset('front-assets/img/logo.png') }}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ '/' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ '/aboutus' }}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Course
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ '/course-category' }}">Course Category</a>
                                <a class="dropdown-item" href="{{ '/course-detail' }}">Course Detail</a>
                                <a class="dropdown-item" href="{{ '/instructor' }}">Instructors</a>
                                {{-- <a class="dropdown-item" href="#">Course 3</a> --}}
                            </div>
                        </li>
                        {{-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Instructor
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Instructor 1</a>
                              <a class="dropdown-item" href="#">Instructor 2</a>
                              <a class="dropdown-item" href="#">Instructor 3</a>
                          </div>
                      </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ '/blog' }}">Blog</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><i
                                            class="fa-regular fa-user btn btn-outline-success rounded-pill py-1 px-3 ms-4"
                                            title="Log-in"></i></a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{-- {{ Auth::user()->name }} --}}
                                    <i class="fa-regular fa-user btn btn-outline-success rounded-pill py-1 px-3 ms-4"
                                        title="User Profile"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @auth
                                        <a class="dropdown-item" href="{{ url('user-profile') }}">User-Profile
                                        </a>
                                    @endauth
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Navbar ends --}}

    </header>
