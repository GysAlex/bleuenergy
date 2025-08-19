    <header>
        <!-- nav-bar pour les mobiles -->
        <div class="mobile-menu">
            <ul>
                <li>
                    <a class="<?php addClassIf(" ", 'active') ?>" href="/">Accueil</a>
                </li>
                <li>
                    <a class="<?php addClassIf("technologie", 'active') ?>" href="/technologie">Notre Processus</a>
                </li>
                <li>
                    <a class="<?php addClassIf("partenaire", 'active') ?>" href="/partenaire">Partenaires</a>
                </li>
                <li>
                    <a class="<?php addClassIf("about", 'active') ?>" href="/about">A propos</a>
                </li>
                <li>
                    <a class="<?php addClassIf("impact", 'active') ?>" href="/impact">Impact</a>
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
                    <a class="nav-item <?php addClassIf("technologie", 'active') ?>" href="/technologie">Technologie</a>
                </li>
                <li>
                    <a class="nav-item <?php addClassIf("partenaire", 'active') ?>" href="/partenaire">Partenaires</a>
                </li>
                <li>
                    <a class="nav-item <?php addClassIf("about", 'active') ?>" href="/about">A propos</a>
                </li>
                <li>
                    <a class="nav-item <?php addClassIf("impact", 'active') ?>" href="/impact">Impact</a>
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