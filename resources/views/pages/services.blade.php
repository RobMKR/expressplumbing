@extends('layout')

@section('title', 'Plumbing Express')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>Services</h2>
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">services</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .row-->
        </div>
        <!-- .container-->
    </div>
    <!-- .breadcrumb-area-->

    <div class="container">
        <div class="row">
            <div class="residential-plumb">
                <h2>Residential Plumbing</h2>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/service1.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Water Heater</h3>
                            <p>One of the worst things to happen is for a home gas water heater to go out.</p>
                            <a href="/services/heater">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/service2.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Bathroom</h3>
                            <p>For the majority of homeowners beside the bedroom the one room where the most time is spent is the bathroom!</p>
                            <a href="/services/bathroom">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/service3.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Toilet</h3>
                            <p>Is there anything more unnerving or frustrating than a toilet that doesn’t work?</p>
                            <a href="/services/toilet">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/service4.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Tube and Shower</h3>
                            <p>The current debate among homeowners is shower vs. tub.</p>
                            <a href="/services/tube">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/service5.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Pipes and swearage</h3>
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel aliquet nec vulputate</p>
                            <a href="article-page.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/service6.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Drainage</h3>
                            <p>Repiping a home can be a daunting task in the eyes of most homeowners</p>
                            <a href="/services/drain">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .row-->
    </div>
    <!-- .container-->

    <div class="container">
        <div class="row">
            <div class="commercial-plumb">
                <h2>commercial Plumbing</h2>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/commercial1.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Tankless Heating</h3>
                            <p>There are numerous advantages to this type of water heater.</p>
                            <a href="/services/tankless">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/commercial2.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Solar Heating</h3>
                            <p>Solar water heating is one of the best ways to decrease utility costs.</p>
                            <a href="/services/solar">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="img/service/commercial3.jpg" alt="">
                        </div>
                        <div class="service-description">
                            <h3>Pipe Rehabilitation</h3>
                            <p>System is designed to rehabilitate existing small diameter pipelines.</p>
                            <a href="/services/rehabit">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--.company-focus -->
        </div>
        <!-- .row-->
    </div>
    <!-- .container-->

    <div class="quote-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="quote">
                        <h2>Let's wow you!</h2>
                        <p>Ready to take it a step further?  Let’s start talking about your Commercial or Residence Plumb Need.  We can help you.</p>
                        <a class="btn" href="#">Request a Quote</a>
                    </div>
                    <!--quote-->
                </div>
            </div>
            <!-- .row-->
        </div>
        <!-- .container-->
    </div>
    <!-- .quote-section-->

    <div class="container">

        <!-- .row -->
    </div>
@endsection