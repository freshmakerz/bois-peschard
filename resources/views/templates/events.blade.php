@extends('app')

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Evenements', 'url' => '/evenements']
    ]])
    @include('partials.page-title', ['title' => 'Les évenements'])
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
                                        <h3><a href="{{ $event['link'] }}">{{ $event['title'] }}</a></h3>
                                        {!! $event['description'] !!}                                     
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