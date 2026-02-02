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

<!-- Lavage à domicile -->
<section class="laundry-service py-5" id="laundry">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>Lavage à domicile</h2>
                    <p class="service-description">
                        Profitez de notre service de lavage professionnel directement chez vous ! 
                        Nos équipes qualifiées prennent en charge votre linge avec soin et efficacité, 
                        en utilisant des produits de qualité pour des résultats impeccables.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="services" id="services" style="background: linear-gradient(135deg, #fff9f5 0%, #fff0e6 50%, #ffebdd 100%); padding: 80px 0; position: relative; overflow: hidden;">
    <!-- Décoration de fond -->
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: rgba(255, 138, 61, 0.1); border-radius: 50%; z-index: 0;"></div>
    <div style="position: absolute; bottom: -150px; left: -100px; width: 500px; height: 500px; background: rgba(255, 138, 61, 0.08); border-radius: 50%; z-index: 0;"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>Nos Services</h6>
                    <h4>Ce que nous <em>offrons</em></h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <!-- Service 1 -->
                    <div class="col-md-4 mb-4">
                        <a href="#" class="service-button">
                            <div class="service-item service-1" style="background: white; border-radius: 15px; padding: 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border: 2px solid transparent; text-align: center; position: relative; overflow: hidden;">
                                <div class="service-content">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.05) 100%); opacity: 0; transition: all 0.5s ease;"></div>
                                <div class="icon mb-3">
                                    <img src="{{ asset('assets/images/service-image-01.jpg') }}" alt="Service 1" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 3px solid #f26d21; padding: 5px;">
                                </div>
                                <h4 style="color: #333; margin-bottom: 15px; font-weight: 700;">Service 1</h4>
                                <p style="color: #666; margin-bottom: 20px;">Description du service 1</p>
                                </div>
                                <div class="service-overlay">
                                    <div class="download-btn" style="background: linear-gradient(135deg, #f26d21, #ff8a3d); color: white; padding: 12px 24px; border-radius: 30px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; font-size: 15px; box-shadow: 0 4px 15px rgba(242, 109, 33, 0.3);">
                                    <svg style="width: 18px; height: 18px; margin-right: 8px;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Télécharger
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-md-4 mb-4">
                        <a href="#" class="service-button">
                            <div class="service-item service-2" style="background: white; border-radius: 15px; padding: 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border: 2px solid transparent; text-align: center; position: relative; overflow: hidden;">
                                <div class="service-content">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.05) 100%); opacity: 0; transition: all 0.5s ease;"></div>
                                <div class="icon mb-3">
                                    <img src="{{ asset('assets/images/service-image-02.jpg') }}" alt="Service 2" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 3px solid #f26d21; padding: 5px;">
                                </div>
                                <h4 style="color: #333; margin-bottom: 15px; font-weight: 700;">Service 2</h4>
                                <p style="color: #666; margin-bottom: 20px;">Description du service 2</p>
                                </div>
                                <div class="service-overlay">
                                    <div class="download-btn" style="background: linear-gradient(135deg, #f26d21, #ff8a3d); color: white; padding: 12px 24px; border-radius: 30px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; font-size: 15px; box-shadow: 0 4px 15px rgba(242, 109, 33, 0.3);">
                                    <svg style="width: 18px; height: 18px; margin-right: 8px;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Télécharger
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Service 3 -->
                    <div class="col-md-4 mb-4">
                        <a href="#" class="service-button">
                            <div class="service-item service-3" style="background: white; border-radius: 15px; padding: 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border: 2px solid transparent; text-align: center; position: relative; overflow: hidden;">
                                <div class="service-content">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.05) 100%); opacity: 0; transition: all 0.5s ease;"></div>
                                <div class="icon mb-3">
                                    <img src="{{ asset('assets/images/service-image-03.jpg') }}" alt="Service 3" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 3px solid #f26d21; padding: 5px;">
                                </div>
                                <h4 style="color: #333; margin-bottom: 15px; font-weight: 700;">Service 3</h4>
                                <p style="color: #666; margin-bottom: 20px;">Description du service 3</p>
                                </div>
                                <div class="service-overlay">
                                    <div class="download-btn" style="background: linear-gradient(135deg, #f26d21, #ff8a3d); color: white; padding: 12px 24px; border-radius: 30px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; font-size: 15px; box-shadow: 0 4px 15px rgba(242, 109, 33, 0.3);">
                                    <svg style="width: 18px; height: 18px; margin-right: 8px;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Télécharger
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Télécharger l'application -->
<section class="download-app py-5 bg-light">
    <div class="container text-center">
        <h3 class="mb-4">Téléchargez notre application dès maintenant !</h3>
        <a href="#" class="btn btn-primary btn-lg">
            <i class="fas fa-download me-2"></i> Télécharger l'application
        </a>
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
@section('styles')
<style>
    /* Styles de base pour les animations */
    .service-item {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: transform, opacity;
    }

    /* Animation personnalisée pour chaque service */
    .service-item.service-1 {
        transition-delay: 0.1s;
    }
    .service-item.service-2 {
        transition-delay: 0.3s;
    }
    .service-item.service-3 {
        transition-delay: 0.5s;
    }

    /* Animation d'apparition */
    .service-item.animate {
        opacity: 1;
        transform: translateY(0);
    }

    /* Animation au survol */
    .service-button {
        display: block;
        text-decoration: none;
        color: inherit;
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .service-button:hover {
        transform: translateY(-8px);
    }

    .service-button:hover .service-item {
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        border-color: #f26d21;
    }

    /* Animation du contenu */
    .service-content {
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        z-index: 1;
    }

    .service-button:hover .service-content {
        transform: translateY(-10px);
    }

    /* Animation du bouton de téléchargement */
    .download-btn {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1) 0.1s;
    }

    .service-button:hover .download-btn {
        opacity: 1;
        transform: translateY(0);
    }

    /* Animation de l'overlay */
    .service-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .service-button:hover .service-overlay {
        opacity: 1;
    }

    /* Animation de l'icône */
    .icon {
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .service-button:hover .icon {
        transform: scale(1.1) rotate(5deg);
    }
</style>
@endsection

@section('scripts')
<script>
    // Animation au chargement de la page
    document.addEventListener('DOMContentLoaded', function() {
        const serviceItems = document.querySelectorAll('.service-item');
        
        // Délai avant le début des animations
        setTimeout(() => {
            serviceItems.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.add('animate');
                }, 150 * index);
            });
        }, 300);
    });
</script>
@endsection


