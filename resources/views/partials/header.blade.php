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
                		  <img src="https://bois-peschard-freshmakerz.c9users.io/_assets/img/logos/gdf.png" alt="" width="40">
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
                <li class="name"> <a title="Gites du bois peschard" class="logo" href="/"><img alt="" src="/_assets/img/logo.jpg" /></a> </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
            </ul>
            <section class="top-bar-section">
                @include('partials.menu')
            </section>
        </nav>
    </div>
</header>

<style type="text/css">
    .utility-nav {
        padding: 7px 0!important;
    }
    #droplang li {
        float: none;
        background: #3e4347;
    }
    #droplang:before {
        border-color: transparent transparent #3e4347 transparent;
    }
    .ribbon {
    border-radius: 0;
    position: absolute!important;
    right: 0;
    top: -9px;
    float: left;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    transition: all 0.2s ease;
    cursor: pointer;
    border: none;
    background: #82bcc4;
    width: 60px;
    height: 50px;
    position: relative;
    color: white;
    padding: 5px;
    -webkit-filter: drop-shadow(0 1px 10px rgba(0, 0, 0, 0.5));
    -moz-filter: drop-shadow(0 1px 10px rgba(0, 0, 0, 0.5));
    -ms-filter: drop-shadow(0 1px 10px rgba(0, 0, 0, 0.5));
    -o-filter: drop-shadow(0 1px 10px rgba(0, 0, 0, 0.5));
    filter: drop-shadow(0 1px 10px rgba(0, 0, 0, 0.5));
    }

.ribbon i {
    font-size: 9px;
    float: left;
    color: #f9da07;
}
.ribbon:before {
    content: '';
    position: absolute;
    top: 100%;
    left: 0;
    width: 0;
    height: 0;
    border-top: 25px solid #82bcc4;
    border-right: 60px solid transparent;
}
.ribbon:after {
    content: '';
    position: absolute;
    top: 100%;
    right: 0;
    width: 0;
    height: 0;
    border-top: 25px solid #82bcc4;
    border-left: 60px solid transparent;
}

.twitter {
    background: #82bcc4;
    color: #00526b;
}
.twitter:after {
    border-top-color: #82bcc4;
}
.twitter:before {
    border-top-color: #82bcc4;
}
.corner-ribbon{
  width: 200px;
  background: #82bcc4;
  position: absolute;
  top: 25px;
  left: -50px;
  text-align: center;
  line-height: 40px;
  letter-spacing: 1px;
  color: #f0f0f0;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  font-size: 12px;
}
.corner-ribbon.shadow{
  box-shadow: 0 0 3px rgba(0,0,0,.3);
}
</style>