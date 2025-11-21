@extends('layouts.app')

@section('title', 'Contact - YELEBARA')

@section('content')
<section class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-text">
                    <h4>Contactez-nous</h4>
                    <h1>Parlons de votre projet</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Votre nom" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="email" name="email" id="email" placeholder="Votre email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Votre message" required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button-gradient">Envoyer le message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


