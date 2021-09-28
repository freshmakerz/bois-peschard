@extends('app')

@section('title', 'Réserver Location de Vacances Morbihan - Les Gîtes du Bois Peschard')

@section('description', "Réservez dès maintenant votre semaine aux Gîtes du Bois Peschard! Profitez de la quiétude des lieux pour vous ressourcer et du charme des gîtes le Hêtre, le Chataîgner, le Chêne, le Frêne ou encore le Pin")

@section('styles')
    @parent
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css">
@endsection

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Réservation', 'url' => '/reservation']
    ]])
    @include('partials.page-title', ['title' => 'Réservation'])
    <section id="reservation" class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                @if(Session::has('reservation_success'))
                <div class="row">
                    <div class="medium-12 columns">
                        <div data-alert class="alert-box success">
                            Nous avons bien pris en compte votre demande de réservation.
                            <a href="#" class="close">&times;</a>
                        </div>
                        <p>
                            Nous vous recontacterons dans les plus brefs délais. Vous allez recevoir un email de confirmation très prochainement.
                        </p>
                    </div>
                </div>
                @else
                <p class="lead text-center">
                    Afin de confirmer cette demande de disponibilités, merci de remplir le formulaire ci-dessous.
                    <br>Nous restons à votre disposition pour tout renseignement complémentaire.
                </p>
                <div class="row">
                    <div class="medium-8 columns small-centered">
                        <form name="bookingForm" method="POST" action="/reservation">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="medium-12 columns">
                                    <label>Votre gite</label>
                                    <br>
                                    <div class="rooms">
                                        @foreach($gites as $k => $v)
                                        <label class="gite-{{ $k }}">
                                            <input type="radio" id="gite-{{ $v->getId() }}" name="gite" value="{{ $v->getText('gites.name') }}" {{ $selected_gite == $v->getId() ? 'checked="checked"': '' }}>
                                            {{ $v->getText('gites.name') }}
                                        </label>
                                        @endforeach
                                    </div>
                                    <hr style="margin: 1.5rem 0;">
                                    <label>Type de séjour</label>
                                    <select class="cat_dropdown" id="type" name="type" style="margin-bottom:0;">
                                        <option value="semaine">Semaine</option>
                                        <option value="week-end">Week-end</option>
                                        <option value="mid-week-end">Mid week-end</option>
                                    </select>
                                    <hr style="margin: 1.5rem 0;">
                                </div>
                            </div>
                            @if (count($errors) > 0)
                            <div id="errorsBox" class="row">
                                <div class="medium-12 columns">
                                    <div data-alert class="alert-box alert">
                                        Votre formulaire contient des erreurs. Merci de les corriger.
                                        <a href="#" class="close">&times;</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="medium-12 columns">
                                    <fieldset>
                                        <legend>Votre séjour</legend>
                                        <div class="medium-4 columns {{ $errors->has('arrival_date') ? 'has-error' : '' }}">
                                            <label>Date d'arrivée <span class="required">*</span></label>
                                            <input type="text" id="ArrivalDate" name="arrival_date" value="{{ old('arrival_date') }}">
                                        </div>
                                        <div class="medium-4 columns">
                                            <label>Nombre de nuits</label>
                                            <input type="text" id="Nights" name="nights" value="0" readonly>
                                        </div>
                                        <div class="medium-4 columns {{ $errors->has('departure_date') ? 'has-error' : '' }}">
                                            <label>Date de départ</label>
                                            <input type="text" id="DepartureDate" name="departure_date" value="{{ old('departure_date') }}">
                                        </div>
                                        <div class="medium-4 columns {{ $errors->has('adults') ? 'has-error' : '' }}">
                                            <label>Adultes</label>
                                            <select class="cat_dropdown" id="Adults" name="adults" style="margin-bottom:0;" autocomplete="off">
                                                @for ($i = 0; $i <= 20; $i++)
                                                <option value="{{ $i }}" {{ $i == 0 ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="medium-4 columns">
                                            <label>Enfants (0 à 3 ans)</label>
                                            <select class="cat_dropdown" id="Childrens_0_3" name="childrens_0_3" style="margin-bottom:0;">
                                                @for ($i = 0; $i <= 10; $i++)
                                                <option value="{{ $i }}" {{ $i == 0 ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="medium-4 columns">
                                            <label>Enfants (4 à 12 ans)</label>
                                            <select class="cat_dropdown" id="Childrens_4_12" name="childrens_4_12" style="margin-bottom:0;">
                                                @for ($i = 0; $i <= 10; $i++)
                                                <option value="{{ $i }}" {{ $i == 0 ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Vos coordonnées</legend>  
                                        <div class="medium-6 columns {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                            <label>Nom <span class="required">*</span></label>
                                            <input type="text" id="last-name" name="last_name" placeholder="Votre nom" value="{{ old('last_name') }}">
                                        </div>
                                        <div class="medium-6 columns {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                            <label>Prénom <span class="required">*</span></label>
                                            <input type="text" id="first-name" name="first_name" placeholder="Votre prénom" value="{{ old('first_name') }}">
                                        </div>
                                        <div class="medium-8 columns">
                                            <label>Adresse</label>
                                            <input type="text" id="address" name="address" placeholder="Votre adresse" value="{{ old('address') }}">
                                        </div>
                                        <div class="medium-4 columns">
                                            <label>Code postal</label>
                                            <input type="text" id="postal-code" name="postal_code" placeholder="Votre code postal" value="{{ old('postal_code') }}">
                                        </div>
                                        <div class="medium-6 columns">
                                            <label>Ville</label>
                                            <input type="text" id="city" name="city" placeholder="Votre ville" value="{{ old('city') }}">
                                        </div>
                                        <div class="medium-6 columns">
                                            <label>Pays</label>
                                            <select name="country" id="country" class="cat_dropdown">
                                                @foreach($countries as $country)
                                                    <option {{ $country['name'] === 'France' ? 'selected' : '' }}>{{ $country['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="medium-6 columns {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" id="email" name="email" placeholder="Votre email" value="{{ old('email') }}">
                                        </div>
                                        <div class="medium-6 columns {{ $errors->has('phone') ? 'has-error' : '' }}">
                                            <label>Téléphone <span class="required">*</span></label>
                                            <input type="text" id="phone" name="phone" placeholder="Votre téléphone" value="{{ old('phone') }}">
                                        </div>
                                        <div class="medium-12 columns">
                                            <label>Message</label>
                                            <textarea placeholder="Votre message, vos questions" name="message" rows="8" style="resize: none;" value="{{ old('message') }}"></textarea>
                                        </div>
                                    </fieldset>
                                    <hr style="margin: 1.5rem 0;">
                                    <button type="submit" class="button small">Envoyer</button>
                                    <p class="small">Ces informations restent confidentielles et ne sont jamais diffusées à quelque organisme que ce soit. Elles ont pour seul but de répondre à vos demandes de disponibilités ou de documentation.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    @include('partials.scroll-to-top')
    @include('partials.map')
@endsection

@section('scripts')
    @parent
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/i18n/jquery-ui-i18n.min.js"></script>
    <script>
	    $(function() {
	        $.datepicker.setDefaults($.datepicker.regional["fr"]);
        	$("#ArrivalDate").datepicker().on('change', function() {
                setNights();
        	});
        	$("#DepartureDate").datepicker().on('change', function() {
                setNights();
        	});
    	});
    	function setNights() {
    	    if($("#ArrivalDate").datepicker('getDate') && $("#DepartureDate").datepicker('getDate')) {
                var a = $("#ArrivalDate").datepicker('getDate').getTime(),
                    b = $("#DepartureDate").datepicker('getDate').getTime(),
                    c = 24*60*60*1000,
                    diffNights = Math.round(Math.abs((a - b)/(c)));
                if(diffNights > 0)
                $('#Nights').val(diffNights);
    	    }
        }
    </script>
    <script>
        function changeCalendar(cal) {
            $('.cal').hide();
            $('#'+cal).show();
        }
    </script>
@endsection