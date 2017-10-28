@extends('app')

@section('title', $gite->getText('gites.title'))

@section('description', $gite->getText('gites.description'))

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Gites', 'url' => '/gites'],
        ['name' => $gite->getText('gites.name'), 'url' => '/gites/'.$gite->getUid()]
    ]])
    @include('partials.page-title', ['title' => $gite->getText('gites.name').'<img src="/_assets/img/icons/'.$gite->getUid().'.png" alt="" style="margin: -7px 0 0 15px;border:none;box-shadow:none;">'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content inner"> 
                <div class="row">
                    <div class="medium-12 columns">
                        <div class="carousel-slider">
                            @foreach($gite->getGroup('gites.slides')->getArray() as $slide)
                            <div>
                                <img alt="" src="{{ $slide->getImage('slide')->getUrl() }}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-10 columns small-centered">
                        <div class="row">
                            <div class="medium-7 columns">
                                <h3>A propos</h3>
                                {!! $gite->getStructuredText('gites.long-description')->asHtml() !!}
                                <p>A partir de <b>{{ $gite->getNumber('gites.start-from')->getValue() }}</b>€/semaine (Basse saison)</p>
                                <p style="margin: 1.50rem 0 0 0;">
                                    <a href="/tarifs" class="button secondary tiny">Tarifs</a>
                                    <a href="/reservation?gite={{ $gite->getId() }}" class="button tiny">Je réserve</a>
                                </p>
                            </div>
                            <div class="medium-5 columns">
                                <h3>Equipements & services</h3>
                                {!! $gite->getStructuredText('gites.features')->asHtml() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.scroll-to-top')
    @include('partials.map')
@endsection