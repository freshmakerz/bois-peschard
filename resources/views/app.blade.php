<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="/favicon.png" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        @section('styles')
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=IM+Fell+Great+Primer|Droid+Sans+Mono|Montserrat:400,700" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
        @show
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
            <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
            <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="app">
            @include('partials.header')
            <article>
                @yield('content')
            </article>
            @include('partials.footer')
        </div>
        @section('scripts')
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIwFlU8aS0YEm1CQCYvUQhEAcdeZgi3sE"></script>
            <script>
                window.Laravel = <?php echo json_encode([
                        'csrfToken' => csrf_token(),
                    ]); ?>
            </script>
            <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
        @show
    </body>
</html>
