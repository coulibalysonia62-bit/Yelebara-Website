@extends('layouts.app')

@section('title', 'Partenariat - YELEBARA')

@section('content')
<div class="main-content">
<section class="bg-breadcrumb" style="background-image: url('{{ asset('assets/images/slide-03.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; position: relative; min-height: 400px; display: flex; align-items: center; justify-content: center;">
    <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(26, 26, 46, 0.8); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2; text-align: center; color: #fff; padding: 2rem;">
        <div class="breadcrumb" style="margin-bottom: 1rem; font-size: 0.9rem; opacity: 0.8;">
            <a href="/" style="color: #F7931E; text-decoration: none;">Accueil</a> <span style="color: #fff; margin: 0 10px;">></span> <span>Partenariat</span>
        </div>
        <h1 class="page-header" style="font-size: 3rem; margin-bottom: 1rem; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">Devenez notre <em>Partenaire</em></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Rejoignez-nous pour une révolution écologique dans le pressing</p>
    </div>
</section>

<section class="partnership" style="padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h6 style="color: #F7931E; text-transform: uppercase; letter-spacing: 2px;">Pourquoi nous rejoindre ?</h6>
                    <h4 style="font-size: 2.5rem; color: #1A1A2E; margin-bottom: 2rem;">Un partenariat <em>gagnant-gagnant</em></h4>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #4B4B4B; margin-bottom: 2rem;">
                    YELEBARA recherche des partenaires partageant nos valeurs d'écologie, de qualité et d'innovation. Ensemble, nous pouvons transformer l'industrie du pressing au Burkina Faso et en Afrique.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #4B4B4B; margin-bottom: 2rem;">
                    En tant que partenaire, vous bénéficierez de notre expertise en énergie solaire, de notre réseau de clients et de notre marque reconnue pour son engagement écologique.
                </p>
                
                <div class="benefits" style="margin-top: 3rem;">
                    <div class="benefit-item" style="margin-bottom: 1.5rem;">
                        <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #F7931E; margin-right: 10px;"></i>
                            Accès à un marché en croissance
                        </h5>
                        <p style="color: #4B4B4B; margin: 0;">Le marché du pressing écologique est en pleine expansion</p>
                    </div>
                    <div class="benefit-item" style="margin-bottom: 1.5rem;">
                        <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #F7931E; margin-right: 10px;"></i>
                            Formation et support technique
                        </h5>
                        <p style="color: #4B4B4B; margin: 0;">Nous formons vos équipes aux technologies solaires</p>
                    </div>
                    <div class="benefit-item" style="margin-bottom: 1.5rem;">
                        <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #F7931E; margin-right: 10px;"></i>
                            Marketing partagé
                        </h5>
                        <p style="color: #4B4B4B; margin: 0;">Bénéficiez de notre notoriété et de nos campagnes</p>
                    </div>
                    <div class="benefit-item">
                        <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #F7931E; margin-right: 10px;"></i>
                            Avantages compétitifs
                        </h5>
                        <p style="color: #4B4B4B; margin: 0;">Tarifs préférentiels et conditions exclusives</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="partnership-image">
                    <img src="{{ asset('assets/images/tricycle.png') }}" alt="Partenariat YELEBARA" class="img-fluid rounded" style="box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background: #F5F5F5; padding: 60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 style="color: #1A1A2E; font-size: 2rem; margin-bottom: 2rem;">Types de partenariats</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="partner-type" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                            <i class="fas fa-store" style="color: #F7931E; font-size: 3rem; margin-bottom: 1rem;"></i>
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Franchisé</h5>
                            <p style="color: #4B4B4B;">Ouvrez votre propre pressing YELEBARA avec notre support complet</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="partner-type" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                            <i class="fas fa-handshake" style="color: #F7931E; font-size: 3rem; margin-bottom: 1rem;"></i>
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Partenaire technique</h5>
                            <p style="color: #4B4B4B;">Fourniture d'équipements et services techniques</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="partner-type" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                            <i class="fas fa-building" style="color: #F7931E; font-size: 3rem; margin-bottom: 1rem;"></i>
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Partenaire B2B</h5>
                            <p style="color: #4B4B4B;">Services exclusifs pour hôtels, cliniques et entreprises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-partnership" style="padding: 60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h3 style="color: #1A1A2E; font-size: 2rem; margin-bottom: 2rem;">Intéressé par un partenariat ?</h3>
                <p style="color: #4B4B4B; font-size: 1.1rem; margin-bottom: 2rem;">Contactez-nous pour discuter des opportunités de collaboration</p>
                <div class="contact-buttons">
                    <a href="{{ route('contact') }}" class="btn-primary" style="background: linear-gradient(135deg, #F7931E, #ff9d3d); color: white; padding: 15px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.1rem; margin-right: 15px; display: inline-block;">Nous contacter</a>
                    <a href="mailto:partenariat@yelebara.bf" class="btn-secondary" style="background: transparent; color: #1A1A2E; padding: 15px 40px; border: 2px solid #1A1A2E; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.1rem; display: inline-block;">E-mail direct</a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
