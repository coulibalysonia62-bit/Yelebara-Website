@extends('layouts.app')

@section('title', 'Contact - YELEBARA')

@section('content')
<div class="main-content">
<section class="bg-breadcrumb" style="background-image: url('{{ asset('assets/images/slide-03.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; position: relative; min-height: 400px; display: flex; align-items: center; justify-content: center;">
    <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(26, 26, 46, 0.8); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2; text-align: center; color: #fff; padding: 2rem;">
        <div class="breadcrumb" style="margin-bottom: 1rem; font-size: 0.9rem; opacity: 0.8;">
            <a href="/" style="color: #F7931E; text-decoration: none;">Accueil</a> <span style="color: #fff; margin: 0 10px;">></span> <span>Contact</span>
        </div>
        <h1 class="page-header" style="font-size: 3rem; margin-bottom: 1rem; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">Contactez <em>YELEBARA</em></h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">Nous sommes là pour répondre à toutes vos questions</p>
    </div>
</section>

<section class="contact-us" style="padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form" style="background: white; padding: 3rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <h4 style="color: #1A1A2E; margin-bottom: 2rem; font-size: 1.8rem;">Envoyez-nous un message</h4>
                    <form id="contact" action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: #1A1A2E; font-weight: 600; margin-bottom: 0.5rem;">Votre nom *</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Entrez votre nom" required style="border: 2px solid #F5F5F5; border-radius: 8px; padding: 12px; font-size: 1rem;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: #1A1A2E; font-weight: 600; margin-bottom: 0.5rem;">Votre email *</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre email" required style="border: 2px solid #F5F5F5; border-radius: 8px; padding: 12px; font-size: 1rem;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: #1A1A2E; font-weight: 600; margin-bottom: 0.5rem;">Téléphone</label>
                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Entrez votre numéro" style="border: 2px solid #F5F5F5; border-radius: 8px; padding: 12px; font-size: 1rem;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: #1A1A2E; font-weight: 600; margin-bottom: 0.5rem;">Service intéressé</label>
                                    <select name="service" id="service" class="form-control" style="border: 2px solid #F5F5F5; border-radius: 8px; padding: 12px; font-size: 1rem;">
                                        <option value="">Choisissez un service</option>
                                        <option value="lavage">Lavage à domicile</option>
                                        <option value="repassage">Repassage</option>
                                        <option value="complet">Service complet</option>
                                        <option value="clinique">Service spécial clinique</option>
                                        <option value="hotel">Service spécial hôtel</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color: #1A1A2E; font-weight: 600; margin-bottom: 0.5rem;">Votre message *</label>
                                    <textarea name="message" rows="6" id="message" class="form-control" placeholder="Décrivez vos besoins..." required style="border: 2px solid #F5F5F5; border-radius: 8px; padding: 12px; font-size: 1rem; resize: vertical;"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="form-submit" class="main-button-gradient" style="background: linear-gradient(135deg, #F7931E, #ff9d3d); color: white; border: none; padding: 15px 40px; border-radius: 30px; font-weight: 600; font-size: 1.1rem; cursor: pointer; transition: transform 0.3s;">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="info-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                        <div class="icon" style="color: #F7931E; font-size: 2rem; margin-bottom: 1rem;">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Adresse</h5>
                        <p style="color: #4B4B4B; margin-bottom: 0;">Ouagadougou, Burkina Faso<br>Zone industrielle de Koudougou</p>
                    </div>
                    
                    <div class="info-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                        <div class="icon" style="color: #F7931E; font-size: 2rem; margin-bottom: 1rem;">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Téléphone</h5>
                        <p style="color: #4B4B4B; margin-bottom: 0;">
                            +226 25 35 67 89<br>
                            +226 70 12 34 56
                        </p>
                    </div>
                    
                    <div class="info-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                        <div class="icon" style="color: #F7931E; font-size: 2rem; margin-bottom: 1rem;">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Email</h5>
                        <p style="color: #4B4B4B; margin-bottom: 0;">
                            contact@yelebara.bf<br>
                            info@yelebara.bf
                        </p>
                    </div>
                    
                    <div class="info-item" style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="icon" style="color: #F7931E; font-size: 2rem; margin-bottom: 1rem;">
                            <i class="fa fa-clock"></i>
                        </div>
                        <h5 style="color: #1A1A2E; font-weight: 700; margin-bottom: 1rem;">Horaires</h5>
                        <p style="color: #4B4B4B; margin-bottom: 0;">
                            Lundi - Vendredi: 7h - 20h<br>
                            Samedi: 8h - 18h<br>
                            Dimanche: 9h - 14h
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background: #F5F5F5; padding: 60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 style="color: #1A1A2E; font-size: 2rem; margin-bottom: 2rem;">Suivez-nous</h3>
                <div class="social-links">
                    <a href="#" style="color: #1A1A2E; font-size: 2rem; margin: 0 15px; transition: color 0.3s;">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" style="color: #1A1A2E; font-size: 2rem; margin: 0 15px; transition: color 0.3s;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" style="color: #1A1A2E; font-size: 2rem; margin: 0 15px; transition: color 0.3s;">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" style="color: #1A1A2E; font-size: 2rem; margin: 0 15px; transition: color 0.3s;">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection







