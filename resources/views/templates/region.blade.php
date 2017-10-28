@extends('app')

@section('title', 'Gîte Rural entre Rennes et Vannes - Les Gîtes du Bois Peschard')

@section('description', "Les Gîtes du Bois Peschard vous acueillent dans un cadre de pure nature dans le Morbihan, entre Rennes et Vannes. Pour agrémenter votre séjour sur place nous vous proposons une piscine chauffée, un sauna, des boxes à chevaux, une salle de jeux, un étang pour la pêche...")

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