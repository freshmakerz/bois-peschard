@extends('layouts.app')

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Nos partenaires', 'url' => '/partenaires']
    ]])
    @include('partials.page-title', ['title' => 'Nos partenaires'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                <div class="row">
                    <div class="medium-12 columns">
                        <div class="row">
                            <div class="medium-4 columns">
                                <a href="http://uguru-bedandbreakfast-us.businesscatalyst.com/special/weddings">
                                    <img alt="" src="//placehold.it/324x216">
                                </a>
                            </div>
                            <div class="medium-8 columns top-heavy">
                                <h4><a href="/special/weddings">Partenaire 1</a></h4>
                                <p>A wedding upon the elegant grounds and facilities at The Ashcroft is sure to set the stage for an event that you and your guests will never forget.  </p>
                                <a href="http://uguru-bedandbreakfast-us.businesscatalyst.com/special/weddings" class="button secondary tiny">More Details</a><hr>
                            </div>
                        </div>
                    </div>
                    <div class="medium-12 columns">
                        <div class="row">
                            <div class="medium-4 columns">
                                <a href="http://uguru-bedandbreakfast-us.businesscatalyst.com/special/weddings">
                                    <img alt="" src="//placehold.it/324x216">
                                </a>
                            </div>
                            <div class="medium-8 columns top-heavy">
                                <h4><a href="/special/weddings">Partenaire 2</a></h4>
                                <p>A wedding upon the elegant grounds and facilities at The Ashcroft is sure to set the stage for an event that you and your guests will never forget.  </p>
                                <a href="http://uguru-bedandbreakfast-us.businesscatalyst.com/special/weddings" class="button secondary tiny">More Details</a><hr>
                            </div>
                        </div>
                    </div>
                    <div class="medium-12 columns">
                        <div class="row">
                            <div class="medium-4 columns">
                                <a href="http://uguru-bedandbreakfast-us.businesscatalyst.com/special/weddings">
                                    <img alt="" src="//placehold.it/324x216">
                                </a>
                            </div>
                            <div class="medium-8 columns top-heavy">
                                <h4><a href="/special/weddings">Partenaire 3</a></h4>
                                <p>A wedding upon the elegant grounds and facilities at The Ashcroft is sure to set the stage for an event that you and your guests will never forget.  </p>
                                <a href="http://uguru-bedandbreakfast-us.businesscatalyst.com/special/weddings" class="button secondary tiny">More Details</a><hr>
                            </div>
                        </div>
                    </div>
                    <div class="medium-12 columns">
                        <div class="row">
                            <div class="medium-4 columns">
                                <a href="http://uguru-bedandbreakfast-us.businesscatalyst.com/special/weddings">
                                    <img alt="" src="//placehold.it/324x216">
                                </a>
                            </div>
                            <div class="medium-8 columns top-heavy">
                                <h4><a href="/special/weddings">Partenaire 4</a></h4>
                                <p>A wedding upon the elegant grounds and facilities at The Ashcroft is sure to set the stage for an event that you and your guests will never forget.  </p>
                                <a href="http://uguru-bedandbreakfast-us.businesscatalyst.com/special/weddings" class="button secondary tiny">More Details</a><hr>
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