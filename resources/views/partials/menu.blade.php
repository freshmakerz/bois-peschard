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
    <li class="{{ Request::route()->getName() === 'livre_or_show' ? 'active' : '' }} item-3 item-hidden">
        <a href="/livre-d-or">Livre d'or</a>
        <ul class="dropdown"></ul>
    </li>
    <li class="{{ Request::route()->getName() === 'contact_show' ? 'active' : '' }} item-4 item-hidden">
        <a href="/contact">Contact</a>
        <ul class="dropdown"></ul>
    </li>
</ul>