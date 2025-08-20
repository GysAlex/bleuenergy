    <style>
        /* Cache tous les sous-menus par défaut */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 250px;
            z-index: 10;
            list-style: none;
            padding: 10px 0;
            margin: 0;
            opacity: 0;
            visibility: hidden;
            border-top: solid 10px transparent;
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s;
        }

        /* Style de l'élément parent qui a le sous-menu */
        li {
            position: relative; /* Nécessaire pour positionner le sous-menu */
        }

        .dropdown-menu li
        {
            background-color: white;
            padding: 5px;
            box-shadow: 1px 5px 10px rgba(0, 0, 0, .25);
            display: flex;
            align-items: center;
            justify-content: start;
        }

        .dropdown-menu li:hover a
        {
            background: var(--simple-gradient) !important;
            background-clip: text !important;
            color: transparent !important;
        }

        /* Affiche et anime le sous-menu au survol du parent <li> */
        li:hover .dropdown-menu {
            display: flex;
            flex-direction: column;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Styles pour les liens du sous-menu */
        .dropdown-menu a {
            display: block !important;
            padding: 10px 20px !important;
            text-decoration: none !important;
            background: none !important;
            color: #333 !important;
            font-size: 14px;
            transition: all ease 0.3s !important;
        }

        .dropdown-menu a::before
        {
            background: none !important;
        }

        .dropdown-menu a:hover {
            background-color: #f0f0f0;
        }

        /* Style et animation du chevron */
        .dropdown-icon {
            margin-left: 8px;
            transition: transform 0.6s ease;
        }

        /* Fait pivoter le chevron de 180 degrés au survol */
        li:hover .dropdown-icon {
            transform: rotate(180deg);
        }

     /* Style du sous-menu */

     .mobile-menu .has-submenu
     {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: center;
        height: auto;
        min-height: 55px;
        position: relative;
    }


    .mobile-menu .submenu {
        display: none;
        width: 100%;
        overflow: hidden;
        height: 0;
        list-style: none;
        transition-behavior: allow-descrete;
        transition-property: display height;
        transition-duration: .4s;
        transition-timing-function: ease-in;
        padding: 10px;
        margin: 0;
        background-color: white;
        border-radius: 5px;
        transform: translateX(-15px);
        margin-bottom: 10px;
        margin-top: -20px;
    }

    .submenu li 
    {
        padding-left: 0px !important;

    }

    .submenu li::before
    {
        background: unset !important;
    }

    /* Style des éléments du sous-menu */
    .mobile-menu .submenu a {
        display: flex;
        align-items: center;
        gap: 9px;
        justify-content: start;
        font-size: 14px;
        color: #555;
        background-color: #f0f0f0;
    }

    /* Style de l'icône de chevron */
    .mobile-menu .submenu-icon {
        margin-left: 10px;
        transition: transform 0.3s ease;
    }

    /* Lorsque le sous-menu est actif, une classe est ajoutée par le JS, il s'étendra */
    .mobile-menu .has-submenu.active .submenu 
    {
        height: 200px; /* Mettez une valeur suffisamment grande */
        display: flex;
        @starting-style
        {
            height: 0;
        }

    }

    /* Fait pivoter l'icône lorsque le sous-menu est actif */
    .mobile-menu .has-submenu.active .submenu-icon {
        transform: rotate(180deg);
    }

    </style>
    <header>
        <!-- nav-bar pour les mobiles -->
        <div class="mobile-menu">
            <ul>
                <li>
                    <a class="<?php addClassIf(" ", 'active') ?>" href="/">Accueil</a>
                </li>
                <li class="has-submenu">
                    <a href="#">Notre Processus<i class="fa-solid fa-chevron-down submenu-icon"></i></a>
                    <ul class="submenu">
                        <li>
                            <a href="/technologie/tir">
                                <i class="fa-solid fa-arrow-right"></i>
                                Tri des déchets
                            </a>
                        </li>
                        <li>
                            <a href="/technologie/camion">
                                <i class="fa-solid fa-arrow-right"></i>
                                Camions
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="<?php addClassIf("partenaire", 'active') ?>" href="/partenaire">Partenaires</a>
                </li>
                <li>
                    <a class="<?php addClassIf("about", 'active') ?>" href="/about">A propos</a>
                </li>
                <li class="has-submenu">
                    <a class="<?php addClassIf("impact", 'active') ?>" href="/impact">Impact<i class="fa-solid fa-chevron-down submenu-icon"></i></a>
                    <ul class="submenu">
                        <li>
                            <a href="/impact/environnement">
                                <i class="fa-solid fa-arrow-right"></i>
                                impact environnement
                            </a>
                        </li>
                        <li>
                            <a href="/impact/economique">
                                <i class="fa-solid fa-arrow-right"></i>
                                impact économique
                            </a>
                        </li>
                        <li>
                            <a href="/impact/social">
                                <i class="fa-solid fa-arrow-right"></i>
                                impact sociale
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="<?php addClassIf("contact", 'active') ?>" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
        <nav>
            <div class="brand">
                <img src="/asset/images/logo.png" alt="logo">
            </div>
            <ul class="desktop-menu-items" >
                <li>
                    <a class=" nav-item <?php addClassIf("", 'active') ?>" href="/"  href="">Accueil</a>
                </li>
                <li>
                    <a class="nav-item <?php addClassIf("technologie", 'active') ?>" href="/technologie">
                        Technologie
                        <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="inner-menu" >
                            <a href="/technologie/tri">
                                <i class="fa-solid fa-arrow-right"></i>
                                Tri des déchets
                            </a>
                            
                        </li>
                        <li class="inner-menu">
                            <a href="/technologie/camion">
                                <i class="fa-solid fa-arrow-right"></i>
                                Camions
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-item <?php addClassIf("partenaire", 'active') ?>" href="/partenaire">Partenaires</a>
                </li>
                <li>
                    <a class="nav-item <?php addClassIf("about", 'active') ?>" href="/about">A propos</a>
                </li>
                <li>
                    <a class="nav-item <?php addClassIf("impact", 'active') ?>" href="/impact">
                        Impact
                        <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                    </a>
                    
                    <ul class="dropdown-menu">
                        <li class="inner-menu" >
                            <a href="/impact/environnement">
                                <i class="fa-solid fa-arrow-right"></i>
                                impact environnemental
                            </a>
                            
                        </li>
                        <li class="inner-menu">
                            <a href="/impact/social">
                                <i class="fa-solid fa-arrow-right"></i>
                                impact social
                            </a>
                        </li>

                        <li class="inner-menu">
                            <a href="/impact/economique">
                                <i class="fa-solid fa-arrow-right"></i>
                                impact économique
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-item <?php addClassIf("contact", 'active') ?>" href="/contact">Contact</a>
                </li>
            </ul>

            <div class="burger-menu">
                <p class="clic"></p>
                <p class="clic"></p>
                <p class="clic"></p>
            </div>
        </nav>
        <div class="nav-bg"></div>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const submenuLinks = document.querySelectorAll('.mobile-menu .has-submenu > a');

        submenuLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                const parentLi = this.closest('li');
                const hasActive = parentLi.classList.contains('active');

                // If the sub-menu is not active, prevent the default link behavior
                // and simply open the sub-menu.
                if (!hasActive) {
                    event.preventDefault();
                }
                
                // Toggle the 'active' class to show/hide the sub-menu.
                parentLi.classList.toggle('active');
            });
        });
    });
    </script>