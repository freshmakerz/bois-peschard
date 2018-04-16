@extends('app')

@section('title', 'Contact Gîtes Morbihan - Les Gîtes du Bois Peschard')

@section('description', "Une question? Contactez nous !")

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Contact', 'url' => '/contact']
    ]])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                <h2 class="text-center">Contactez-nous</h2>
                <p class="lead text-center">
                    <a href="tel:+33610030943">+(33) 6.10.03.09.43</a>
                    <br><br>
                    Une question ? N'hésitez pas à nous envoyer un message.
                </p>
                <div class="row">
                    <div class="medium-8 columns medium-centered">
                        @if(Session::has('message_success'))
                        <div class="row">
                            <div class="medium-12 columns">
                                <div data-alert class="alert-box success">
                                    Nous avons bien pris en compte votre demande.
                                    <a href="#" class="close">&times;</a>
                                </div>
                                <p>
                                    Nous vous recontacterons dans les plus brefs délais.
                                </p>
                            </div>
                        </div>
                        @else
                        <form action="/contact" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="medium-6 columns">
                                    <div class="{{ $errors->has('last_name') ? 'has-error' : '' }}">
                                        <input type="text" id="LastName" name="last_name" placeholder="Nom *" value="{{ old('last_name') }}" />
                                    </div>
                                    <div class="{{ $errors->has('first_name') ? 'has-error' : '' }}">
                                        <input type="text" id="FirstName" name="first_name" placeholder="Prénom *" value="{{ old('first_name') }}" />
                                    </div>
                                    <input type="text" id="HomePhone" name="phone" placeholder="Téléphone" />
                                    <div class="{{ $errors->has('email') ? 'has-error' : '' }}">    
                                        <input type="text" placeholder="Email *" name="email" id="EmailAddress" value="{{ old('email') }}" />
                                    </div>
                                    <select id="subject" name="subject">
                                        <option value="Réservation">Réservation</option>
                                        <option value="Partenariat"/>Partenariat</option>
                                        <option value="Autre"/>Autre</option>
                                    </select>
                                </div>
                                <div class="medium-6 columns">
                                    <div class="{{ $errors->has('message') ? 'has-error' : '' }}">
                                        <textarea name="message" name="message" placeholder="Votre message *" id="" cols="30" rows="10" style="height:268px;" value="{{ old('message') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-12 columns">
                                    <input type="submit" value="Envoyer"/>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.scroll-to-top')
    @include('partials.map')
@endsection