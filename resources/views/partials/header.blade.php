<header>
    <div class="corner-ribbon top-left sticky red shadow">Nouveau site</div>
    <section class="utility-nav">
        <div class="row">
            <div class="medium-5 columns">
                <ul class="left">
                    <li><a><span class="fa fa-phone"></span>+(33) 6 1O 03 09 43</a></li>
                    <li><a href="#map"><span class="fa fa-map-marker"></span>56910 Quelneuc, Morbihan - Bretagne</a></li>
                </ul>
            </div>
            <div class="medium-7 columns">
                <ul class="right">
                    <li style="margin-right: 50px;">
                        <a data-dropdown="droplang" aria-controls="drop1" aria-expanded="false">
                            @if(app()->getLocale() === 'fr-fr')
                            <span class="flag-icon flag-icon-fr flag-icon-squared"></span>  Francais <i class="ion-android-arrow-dropdown"></i>
                            @else
                            <span class="flag-icon flag-icon-gb flag-icon-squared"></span>  English <i class="ion-android-arrow-dropdown"></i>
                            @endif
                        </a>
                        <!--
                        <ul id="droplang" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
                            @if(app()->getLocale() === 'fr-fr')
                            <li><a href="{{ route('lang_switch', ['locale' => 'en-gb']) }}"><span class="flag-icon flag-icon-gb flag-icon-squared"></span> English</a></li>
                            @else
                            <li><a href="{{ route('lang_switch', ['locale' => 'fr-fr']) }}"><span class="flag-icon flag-icon-fr flag-icon-squared"></span> Francais</a></li>
                            @endif
                        </ul>
                        -->
                    </li>
                </ul>
                 <a href="https://www.gites-de-france-morbihan.com/" target="_blank" title="Gites de France 5 épis">
                	  <button class="ribbon twitter">
                		  <img src="/_assets/img/logos/gdf.png" alt="" width="40">
                		  <div style="position: relative;z-index: 100;">
                		      <i class="ion-ios-star"></i>
                		      <i class="ion-ios-star"></i>
                		      <i class="ion-ios-star"></i>
                		      <i class="ion-ios-star"></i>
                		      <i class="ion-ios-star"></i>
                		  </div>
                	  </button>
                  </a>
            </div>
        </div>
    </section>
    <div class="contain-to-grid">
        <nav class="top-bar" data-topbar="data-topbar">
            <ul class="title-area">
                <li class="name"> <a title="Gites du bois peschard" class="logo" href="/"><img alt="Gîtes Morbihan - Les Gîtes du Bois Peschard" src="/_assets/img/logo.jpg" /></a> </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
            </ul>
            <section class="top-bar-section">
                @include('partials.menu')
            </section>
        </nav>
    </div>
</header>