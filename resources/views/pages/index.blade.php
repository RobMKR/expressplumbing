@extends('layout')

@section('title', 'Plumbing Express')

@section('content')
    <!-- .container-->
    <div class="container-fluid">
        <section class="banner-section hidden-xs">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/slide1.jpg" alt="slide1">
                        <div class="carousel-caption">
                            <h1>Your Trusted Family Owned & Operated Plumber
                            </h1>
                            <p>Plumbing Express Service is fully licensed, bonded, and insured so you know you can trust your plumbing to our skilled team.</p>
                            <a class="btn" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide2.jpg" alt="slide2">
                        <div class="carousel-caption">
                            <h1>Plumbing Express Service
                            </h1>
                            <p>We are strong and competitive company in the restoration field. Our diversely skilled and interdisciplinary management team is composed of construction project managers, estimators, and professional business analysts.</p>
                            <a class="btn" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide3.jpg" alt="slide3">
                        <div class="carousel-caption">
                            <h1>Your Plumbing and Drain Cleaning Professionals
                            </h1>
                            <p>Plumbers are one of the most important contractors that you’ll ever have to hire for your property. Ensuring your home or business plumbing is working smoothly and efficiently is essential to your day to day life. So choose the right one.</p>
                            <a class="btn" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .banner-section-->
    </div>
    <!-- .container-fluid-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="welcome-section">
                    <div class="welcome-thumb">
                        <img src="img/welcome.jpg" alt="welcome fontanero">
                    </div>
                    <div class="welcome-content">
                        <h3>Welcome to Plumbing Services</h3>
                        <p>
                            Good plumbing is not just about pipes. It’s about building trust,
                            about showing our customers the consideration and courtesy they deserve.
                            That’s where our plumbers excel. Our professionals are consistently friendly and warm with
                            every client we visit, providing them with a world-class experience.
                        </p>
                        <a class="btn" href="/about">Read More</a>
                    </div>
                </div>
                <!-- .welcome-section-->
            </div>
            <!-- .col-md-12-->
        </div>
        <!-- .row-->
    </div>
    <!-- .container-->
    <div class="container">
        <div class="row">
            <div class="service-section">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <ul class="tablist" role="tablist">
                        <li>Service Does Matter</li>
                        <li role="presentation" class="active"><a href="#residential" aria-controls="residential" role="tab" data-toggle="tab">Residential</a></li>
                        <li role="presentation"><a href="#commercial" aria-controls="commercial" role="tab" data-toggle="tab">Commercial</a></li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="residential">
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/service1.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/heater"><h3>Water Heater</h3></a>
                                    <p>One of the worst things to happen is for a home gas water heater to go out during a cold winter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/service2.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/bathroom"><h3>Bathroom</h3></a>
                                    <p>For the majority of homeowners beside the bedroom the one room where the most time is spent is the bathroom!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/service3.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/toilet"><h3>Toilet</h3></a>
                                    <p>Is there anything more unnerving or frustrating than a toilet that doesn’t work?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/service4.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/tube"><h3>Tube and shower</h3></a>
                                    <p>The current debate among homeowners is shower vs. tub.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/service5.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/pipes"><h3>pipes and sewers</h3></a>
                                    <p>Repiping a home can be a daunting task in the eyes of most homeowners</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/service6.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/drain"><h3>Drainage</h3></a>
                                    <p>No matter the drain, count on us to keep it flowing</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="commercial">
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/commercial1.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/tankless"><h3>Tankless Heating</h3></a>
                                    <p>There are numerous advantages to this type of water heater.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/commercial2.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/solar"><h3>Solar Heating</h3></a>
                                    <p>Solar water heating is one of the best ways to decrease utility costs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="img/service/commercial3.jpg" alt="">
                                </div>
                                <div class="service-description">
                                    <a href="/services/rehabilitation"><h3>Pipe Rehabilitation</h3></a>
                                    <p>System is designed to rehabilitate existing small diameter pipelines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .service-section-->
        </div>
        <!-- .row-->
    </div>
    <!-- .container-->
    <div class="container">
        <div class="service-activity">
            <div class="row">
                <div class="col-md-12">
                    <div class="activity-head">
                        <h2>Why you can rely with 100% confidence ON <span>PLUMBING EXPRESS</span> Service.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="activity-list-items">
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="activity-list">
                            <div class="activity-icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="activity-details">
                                <h4>Honesty</h4>
                                <p>we operate with honesty, integrity and in complete transparency. So that we serve 1,000+ clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="activity-list">
                            <div class="activity-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="activity-details">
                                <h4>Non-stop service</h4>
                                <p>We operate Mon-Sat 08:00 - 24:00 . You will be hard-pressed to  to find in a plumber.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .activity-list-items-->
            </div>
        </div>
        <!-- .service-activity-->
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
    <!-- .container-->
@endsection