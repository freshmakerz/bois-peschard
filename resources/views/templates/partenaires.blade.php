@extends('app')

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Nos partenaires', 'url' => '/partenaires']
    ]])
    @include('partials.page-title', ['title' => 'Nos partenaires'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                <div class="row">
                    @foreach($partenaires->getGroup('partenaires.collection')->getArray() as $item)
                    <div class="medium-12 columns">
                        <div class="row">
                            <div class="medium-4 columns">
                                <a href="{{ $item->getLink('url')->getUrl() }}" target=_blank>
                                    @if($item->getImage('image'))
                                        <img alt="{{ $item->getText('name') }}" src="{{ $item->getImage('image')->getUrl() }}">
                                    @else
                                        <img alt="{{ $item->getText('name') }}" src="//placehold.it/324x216?text={{ $item->getText('name') }}">
                                    @endif
                                </a>
                            </div>
                            <div class="medium-8 columns top-heavy">
                                <h4><a href="{{ $item->getLink('url')->getUrl() }}" target=_blank>{{ $item->getText('name') }}</a></h4>
                                {!! $item->getStructuredText('description')->asHtml() !!}
                                <a href="{{ $item->getLink('url')->getUrl() }}" target=_blank class="button secondary tiny">Plus de détails</a><hr>
                            </div>
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