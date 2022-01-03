@extends('layouts.master')

@section('content')
    <main id="main">
        <!-- Intro section -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">All Fellowships</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Fellowships
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fellowships section -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row mb-5" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                        <img src="assets/img/slid1.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Web Development</h4>
                            <!-- <p class="price">$169</p> -->
                            </div>

                            <h3><a href="{{ route('fellowship-details-page') }}">Website Design</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <span><a href="#">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
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

                            <h3><a href="{{ route('fellowship-details-page') }}">Search Engine Optimization</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                                <span><a href="#">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
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

                            <h3><a href="{{ route('fellowship-details-page') }}">Copywriting</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                                <span><a href="#">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
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
                <div class="row mt-5" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                        <img src="assets/img/slid1.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Web Development</h4>
                            <!-- <p class="price">$169</p> -->
                            </div>

                            <h3><a href="{{ route('fellowship-details-page') }}">Website Design</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <span><a href="#">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
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

                            <h3><a href="{{ route('fellowship-details-page') }}">Search Engine Optimization</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                                <span><a href="#">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
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

                            <h3><a href="{{ route('fellowship-details-page') }}">Copywriting</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                                <span><a href="#">More details <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
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
    </main>
@endsection