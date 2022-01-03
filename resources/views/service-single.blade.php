@extends('layouts.master')

@section('content')
    <main id="main">
        <!-- Intro section -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Sanger Sequencing</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Sanger
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="servi">
            <div class="container">

                <div class="section-title">
                <!-- <h2>About Us</h2> -->
                <p>Sanger sequencing, also known as the “chain termination method”, is a method for determining the
                        nucleotide sequence of DNA. The method was developed by two-time Nobel Laureate Frederick Sanger
                        and his colleagues in 1977, hence the name 'Sanger' sequencing. At Segolip, sequencing is done
                        using BigDye Terminator v3.1 Chemistry.</p>
                </div>

                <div class="row content">
                <div class="col-lg-6">
                    <p>
                    Electrophoresis is done on the 48-capillary
                        Array 3730 DNA Analyzer. Read length of 700 bases or more is guaranteed for a common plasmid
                        template. Similar read lengths can be obtained from PCR products.
                    </p>
                    <div class="card mb-4">
                        <img src="{{ asset('assets/img/slid1.jpg') }}" class="card-img-top" alt="">
                    </div>
                    <p>Sequence data is generated and
                        shared in two formats: as a text file and ABI file (electropherogram/raw data). 
                        Data is accessible through a secure web account.</p>
                    <p><b>Service requirements</b></p>
                    <ul>
                    <li><i class="ri-check-double-line"></i> A duly completed service request form.</li>
                    <li><i class="ri-check-double-line"></i> Submission of purified PCR products/plasmids and primers that meet the following criterion.</li>
                    <!-- <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li> -->
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        <b>Recommended purification kits</b>
                    </p>
                    <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                    <ul>
                        <li><i class="ri-check-double-line"></i> Plasmids
                            <ol>
                                <li>Promega Wizard® SV Clean-Up Systems</li>
                                <li>Qiagen Plasmid DNA Kits</li>
                            </ol>    
                        </li>
                        <li><i class="ri-check-double-line"></i> PCR Products
                            <ol>
                                <li>Qiagen QIAquick PCR Purification Systems</li>
                                <li>GeneJet PCR Purification Kit (Sigma Aldrich)</li>
                                <li>Promega Wizard PCR Clean-Up Systems</li>
                                <li>Gel Purification Systems (Promega or Qiagen) - Applicable where samples have multiple bands.</li>
                            </ol>
                        </li>
                    </ul>
                </div>
                </div>

            </div>
        </section>
    </main>
@endsection