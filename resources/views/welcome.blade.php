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

        .logo img {
            height: 60px;
            width: auto;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
            margin: 0;
            padding: 0;
        }

        nav a {
            color: var(--blanc);
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }

        nav a:hover, nav a.active {
            color: var(--orange);
        }

        .btn-contact {
            background: var(--orange);
            color: var(--blanc);
            padding: 12px 25px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-contact:hover {
            transform: scale(1.05);
        }

        /* ESPACEMENT POUR LE HEADER FIXE */
        .hero {
            margin-top: 80px;
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #000;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1;
        }

        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
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
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .hero-slider-image.active {
            opacity: 1;
        }

        .hero-slider-controls {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            display: flex;
            gap: 15px;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-dot.active {
            background: var(--orange);
            transform: scale(1.2);
        }

        .slider-dot:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        .hero .container {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }

        .hero h2 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            font-weight: 400;
            text-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #fff;
            font-weight: 500;
            margin: 0 auto 2.5rem;
            text-shadow: 0 2px 6px rgba(0,0,0,0.9), 0 0 15px rgba(0,0,0,0.6);
            background: rgba(0,0,0,0.4);
            padding: 15px 25px;
            border-radius: 12px;
            max-width: 800px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .btn-primary, .btn-secondary {
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary {
            background: var(--orange);
            color: #fff;
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(247, 147, 30, 0.3);
        }

        .btn-secondary:hover {
            background: #fff;
            color: var(--bleu-nuit);
        }

        /* SECTIONS */
        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title span {
            color: var(--orange);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--bleu-nuit);
            margin-bottom: 1rem;
        }

        .section-title p {
            font-size: 1.2rem;
            color: var(--gris-fonce);
            max-width: 600px;
            margin: 0 auto;
        }

        /* SERVICES SECTION */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--orange);
            margin-bottom: 1.5rem;
        }

        .service-card h3 {
            font-size: 1.5rem;
            color: var(--bleu-nuit);
            margin-bottom: 1rem;
        }

        .service-card p {
            color: var(--gris-fonce);
            line-height: 1.6;
        }

        /* ABOUT SECTION */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h3 {
            font-size: 2rem;
            color: var(--bleu-nuit);
            margin-bottom: 1.5rem;
        }

        .about-text p {
            color: var(--gris-fonce);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .about-image img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        /* APP DOWNLOAD SECTION */
        .app-download {
            background: var(--gris-clair);
            text-align: center;
        }

        .app-buttons {
            display: flex;
            gap: 2rem;
            justify-content: center;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        .app-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 25px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .app-btn:hover {
            transform: translateY(-3px);
        }

        .app-store {
            background: #000;
            color: #fff;
        }

        .google-play {
            background: #4285F4;
            color: #fff;
        }

        /* CONTACT SECTION */
        .contact {
            background: var(--bleu-nuit);
            color: white;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .contact-info h3, .contact-form h3 {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: var(--orange);
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-info-item i {
            color: var(--orange);
            font-size: 1.5rem;
            width: 30px;
        }

        .contact-form {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 8px;
            background: rgba(255,255,255,0.05);
            color: white;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--orange);
        }

        .submit-btn {
            background: var(--orange);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(247, 147, 30, 0.3);
        }

        /* FAQ SECTION */
        .faq {
            background: var(--gris-clair);
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .faq-item {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .faq-question {
            font-weight: 600;
            color: var(--bleu-nuit);
            margin-bottom: 1rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            color: var(--gris-fonce);
            line-height: 1.6;
        }

        /* FOOTER */
        footer {
            background: var(--bleu-nuit);
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h5 {
            color: var(--orange);
            margin-bottom: 1.5rem;
            font-weight: bold;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 0.8rem;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: var(--orange);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            color: white;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--orange);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* ANIMATIONS */
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
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
                    <li><a href="/" class="active">Accueil</a></li>
                    <li><a href="/about">À propos</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/partenariat">Partenariat</a></li>
                    <li><a href="/faq">FAQ</a></li>
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
            <p style="font-size: 1.2rem; line-height: 1.8; color: #fff; font-weight: 500; margin: 0 auto 2.5rem; text-shadow: 0 2px 6px rgba(0,0,0,0.9), 0 0 15px rgba(0,0,0,0.6); background: rgba(0,0,0,0.4); padding: 15px 25px; border-radius: 12px; max-width: 800px;">Service de pressing rapide, écologique et accessible à tous. Profitez de l'énergie solaire pour un nettoyage impeccable de vos vêtements.</p>
            <div class="hero-buttons">
                <a href="#app-download" class="btn-primary">
                    <span>📱</span> Télécharger l'Application
                </a>
                <a href="/services" class="btn-secondary">
                    <span>🔍</span> Découvrir nos services
                </a>
            </div>
        </div>
        
        <!-- Carousel Controls -->
        <div class="hero-slider-controls">
            <span class="slider-dot active" data-slide="0"></span>
            <span class="slider-dot" data-slide="1"></span>
            <span class="slider-dot" data-slide="2"></span>
        </div>
    </section>

    <!-- À PROPOS -->
    <section id="apropos" class="section fade-in">
        <div class="container">
            <div class="section-title fade-in">
                <span>NOTRE HISTOIRE</span>
                <h2>Découvrez YELEBARA</h2>
                <p>Une révolution dans le pressing écologique</p>
            </div>
            <div class="about-content" style="opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease, transform 0.8s ease;">
                <div class="about-text fade-in-left">
                    <h3>Une révolution dans le pressing</h3>
                    <p>YELEBARA est un produit de la société SIFI Burkina qui s'engage à fournir des services de pressing exceptionnels à ses clients. Notre mission est de combiner qualité, rapidité et respect de l'environnement.</p>
                    <p>Grâce à l'énergie solaire, nous réduisons notre empreinte carbone tout en vous offrant un service impeccable accessible à tous les couches sociales. Notre équipe passionnée travaille chaque jour pour vous garantir des vêtements propres et bien entretenus.</p>
                    <p>Nous croyons en un avenir durable et accessible à tous. C'est pourquoi nos tarifs restent abordables sans compromis sur la qualité.</p>
                </div>
                <div class="about-image fade-in-right delay-1">
                    <img src="{{ asset('assets/images/tricycle.png') }}" alt="Vélo-cargo YELEBARA">
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section fade-in">
        <div class="container">
            <div class="section-title fade-in">
                <span>NOS SERVICES</span>
                <h2>Ce que nous offrons</h2>
                <p>Des solutions professionnelles adaptées à vos besoins</p>
            </div>
            <div class="services-grid">
                <div class="service-card fade-in delay-1">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/lavage.png') }}" alt="Service de lavage professionnel">
                    </div>
                    <h3>Lavage à domicile</h3>
                    <p>Lavage professionnel de vos vêtements avec des produits écologiques et de qualité premium.</p>
                </div>
                <div class="service-card fade-in delay-2">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/repassage.png') }}" alt="Service de repassage professionnel">
                    </div>
                    <h3>Repassage</h3>
                    <p>Repassage soigné et professionnel pour des vêtements impeccables et prêts à porter.</p>
                </div>
                <div class="service-card fade-in delay-3">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/pressing-complet.png') }}" alt="Service de pressing complet">
                    </div>
                    <h3>Service Complet</h3>
                    <p>Service complet incluant lavage, repassage et emballage pour une satisfaction totale.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- APP DOWNLOAD -->
    <section id="app-download" class="section app-download fade-in">
        <div class="container">
            <div class="section-title fade-in">
                <span>TÉLÉCHARGEZ</span>
                <h2>Notre Application Mobile</h2>
                <p>Gérez vos commandes facilement depuis votre smartphone</p>
            </div>
            <div class="app-buttons fade-in-up delay-1">
                <a href="#" class="app-btn app-store">
                    <div class="app-icon">🍎</div>
                    <div class="app-text">
                        <span>Télécharger sur</span>
                        <strong>App Store</strong>
                    </div>
                </a>
                <a href="#" class="app-btn google-play">
                    <div class="app-icon">📱</div>
                    <div class="app-text">
                        <span>Télécharger sur</span>
                        <strong>Google Play</strong>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section contact fade-in">
        <div class="container">
            <div class="section-title fade-in">
                <span>CONTACTEZ-NOUS</span>
                <h2>Envoyez-nous un message</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info fade-in-left delay-1">
                    <h3>Informations de contact</h3>
                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Adresse</strong><br>
                            Ouagadougou, Burkina Faso
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Téléphone</strong><br>
                            +226 25 35 67 89
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email</strong><br>
                            contact@yelebara.bf
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Horaires</strong><br>
                            Lun-Ven: 7h-20h
                        </div>
                    </div>
                </div>
                <div class="contact-form fade-in-right delay-2">
                    <h3>Envoyez un message</h3>
                    <form>
                        <div class="form-group">
                            <label for="nom">Nom complet</label>
                            <input type="text" id="nom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Envoyer le message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h5>YELEBARA</h5>
                    <p>Pressing solaire et éco-responsable, engagé dans la fourniture de services de qualité tout en préservant notre environnement.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="/services">Lavage à domicile</a></li>
                        <li><a href="/services">Repassage</a></li>
                        <li><a href="/services">Service complet</a></li>
                        <li><a href="/services">Services spécialisés</a></li>
                        <li><a href="/services">Livraison express</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h5>Contact</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Ouagadougou, Burkina Faso</li>
                        <li><i class="fas fa-phone"></i> +226 25 35 67 89</li>
                        <li><i class="fas fa-envelope"></i> contact@yelebara.bf</li>
                        <li><i class="fas fa-clock"></i> Lun-Ven: 7h-20h</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Copyright © 2024 YELEBARA. Tous droits réservés. | Powered by SIFI Burkina</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Carousel functionality
            const slides = document.querySelectorAll('.hero-slider-image');
            const dots = document.querySelectorAll('.slider-dot');
            let currentSlide = 0;
            
            function showSlide(index) {
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                slides[index].classList.add('active');
                dots[index].classList.add('active');
                currentSlide = index;
            }
            
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => showSlide(index));
            });
            
            setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }, 5000);

            // Smooth scrolling
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

            // Fade in animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>
