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
                    <li><a href="https://www.gites-de-france-morbihan.com/" target="_blank">5 épis gites de France <img src="/_assets/img/logos/5epis.png" alt="5 épis gites de france"/></a></li>
                </ul>
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