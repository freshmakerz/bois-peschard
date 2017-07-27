@extends('app')

@section('title', 'Piscine et loisirs à volonté')

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Les loisirs', 'url' => '/loisirs']
    ]])
    @include('partials.page-title', ['title' => 'Les loisirs'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                {!! $loisirs->getStructuredText('loisirs.content')->asHtml() !!}
                <div class="row">
                @foreach($loisirs->getGroup('loisirs.activities')->getArray() as $activity)
                    <div class="medium-12 columns">
                        <div class="row">
                            @if($loop->index % 2 == 0)
                            <div class="medium-6 columns text-right">
                                <img src="{{ $activity->getImage('thumbnail')->getUrl() }}" alt="" style="border: medium none;box-shadow: none;">
                            </div>
                            <div class="medium-6 columns top-heavy">
                                {!! $activity->getStructuredText('description')->asHtml() !!}
                                <hr>
                            </div>
                            @else
                            <div class="medium-6 columns top-heavy">
                                {!! $activity->getStructuredText('description')->asHtml() !!}
                                <hr>
                            </div>
                            <div class="medium-6 columns text-right">
                                <img src="{{ $activity->getImage('thumbnail')->getUrl() }}" alt="" style="border: medium none;box-shadow: none;">
                            </div>
                            @endif
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


