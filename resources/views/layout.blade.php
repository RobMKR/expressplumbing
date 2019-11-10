<!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<!-- =========================================
head
========================================== -->

<head>
    <!-- =========================================
    Basic
    ========================================== -->
    <link rel="icon" href="/img/favico.png" type="image/png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <meta name="keywords" content="plumbingexpress, HTML5, CSS3, responsive, Template"/>
    <meta name="author" content="Plumbing Express"/>
    <meta name="description" content="Plumbing Express Services"/>

    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:600,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- //Fonts -->

    <!-- Owl Carousel CSS -->
    <link href="/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- =========================================
    CSS
    ========================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/offcanvas.css"/>
    <link rel="stylesheet" href="/css/style.css"/>

</head>
<!-- /head -->


<body>

<div class="wrapper" id="wrapper">
    <div class="offcanvas-pusher">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <section class="header">
                        <!--================Header Menu Area =================-->
                        @include('elements.header')
                        <!--================Header Menu Area =================-->
                        <!-- .header-wrapper-->
                    </section>
                    <!--End .header -->
                </div>
                <!-- .row-->
            </div>

            @yield('content')

            <!--================Footer Area =================-->
            @include('elements.footer')
            <!--================End Footer Area =================-->
        </div>
        <!--content-wrapper-->
    </div>
    <!-- offcanvas-pusher -->

    <div class="offcanvas-menu offcanvas-effect visible-xs">
        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
        <h1>Menu</h1>
        <div>
            <div>
                <ul id="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Residential Services</a></li>
                    <li><a href="/services">Commercial Plumbing</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- offcanvas-menu end -->
</div>
<!-- #wrapper -->

@yield('end')
</body>
</html>