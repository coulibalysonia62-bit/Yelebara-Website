@extends('layouts.app')

@section('title', 'FAQ - YELEBARA')

@section('content')
<div class="main-content">
<section class="bg-breadcrumb" style="background-image: url('{{ asset('assets/images/slide-03.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; position: relative; min-height: 400px; display: flex; align-items: center; justify-content: center;">
    <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(26, 26, 46, 0.8); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2; text-align: center; color: #fff; padding: 2rem;">
        <div class="breadcrumb" style="margin-bottom: 1rem; font-size: 0.9rem; opacity: 0.8;">
            <a href="/" style="color: #F7931E; text-decoration: none;">Accueil</a> <span style="color: #fff; margin: 0 10px;">></span> <span>FAQ</span>
        </div>
        <h1 class="page-header" style="font-size: 3rem; margin-bottom: 1rem; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">Questions <em>Fréquentes</em></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Réponses à vos questions les plus courantes</p>
    </div>
</section>

<section class="faq" style="padding: 80px 0; background: #F5F5F5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="faq-content">
                    <!-- Services -->
                    <div class="faq-category" style="margin-bottom: 3rem;">
                        <h3 style="color: #1A1A2E; font-size: 1.8rem; margin-bottom: 2rem;">
                            <i class="fas fa-service" style="color: #F7931E; margin-right: 10px;"></i>
                            Nos Services
                        </h3>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Quels types de services proposez-vous ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Nous proposons le lavage à domicile, le repassage, le service complet (lavage + repassage + emballage), ainsi que des services spécialisés pour les cliniques et hôtels.</p>
                        </div>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Comment fonctionne le service à domicile ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Nous venons récupérer vos vêtements à votre domicile ou lieu de travail, les traitons dans nos installations solaires, et vous les livrons propres et repassés.</p>
                        </div>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Quels sont vos délais de livraison ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">En standard : 24-48h. Express : même jour (sous conditions). Les services spécialisés (cliniques, hôtels) ont des délais adaptés selon les besoins.</p>
                        </div>
                    </div>
                    
                    <!-- Tarifs -->
                    <div class="faq-category" style="margin-bottom: 3rem;">
                        <h3 style="color: #1A1A2E; font-size: 1.8rem; margin-bottom: 2rem;">
                            <i class="fas fa-dollar-sign" style="color: #F7931E; margin-right: 10px;"></i>
                            Tarifs et Paiement
                        </h3>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Comment sont fixés vos tarifs ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Nos tarifs sont calculés selon le type de vêtement, le poids et le service choisi. Nous proposons des forfaits avantageux pour les services complets.</p>
                        </div>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Quels modes de paiement acceptez-vous ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Nous acceptons les paiements en espèces, par mobile money (Orange Money, MTN Money, Wave), et par carte bancaire.</p>
                        </div>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Proposez-vous des abonnements ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Oui, nous proposons des formules d'abonnement mensuel pour les particuliers et des contrats pour les professionnels avec tarifs préférentiels.</p>
                        </div>
                    </div>
                    
                    <!-- Écologie -->
                    <div class="faq-category" style="margin-bottom: 3rem;">
                        <h3 style="color: #1A1A2E; font-size: 1.8rem; margin-bottom: 2rem;">
                            <i class="fas fa-leaf" style="color: #F7931E; margin-right: 10px;"></i>
                            Notre Engagement Écologique
                        </h3>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Comment l'énergie solaire est-elle utilisée ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Toutes nos installations fonctionnent à 100% à l'énergie solaire : machines à laver, séchoirs, repasseuses. Cela réduit notre empreinte carbone de 80%.</p>
                        </div>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Quels produits utilisez-vous ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Nous utilisons exclusivement des détergents biodégradables et écologiques, sans phosphates ni produits chimiques agressifs.</p>
                        </div>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Comment gérez-vous le transport écologique ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Nos livraisons s'effectuent avec des vélos-cargos électriques et des véhicules fonctionnant à l'énergie solaire.</p>
                        </div>
                    </div>
                    
                    <!-- Pratique -->
                    <div class="faq-category">
                        <h3 style="color: #1A1A2E; font-size: 1.8rem; margin-bottom: 2rem;">
                            <i class="fas fa-cog" style="color: #F7931E; margin-right: 10px;"></i>
                            Pratique et Logistique
                        </h3>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Quelles sont vos zones de livraison ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Nous desservons toute la ville de Ouagadougou et ses environs. Contactez-nous pour connaître les disponibilités dans votre quartier.</p>
                        </div>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Puis-je suivre ma commande en temps réel ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Oui ! Notre application mobile permet de suivre vos commandes, de programmer des collectes et de recevoir des notifications.</p>
                        </div>
                        
                        <div class="faq-item" style="background: white; padding: 1.5rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Que faire en cas de problème sur un vêtement ?</h5>
                            <p style="color: #4B4B4B; margin: 0;">Nous assurons tous nos services. En cas de dommage, nous prenons en charge la réparation ou le remboursement selon notre politique de satisfaction client.</p>
                        </div>
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
                <h3 style="color: #1A1A2E; font-size: 2rem; margin-bottom: 2rem;">Vous ne trouvez pas votre réponse ?</h3>
                <p style="color: #4B4B4B; font-size: 1.1rem; margin-bottom: 2rem;">Notre équipe est là pour répondre à toutes vos questions</p>
                <div class="contact-buttons">
                    <a href="{{ route('contact') }}" class="btn-primary" style="background: linear-gradient(135deg, #F7931E, #ff9d3d); color: white; padding: 15px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.1rem; margin-right: 15px; display: inline-block;">Contacter le support</a>
                    <a href="tel:+22625356789" class="btn-secondary" style="background: transparent; color: #1A1A2E; padding: 15px 40px; border: 2px solid #1A1A2E; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.1rem; display: inline-block;">
                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                        Appeler
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
