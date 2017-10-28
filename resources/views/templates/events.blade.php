@extends('app')

@section('title', 'Location Gîtes Morbihan évènements - Les Gîtes du Bois Peschard')

@section('description', "Profitez pleinement des évènements organisés entre Vannes et Rennes en louant un gîte de charme idéalement situé")

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'événements', 'url' => '/evenements']
    ]])
    @include('partials.page-title', ['title' => 'Les événements'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns">
                <div class="row">
                    @if($events)
                        @foreach($events as $event)
                        <div class="medium-12 columns">
                            <div class="event-item inner">
                                <div class="row">
                                    <div class="medium-12 columns">
                                        <h3><a href="{{ $event->getLink('evenements.link') ? $event->getLink('evenements.link')->getUrl() : '#' }}" target="_blank">{{ $event->getText('evenements.title') }}</a></h3>
                                        {!! $event->getStructuredText('evenements.description')->asHtml() !!}                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('partials.scroll-to-top')
    @include('partials.map')
@endsection