@extends('app')

@section('title', 'Nos clients parlent de nous')

@section('content')
    @include('partials.breadcrumbs', ['breadcrumbs' => [
        ['name' => 'Livre d\'or', 'url' => '/livre-d-or']
    ]])
    @include('partials.page-title', ['title' => 'Livre d\'or'])
    <section class="main">
        <div class="row">
            <div class="medium-12 columns main-content">
                <!--
                <div class="row">
                    <div class="medium-12 columns text-center">
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                            dolor in hendrerit in vulputate velit esse.
                        </p>
                    </div>
                </div>
                -->
                @foreach($gites as $gite)
                <div class="row">
                    <div class="medium-12 columns text-center">
                        <h4 style="margin: 25px 0;">
                            <a href="{{ route('gite_show', ['slug' => $gite->getUid()]) }}">{{ $gite->getText('gites.name') }}</a>
                            <img src="/_assets/img/icons/{{ $gite->getUid() }}.png" alt="" style="margin: -7px 0 0 10px;border:none;box-shadow:none;height:40px;">
                        </h4>
                        <div id="book-{{ $gite->getUid() }}" class="pages-container">
                            @if($gite->getGroup('gites.pages'))
                            <ul>
                                @foreach($gite->getGroup('gites.pages')->getArray() as $page)
                                <li>
                                    <a href="{{ $page->getImage('page')->getView('main')->getUrl() }}">
                                        <img src="{{ $page->getImage('page')->getView('thumb')->getUrl() }}" alt="Gite le">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <hr>
                    </div>
                </div>
                <script>
                    var gite = '<?php echo $gite->getUid(); ?>';
                    document.getElementById('book-'+gite).onclick = function (event) {
                        event = event || window.event;
                        var target = event.target || event.srcElement,
                            link = target.src ? target.parentNode : target,
                            options = {index: link, event: event},
                            links = this.getElementsByTagName('a');
                        blueimp.Gallery(links, options);
                    };
                </script>
                @endforeach
            </div>
        </div>
    </section>
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    @include('partials.scroll-to-top')
    @include('partials.map')
    @section('styles')
        @parent
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/blueimp-gallery/2.25.2/css/blueimp-gallery.min.css" type="text/css" />
        <style>
            .pages-container ul { list-style: none; padding: 0; margin: 0; }
            .pages-container li { float: left; width: 18%; margin: 0 2% 0 0;  }
        </style>
    @endsection
    @section('scripts')
        @parent
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-gallery/2.25.2/js/blueimp-gallery.min.js"></script>
    @endsection
@endsection