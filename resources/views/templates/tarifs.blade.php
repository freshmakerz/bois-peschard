@extends('app')

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
                    <div class="medium-5 columns">
                        <h5>Tarifs week-end & mid week-end</h5>
                        <table id="week-end" class="prices">
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
                    <div class="medium-12 columns">
                        <h5>Disponibilité des gites</h5>
                        <p>Pour connaitre la disonibilité des gites naviguez sur le calendrier ci-dessous et aidez-vous du code couleur de chaque gite</p>
                        <ul class="inline-list">
                            @foreach($gites as $gite)
                            <li>{{ $gite->getText('gites.name') }} <span class="gite-id" style="height:15px;width:15px;display: inline-block;border-radius:50%;position:relative;top:3px;background-color:{{ $gite->getColor('gites.color-code')->getHexValue() }}"></span></li>
                            @endforeach
                        </ul>
                        <div class="flex-video">
                            <iframe src="https://calendar.google.com/calendar/embed?title=Gites&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=freshmakerz.fr_vvcuf485jrl5ds4hchhqr8dnfs%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=freshmakerz.fr_15kseuqptqc547m0mjr6ccgtms%40group.calendar.google.com&amp;color=%236B3304&amp;src=freshmakerz.fr_rqpiuhacjbjlivugb9p2hi8o30%40group.calendar.google.com&amp;color=%23B1440E&amp;src=freshmakerz.fr_e464b60mrughtd47oibe5jbhug%40group.calendar.google.com&amp;color=%235229A3&amp;src=freshmakerz.fr_pk5rm3vnk9uov0nmmbgiulfgns%40group.calendar.google.com&amp;color=%23865A5A&amp;ctz=Europe%2FParis" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.scroll-to-top')
    @include('partials.map')
@endsection