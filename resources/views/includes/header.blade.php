
<!--header section start -->
<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href=""><img src="{{   asset('images/logo.png')    }}"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('board') }}">Your Board</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events.html">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="search_icon"><img src="{{asset('images/search-icon.png')}}"></div>
            </form>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
    </nav>
    <!--banner section start -->
    <div class="banner_section layout_padding">
        <div class="container-fluid">
            <section class="slide-wrapper">
                <div class="container-fluid">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Manage Your Projects</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital">Business Agency Profit Your Marketing</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
                                        <div class="btn_main">
                                            <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--banner section end -->
</div>
<!--header section end -->
