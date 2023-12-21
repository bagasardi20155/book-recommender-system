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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <style>
            .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.showDropDown {display: block;}

        </style>
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="{{ asset("img/preloader.svg") }}" alt="">
                </div>
            </div>
        </div>
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
                                            <img src="img/logo/logo.png" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="#today-picks">Today Picks</a></li>
                                            <li><a href="#user-choice">Reader's Picks</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal" id="buttonSearch"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="/"><img src="img/logo/logo.png" alt="" title=""></a>
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
                                        <div class="dropdown">
                                            <div id="myDropdown" class="dropdown-content showDropDown" style="top: 50%;left: 50%;transform: translate(-50%, -50%);">
                                              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()" style="width: 350px">
                                              @foreach ($book_title as $data)
                                                  @foreach ($data as $title)
                                                      @foreach ($title as $book)
                                                        <a href="{{ route('detail', ['isbn' => $book[1], 'judul' => $book[3]]) }}">{{ $book[3] }}</a>
                                                      @endforeach
                                                      @break
                                                  @endforeach
                                              @endforeach
                                            </div>
                                          </div>
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
            <!-- banner-area -->
            <section class="banner-area banner-bg" data-background="{{ asset("img/bg/movie_details_bg.jpg") }}">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-content">
                                <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Selamat Membaca</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">READ RADAR</h2>
                                <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid</span>
                                </div>
                                <a href="#today-picks" class="banner-btn btn"><i class="fas fa-play"></i> Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-area-end -->
            <!-- today-picks-area -->
            <section class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg" id="today-picks">
                <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-left">
                                <h2 class="title">Today's Picks</h2>
                                <h5></h5>
                                <span class="sub-title">Stay literary savvy with fresh titles that captivate and quench curiosity</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active owl-carousel">
                                @foreach ($data_today as $today)
                                    @foreach ($today as $data)    
                                        <div class="movie-item mb-50">
                                            <div class="movie-poster" style="position: relative">
                                                <a href="{{ route('detail', ['isbn' => $data[1], 'judul' => $data[3]]) }}
                                                "><img src="" alt="Cover Tidak Ditemukan" style="height: 450px;z-index: -100"></a>
                                                <a href="{{ route('detail', ['isbn' => $data[1], 'judul' => $data[3]]) }}
                                                "><img src="{{ $data[7] }}" alt="" style="height: 450px; z-index: 100; position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></a>
                                            </div>
                                            <div class="movie-content">
                                                <div class="top">
                                                    <h5 class="title"><a href="{{ route('detail', ['isbn' => $data[1], 'judul' => $data[3]]) }}
                                                        ">{{ $data[3] }}</a></h5>
                                                    <span class="date">{{ $data[5] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- today-picks-area end-->
            <!-- new-drop-area -->
            <section class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg" id="user-choice">
                <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-left">
                                <h2 class="title">User Choices</h2>
                                <h5></h5>
                                <span class="sub-title">Stay literary savvy with fresh titles that captivate and quench curiosity</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active owl-carousel">
                                @foreach ($data_user as $today)
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
            <!-- new-drop-area-end -->
        </main>
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
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
            // function myFunction() {
            //   document.getElementById("myDropdown").classList.toggle("show");
            // }

            // document.getElementById('searchButton').addEventListener('click', function() {
            //     document.getElementById("myDropdown").classList.add("showDropDown");
            // });
            
            function filterFunction() {
              var input, filter, ul, li, a, i;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              div = document.getElementById("myDropdown");
              a = div.getElementsByTagName("a");
              for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  a[i].style.display = "";
                } else {
                  a[i].style.display = "none";
                }
              }
            }
            </script>
    </body>
</html>
