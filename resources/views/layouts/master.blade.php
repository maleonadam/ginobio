<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Genomics & Bioinformatics</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- Styles -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
        <!-- Search section -->
        <div class="click-closed"></div>

        <div class="box-collapse">
            <div class="title-box-d">
                <h3 class="title-d">Search Website</h3>
            </div>
            <span class="close-box-collapse right-boxed ion-ios-close"></span>
            <div class="box-collapse-wrap form">
                <form class="form-a">
                    <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                        <!-- <label for="Type">Keyword</label> -->
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Header/Navbar -->
        <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
            <div class="container">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a class="navbar-brand text-brand" href="{{ route('welcome') }}">Genomics<span class="color-b"></span></a>
                <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                    data-target="#navbarTogglerDemo01" aria-expanded="false">
                    <span class="fa fa-search" aria-hidden="true"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutpage') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gallery-page') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faqs-page') }}">FAQs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Publications
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Publication One</a>
                                <a class="dropdown-item" href="#">Publication Two</a>
                                <a class="dropdown-item" href="#">Publication Three</a>
                                <a class="dropdown-item" href="#">Publication Four</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactspage') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                    <span class="fa fa-search" aria-hidden="true"></span>
                </button>
            </div>
        </nav>

        <!-- Content section -->
        @yield('content')

        <!-- Footer -->
        <section class="section-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="widget-a">
                            <div class="w-header-a">
                                <h3 class="w-title-a text-brand">Genomics & Bioinformatics Platform</h3>
                            </div>
                            <div class="w-footer-a">
                                <ul class="list-unstyled">
                                    <li class="color-a">
                                        <span class="color-text-a">International Livestock Research Institute,</span>
                                    </li>
                                    <!-- <li class="color-a">
                                        <span class="color-text-a">Naivasha Rd, Nairobi, Kenya.</span>
                                    </li> -->
                                    <li class="color-a">
                                        <span class="color-text-a">Phone .</span> +254 724 567002
                                    </li>
                                    <li class="color-a">
                                        <span class="color-text-a">Email .</span> samoyo@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 section-md-t3">
                        <div class="widget-a">
                            <div class="w-header-a">
                                <h3 class="w-title-a text-brand">Quick Links</h3>
                            </div>
                            <div class="w-body-a">
                                <div class="w-body-a">
                                    <ul class="list-unstyled">
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="{{ route('welcome') }}">Home</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="{{ route('aboutpage') }}">About</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="{{ route('gallery-page') }}">Gallery</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="{{ route('faqs-page') }}">FAQs</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="#">Publications</a>
                                        </li>
                                        <li class="item-list-a">
                                            <i class="fa fa-angle-right"></i> <a href="{{ route('contactspage') }}">Contacts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 section-md-t3">
                        <div class="widget-a pt-5">
                            <a href="https://www.ilri.org/"><img src="{{ asset('assets/img/ilri5.png') }}" alt="ilri" width="400" height="150"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-footer">
                            <p class="copyright color-text-a">
                            &copy;
                            <span class="color-a">Genomics & Bioinformatics</span> 2022.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> 
        <div id="preloader"></div>

        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>