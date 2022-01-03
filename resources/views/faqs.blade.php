@extends('layouts.master')

@section('content')
    <main id="main">
        <!-- Intro section -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Frequently asked questions</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    FAQs
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQs section -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <h4>How can I access SegoliP services?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                        Segolip services are available online and open to all clients from research organizations, NARS and universities 
                            wishing to partner with us. Visit our website's
                        </p>
                    </div>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <h4>What are the sample requirements for the sanger sequencing service?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                        Segolip accepts purified PCR amplicons and plasmids at a concentration of 50ng & 100ng 
                                respectively. The samples and primers must be eluted in water. PCR products must be single banded. 
                                An agarose gel image must be uploaded together with the sequencing request form
                        </p>
                    </div>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <h4>What can I do to generate single banded PCR products per your requirement?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                        Gradient PCR can be used to optimize the annealing temperature of your primers. One sample is amplified 
                            against a range of different annealing temperatures. The temperature that generates a single band is 
                            optimal for that set of primers. Alternatively, if your samples have multiple products (band) you can 
                            excise the band of interest from agarose gel under UV light and do gel purification. Commercial kits 
                            are readily available in the market for this purpose
                        </p>
                    </div>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <h4>Do I need to submit sequencing primers?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                        You need to submit at least 5µl of sequencing primer for each reaction at 10pmols/µl. We also facilitate 
                                procurement of sequencing primers once you submit the sequences
                        </p>
                    </div>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <h4>How will I receive my Sequencing results?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                        Results are uploaded on the website in a zipped file format. These will be ABI files and FASTA (seq) files. 
                            You will receive a link for you to download the results. <br>
                            All other results for various services are uploaded in a similar manner for downloading from the client’s end.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection