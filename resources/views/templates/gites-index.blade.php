@extends('app')

@section('title', 'Location Gîtes de France en Bretagne - Les Gîtes du Bois Peschard')

@section('description', "Les Gîtes du Bois Peschard accueillent de 2 à 8 personnes au sein de 5 gîtes de charme avec piscine. Les gîtes comptent de 1 à 4 chambres afin de vous offrir un confort optimal lors de votre séjour en Bretagne")

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Gites', 'url' => '/gites']
    ]])
    @include('partials.page-title', ['title' => 'Gites de charme'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                <div class="row">
                    @foreach($gites as $gite)
                    <div class="medium-6 columns left text-center">
                        <div class="room-item">
                            <a href="{{ route('gite_show', ['slug' => $gite->getUid()]) }}">
                                <img alt="{{ $gite->getImage('gites.thumbnail')->getAlt() }}" src="{{ $gite->getImage('gites.thumbnail')->getUrl() }}">
                            </a>
                            <h4>
                                <a href="{{ route('gite_show', ['slug' => $gite->getUid()]) }}">{{ $gite->getText('gites.name') }}</a>
                                <img src="/_assets/img/icons/{{ $gite->getUid() }}.png" alt="" style="margin: -7px 0 0 10px;border:none;box-shadow:none;height:40px;">
                                <h6 style="text-transform:initial;font-style:italic;text-decoration: underline;">{{ $gite->getText('gites.capacity') }} personnes</h6>
                            </h4>
                            <p>{!! $gite->getStructuredText('gites.short-description')->asHtml() !!}</p>
                            <p>à partir de <b>{{ number_format($gite->getNumber('gites.start-from')->getValue()) }}</b>€ / semaine</p>
                            <a href="/reservation?gite={{ $gite->getId() }}" class="button  tiny">
                                Je reserve
                            </a>
                            <a href="{{ route('gite_show', ['slug' => $gite->getUid()]) }}" class="button secondary tiny">
                                Plus d'infos
                            </a>
                            <hr>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('partials.scroll-to-top')
    @include('partials.map')
@endsection