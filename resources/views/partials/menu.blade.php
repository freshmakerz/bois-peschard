<style type="text/css">
    .top-bar-section li {
        margin: 0 7px!important;
    }
    .top-bar-section a {
        padding: 0 10px 25px!important;
        position: relative
    }
    .top-bar-section a:after {
        content: '';
        height: 2px;
        width: 20px;
        background: #fff;
        position: absolute;
        bottom: 25px;
        left: 50%;
        margin-left: -10px;
    }
    .top-bar-section li.item-1.active a,
    .top-bar-section li.item-1:hover a {
        background: #54345a!important;
    }
    .top-bar-section li.item-2.active a,
    .top-bar-section li.item-2:hover a {
        background: #7c1262!important;
    }
    .top-bar-section li.item-3.active a,
    .top-bar-section li.item-3:hover a {
        background: #7e854c!important;
    }
    .top-bar-section li.item-4.active a,
    .top-bar-section li.item-4:hover a {
        background: #a685ac!important;
    }
</style>
<ul>
    <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }} item-1">
        <a href="/">Accueil</a>
    </li>
    <li class="{{ Request::route()->getName() === 'gite_index' ? 'active' : '' }} item-2">
        <a href="/gites">Nos gites</a>
    </li>
    <li class="{{ Request::route()->getName() === 'region_show' ? 'active' : '' }} item-3">
        <a href="/la-region">La région</a>
        <ul class="dropdown"></ul>
    </li>
    <li class="{{ Request::route()->getName() === 'loisirs_show' ? 'active' : '' }} item-4">
        <a href="/les-loisirs">Les loisirs</a>
        <ul class="dropdown"></ul>
    </li>
    <li class="{{ Request::route()->getName() === 'tarifs_show' ? 'active' : '' }} item-1">
        <a href="/tarifs">Tarifs & dispos</a>
        <ul class="dropdown"></ul>
    </li>
    <li class="{{ Request::route()->getName() === 'reservation_show' ? 'active' : '' }} item-2">
        <a href="/reservation">Réservation</a>
        <ul class="dropdown"></ul>
    </li>
    <li class="{{ Request::route()->getName() === 'partenaires_show' ? 'active' : '' }} item-3">
        <a href="/partenaires">Nos partenaires</a>
        <ul class="dropdown"></ul>
    </li>
    <li class="{{ Request::route()->getName() === 'contact_show' ? 'active' : '' }} item-4">
        <a href="/contact">Contact</a>
        <ul class="dropdown"></ul>
    </li>
</ul>