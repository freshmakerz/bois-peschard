<header>
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
                    <!--
                    <li><a href="https://www.gites-de-france-morbihan.com/" target="_blank">5 épis gites de France <img src="/_assets/img/logos/5epis.png" alt="5 épis gites de france"/></a></li>
                    -->
                </ul>
                 <a href="https://www.gites-de-france-morbihan.com/" target="_blank">
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

                {{-- app()->getLocale() --}}
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
    .ribbon {
    border-radius: 0;
    position: absolute!important;
    right: 0;
    top: -7px;
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
</style>