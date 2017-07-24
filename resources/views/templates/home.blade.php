@extends('app')

@section('content')
    <!-- Home slider -->
    <section class="slider">
        <a href="/reservation" class="button small reservation home"><span class="fa fa-calendar"></span> Réserver</a>
        <div class="slide-description" style="top:0;">
            <div class="row">
                <div class="medium-12 column"> 
                    <h1>Détente, confort et douceur de vivre</h1>
                    <h2>au cœur de la Bretagne</h2>
                    <img alt="" src="/_assets/img/ui/arrow-icon.png" /> 
                </div>
            </div>
        </div>
        <div class="hero-slider">
            <div class="slide">
                <img alt="" src="/_assets/img/slider/slider-1.jpg" />
            </div>
            <div class="slide">
                <img alt="" src="/_assets/img/slider/slider-2.jpg" />
            </div>
            <div class="slide">
                <img alt="" src="/_assets/img/slider/slider-3.jpg" />
            </div>
        </div>
    </section>
    <!-- Home features -->
    <section class="features">
        <div class="medium-6 large-4 feature-item">
            <div class="feature-image">
                <div class="arrow top"></div>
                <img alt="" src="/_assets/img/ui/feature-1.jpg" />
            </div>
            <div class="feature-item-details feature-1">
                <div class="row">
                    <div class="medium-3 columns">
                        <img alt="" src="/_assets/img/ui/feature-1.png" />
                    </div>
                    <div class="medium-9 columns">
                        <h3>Détente</h3>
                        <p>Michelle Orhand, votre hôte vous accueille dans un cadre de pure quiétude, ou seuls les murmures de la nature se font écho.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="medium-6 large-4 feature-item">
            <div class="feature-item-details feature-2">
                <div class="row">
                    <div class="medium-3 columns">
                        <img alt="" src="/_assets/img/ui/feature-2.png" />
                    </div>
                    <div class="medium-9 columns">
                        <h3>Confort</h3>
                        <p>Ce projet de gîtes longuement mûri alliant le charme des vieilles pierres et le standing d'aujourd'hui, a été pensé dans les moindres détails. Labellisé 5 épis Gites de france.</p>
                    </div>
                </div>
            </div>
            <div class="feature-image">
                <div class="arrow down"></div>
                <img alt="" src="/_assets/img/ui/feature-3.jpg" />
            </div>
        </div>
        <div class="large-4 feature-item">
            <div class="feature-image">
                <div class="arrow top top-2"></div>
                <img alt="" src="/_assets/img/ui/feature-2.jpg" />
            </div>
            <div class="feature-item-details feature-3">
                <div class="row">
                    <div class="medium-3 columns">
                        <img alt="" src="/_assets/img/ui/feature-3.png" />
                    </div>
                    <div class="medium-9 columns">
                        <h3>Douceur de vivre</h3>
                        <p>Imaginez-vous le paradis sur terre... en Bretagne, près d'une forêt de légende, ou les sous-bois racontent des histoires...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home events -->
    <section class="events">
        <div class="row">
            <div class="medium-6 columns">
                <h1>Événements</h1>
                <h6> au gite du bois peschard</h6>
                <p class="lead">
                    Découvrez tous les évènements autour du pays de la Gacilly.
                </p>
                <a href="/evenements" class="button secondary tiny">Voir tous les évenements</a>
            </div>
            <div class="medium-6 columns">
                @if($events)
                    @foreach($events as $event)
                    <div class="event-item">
                        <div class="row">
                            <div class="medium-2 columns">
                                <div class="event-date">
                                    @if($event->getDate('evenements.date'))
                                    <span class="month">
                                        <?php $date = new DateTime($event->getDate('evenements.date')->asText()); echo $date->format('M'); ?>
                                    </span>
                                    <span class="day">
                                        {{ explode('-', $event->getDate('evenements.date')->asText())[2] }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="medium-10 columns">
                                <h3><a  href="{{ $event->getLink('evenements.link') ? $event->getLink('evenements.link')->getUrl() : '#' }}" target="_blank">{{ str_limit($event->getText('evenements.title'), 35) }}</a></h3>
                                <p>{{ str_limit($event->getText('evenements.description'), 110) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- Home testimonials -->
    <section class="testimonials">
        <div class="testimonial-slider">
            @foreach($testimonials as $testimonial)
            <div class="slide">
                <div class="medium-10 columns small-centered testimonial-detail">
                    <blockquote>
                        <div class="rating">
                            @for($i = 1;$i <= $testimonial->rating; $i++)
                                <img alt="" src="/_assets/img/ui/star.png" /> 
                            @endfor
                            @if($testimonial->rating < 5)
                                @for($i = 1;$i <= (5 - $testimonial->rating); $i++)
                                    <img alt="" src="/_assets/img/ui/star-dark.png" />
                                @endfor
                            @endif
                        </div>
                        <p>{{ $testimonial->content }}</p>
                        <h5>{{ $testimonial->customer_name }}</h5>
                    </blockquote>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Map -->
    @include('partials.map')
@endsection