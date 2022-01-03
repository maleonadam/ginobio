@extends('layouts.master')

@section('content')
    <main id="main">
        <!-- Intro section -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">About Us</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    About
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- About section -->
        <!-- <section class="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="about-img-box">
                            <img src="assets/img/slid3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-12 section-t8">
                        <div class="row">
                            <div class="col-md-6 col-lg-5">
                                <img src="assets/img/slid1.jpg" alt="" class="img-fluid">
                            </div>

                            <div class="col-md-6 col-lg-5 section-md-t3">
                                <div class="title-box-d">
                                    <h3 class="title-d">
                                        <span class="color-d">Ge</span>nomics
                                        <br>
                                    </h3>
                                </div>
                                <p class="color-text-a">
                                    The genomics platform is equipped with and a Sanger capillary sequencer (ABI3730xl) that 
                                    provides sequencing and simple sequence repeat (SSR)-based genotyping services.  
                                    Four Illumina machines (one HiSeq2500, one NextSeq550, two MiSeqs) and associated 
                                    next generation sequencing (NGS) high throughput library preparation and quality 
                                    control equipment (Covaris, Bioanalyzers, Tape station). Besides Illumina technology, 
                                    the platform also runs Oxford Nanopore technology that is currently used to 
                                    sequence several African orphan crops for de novo genome assemblies.The research 
                                    capabilities of the genomics platform include:
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 section-t8">
                        <div class="row">
                            <div class="col-md-6 col-lg-5 section-md-t3">
                                <div class="title-box-d">
                                    <h3 class="title-d">
                                        <span class="color-d">Bio</span>informatics
                                        <br>
                                    </h3>
                                </div>
                                <p class="color-text-a">
                                    The bioinformatics platform leverages the genomics platform to provide advanced computational services, 
                                    data storage, bioinformatics support and high-performance computing services to NARS scientists and 
                                    other external users. The platform handles tens of thousands of molecular data and statistical 
                                    analysis transactions, and has generated hundreds of terabytes of data since its inception.
                                    The modular architecture of the computing infrastructure lends itself well to addressing 
                                    informatics problems of increasing size, scope and complexity.  Data generated from these 
                                    high throughput machines are channeled to ILRI’s high performance computer (HPC) clusters 
                                    for data analysis, interpretation and visualization.
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <img src="assets/img/slid2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="assets/img/slid1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3><span class="color-d">Ge</span>nomics</h3>
                            <p class="fst-italic">
                            The genomics platform is equipped with and a Sanger capillary sequencer (ABI3730xl) that 
                                    provides sequencing and simple sequence repeat (SSR)-based genotyping services.  
                                    Four Illumina machines (one HiSeq2500, one NextSeq550, two MiSeqs) and associated 
                                    next generation sequencing (NGS) high throughput library preparation and quality 
                                    control equipment (Covaris, Bioanalyzers, Tape station).
                            </p>
                            <p>
                            Besides Illumina technology, 
                                    the platform also runs Oxford Nanopore technology that is currently used to 
                                    sequence several African orphan crops for de novo genome assemblies. The research 
                                    capabilities of the genomics platform include: pathogen detection, diagnostics,
                                    metagenomics, transcriptomics, gene expression
                                    analysis, viral genomics, molecular breeding and
                                    genotyping.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3><span class="color-d">Bio</span>informatics</h3>
                            <p class="fst-italic">
                            The bioinformatics platform leverages the genomics platform to provide advanced computational services, 
                                    data storage, bioinformatics support and high-performance computing services to NARS scientists and 
                                    other external users. The platform handles tens of thousands of molecular data and statistical 
                                    analysis transactions, and has generated hundreds of terabytes of data since its inception.
                            </p>
                            <p>
                            The modular architecture of the computing infrastructure lends itself well to addressing 
                                    informatics problems of increasing size, scope and complexity.  Data generated from these 
                                    high throughput machines are channeled to ILRI’s high performance computer (HPC) clusters 
                                    for data analysis, interpretation and visualization.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="assets/img/slid1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection