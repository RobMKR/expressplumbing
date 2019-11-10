@extends('layout')

@section('title', 'Plumbing Express')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>{{ $header  }}</h2>
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/services">Services</a></li>
                            <li class="active">{{ $header  }}</li>
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
            <div class="col-md-12">
                <div class="single-details">
                    <img class="alighn-left" src="{{ $img }}" alt="welcome fontanero">
                    {!! $text  !!}
                </div>
                <!-- .welcome-section-->
            </div>
            <!-- .col-md-12-->
        </div>
        <!-- .row-->
    </div>
    <!-- .container-->
@endsection