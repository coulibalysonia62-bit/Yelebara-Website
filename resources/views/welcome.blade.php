<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YELEBARA - Pressing Solaire & Éco-responsable</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --orange: #F7931E;
            --bleu-nuit: #1A1A2E;
            --blanc: #FFFFFF;
            --gris-clair: #F5F5F5;
            --gris-fonce: #4B4B4B;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--gris-fonce);
            line-height: 1.6;
        }

        /* HEADER */
        header {
            background: var(--bleu-nuit);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--blanc);
            font-size: 1.8rem;
            font-weight: bold;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: var(--orange);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .logo img {
            height: 60px;  /* Ajustez la hauteur selon vos besoins */
            width: auto;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: var(--blanc);
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover, nav a.active {
            color: var(--orange);
        }

        .btn-contact {
            background: var(--orange);
            color: var(--blanc);
            padding: 0.7rem 1.5rem;
            border-radius: 25px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: transform 0.3s;
        }

        .btn-contact:hover {
            transform: scale(1.05);
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            background: var(--bleu-nuit);
            color: var(--blanc);
            padding: 100px 0;
            overflow: hidden;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.3);
            z-index: 1;
        }

        .hero .container {
            position: relative;
            z-index: 2;
            animation: fadeInUp 1s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* HERO Carousel */
        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }

        .hero-slider-images {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-slider-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .hero-slider-image.active {
            opacity: 0.6; /* Légèrement transparent pour voir le contenu par-dessus */
            z-index: 1;
        }

        /* Boutons de navigation du carousel */
        .hero-slider-controls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            pointer-events: none;
        }

        .hero-slider-btn {
            pointer-events: auto !important;
            background: rgba(255, 255, 255, 0.8) !important;
            border: none !important;
            width: 50px !important;
            height: 50px !important;
            border-radius: 50% !important;
            cursor: pointer !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0 !important;
            transition: all 0.3s !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2) !important;
            position: relative !important;
            z-index: 100 !important;
        }

        .hero-slider-btn:active,
        .hero-slider-btn:focus {
            outline: 2px solid var(--orange) !important;
        }

        .hero-slider-btn:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.1);
        }

        .hero-slider-btn img {
            width: 20px;
            height: 20px;
            object-fit: contain;
            pointer-events: none;
        }

        .hero-slider-btn.prev {
            left: 20px;
        }

        .hero-slider-btn.next {
            right: 20px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2; /* Au-dessus du carousel */
            padding: 100px 20px;
            text-align: center;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInDown 1s;
        }

        .hero h2 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: var(--orange);
            font-weight: normal;
            animation: fadeInUp 1s;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: var(--orange);
            color: var(--blanc);
            padding: 1rem 2.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(247, 147, 30, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: var(--blanc);
            padding: 1rem 2.5rem;
            border: 2px solid var(--blanc);
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: var(--blanc);
            color: var(--bleu-nuit);
        }

        /* SECTIONS */
        section {
            padding: 80px 0;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title span {
            color: var(--orange);
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .section-title h2 {
            color: var(--bleu-nuit);
            font-size: 2.5rem;
            margin-top: 0.5rem;
        }

        /* SERVICES */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .services-grid.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .service-card {
            background: var(--blanc);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .service-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 1.5rem;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        .service-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .service-card p {
            color: var(--gris-fonce);
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* À PROPOS */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h3 {
            color: var(--bleu-nuit);
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .about-text p {
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .about-image {
            background: var(--gris-clair);
            border-radius: 20px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        /* APP DOWNLOAD */
        .app-download {
            background: var(--gris-clair);
            text-align: center;
        }

        .app-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .app-btn {
            background: var(--bleu-nuit);
            color: var(--blanc);
            padding: 1rem 2rem;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            transition: all 0.3s;
        }

        .app-btn:hover {
            background: var(--orange);
            transform: translateY(-3px);
        }

        .app-icon {
            font-size: 2.5rem;
        }

        .app-text span {
            display: block;
            font-size: 0.8rem;
        }

        .app-text strong {
            font-size: 1.2rem;
        }

        /* TARIFS */
        .pricing-table {
            background: var(--blanc);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .pricing-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .pricing-table th {
            background: var(--bleu-nuit);
            color: var(--blanc);
            padding: 1.5rem;
            text-align: left;
            font-size: 1.1rem;
        }

        .pricing-table td {
            padding: 1.5rem;
            border-bottom: 1px solid var(--gris-clair);
        }

        .pricing-table tr:hover {
            background: var(--gris-clair);
        }

        .price-cell {
            color: var(--orange);
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* CONTACT */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: var(--blanc);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--bleu-nuit);
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid var(--gris-clair);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--orange);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .btn-submit {
            width: 100%;
            background: var(--orange);
            color: var(--blanc);
            padding: 1rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-submit:hover {
            background: #e67e0e;
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            background: var(--bleu-nuit);
            color: var(--blanc);
            padding: 3rem 20px 1rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            color: var(--orange);
            margin-bottom: 1rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section a {
            color: var(--blanc);
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: var(--orange);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* ANIMATIONS */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 0.8s ease forwards;
        }

        .fade-in-left {
            opacity: 0;
            transform: translateX(-30px);
            animation: fadeIn 0.8s ease forwards;
        }

        .fade-in-right {
            opacity: 0;
            transform: translateX(30px);
            animation: fadeIn 0.8s ease forwards;
        }

        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 0.8s ease forwards;
        }

        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                gap: 1rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="{{ asset('assets/images/yelebara-logo.png') }}" alt="YELEBARA">
            </div>
            <nav>
                <ul>
                    <li><a href="#accueil" class="active">Accueil</a></li>
                    <li><a href="#apropos">À propos</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#partenaires">Partenariats</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </nav>
            <button class="btn-contact" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Nous contacter</button>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="accueil" class="hero" style="position: relative; min-height: 100vh; display: flex; align-items: center; justify-content: center; overflow: hidden; background: #000;">
        <div class="hero-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
        <div class="hero-slider" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;">
            <div class="hero-slider-images" style="position: relative; width: 100%; height: 100%;">
                <div class="hero-slider-image active" style="background-image: url('{{ asset('assets/images/slide-01.jpg') }}');"></div>
                <div class="hero-slider-image" style="background-image: url('{{ asset('assets/images/slide-02.jpg') }}');"></div>
                <div class="hero-slider-image" style="background-image: url('{{ asset('assets/images/slide-03.jpg') }}');"></div>
            </div>
        </div>
        
        <div class="container" style="position: relative; z-index: 2; text-align: center; color: #fff; padding: 2rem; max-width: 1200px; margin: 0 auto;">
            <h1 style="font-size: 3.5rem; margin-bottom: 0.5rem; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">
                YELEBARA
            </h1>
            <h2 style="font-size: 1.8rem; margin-bottom: 1.5rem; font-weight: 400; text-shadow: 0 2px 5px rgba(0,0,0,0.5);">
                Pressing solaire & Eco-responsable
            </h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin: 0 auto 2.5rem; text-shadow: 0 1px 3px rgba(0,0,0,.8);">Service de pressing rapide, écologique et accessible à tous. Profitez de l'énergie solaire pour un nettoyage impeccable de vos vêtements.</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-top: 3rem;">
                <a href="#app-download" class="btn-primary" style="background: var(--orange); color: #fff; padding: 15px 30px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 10px;">
                    <span>📱</span> Télécharger l'Application
                </a>
                <a href="#services" class="btn-secondary" style="background: transparent; color: #fff; padding: 15px 30px; border: 2px solid #fff; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 10px;">
                    <span>🔍</span> Découvrir nos services
                </a>
            </div>
        </div>
        
        <!-- Contrôles du carrousel -->
        <div class="hero-slider-controls">
            <button class="hero-slider-btn prev" onclick="prevSlide()" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%);">
                <img src="{{ asset('assets/images/prev.png') }}" alt="Précédent">
            </button>
            <button class="hero-slider-btn next" onclick="nextSlide()" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%);">
                <img src="{{ asset('assets/images/next.png') }}" alt="Suivant">
            </button>
        </div>
    </section>

    <!-- À PROPOS -->
    <section id="apropos" class="fade-in">
        <div class="container">
            <div class="section-title fade-in">
                <span>NOTRE HISTOIRE</span>
                <h2>Découvrez YELEBARA</h2>
            </div>
            <div class="about-content" style="opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease;">
                <div class="about-text fade-in-left">
                    <h3>Une révolution dans le pressing</h3>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-bottom: 1.8rem; padding: 0.5rem;">YELEBARA est un produit de la société SIFI Burkina qui s'engage à fournir des services de pressing exceptionnels à ses clients. Notre mission est de combiner qualité, rapidité et respect de l'environnement.</p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-bottom: 1.8rem; padding: 0.5rem;">Grâce à l'énergie solaire, nous réduisons notre empreinte carbone tout en vous offrant un service impeccable accessible à tous les couches socieles. Notre équipe passionnée travaille chaque jour pour vous garantir des vêtements propres et bien entretenus.</p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; padding: 0.5rem;">Nous croyons en un avenir durable et accessible à tous. C'est pourquoi nos tarifs restent abordables sans compromis sur la qualité.</p>
                </div>
                <div class="about-image fade-in-right delay-1">
                    <img src="{{ asset('assets/images/tricycle.png') }}" alt="Vélo-cargo YELEBARA">
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="fade-in">
        <div class="container">
            <div class="section-title fade-in">
                <span>NOS SERVICES</span>
                <h2>Ce que nous offrons</h2>
            </div>
            <div class="services-grid">
                <a href="#app-download" class="service-card-link" style="text-decoration: none; color: inherit;">
                    <div class="service-card fade-in delay-1">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/lavage.png') }}" alt="Service de lavage professionnel">
                        </div>
                        <h3 style="color: #1A1A2E; font-weight: 700;">Lavage à domicile</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-top: 0.8rem; padding: 0.5rem;">Lavage professionnel de vos vêtements avec des produits écologiques et de qualité premium.</p>
                    </div>
                </a>
                <a href="#app-download" class="service-card-link" style="text-decoration: none; color: inherit;">
                    <div class="service-card fade-in delay-2">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/repassage.png') }}" alt="Service de repassage professionnel">
                        </div>
                        <h3 style="color: #1A1A2E; font-weight: 700;">Repassage</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-top: 0.8rem; padding: 0.5rem;">Repassage soigné et professionnel pour des vêtements impeccables et prêts à porter.</p>
                    </div>
                </a>
                <a href="#app-download" class="service-card-link" style="text-decoration: none; color: inherit;">
                    <div class="service-card fade-in delay-3">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/pressing-complet.png') }}" alt="Service de pressing complet">
                        </div>
                        <h3 style="color: #1A1A2E; font-weight: 700;">Service Complet</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-top: 0.8rem; padding: 0.5rem;">Service complet incluant lavage, repassage et emballage pour une satisfaction totale.</p>
                    </div>
                </a>
                <a href="#app-download" class="service-card-link" style="text-decoration: none; color: inherit;">
                    <div class="service-card fade-in delay-2">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/services/service-clinique.jpg') }}" alt="Service Spécial Clinique">
                        </div>
                        <h3 style="color: #1A1A2E; font-weight: 700;">Service Spécial Clinique</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-top: 0.8rem; padding: 0.5rem;">Collecte et nettoyage de linge sur site, respect des normes d'hygiène et solution écologique grâce à l'énergie solaire.</p>
                    </div>
                </a>
                <a href="#app-download" class="service-card-link" style="text-decoration: none; color: inherit;">
                    <div class="service-card fade-in delay-1">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/services/service-hotel.jpg') }}" alt="Service Spécial Hôtel" style="object-fit: cover;">
                        </div>
                        <h3 style="color: #1A1A2E; font-weight: 700;">Service Spécial Hôtel</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-top: 0.8rem; padding: 0.5rem;">Service rapide et flexible directement sur place, entretien de votre linge avec soin et solution respectueuse de l'environnement.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- PARTENAIRES -->
    <section id="partenaires" class="fade-in" style="background: #f9f9f9; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease;">
        <div class="container">
            <div class="section-title fade-in">
                <span>PARTENAIRES</span>
                <h2>Devenez Partenaire</h2>
                <p>Rejoignez notre réseau de partenaires privilégiés</p>
            </div>
            <div class="partenaires-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <div class="partenaires-avantages" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                    <a href="#app-download" class="avantage-card-link" style="text-decoration: none; color: inherit;">
                        <div class="avantage-card fade-in-left delay-1" style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.05)'">
                            <div style="font-size: 3rem; color: #F7931E; margin-bottom: 1rem; display: flex; justify-content: center; align-items: center; height: 60px;">🏢</div>
                            <h3 style="color: #1A1A2E; margin-bottom: 1rem;">Louer la machine</h3>
                            <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-top: 0.8rem; padding: 0.5rem;">Accédez à nos équipements de pressing solaire avec des offres de location flexibles et adaptées à vos besoins.</p>
                        </div>
                    </a>
                    <a href="#app-download" class="avantage-card-link" style="text-decoration: none; color: inherit;">
                        <div class="avantage-card fade-in-up delay-2" style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.05)'">
                            <div style="font-size: 2.5rem; color: #F7931E; margin-bottom: 1rem;">⚙️</div>
                            <h3 style="color: #1A1A2E; margin-bottom: 1rem;">Installer la machine</h3>
                            <p style="font-size: 1.1rem; line-height: 1.8; color: #444; font-weight: 400; margin-top: 0.8rem; padding: 0.5rem;">Bénéficiez de notre service d'installation professionnel pour une mise en service rapide et optimale de vos équipements.</p>
                        </div>
                    </a>
                </div>
                <div class="cta-partenaire" style="margin-top: 2rem;">
                    <p style="margin-bottom: 2rem; font-size: 1.1rem;">Vous souhaitez en savoir plus sur nos opportunités de partenariat ?</p>
                    <a href="#app-download" class="btn-primary" style="text-decoration: none;">Télécharger l'application</a>
                </div>
            </div>
        </div>
    </section>

    <!-- APP DOWNLOAD -->
    <section id="app-download" class="app-download fade-in">
        <div class="container">
            <div class="section-title fade-in">
                <span>TÉLÉCHARGEZ</span>
                <h2>Notre Application Mobile</h2>
                <p>Gérez vos commandes facilement depuis votre smartphone</p>
            </div>
            <div class="app-buttons fade-in-up delay-1">
                <a href="#" class="app-btn">
                    <div class="app-icon">📱</div>
                    <div class="app-text">
                        <span>Télécharger sur</span>
                        <strong>Google Play</strong>
                    </div>
                </a>
                <a href="#" class="app-btn">
                    <div class="app-icon">🍎</div>
                    <div class="app-text">
                        <span>Télécharger sur</span>
                        <strong>App Store</strong>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="fade-in">
        <div class="container">
            <div class="section-title fade-in">
                <span>CONTACTEZ-NOUS</span>
                <h2>Envoyez-nous un message</h2>
            </div>
            <form class="contact-form fade-in-left delay-1">
                <div class="form-group">
                    <label for="nom">Nom complet *</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone *</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Envoyer le message</button>
            </form>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="fade-in" style="padding: 80px 0; background-color: #f9f9f9;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="section-title" style="text-align: center; margin-bottom: 50px;">
                <span style="color: var(--orange); font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Questions Fréquentes</span>
                <h2 style="color: var(--bleu-nuit); margin-top: 15px; font-size: 2.5rem;">FAQ</h2>
                <p style="color: var(--gris-fonce); max-width: 700px; margin: 15px auto 0; line-height: 1.6;">
                    Retrouvez les réponses aux questions les plus courantes sur nos services de pressing écologique.
                </p>
            </div>

            <div class="faq-container" style="max-width: 900px; margin: 0 auto;">
                <!-- Délais de livraison -->
                <div class="faq-item" style="background: white; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); overflow: hidden;">
                    <button class="faq-question" style="width: 100%; text-align: left; padding: 20px 25px; border: none; background: white; font-size: 1.1rem; font-weight: 600; color: var(--bleu-nuit); cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span>Délais de livraison</span>
                        <span class="faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <div style="padding: 0 25px 20px;">
                            <p style="color: var(--gris-fonce); margin-bottom: 15px; line-height: 1.6;">
                                Notre service de pressing est effectué sur place, ce qui nous permet de vous proposer des délais de livraison rapides. Pour les particuliers, la livraison s'effectue sous 24 à 48h. Pour les professionnels (hôtels, cliniques), nous proposons des solutions sur mesure avec des plannings adaptés à vos besoins.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Passer commande -->
                <div class="faq-item" style="background: white; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); overflow: hidden;">
                    <button class="faq-question" style="width: 100%; text-align: left; padding: 20px 25px; border: none; background: white; font-size: 1.1rem; font-weight: 600; color: var(--bleu-nuit); cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span>Comment passer commande ?</span>
                        <span class="faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <div style="padding: 0 25px 20px;">
                            <p style="color: var(--gris-fonce); margin-bottom: 15px; line-height: 1.6;">
                                Vous pouvez passer votre commande facilement via notre application mobile, téléchargeable depuis notre site web. L'application vous permet de planifier une collecte, suivre l'état de votre commande en temps réel, et bénéficier d'offres exclusives. Pour les professionnels, un service dédié est disponible pour répondre à vos besoins spécifiques.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Types de vêtements acceptés -->
                <div class="faq-item" style="background: white; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); overflow: hidden;">
                    <button class="faq-question" style="width: 100%; text-align: left; padding: 20px 25px; border: none; background: white; font-size: 1.1rem; font-weight: 600; color: var(--bleu-nuit); cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span>Quels types de vêtements acceptez-vous ?</span>
                        <span class="faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <div style="padding: 0 25px 20px;">
                            <p style="color: var(--gris-fonce); margin-bottom: 15px; line-height: 1.6;">
                                Nous acceptons tous types de vêtements : vêtements du quotidien, chemises, pantalons, robes, manteaux, etc. Nous prenons également en charge le linge de maison (draps, rideaux, nappes) et les articles délicats selon leur poids. Pour les vêtements nécessitant un entretien particulier, nos experts sont là pour vous conseiller.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Produits de nettoyage -->
                <div class="faq-item" style="background: white; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); overflow: hidden;">
                    <button class="faq-question" style="width: 100%; text-align: left; padding: 20px 25px; border: none; background: white; font-size: 1.1rem; font-weight: 600; color: var(--bleu-nuit); cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span>Quels produits utilisez-vous pour le nettoyage ?</span>
                        <span class="faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <div style="padding: 0 25px 20px;">
                            <p style="color: var(--gris-fonce); margin-bottom: 15px; line-height: 1.6;">
                                Nous utilisons exclusivement des produits écologiques et biodégradables, respectueux de l'environnement et de votre peau. Notre procédé de nettoyage à l'énergie solaire garantit un nettoyage en profondeur tout en préservant la qualité des tissus et en minimisant notre impact environnemental.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section Professionnels -->
                <div class="faq-item" style="background: #fef7f0; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); overflow: hidden; border-left: 4px solid var(--orange);">
                    <button class="faq-question" style="width: 100%; text-align: left; padding: 20px 25px; border: none; background: transparent; font-size: 1.1rem; font-weight: 700; color: var(--orange); cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span>Section pour les professionnels (Hôtels, Cliniques)</span>
                        <span class="faq-icon" style="font-size: 1.5rem; transition: transform 0.3s;">+</span>
                    </button>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <div style="padding: 0 25px 20px;">
                            <p style="color: var(--gris-fonce); margin-bottom: 15px; line-height: 1.6;">
                                Pour les hôtels et cliniques, nous proposons des solutions personnalisées avec des formules adaptées à vos volumes et contraintes. Contactez notre service commercial pour un devis personnalisé et découvrez comment nous pouvons répondre aux besoins spécifiques de votre établissement.
                            </p>
                            <a href="#contact" class="btn-primary" style="display: inline-block; background: var(--orange); color: white; padding: 10px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: all 0.3s ease; margin-top: 10px;">
                                Contactez notre service commercial
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>YELEBARA</h3>
                <p>Pressing solaire et éco-responsable pour un avenir durable.</p>
            </div>
            <div class="footer-section">
                <h3>Liens rapides</h3>
                <ul>
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#apropos">À propos</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#partenaires">Partenaires</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <ul>
                    <li>📧 <a href="mailto:contact@sifi-burkina.com">contact@sifi-burkina.com</a></li>
                    <li>📱 <a href="tel:+22671882356">+226 71 88 23 56</a></li>
                    <li>📍 <a href="https://www.google.com/maps/search/?api=1&query=Patte+d'Oie,+Ouagadougou">BV 30027 Ouaga, Patte d'Oie</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright 2025 YELEBARA. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Initialisation des variables
        let currentSlide = 0;
        let slideTimer;
        const slides = document.querySelectorAll('.hero-slider-image');
        const totalSlides = slides.length;

        // Fonction pour passer à la slide suivante
        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        // Fonction pour passer à la slide précédente
        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        // Fonction pour aller à une slide spécifique
        function goToSlide(n) {
            // Arrêter le timer actuel
            clearTimeout(slideTimer);
            
            // Retirer la classe active de l'image actuelle
            slides[currentSlide].classList.remove('active');
            
            // Calculer la nouvelle position
            currentSlide = (n + totalSlides) % totalSlides;
            
            // Ajouter la classe active à la nouvelle image
            slides[currentSlide].classList.add('active');
            
            // Redémarrer le défilement automatique
            startSlideShow();
        }
        
        // Démarrer le diaporama automatique
        function startSlideShow() {
            // Effacer tout timer existant
            clearTimeout(slideTimer);
            
            // Démarrer un nouveau timer
            slideTimer = setTimeout(() => {
                nextSlide();
            }, 5000);
        }

        // Démarrer le diaporama automatique au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            // S'assurer que la première slide est active
            if (slides.length > 0) {
                slides[0].classList.add('active');
            }
            
            // Démarrer le diaporama
            startSlideShow();
            
            // Animation initiale pour la section hero
            const heroSection = document.querySelector('.hero .container');
            if (heroSection) {
                heroSection.style.opacity = '1';
                heroSection.style.transform = 'translateY(0)';
            }
            
            // Animation des autres sections au scroll
            animateOnScroll();
            window.addEventListener('scroll', animateOnScroll);
        });

        // Empêcher le scroll du carousel d'interférer avec le scroll de la page
        const heroSliderControls = document.querySelector('.hero-slider-controls');
        if (heroSliderControls) {
            heroSliderControls.addEventListener('click', (e) => {
                e.stopPropagation();
            });
        }

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Active navigation
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const scrollY = window.pageYOffset;

            sections.forEach(section => {
                const sectionHeight = section.offsetHeight;
                const sectionTop = section.offsetTop - 100;
                const sectionId = section.getAttribute('id');
                
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    document.querySelector(`nav a[href="#${sectionId}"]`)?.classList.add('active');
                } else {
                    document.querySelector(`nav a[href="#${sectionId}"]`)?.classList.remove('active');
                }
            });
        });

        // Animation au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            // Animation initiale pour la section hero
            const heroSection = document.querySelector('.hero .container');
            heroSection.style.opacity = '1';
            heroSection.style.transform = 'translateY(0)';

            // Animation des autres sections au scroll
            animateOnScroll();
            window.addEventListener('scroll', animateOnScroll);

            // Animation de la section à propos
            const aboutSection = document.querySelector('.about-content');
            const partenairesSection = document.querySelector('#partenaires');
            
            // Vérifier si les sections sont visibles au chargement
            checkIfInView(aboutSection);
            checkIfInView(partenairesSection);
        });

        function checkIfInView(element) {
            if (!element) return;
            
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight - 100) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        }

        // Fonction pour gérer l'animation au défilement
        function animateOnScroll() {
            const elements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .fade-in-up, .services-grid, .service-card');
            const aboutSection = document.querySelector('.about-content');
            const partenairesSection = document.querySelector('#partenaires');
            
            // Animation de la section à propos
            if (aboutSection && isInViewport(aboutSection)) {
                aboutSection.style.opacity = '1';
                aboutSection.style.transform = 'translateY(0)';
            }
            
            // Animation de la section partenaires
            if (partenairesSection && isInViewport(partenairesSection)) {
                partenairesSection.style.opacity = '1';
                partenairesSection.style.transform = 'translateY(0)';
            }
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                // Si l'élément est dans la fenêtre visible
                if (elementTop < windowHeight - 100) {
                    element.classList.add('visible');
                    element.style.opacity = '1';
                    
                    // Animation spécifique pour les cartes de service
                    if (element.classList.contains('service-card')) {
                        const delay = element.classList.contains('delay-1') ? 0.2 : 
                                    element.classList.contains('delay-2') ? 0.4 : 
                                    element.classList.contains('delay-3') ? 0.6 : 0;
                        element.style.animation = `fadeIn 0.8s ease ${delay}s forwards`;
                    }
                }
            });
            
            // Activer la grille de services
            const servicesGrid = document.querySelector('.services-grid');
            if (servicesGrid && isInViewport(servicesGrid)) {
                servicesGrid.classList.add('visible');
                servicesGrid.style.opacity = '1';
                servicesGrid.style.transform = 'translateY(0)';
            }
        }
        
        // Fonction pour vérifier si un élément est dans le viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8 &&
                rect.bottom >= 0
            );
        }

        // Active navigation et animation au défilement
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const scrollY = window.pageYOffset;

            // Gestion de la navigation active
            sections.forEach(section => {
                const sectionHeight = section.offsetHeight;
                const sectionTop = section.offsetTop - 100;
                const sectionId = section.getAttribute('id');
                
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    document.querySelector(`nav a[href="#${sectionId}"]`)?.classList.add('active');
                } else {
                    document.querySelector(`nav a[href="#${sectionId}"]`)?.classList.remove('active');
                }
            });

            // Gestion des animations au défilement
            animateOnScroll();
        });

        // Form submission
        document.querySelector('.contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Message envoyé avec succès ! Nous vous contacterons bientôt.');
            e.target.reset();
        });
    </script>

    <script>
        // Gestion de l'accordéon FAQ
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.faq-icon');
                
                question.addEventListener('click', () => {
                    // Fermer tous les autres éléments FAQ
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            const otherAnswer = otherItem.querySelector('.faq-answer');
                            const otherIcon = otherItem.querySelector('.faq-icon');
                            
                            otherAnswer.style.maxHeight = '0';
                            otherIcon.textContent = '+';
                            otherItem.style.marginBottom = '15px';
                        }
                    });
                    
                    // Basculer l'élément actuel
                    const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
                    
                    if (isOpen) {
                        answer.style.maxHeight = '0';
                        icon.textContent = '+';
                        item.style.marginBottom = '15px';
                    } else {
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                        icon.textContent = '−';
                        // Ajouter un peu d'espace en bas quand ouvert
                        item.style.marginBottom = '20px';
                    }
                });
                
                // Ouvrir le premier élément par défaut
                if (item === faqItems[0]) {
                    question.click();
                }
            });
            
            // Animation fluide pour le défilement
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>