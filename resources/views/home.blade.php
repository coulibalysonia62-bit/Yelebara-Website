@extends('layouts.app')

@section('title', 'Accueil - YELEBARA')

@section('content')
<!-- Banner -->
<section class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="header-text">
                    <h6>Bienvenue chez YELEBARA</h6>
                    <h2><em>Votre partenaire</em> de confiance</h2>
                    <div class="main-button-gradient">
                        <div class="scroll-to-section"><a href="#services">Découvrez nos services</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>Nos Services</h6>
                    <h4>Ce que nous <em>offrons</em></h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/service-image-01.jpg') }}" alt="">
                            </div>
                            <h4>Service 1</h4>
                            <p>Description du service 1</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/service-image-02.jpg') }}" alt="">
                            </div>
                            <h4>Service 2</h4>
                            <p>Description du service 2</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/service-image-03.jpg') }}" alt="">
                            </div>
                            <h4>Service 3</h4>
                            <p>Description du service 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section class="about-us" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image">
                    <img src="{{ asset('assets/images/about-left-image.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="section-heading">
                    <h6>À propos de nous</h6>
                    <h4>Qui sommes-<em>nous</em> ?</h4>
                    <p>YELEBARA est une entreprise dédiée à offrir des services de qualité à ses clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


