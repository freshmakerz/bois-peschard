@extends('app')

@section('title', 'Au coeur du pays de La Gacilly')

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'La région', 'url' => '/la-region']
    ]])
    @include('partials.page-title', ['title' => 'La région'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                {!! $region->getStructuredText('region.content')->asHtml() !!}
                <div class="carousel-slider">
                    @foreach($region->getGroup('region.slides')->getArray() as $slide)
                    <div>
                        <img alt="" src="{{ $slide->getImage('slide')->getUrl() }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('partials.scroll-to-top')
    @include('partials.map')
@endsection