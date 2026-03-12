<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="YELEBARA - Votre partenaire de confiance">
    
    <title>@yield('title', 'YELEBARA')</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flex-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-574-mexant.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    
    @stack('styles')
</head>

<body>
    <!-- Preloader -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header style="background: var(--bleu-nuit); padding: 1rem 0; position: fixed; width: 100%; top: 0; z-index: 1000; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <div class="header-container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center;">
            <div class="logo" style="display: flex; align-items: center; gap: 10px; color: var(--blanc); font-size: 1.8rem; font-weight: bold;">
                <img src="{{ asset('assets/images/yelebara-logo.png') }}" alt="YELEBARA" style="height: 60px; width: auto; object-fit: contain;">
            </div>
            <nav>
                <ul style="display: flex; list-style: none; gap: 2rem; margin: 0; padding: 0;">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}" style="color: var(--blanc); text-decoration: none; transition: color 0.3s; font-weight: 500;">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}" style="color: var(--blanc); text-decoration: none; transition: color 0.3s; font-weight: 500;">À propos</a></li>
                    <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}" style="color: var(--blanc); text-decoration: none; transition: color 0.3s; font-weight: 500;">Services</a></li>
                    <li><a href="{{ route('partenariat') }}" class="{{ request()->routeIs('partenariat') ? 'active' : '' }}" style="color: var(--blanc); text-decoration: none; transition: color 0.3s; font-weight: 500;">Partenariat</a></li>
                    <li><a href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? 'active' : '' }}" style="color: var(--blanc); text-decoration: none; transition: color 0.3s; font-weight: 500;">FAQ</a></li>
                </ul>
            </nav>
            <button class="btn-contact" onclick="window.location.href='{{ route('contact') }}'" style="background: var(--orange); color: var(--blanc); padding: 0.7rem 1.5rem; border-radius: 25px; border: none; cursor: pointer; font-weight: bold; transition: transform 0.3s;">Nous contacter</button>
        </div>
    </header>
    
    <!-- Styles pour le header -->
    <style>
        :root {
            --orange: #F7931E;
            --bleu-nuit: #1A1A2E;
            --blanc: #FFFFFF;
            --gris-clair: #F5F5F5;
            --gris-fonce: #4B4B4B;
        }
        
        nav a:hover, nav a.active {
            color: var(--orange) !important;
        }
        
        .btn-contact:hover {
            transform: scale(1.05);
        }
        
        /* Espacement pour le contenu qui suit le header fixe */
        .main-content {
            margin-top: 80px;
        }
    </style>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer style="background: #1A1A2E; color: white; padding: 3rem 0 1rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-section">
                        <h5 style="color: #F7931E; margin-bottom: 1.5rem; font-weight: bold;">YELEBARA</h5>
                        <p style="color: #ccc; line-height: 1.6;">Pressing solaire et éco-responsable, engagé dans la fourniture de services de qualité tout en préservant notre environnement.</p>
                        <div class="social-links mt-3">
                            <a href="#" style="color: white; font-size: 1.2rem; margin-right: 15px;"><i class="fab fa-facebook"></i></a>
                            <a href="#" style="color: white; font-size: 1.2rem; margin-right: 15px;"><i class="fab fa-instagram"></i></a>
                            <a href="#" style="color: white; font-size: 1.2rem; margin-right: 15px;"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" style="color: white; font-size: 1.2rem;"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-section">
                        <h5 style="color: #F7931E; margin-bottom: 1.5rem; font-weight: bold;">Services</h5>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 0.8rem;"><a href="{{ route('services') }}" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Lavage à domicile</a></li>
                            <li style="margin-bottom: 0.8rem;"><a href="{{ route('services') }}" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Repassage</a></li>
                            <li style="margin-bottom: 0.8rem;"><a href="{{ route('services') }}" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Service complet</a></li>
                            <li style="margin-bottom: 0.8rem;"><a href="{{ route('services') }}" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Services spécialisés</a></li>
                            <li style="margin-bottom: 0.8rem;"><a href="{{ route('services') }}" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Livraison express</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-section">
                        <h5 style="color: #F7931E; margin-bottom: 1.5rem; font-weight: bold;">Contact</h5>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 0.8rem; color: #ccc;">
                                <i class="fas fa-map-marker-alt" style="color: #F7931E; margin-right: 10px;"></i>
                                Ouagadougou, Burkina Faso
                            </li>
                            <li style="margin-bottom: 0.8rem; color: #ccc;">
                                <i class="fas fa-phone" style="color: #F7931E; margin-right: 10px;"></i>
                                +226 25 35 67 89
                            </li>
                            <li style="margin-bottom: 0.8rem; color: #ccc;">
                                <i class="fas fa-envelope" style="color: #F7931E; margin-right: 10px;"></i>
                                contact@yelebara.bf
                            </li>
                            <li style="margin-bottom: 0.8rem; color: #ccc;">
                                <i class="fas fa-clock" style="color: #F7931E; margin-right: 10px;"></i>
                                Lun-Ven: 7h-20h
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom text-center" style="padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
                        <p style="color: #ccc; margin: 0;">Copyright © 2024 YELEBARA. Tous droits réservés. | Powered by SIFI Burkina</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    @stack('scripts')
</body>
</html>







