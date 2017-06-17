<section class="breadcrumps-container">
    <div class="row">
        <div class="medium-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Accueil</a></li>
                @if(isset($breadcrumbs))
                    @foreach($breadcrumbs as $breadcrumb)
                        @if ($loop->last)
                        <li class="current"><a href="#">{{ $breadcrumb['name'] }}</a></li>
                        @else
                        <li><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</section>