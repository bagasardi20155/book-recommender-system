<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ReadRadar | Navigating Your Literary Horizon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/animate.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
        <link rel="stylesheet" href="{{ asset("css/fontawesome-all.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/flaticon.css") }}">
        <link rel="stylesheet" href="{{ asset("css/odometer.css") }}">
        <link rel="stylesheet" href="{{ asset("css/aos.css") }}">
        <link rel="stylesheet" href="{{ asset("css/slick.css") }}">
        <link rel="stylesheet" href="{{ asset("css/default.css") }}">
        <link rel="stylesheet" href="{{ asset("css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
    </head>
    <body>

        <!-- preloader -->
        {{-- <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="{{ asset("img/preloader.svg") }}" alt="">
                </div>
            </div>
        </div> --}}
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="{{ asset("img/logo/logo.png") }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="{{ route('home') }}">Today Picks</a></li>
                                            <li><a href="{{ route('home') }}">Reader's Picks</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="bigdata-search.php" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="bigdata index.php"><img src="{{ asset("img/logo/logo.png") }}" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                            <!-- Modal Search -->
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form>
                                            <input type="text" placeholder="Search here...">
                                            <button><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search-end -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- books-details-area -->
            <section class="movie-details-area" data-background="{{ asset("img/bg/movie_details_bg.jpg") }}">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        @foreach ($data_detail as $detail)
                        <div class="col-xl-3 col-lg-4">
                            <div class="movie-details-img" style="position: relative">
                                <img src="" alt="Cover Tidak Ditemukan" style="height: 450px;z-index: -100">
                                <img src="{{ $detail[7] }}" alt="" style="height: 450px; z-index: 1; position: absolute;top: -150px;left: 0;">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                                <div class="movie-details-content">
                                    <h5>{{ $detail[5] }}</h5>
                                    <h2>{{ html_entity_decode($detail[3]) }}</h2>
                                    <div class="banner-meta">
                                        <ul>
                                            <li class="category">
                                                <a href="#">ISBN {{ $detail[1] }}</a>
                                            </li>
                                            <li class="release-time">
                                                <span><i class="far fa-calendar-alt"></i> {{ $detail[5] }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                        <div class="movie-details-prime">
                                            <ul>
                                                <li class="share"><a href="#"><i class="fas fa-user "></i></a></li>
                                                <li class="streaming">
                                                    <h6>{{ $detail[4] }}</h6>
                                                </li>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="movie-details-btn">
                                <a href="img/poster/movie_details_img.jpg" class="download-btn" download="">Download <img src="fonts/download.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- books-details-area-end -->

            <!-- recommendation-for-you-area -->
            <section class="tv-series-area tv-series-bg" data-background="{{ asset("img/bg/tv_series_bg02.jpg") }}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">Recommendations</span>
                                <h2 class="title">FOR YOU</h2>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active owl-carousel">
                                @foreach ($rec as $today)
                                    @foreach ($today as $data)
                                        @foreach ($data as $choice)
                                            <div class="movie-item mb-50">
                                                <div class="movie-poster" style="position: relative">
                                                    <a href="{{ route('detail', ['isbn' => $choice[1], 'judul' => $choice[3]]) }}
                                                    "><img src="" alt="Cover Tidak Ditemukan" style="height: 450px;z-index: -100"></a>
                                                    <a href="{{ route('detail', ['isbn' => $choice[1], 'judul' => $choice[3]]) }}
                                                    "><img src="{{ $choice[7] }}" alt="" style="height: 450px; z-index: 100; position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></a>
                                                </div>
                                                <div class="movie-content">
                                                    <div class="top">
                                                        <h5 class="title"><a href="{{ route('detail', ['isbn' => $choice[1], 'judul' => $choice[3]]) }}
                                                            ">{{ $choice[3] }}</a></h5>
                                                        <span class="date">{{ $choice[5] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @break
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- recommendation-for-you-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="footer-logo">
                                    <a href="/"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="footer-menu">
                                    <nav>
                                        <ul class="navigation">
                                            <li><a href="/">Today Picks</a></li>
                                            <li><a href="/">Reader's Picks</a></li>
                                        </ul>
                                        <div class="footer-search">
                                            <form action="#">
                                                <input type="text" placeholder="Find Favorite Movie">
                                                <button><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-quick-link-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="quick-link-list">
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2021. All Rights Reserved By <a href="/">ReadRadar</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-method-img text-center text-md-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="{{ asset("js/vendor/jquery-3.6.0.min.js") }}"></script>
        <script src="{{ asset("js/popper.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
        <script src="{{ asset("js/imagesloaded.pkgd.min.js") }}"></script>
        <script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
        <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
        <script src="{{ asset("js/jquery.odometer.min.js") }}"></script>
        <script src="{{ asset("js/jquery.appear.js") }}"></script>
        <script src="{{ asset("js/slick.min.js") }}"></script>
        <script src="{{ asset("js/ajax-form.js") }}"></script>
        <script src="{{ asset("js/wow.min.js") }}"></script>
        <script src="{{ asset("js/aos.js") }}"></script>
        <script src="{{ asset("js/plugins.js") }}"></script>
        <script src="{{ asset("js/main.js") }}"></script>
    </body>
</html>
