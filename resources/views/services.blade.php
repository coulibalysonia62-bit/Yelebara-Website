@extends('layouts.app')

@section('title', 'Services - YELEBARA')

@section('content')
<section class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-text">
                    <h4>Nos Services</h4>
                    <h1>Ce que nous offrons</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-image-01.jpg') }}" alt="">
                    </div>
                    <h4>Service 1</h4>
                    <p>Description détaillée du service 1</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-image-02.jpg') }}" alt="">
                    </div>
                    <h4>Service 2</h4>
                    <p>Description détaillée du service 2</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-image-03.jpg') }}" alt="">
                    </div>
                    <h4>Service 3</h4>
                    <p>Description détaillée du service 3</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection







