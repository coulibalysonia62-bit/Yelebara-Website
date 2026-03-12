@extends('layouts.app')

@section('title', 'Services - YELEBARA')

@section('content')
<div class="main-content">
<section class="bg-breadcrumb" style="background-image: url('{{ asset('assets/images/slide-03.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; position: relative; min-height: 400px; display: flex; align-items: center; justify-content: center;">
    <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(26, 26, 46, 0.8); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2; text-align: center; color: #fff; padding: 2rem;">
        <div class="breadcrumb" style="margin-bottom: 1rem; font-size: 0.9rem; opacity: 0.8;">
            <a href="/" style="color: #F7931E; text-decoration: none;">Accueil</a> <span style="color: #fff; margin: 0 10px;">></span> <span>Services</span>
        </div>
        <h1 class="page-header" style="font-size: 3rem; margin-bottom: 1rem; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">Nos <em>Services</em></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Des solutions professionnelles adaptées à vos besoins</p>
    </div>
</section>

<section class="services" style="padding: 80px 0; background: #F5F5F5;">
    <div class="container">
        <div class="row">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;">
                    <div class="icon text-center mb-3">
                        <img src="{{ asset('assets/images/lavage.png') }}" alt="Service de lavage professionnel" style="width: 80px; height: 80px; object-fit: contain;">
                    </div>
                    <h4 style="color: #1A1A2E; font-weight: 700; text-align: center; margin-bottom: 1rem;">Lavage à domicile</h4>
                    <p style="color: #4B4B4B; text-align: center;">Lavage professionnel de vos vêtements avec des produits écologiques et de qualité premium.</p>
                    <div class="text-center mt-3">
                        <span style="color: #F7931E; font-size: 1.5rem; font-weight: bold;">À partir de 2.000 FCFA</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;">
                    <div class="icon text-center mb-3">
                        <img src="{{ asset('assets/images/repassage.png') }}" alt="Service de repassage professionnel" style="width: 80px; height: 80px; object-fit: contain;">
                    </div>
                    <h4 style="color: #1A1A2E; font-weight: 700; text-align: center; margin-bottom: 1rem;">Repassage</h4>
                    <p style="color: #4B4B4B; text-align: center;">Repassage soigné et professionnel pour des vêtements impeccables et prêts à porter.</p>
                    <div class="text-center mt-3">
                        <span style="color: #F7931E; font-size: 1.5rem; font-weight: bold;">À partir de 1.500 FCFA</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;">
                    <div class="icon text-center mb-3">
                        <img src="{{ asset('assets/images/pressing-complet.png') }}" alt="Service de pressing complet" style="width: 80px; height: 80px; object-fit: contain;">
                    </div>
                    <h4 style="color: #1A1A2E; font-weight: 700; text-align: center; margin-bottom: 1rem;">Service Complet</h4>
                    <p style="color: #4B4B4B; text-align: center;">Service complet incluant lavage, repassage et emballage pour une satisfaction totale.</p>
                    <div class="text-center mt-3">
                        <span style="color: #F7931E; font-size: 1.5rem; font-weight: bold;">À partir de 5.000 FCFA</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;">
                    <div class="icon text-center mb-3">
                        <img src="{{ asset('assets/images/services/service-clinique.jpg') }}" alt="Service Spécial Clinique" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
                    </div>
                    <h4 style="color: #1A1A2E; font-weight: 700; text-align: center; margin-bottom: 1rem;">Service Spécial Clinique</h4>
                    <p style="color: #4B4B4B; text-align: center;">Collecte et nettoyage de linge sur site, respect des normes d'hygiène et solution écologique.</p>
                    <div class="text-center mt-3">
                        <span style="color: #F7931E; font-size: 1.5rem; font-weight: bold;">Sur devis</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;">
                    <div class="icon text-center mb-3">
                        <img src="{{ asset('assets/images/services/service-hotel.jpg') }}" alt="Service Spécial Hôtel" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
                    </div>
                    <h4 style="color: #1A1A2E; font-weight: 700; text-align: center; margin-bottom: 1rem;">Service Spécial Hôtel</h4>
                    <p style="color: #4B4B4B; text-align: center;">Service rapide et flexible directement sur place, entretien de votre linge avec soin.</p>
                    <div class="text-center mt-3">
                        <span style="color: #F7931E; font-size: 1.5rem; font-weight: bold;">Sur devis</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;">
                    <div class="icon text-center mb-3">
                        <i class="fa fa-truck" style="color: #F7931E; font-size: 3rem;"></i>
                    </div>
                    <h4 style="color: #1A1A2E; font-weight: 700; text-align: center; margin-bottom: 1rem;">Livraison Express</h4>
                    <p style="color: #4B4B4B; text-align: center;">Livraison rapide à domicile ou sur votre lieu de travail avec nos vélos-cargos écologiques.</p>
                    <div class="text-center mt-3">
                        <span style="color: #F7931E; font-size: 1.5rem; font-weight: bold;">Gratuite dès 10.000 FCFA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding: 60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 style="color: #1A1A2E; font-size: 2rem; margin-bottom: 2rem;">Pourquoi nous choisir ?</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="feature-item">
                            <i class="fa fa-solar-panel" style="color: #F7931E; font-size: 2.5rem; margin-bottom: 1rem;"></i>
                            <h5 style="color: #1A1A2E;">100% Solaire</h5>
                            <p style="color: #4B4B4B;">Énergie renouvelable pour un service écologique</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-item">
                            <i class="fa fa-clock" style="color: #F7931E; font-size: 2.5rem; margin-bottom: 1rem;"></i>
                            <h5 style="color: #1A1A2E;">Service Rapide</h5>
                            <p style="color: #4B4B4B;">Livraison en 24h pour la plupart des services</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-item">
                            <i class="fa fa-shield-alt" style="color: #F7931E; font-size: 2.5rem; margin-bottom: 1rem;"></i>
                            <h5 style="color: #1A1A2E;">Qualité Garantie</h5>
                            <p style="color: #4B4B4B;">Standards professionnels et satisfaction client</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-item">
                            <i class="fa fa-dollar-sign" style="color: #F7931E; font-size: 2.5rem; margin-bottom: 1rem;"></i>
                            <h5 style="color: #1A1A2E;">Tarifs Compétitifs</h5>
                            <p style="color: #4B4B4B;">Meilleurs prix du marché sans compromis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection







