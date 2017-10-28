@extends('app')

@section('title', 'Tarif Location Gîte Morbihan Bretagne - Les Gîtes du Bois Peschard ')

@section('description', "Réservez votre semaine à partir de 390€ dans un gîte de charme tout confort niché entre Rennes et Vannes. Profitez du cadre de pure nature pour vous ressourcer. Les Gîtes du Bois Peschard sont labellisés 5 épis au registre des Gîtes de France ")

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
                            Mid-week 4 nuits : arrivée lundi 12 h 00 et départ vendredi 12 h 00<br>
                            Week-end 2 nuits : arrivée vendredi 16 h 00 et départ dimanche 16 h 00
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
                        <h5>Calendrier tarifaire 2017-2018</h5>
                        <table class="table" style="border: solid 1px #ddd;">
                            <thead>
                                <tr>
                                    <th style="border: solid 1px #ddd;text-align:center;">Basse saison</th>
                                    <th style="border: solid 1px #ddd;text-align:center;">Moyenne saison</th>
                                    <th style="border: solid 1px #ddd;text-align:center;">Haute saison</th>
                                    <th style="border: solid 1px #ddd;text-align:center;">Très haute saison</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-size: 11px;width:25%;border: solid 1px #ddd;text-align:center;">
                                        04/01 au 01/04 <br>
                                        01/10 au 20/10 <br>
                                        06/11 au 22/12
                                    </td>
                                    <td style="font-size: 11px;width:25%;border: solid 1px #ddd;text-align:center;">
                                        01/04 au 01/07 <br>
                                        02/09 au 30/09 <br>
                                        23/12 au 05/01/18 
                                    </td>
                                    <td style="font-size: 11px;width:25%;border: solid 1px #ddd;text-align:center;">
                                        01/07 au 15/07 <br>
                                        19/08 au 02/09
                                    </td>
                                    <td style="font-size: 11px;width:25%;border: solid 1px #ddd;text-align:center;">
                                        15/07 au 19/08
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        <h5>Disponibilité des gites</h5>
                        <p>Pour connaitre la disonibilité des gites naviguez sur le calendrier ci-dessous et aidez-vous du code couleur de chaque gite</p>
                        <ul class="inline-list">
                            @foreach($gites as $gite)
                            <li>{{ $gite->getText('gites.name') }} <span class="gite-id" style="height:15px;width:15px;display: inline-block;border-radius:50%;position:relative;top:3px;background-color:{{ $gite->getColor('gites.color-code')->getHexValue() }}"></span></li>
                            @endforeach
                        </ul>
                        <div class="flex-video">
                            <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=hfbs07d5pqo2inpfsbikeirabc%40group.calendar.google.com&amp;color=%23711616&amp;src=908b17fqhnvepeue8vu312827o%40group.calendar.google.com&amp;color=%23182C57&amp;src=lid4ep8ocq51m0nio7o87344g4%40group.calendar.google.com&amp;color=%23B1365F&amp;src=572j87tdbq73ktadt4gveltd6k%40group.calendar.google.com&amp;color=%235F6B02&amp;src=0beavb083icvi8lb75upjnuvbc%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Europe%2FParis" style="border-width:0" width="800" height="700" frameborder="0" scrolling="no"></iframe>
                        </div>
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