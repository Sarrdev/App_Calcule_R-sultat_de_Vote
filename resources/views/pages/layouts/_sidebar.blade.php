<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <div class="navbar-brand-box">
            <a href="index.html" class="logo">
                <i class="mdi mdi-album"></i>
                <span>
                    SENEGAL 2K24
                </span>
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('pages.index')}}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                            class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="mdi mdi-diamond-stone"></i><span>UI Elements</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a>
                        <li><a href="ui-embeds.html">Embeds</a>
                        <li><a href="ui-general.html">General</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                        <li><a href="ui-media-objects.html">Media Objects</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-tabs.html">Tabs</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-toasts.html">Toasts</a></li>
                        <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                        <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                        <li><a href="ui-spinners.html">Spinners</a></li>
                        <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="mdi mdi-table-merge-cells"></i><span>Pages</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('pages.listcandidat')}}">Listes des candidats</a></li>
                        <li><a href="{{route('pages.listregion')}}">Listes des région</a></li>
                        <li><a href="{{route('pages.affiche')}}">Listes des résultats</a></li>
                        <li><a href="{{route('pages.gagnant')}}">Afficher le résultat</a></li>
                        <li><a href="{{route('pages.affichePerdu')}}">Liste des candidats perdu</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>