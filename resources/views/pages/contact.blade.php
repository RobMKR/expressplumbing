@extends('layout')

@section('title', 'Plumbing Express')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>Contact us</h2>
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">contact</li>
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
            <div class="form-section">
                <div class="col-md-8 col-xs-12 col-sm-8">
                    <div class="main-contact-form">
                        <h4>Contact</h4>
                        <form action="">
                            <input type="text" id="full-name" name="name" placeholder="Name">
                            <input type="email" id="email" name="email" placeholder="Email">
                            <input type="text" id="subject" name="subject" placeholder="Subject">
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                            <input type="submit" class="btn" value="submit">
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="office-location">
                        <div class="contact-us head-office">
                            <h4>Head Office</h4>
                            <address>
                                Fresno, CA 93711
                            </address>
                            <address>
                                <span>Email :</span>
                                <a href="mailto:plumbingexpressorg@gmail.com">plumbingexpressorg@gmail.com</a>
                            </address>
                            <address>
                                <span>Phones :</span>
                                Main: +1(559) 213-2666
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection