@extends('layouts.master')

@section('content')
    <!-- Intro section -->
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slid1.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">
                                        </p>
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">Genomics </span>and
                                            <br>Bioinformatics platform
                                        </h1>
                                        <!-- <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Get Started</span></a>
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slid2.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">
                                            <!-- <br> 78345 -->
                                        </p>
                                        <!-- <h1 class="intro-title mb-4">
                                            <span class="color-b">Genomics </span> and
                                            <br> Bioinformatics platform
                                        </h1> -->
                                        <!-- <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Get Started</span></a>
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slid3.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">
                                            <!-- <br> 78345 -->
                                        </p>
                                        <!-- <h1 class="intro-title mb-4">
                                            <span class="color-b">Genomics </span> and
                                            <br> Bioinformatics platform
                                        </h1> -->
                                        <!-- <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Get Started</span></a>
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <main id="main">
        <!-- Services section -->
        <section class="section-property section-t8 services section-bg" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box icon-box-one">
                    <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b;"></i></div>
                    <h4 class="title"><a href="">Sanger Sequencing</a></h4>
                    <p class="description">Sanger sequencing, also known as the “chain termination method”, is a method for determining the
                        nucleotide sequence of DNA</p>
                    <p class="description mt-2"><a href="{{ route('service-page') }}">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box icon-box-two">
                    <div class="icon"><i class="bi bi-calendar4-week" style="color: #e9bf06;"></i></div>
                    <h4 class="title"><a href="">Fragment Analysis</a></h4>
                    <p class="description">Segolip Unit accepts multi-well plates (compatible with the instrument) containing DNA fragments
                        for size analysis on the 48-capillary Array 3730 DNA Analyzer</p>
                    <p class="description mt-2"><a href="#">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                    <div class="icon-box icon-box-three">
                    <div class="icon"><i class="bi bi-chat-text" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="">KASP Genotyping</a></h4>
                    <p class="description">KASP genotyping assays are based on competitive allele-specific PCR and enable
                        biallelic scoring of single nucleotide polymorphisms at specific loci</p>
                    <p class="description mt-2"><a href="#">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                    <div class="icon-box icon-box-four">
                    <div class="icon"><i class="bi bi-credit-card-2-front" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="">DNA/RNA Extraction</a></h4>
                    <p class="description">Segolip houses TANBead Maelstrom 9600 which is an
                        automated nucleic acid platform for high throughput RNA and DNA
                        extraction</p>
                    <p class="description mt-2"><a href="#">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                    <div class="icon-box icon-box-five">
                    <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                    <h4 class="title"><a href="">Oligonucleotide Procurement</a></h4>
                    <p class="description">Segolip facilitates oligonucleotide procurement at competitive prices to clients on a monthly basis</p>
                    <p class="description mt-2"><a href="#">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                    <div class="icon-box icon-box-six">
                    <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                    <h4 class="title"><a href="">Primer Ordering</a></h4>
                    <p class="description">The platform also offers KASP primer design and consolidated primer procurement. Submit your orders
                        for next consolidation by completing the Primer Ordering form</p>
                    <p class="description mt-2"><a href="#">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Technologies section -->
        <section id="about-boxes" class="section-testimonials section-t8 nav-arrow-a about-boxes">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Technologies</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="1000">
                        <div class="card">
                        <img src="assets/img/slid2.jpg" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-brush-4-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Technology One</a></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <p class="description mt-2"><a href="#">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                        <img src="assets/img/slid3.jpg" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-calendar-check-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Technology Two</a></h5>
                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p class="description mt-2"><a href="#">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fellowships section -->
        <section id="popular-courses" class="section-news section-t8 courses section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Fellowships</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ route('fellowships-page') }}">All
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                        <img src="assets/img/slid1.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Web Development</h4>
                            <!-- <p class="price">$169</p> -->
                            </div>

                            <h3><a href="{{ route('fellowship-details-page') }}">Website Design Training</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <span><a href="{{ route('fellowship-details-page') }}">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
                            </div>
                            <!-- <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;50
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;65
                            </div> -->
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="course-item">
                        <img src="assets/img/slid2.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Marketing</h4>
                            <!-- <p class="price">$250</p> -->
                            </div>

                            <h3><a href="{{ route('fellowship-details-page') }}">SEO Training</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                                <span><a href="{{ route('fellowship-details-page') }}">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
                            </div>
                            <!-- <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;35
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;42
                            </div> -->
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="course-item">
                        <img src="assets/img/slid3.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Content</h4>
                            <!-- <p class="price">$180</p> -->
                            </div>

                            <h3><a href="{{ route('fellowship-details-page') }}">Copywriting Training</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                                <span><a href="{{ route('fellowship-details-page') }}">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
                            </div>
                            <!-- <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;20
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;85
                            </div> -->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Funders section -->
        <section class="section-testimonials section-t8 nav-arrow-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Funders</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="testimonial-carousel" class="owl-carousel owl-arrow">
                    <section class="customer-logos slider">
                        <!-- <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div> -->
                        <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
                    </section>
                </div>
            </div>
        </section>
    </main>
@endsection