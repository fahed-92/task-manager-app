<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>TaskManager</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
<!--header section start -->
<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href=""><img src="{{asset('images/logo.png')}}"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('board/') }}">Your Board</a>
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
<!-- -->
@yield('content')

<!-- -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="location_main">
            <div class="location_text"><img src="images/map-icon.png"><span class="padding_left_10"><a href="#">Location</a></span></div>
            <div class="location_text center"><img src="images/call-icon.png"><span class="padding_left_10"><a href="#">Call ; 01 1234567890</a></span></div>
            <div class="location_text right"><img src="images/mail-icon.png"><span class="padding_left_10"><a href="#">demo@gmail.com</a></span></div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="footer_taital">About</h2>
                    <p class="footer_text">There are many variations of passages of Lorem Ipsum available, but the majority havThere are many variations of passages of Lorem Ipsum available, but the majority hav</p>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer_taital">Services Link</h2>
                    <p class="footer_text">There are many variations of passages of Lorem Ipsum available, but the majority havThere are many variations of passages of Lorem Ipsum available, but the majority hav</p>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer_taital">Subscribe</h2>
                    <input type="text" class="Enter_text" placeholder="Enter Your Email" name="Enter Your Email">
                    <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                    <div class="social_icon">
                        <ul>
                            <li><a href="#"><img src="images/fb-icon.png"></a></li>
                            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                            <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                            <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                            <li><a href="#"><img src="images/youtub-icon.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">Copyright 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/popper.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('js/jquery-3.0.0.min.js')}}"></script>
<script src="{{URL::asset('js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{URL::asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>
<!-- javascript -->
<script src="{{URL::asset('js/owl.carousel.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
