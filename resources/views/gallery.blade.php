@extends('layouts.master')

@section('content')
    <main id="main">
        <!-- Intro section -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Gallery</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Gallery
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </section>

        <!-- Gallery section -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid1.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid1.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid2.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid2.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid3.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid3.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid1.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid1.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid1.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid1.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid2.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid2.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid3.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid3.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid2.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid2.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid1.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid1.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid2.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid2.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid3.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid3.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="assets/img/slid2.jpg" class="galleery-lightbox" data-gallery="gallery-item">
                        <img src="assets/img/slid2.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                </div>

            </div>
        </section>
    </main>
@endsection