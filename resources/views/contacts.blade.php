@extends('layouts.master')

@section('content')
    <main id="main">
        <!-- Intro section -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Contact Us</h1>
                            <span class="color-text-a"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Contact
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact section -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-map box">
                            <div id="map" class="contact-map">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.331657546243!2d36.7280586!3d-1.2734374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f196b8cb30955%3A0x86c0b3fae81dd77a!2sILRI%20Offices!5e0!3m2!1sen!2ske!4v1616745882304!5m2!1sen!2ske"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 section-t8">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control form-control-lg form-control-a"
                                                placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                <div class="validate"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control form-control-lg form-control-a"
                                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                                <div class="validate"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control form-control-lg form-control-a"
                                                placeholder="Subject" data-rule="minlen:4"
                                                data-msg="Please enter at least 8 chars of subject">
                                                <div class="validate"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" name="message" cols="45" rows="8"
                                                data-rule="required" data-msg="Please write something for us"
                                                placeholder="Message"></textarea>
                                                <div class="validate"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="mb-3">
                                                <div class="loading">Loading</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-a">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 section-md-t3">
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="ion-ios-paper-plane"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Say Hello</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">Email.
                                                <span class="color-a">samoyo@gmail.com</span>
                                            </p>
                                            <p class="mb-1">Phone.
                                                <span class="color-a">+254 724 567002</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="ion-ios-pin"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Find us in</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">
                                                ILRI Offices, Naivasha Rd,
                                                <br> Nairobi.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <span class="ion-ios-redo"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Open hours</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">
                                                Mon-Fri: 8:00 am – 17:00 pm
                                                <br> Sat-Sun: Closed.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection