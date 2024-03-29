@extends('app')

@section('title', 'Tarif Location Gîte Morbihan Bretagne - Les Gîtes du Bois Peschard ')

@section('description', "Réservez votre semaine à partir de 390€ dans un gîte de charme tout confort niché entre Rennes et Vannes. Profitez du cadre de pure nature pour vous ressourcer. Les Gîtes du Bois Peschard sont labellisés 5 épis au registre des Gîtes de France ")

@section('styles')
@parent
<style>
    #table-schedule td p {
        font-size: 11px;
        color: black;
        text-align: center;
        margin: 0;
    }
</style>
@endsection

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Tarifs', 'url' => '/tarifs'],
    ]])
    @include('partials.page-title', ['title' => 'Nos tarifs'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                <div class="row">
                    <div class="medium-7 columns">
                        <h5>Tarifs semaine</h5>
                        <div class="table-responsive">
                            <table id="full_week" class="prices">
                                <thead>
                                    <tr>
                                        <td colspan="5" bgcolor="54345a" style="text-align:center;color:#fff;">
                                            <span style="text-transform:uppercase;">Tarifs semaine</span>
                                            <div style="font-size:10px;">(Du samedi 16h au samedi 10h)</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="145"></th>
                                        <th>Basse saison</th>
                                        <th>Moyenne saison</th>
                                        <th>Haute saison</th>
                                        <th>Très haute saison</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tarifs->getGroup('tarifs.week-prices')->getArray() as $price)
                                    <tr>
                                        <td>
                                            <span style="text-transform:uppercase;">{{ $price->getText('gite') }}</span> <br>
                                            <span style="font-size:11px">{{ $price->getText('capacity') }} Pers</span>
                                        </td>
                                        <td>{{ number_format($price->getNumber('low-season')->getValue(), 0, ", ", "") }} €</td>
                                        <td>{{ number_format($price->getNumber('mid-season')->getValue(), 0, ", ", "") }} €</td>
                                        <td>{{ number_format($price->getNumber('high-season')->getValue(), 0, ", ", "") }} €</td>
                                        <td>{{ number_format($price->getNumber('very-high-season')->getValue(), 0, ", ", "") }} €</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="medium-5 columns">
                        <h5>Tarifs week-end & mid week-end</h5>
                        <table id="week-end" class="prices responsive">
                            <thead>
                                <tr>
                                    <td colspan="5" bgcolor="495A34" style="text-align:center;color:#fff;">
                                        <span style="text-transform:uppercase;">Tarifs Week-end & Mid Week-end</span>
                                        <div style="font-size:10px;">(Uniquement hors vacances scolaires)</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="145"></th>
                                    <th>4 nuits <br> Mid week-end</th>
                                    <th>2 nuits <br> Week-end</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tarifs->getGroup('tarifs.week-end-prices')->getArray() as $price)
                                <tr>
                                    <td>
                                        <span style="text-transform:uppercase;">{{$price->getText('gite')}}</span> <br>
                                        <span style="font-size:11px">{{ $price->getText('capacity') }} Pers</span>
                                    </td>
                                    <td>{{ number_format($price->getNumber('mid-week-end')->getValue(), 0, ", ", "") }} €</td>
                                    <td>{{ number_format($price->getNumber('week-end')->getValue(), 0, ", ", "") }} €</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        <p>
                            * Gîtes labellisés tourisme & handicap
                        </p>
                        <p>
                            Mid-week 4 nuits : arrivée lundi 10h00 et départ vendredi 10h00<br>
                            Week-end 2 nuits : arrivée vendredi 16h00 et départ dimanche 16h00
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns text-center">
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <td bgcolor="#7B8546"><img src="/_assets/img/cadeaux.png" width="150" height="124" style="border:0;margin:0;box-shadow:none;"></td>
                                <td bgcolor="#7B8546" style="color:#fff;"><strong>Cheques-Cadeaux disponibles !</strong><br>
                                Faites plaisir à vos proches !<br>
                                <br>
                                Contactez  Michelle.</td>
                            </tr>
                        </table>
                    </div>
                    <div class="medium-12 columns">
                        <h5>Calendrier tarifaire {{ Carbon\Carbon::now()->year + 1 }}</h5>
                        <table id="table-schedule" class="table" style="border: solid 1px #ddd;">
                            <thead>
                                <tr>
                                    <th style="border: solid 1px #ddd;text-align:center;">Basse saison</th>
                                    <th style="border: solid 1px #ddd;text-align:center;">Moyenne saison</th>
                                    <th style="border: solid 1px #ddd;text-align:center;">Haute saison</th>
                                    <th style="border: solid 1px #ddd;text-align:center;">Très haute saison</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tarifs->getGroup('tarifs.price-schedule')->getArray() as $schedule)
                                <tr>
                                    <td style="font-size: 11px;width:25%;border: solid 1px #ddd;text-align:center;">
                                        {!! $schedule->getStructuredText('low-season')->asHtml() !!}
                                    </td>
                                    <td style="font-size: 11px;width:25%;border: solid 1px #ddd;text-align:center;">
                                        {!! $schedule->getStructuredText('mid-season')->asHtml() !!}
                                    </td>
                                    <td style="font-size: 11px;width:25%;border: solid 1px #ddd;text-align:center;">
                                        {!! $schedule->getStructuredText('high-season')->asHtml() !!}
                                    </td>
                                    <td style="font-size: 11px;width:25%;border: solid 1px #ddd;text-align:center;">
                                        {!! $schedule->getStructuredText('very-high-season')->asHtml() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        <h5>Disponibilité des gites</h5>
                        <p>Pour connaitre la disponibilité des gites cliquez sur le bouton ci-dessous</p>
                        <a href="https://www.dropbox.com/s/mqgvpgl5lcr8so8/planning-disponibilite-gite.pdf?dl=0" target="_blank" class="button primary tiny">
                            Voir la disponibilité des gites
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        {!! $tarifs->getStructuredText('tarifs.mentions_legales')->asHtml() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.scroll-to-top')
    @include('partials.map')
@endsection