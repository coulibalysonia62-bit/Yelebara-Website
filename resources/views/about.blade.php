@extends('layouts.app')

@section('title', 'À propos - YELEBARA')

@section('content')
<div class="main-content">
<section class="bg-breadcrumb" style="background-image: url('{{ asset('assets/images/slide-03.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; position: relative; min-height: 400px; display: flex; align-items: center; justify-content: center;">
    <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(26, 26, 46, 0.8); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2; text-align: center; color: #fff; padding: 2rem;">
        <div class="breadcrumb" style="margin-bottom: 1rem; font-size: 0.9rem; opacity: 0.8;">
            <a href="/" style="color: #F7931E; text-decoration: none;">Accueil</a> <span style="color: #fff; margin: 0 10px;">></span> <span>À propos</span>
        </div>
        <h1 class="page-header" style="font-size: 3rem; margin-bottom: 1rem; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">À propos de <em>YELEBARA</em></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Pressing solaire & éco-responsable</p>
    </div>
</section>

<section id="about-content" class="about-us" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h6 style="color: #F7931E; text-transform: uppercase; letter-spacing: 2px;">Notre Mission</h6>
                    <h4 style="font-size: 2.5rem; color: #1A1A2E; margin-bottom: 2rem;">Une révolution <em>dans le pressing</em></h4>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #4B4B4B; margin-bottom: 2rem;">
                    YELEBARA est un produit de la société SIFI Burkina qui s'engage à fournir des services de pressing exceptionnels à ses clients. <a href="#mission" style="color: #F7931E; text-decoration: none; font-weight: 600;">Notre mission</a> est de combiner qualité, rapidité et respect de l'environnement.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #4B4B4B; margin-bottom: 2rem;">
                    Grâce à l'énergie solaire, nous réduisons notre empreinte carbone tout en vous offrant un service impeccable accessible à tous les couches sociales. <a href="#values" style="color: #F7931E; text-decoration: none; font-weight: 600;">Découvrez nos valeurs</a>.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #4B4B4B;">
                    Nous croyons en un avenir durable et accessible à tous. C'est pourquoi nos tarifs restent abordables sans compromis sur la qualité. <a href="#stats" style="color: #F7931E; text-decoration: none; font-weight: 600;">Voir nos réalisations</a>.
                </p>
                
                <div class="row" style="margin-top: 3rem;">
                    <div class="col-md-4">
                        <div class="stat-item text-center" id="stats">
                            <h4 style="color: #F7931E; font-size: 2.5rem; font-weight: bold; cursor: pointer;" onclick="document.getElementById('mission').scrollIntoView({behavior: 'smooth'})">100%</h4>
                            <p style="color: #4B4B4B;">Énergie Solaire</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-item text-center">
                            <h4 style="color: #F7931E; font-size: 2.5rem; font-weight: bold; cursor: pointer;" onclick="document.getElementById('values').scrollIntoView({behavior: 'smooth'})">24/7</h4>
                            <p style="color: #4B4B4B;">Service Disponible</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-item text-center">
                            <h4 style="color: #F7931E; font-size: 2.5rem; font-weight: bold; cursor: pointer;" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Éco</h4>
                            <p style="color: #4B4B4B;">100% Responsable</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('assets/images/tricycle.png') }}" alt="Vélo-cargo YELEBARA" class="img-fluid rounded" style="box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="values" style="background: #F5F5F5; padding: 60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 style="color: #1A1A2E; font-size: 2rem; margin-bottom: 1rem;">Nos Valeurs</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="value-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem; cursor: pointer;" onclick="document.getElementById('services').scrollIntoView({behavior: 'smooth'})">
                            <div class="icon" style="color: #F7931E; font-size: 3rem; margin-bottom: 1rem;">
                                <i class="fa fa-solar-panel"></i>
                            </div>
                            <h5 style="color: #1A1A2E;">Énergie Solaire</h5>
                            <p style="color: #4B4B4B;">100% d'énergie renouvelable pour nos installations</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="value-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem; cursor: pointer;" onclick="document.getElementById('stats').scrollIntoView({behavior: 'smooth'})">
                            <div class="icon" style="color: #F7931E; font-size: 3rem; margin-bottom: 1rem;">
                                <i class="fa fa-leaf"></i>
                            </div>
                            <h5 style="color: #1A1A2E;">Écologie</h5>
                            <p style="color: #4B4B4B;">Préservation de l'environnement</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="value-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem; cursor: pointer;" onclick="document.getElementById('about-content').scrollIntoView({behavior: 'smooth'})">
                            <div class="icon" style="color: #F7931E; font-size: 3rem; margin-bottom: 1rem;">
                                <i class="fa fa-clock"></i>
                            </div>
                            <h5 style="color: #1A1A2E;">Rapidité</h5>
                            <p style="color: #4B4B4B;">Service rapide et efficace</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="value-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem; cursor: pointer;" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">
                            <div class="icon" style="color: #F7931E; font-size: 3rem; margin-bottom: 1rem;">
                                <i class="fa fa-users"></i>
                            </div>
                            <h5 style="color: #1A1A2E;">Accessibilité</h5>
                            <p style="color: #4B4B4B;">Tarifs abordables pour tous</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection







