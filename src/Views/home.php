<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=<?php asset('global.css') ?>>
    <link rel="stylesheet" href=<?php asset('accueil.css') ?>>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script> 
    <title>Blueu Energy | Accueil </title>
</head>
<body>
    <?php
        include __DIR__."/components/header.php";
    ?>
    
    <div class="hero">
        <div class="img-container">

            <div class="wrapper">
                <div class="content">

                    <div class="title">
                        Révolutionner la Gestion des Déchets pour une Mobilité Durable
                    </div>

                    <div class="explain">
                        <p>
                            Découvrez comment nous convertissons les déchets en une source d'énergie propre et
                            alimentons la mobilité urbaine de demain.
                        </p>
                    </div>

                    <div class="cta">
                        <button>
                          <a href="/technologie">
                                <span class="little-effect">Explorer notre technologie</span>
                            </a>
                        </button>

                        <button>
                            <a href="/impact">
                                Voir l'impact
                            </a>
                        </button>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <section class="probleme-section">
        <div class="probleme-container">
            <div class="probleme-grid">
                <div class="probleme-image-container">
                    <div class="probleme-image-inner">
                        <img src="/asset/images/pb.png" alt="Problème de la gestion des déchets">
                    </div>
                </div>

                <div class="probleme-content">
                    <h2 class="probleme-title">Le défi de la gestion des déchets au Cameroun</h2>
                    <div class="probleme-text-wrapper">
                        <p class="probleme-paragraphe">
                            Les villes camerounaises, notamment Yaoundé et Douala, font face à une crise croissante dans la gestion de leurs déchets urbains. Les décharges sauvages prolifèrent, les infrastructures de collecte sont insuffisantes et la méthode actuelle d’enfouissement constitue une solution temporaire, coûteuse et nuisible à l’environnement.
                        </p>
                        <p class="probleme-paragraphe">
                            Cette situation entraîne :
                        </p>
                        <ul class="probleme-list">
                            <li>Une dégradation des sols et des ressources en eau.</li>
                            <li>Une augmentation des émissions de gaz à effet de serre.</li>
                            <li>Des risques sanitaires élevés pour les populations.</li>
                            <li>Une urbanisation anarchique.</li>
                        </ul>
                        <p class="probleme-paragraphe">
                            Parallèlement, le secteur du transport urbain reste dominé par des moyens artisanaux et polluants (mototaxis, taxis vétustes, véhicules au carburant fossile), aggravant la congestion et l’empreinte carbone. L’absence d’une source énergétique propre et fiable freine la modernisation du transport public et la transition vers une mobilité durable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projet-wte-section">
        <div class="projet-wte-container">
            <div class="projet-wte-grid">
                <div class="projet-wte-content">
                    <h2 class="projet-wte-title">Une nouvelle approche: <b> Le projet Waste to Energy</b></h2>
                    <p class="projet-wte-paragraphe">
                        Le projet Waste to Energy (WTE), inscrit dans l’initiative Global Gateway de l’Union Européenne, vise à transformer durablement le modèle de gestion urbaine des déchets au Cameroun en créant une chaîne de valeur complète autour de la valorisation énergétique.
                    </p>
                    <div class="objectifs-list">
                        <div class="objectif-item">
                            <span class="objectif-icon-wrapper"><i class="fa-solid fa-bullseye"></i></span>
                            <p class="objectif-text">Assainir durablement l’environnement urbain en réduisant les volumes de déchets par la valorisation.</p>
                        </div>
                        <div class="objectif-item">
                            <span class="objectif-icon-wrapper"><i class="fa-solid fa-bullseye"></i></span>
                            <p class="objectif-text">Mettre en place un système intégré de collecte, traitement et recyclage des déchets.</p>
                        </div>
                        <div class="objectif-item">
                            <span class="objectif-icon-wrapper"><i class="fa-solid fa-bullseye"></i></span>
                            <p class="objectif-text">Produire localement du biogaz, du biodiesel et de la bioélectricité.</p>
                        </div>
                        <div class="objectif-item">
                            <span class="objectif-icon-wrapper"><i class="fa-solid fa-bullseye"></i></span>
                            <p class="objectif-text">Stimuler l’économie verte par la création d’emplois et la formation aux métiers liés aux énergies renouvelables et au recyclage.</p>
                        </div>
                        <div class="objectif-item">
                            <span class="objectif-icon-wrapper"><i class="fa-solid fa-bullseye"></i></span>
                            <p class="objectif-text">Alimenter la mobilité durable, notamment :(Une flotte logistique au biogaz, Le BRT de Douala et Yaoundé 100 % électrique vert, dont l’électricité sera fournie directement par les usines WTE.)</p>
                        </div>
                    </div>
                </div>

                <div class="projet-wte-image-container">
                    <div class="projet-wte-image-inner">
                        <img src="/asset/images/incinération.jpg" alt="Le projet Waste to Energy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <main >
            <div class="section1">
                <div class="ind">
                    <div class="title">
                        Comment allons nous procéder ?
                    </div>
                    <span >
                        Une approche innovante en trois phases, de la collecte des déchets à leur transformation en
                        énergie propre
                    </span>
                </div>
                <div class="main-content-wrapper">
                    <svg class="mysvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="148" height="1200" viewBox="0 0 128 1200">
                        <defs>
                            <linearGradient id="linearGradient8668444419"
                                gradientTransform="matrix(2.44929e-16 1088 -4 6.66208e-14 4 0)"
                                gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="1" y2="0.5">
                                <stop offset="0" stop-color="rgb(34, 197, 94)" />
                                <stop offset="1" stop-color="rgb(59, 130, 246)" />
                            </linearGradient>
                        </defs>
                        <path class="theLine" d="M 32 0 L 32 1088" stroke="url(#linearGradient8668444419)" stroke-width="4" fill="none" />
                        <defs>
                            <linearGradient id="linearGradient4986468060" gradientTransform="matrix(64 0 0 63 0 0)"
                                gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="1" y2="0.5">
                                <stop offset="0" stop-color="rgb(34, 197, 94)" />
                                <stop offset="1" stop-color="rgb(22, 163, 74)" />
                            </linearGradient>
                        </defs>
                        <path class="ball1"
                            d="M31.5 0C14.103 0 0 14.103 0 31.5L0 31.5473C0 48.9442 14.103 63 31.5 63L32.5 63C49.897 63 64 48.9442 64 31.5473L64 31.5C64 14.103 49.897 0 32.5 0L31.5 0Z"
                            fill-rule="nonzero" transform="matrix(1 0 0 1 0 172)"
                            fill="url(#linearGradient4986468060)" />
                        <defs>
                            <clipPath id="clipPath5541474505">
                                <path d="M0 0L32 0L32 32L0 32L0 0Z" fill-rule="nonzero"
                                    transform="matrix(1 0 0 1 16 187.5)" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#clipPath5541474505)">
                            <defs>
                                <clipPath id="clipPath8834660790">
                                    <path d="M0 0L32 0L32 32L0 32L0 0Z" fill-rule="nonzero"
                                        transform="matrix(1 0 0 1 16 187.5)" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#clipPath8834660790)">
                                <path
                                    d="M11.535 16.369C11.737 17.2438 10.7774 17.9087 10.0308 17.442L7.48479 15.851L4.30561 20.9387C3.47536 22.2671 4.43498 24 6.00073 24L9.24998 24C9.66417 24 9.99998 24.3358 9.99998 24.75L9.99998 27.25C9.99998 27.6642 9.66417 28 9.24998 28L6.00717 28C1.29879 28 -1.57421 22.8095 0.919168 18.82L4.09554 13.7333L1.55023 12.1428C0.795168 11.6711 0.989855 10.5202 1.85517 10.3204L8.74498 8.72978C9.28317 8.60553 9.82004 8.94109 9.94429 9.47916L11.535 16.369ZM17.6951 4.93678L20.2757 9.06653L17.7294 10.6576C16.9762 11.1281 17.1669 12.2797 18.0344 12.48L24.9242 14.0706C25.4662 14.1955 26.0001 13.8557 26.1235 13.3212L27.7141 6.43141C27.9139 5.56616 26.9647 4.88647 26.2099 5.35841L23.6669 6.94741L21.088 2.81728C18.7429 -0.93478 13.2624 -0.943405 10.912 2.81728L9.7893 4.61516C9.56992 4.96641 9.6768 5.42897 10.028 5.64847L12.148 6.97316C12.4992 7.19266 12.962 7.08584 13.1815 6.73459L14.304 4.93816C15.0985 3.66684 16.9274 3.70841 17.6951 4.93678ZM31.0805 18.82L29.3608 16.066C29.1414 15.7145 28.6785 15.6076 28.3272 15.8272L26.2109 17.1496C25.8596 17.3691 25.7527 17.8318 25.9722 18.1831L27.695 20.9401C28.5235 22.2658 27.5664 24.0001 25.999 24.0001L20 24.0001L20 21.0013C20 20.113 18.9224 19.6648 18.2929 20.2942L13.2929 25.293C12.9024 25.6835 12.9024 26.3167 13.2929 26.7072L18.2929 31.7065C18.918 32.3318 20 31.8938 20 30.9993L20 28L25.9925 28C30.6971 28 33.5759 22.8127 31.0805 18.82Z"
                                    fill-rule="nonzero" transform="matrix(1 0 0 1 16 187.5)"
                                    fill="rgb(255, 255, 255)" />
                            </g>
                        </g>
                        <defs>
                            <linearGradient id="linearGradient6139322738" gradientTransform="matrix(64 0 0 64 0 0)"
                                gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="1" y2="0.5">
                                <stop offset="0" stop-color="rgb(59, 130, 246)" />
                                <stop offset="1" stop-color="rgb(37, 99, 235)" />
                            </linearGradient>
                        </defs>
                        <path class="ball2"
                            d="M32 0C14.3269 0 0 14.3269 0 32L0 32.048C0 49.7211 14.2789 64 31.952 64L32 64C49.6731 64 64 49.7211 64 32.048L64 32C64 14.3269 49.7211 0 32.048 0L32 0Z"
                            fill-rule="nonzero" transform="matrix(1 0 0 1 0 512)"
                            fill="url(#linearGradient6139322738)" />
                            <defs>
                                <clipPath id="clipPath6873342293">
                                    <path d="M0 0L32 0L32 32L0 32L0 0Z" fill-rule="nonzero"
                                        transform="matrix(1 0 0 1 16 528)" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#clipPath6873342293)">
                                <defs>
                                    <clipPath id="clipPath8871253059">
                                        <path d="M0 0L32 0L32 32L0 32L0 0Z" fill-rule="nonzero"
                                            transform="matrix(1 0 0 1 16 528)" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#clipPath8871253059)">
                                    <path
                                        d="M29.6947 8.23631L21 13.7693L21 9.50181C21 8.31956 19.6918 7.60188 18.6947 8.23631L10 13.7693L10 1.5C10 0.671562 9.32844 0 8.5 0L1.5 0C0.671562 0 0 0.671562 0 1.5L0 26.5C0 27.3284 0.671562 28 1.5 28L30.5 28C31.3284 28 32 27.3284 32 26.5L32 9.50181C32 8.3195 30.6918 7.60188 29.6947 8.23631Z"
                                        fill-rule="nonzero" transform="matrix(1 0 0 1 16 530)" fill="rgb(255, 255, 255)" />
                                </g>
                            </g>
                            <defs>
                                <linearGradient id="linearGradient7511143358" gradientTransform="matrix(64 0 0 64 0 0)"
                                    gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="1" y2="0.5">
                                    <stop offset="0" stop-color="rgb(240, 177, 6)" />
                                    <stop offset="1" stop-color="rgb(240, 177, 6)" />
                                </linearGradient>
                            </defs>
                        <path class="ball3"
                            d="M32 0C14.3269 0 0 14.3269 0 32L0 32.048C0 49.7211 14.2789 64 31.952 64L32 64C49.6731 64 64 49.7211 64 32.048L64 32C64 14.3269 49.7211 0 32.048 0L32 0Z"
                            fill-rule="nonzero" transform="matrix(1 0 0 1 0 853)"
                            fill="url(#linearGradient7511143358)" />
                        <defs>
                            <clipPath id="clipPath2074788873">
                                <path d="M0 0L32 0L32 32L0 32L0 0Z" fill-rule="nonzero"
                                    transform="matrix(1 0 0 1 16 869)" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#clipPath2074788873)">
                            <defs>
                                <clipPath id="clipPath4730001133">
                                    <path d="M0 0L32 0L32 32L0 32L0 0Z" fill-rule="nonzero"
                                        transform="matrix(1 0 0 1 16 869)" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#clipPath4730001133)">
                                <path
                                    d="M30.5 8L30 8L30 5C30 2.2 23.8 0 16 0C8.2 0 2 2.2 2 5L2 8L1.5 8C0.671875 8 0 8.67125 0 9.5L0 14.5C0 15.3281 0.671875 16 1.5 16L2 16L2 26C2 27.1044 2.89563 28 4 28L4 30C4 31.1044 4.89563 32 6 32L8 32C9.10437 32 10 31.1044 10 30L10 28L22 28L22 30C22 31.1044 22.8956 32 24 32L26 32C27.1044 32 28 31.1044 28 30L28 28L28.4 28C29.4 28 30 27.2 30 26.4L30 16L30.5 16C31.3281 16 32 15.3281 32 14.5L32 9.5C32 8.67125 31.3281 8 30.5 8ZM7 25C5.89563 25 5 24.1044 5 23C5 21.8956 5.89563 21 7 21C8.10437 21 9 21.8956 9 23C9 24.1044 8.10437 25 7 25ZM8 18C6.89563 18 6 17.1044 6 16L6 8C6 6.89563 6.89563 6 8 6L24 6C25.1044 6 26 6.89563 26 8L26 16C26 17.1044 25.1044 18 24 18L8 18ZM25 25C23.8956 25 23 24.1044 23 23C23 21.8956 23.8956 21 25 21C26.1044 21 27 21.8956 27 23C27 24.1044 26.1044 25 25 25Z"
                                    fill-rule="nonzero" transform="matrix(1 0 0 1 16 869)" fill="rgb(255, 255, 255)" />
                            </g>
                        </g>

                        <circle class="ball ball01" r="20" cx="50" cy="30">

                        </circle>
                    </svg>
                    <section class="section section-collecte">
                        <div class="content-text">
                            <h2>La Collecte et le Tri Intelligent</h2>
                            <p>Notre projet déploie un système de collecte et de tri modernisé grâce à une flotte de 1 000 camions fonctionnant au biogaz, dont 200 sont dédiés à Douala, 200 à Yaoundé et 600 aux capitales régionales et zones interurbaines. Pour un tri efficace à la source, nous mettons également en place 10 000 bacs à ordure dans l’ensemble des villes du Cameroun. </p>
                            <div class="more">
                                <a href="#" class="btn-more">En savoir plus →</a>
                            </div>
                        </div>
                        <div class="content-image">
                            <img src="/asset/images/benne.jpg" alt="Collecte et Tri Intelligent">
                        </div>
                    </section>

                    <section class="section section-transformation">
                        <div class="content-text">
                            <h2>La Transformation Énergétique</h2>
                            <p>Grâce à des technologies de pointe, nous convertissons les déchets organiques en biogaz pour alimenter notre flotte logistique. Les déchets spécifiques comme les graisses et les huiles usagées sont transformés en biodiesel. Les déchets non recyclables subissent une incinération contrôlée pour produire de la bioélectricité verte. </p>
                            <div class="more">
                                <a href="#" class="btn-more">En savoir plus →</a>
                            </div>
                        </div>
                        <div class="content-image">
                            <img src="/asset/images/usine.jfif" alt="Transformation Énergétique">
                        </div>
                    </section>

                    <section class="section section-impact">
                        <div class="content-text">
                            <h2 class="">L'impact et les Applications</h2>
                            <p class="">L'énergie produite alimente directement la mobilité urbaine durable en fournissant l'électricité nécessaire au BRT de Douala et Yaoundé. En partenariat avec le MINDHU, le MINEPAT et un consortium international, nous mettons en service 600 bus Scania au biogaz ou biodiesel. Cette initiative génère de nombreux emplois directs et indirects, contribue à la formation continue et réduit significativement les émissions de CO₂ pour une meilleure qualité de l'air. </p>
                            <div class="more">
                                <a href="#" class="btn-more">En savoir plus →</a>
                            </div>
                        </div>
                        <div class="content-image">
                            <img src="/asset/images/camion.jpeg" alt="Impact et Applications">
                        </div>
                    </section>
                </div>
            </div>
        </main>

        <div class="second-part">
            <div class="content-wrapper">
                <div class="image-card">
                    <div class="image-container">
                        <img src="/asset/images/scientist.jfif" alt="Innovation Technologique">
                    </div>
                    <div class="icons-container">
                        <div class="icon-item">
                            <i class="fas fa-recycle icon-primary"></i>
                            <p>Tri automatisé</p>
                        </div>
                        <div class="icon-item">
                            <i class="fas fa-bolt icon-tertiary"></i>
                            <p>Conversion</p>
                        </div>
                        <div class="icon-item">
                            <i class="fas fa-truck-moving  icon-secondary"></i>
                            <p>Distribution</p>
                        </div>
                    </div>
                </div>
                <div class="text-content">
                    <h2 class="gsap-slide-up">Innovation Technologique</h2>
                    <p class="gsap-slide-up">Notre technologie brevetée transforme les déchets en une ressource énergétique qui viable et durable, créant une solution complète pour les défis environnementaux et énergétiques d'aujourd'hui.</p>
                    <div class="features-list">
                        <div class="feature-item">
                            <span class="cont-icon">
                                <i class="fas fa-lightbulb feature-icon"></i>
                            </span>
                            
                            <div>
                                <h3>Procédé Exclusif</h3>
                                <p>Notre méthode unique optimise le rendement énergétique de chaque type de déchet.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <span class="cont-icon">
                                <i class="fas fa-chart-line feature-icon"></i>
                            </span>
                            <div>
                                <h3>Efficacité Maximale</h3>
                                <p>Plus de 85% de l'énergie potentielle des déchets est captée et convertie en énergie utilisable.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <span class="cont-icon">
                                <i class="fas fa-earth-africa feature-icon"></i> </i>
                            </span>
                            <div>
                                <h3>Empreinte Carbone Réduite</h3>
                                <p>Notre système génère 70% moins d'émissions que les méthodes traditionnelles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="third-part">
            <div class="title">
                Notre impact en chiffres
            </div>
            <div class="stats-wrapper">

                <div class="stat-card gsap-fade-in">
                    <!-- La valeur de départ est 0 et la valeur cible est dans l'attribut data-target -->
                    <h3 class="stat-number" data-target="250000">0</h3>
                    <p class="stat-unit">tonnes</p>
                    <p class="stat-label">Réduction CO₂</p>
                </div>
                <div class="stat-card gsap-fade-in">
                    <h3 class="stat-number" data-target="1200000">0</h3>
                    <p class="stat-unit">arbres</p>
                    <p class="stat-label">Arbres Équivalents</p>
                </div>
                <div class="stat-card gsap-fade-in">
                    <h3 class="stat-number" data-target="30">0</h3>
                    <p class="stat-unit">GWh</p>
                    <p class="stat-label">Énergie Renouvelable</p>
                </div>
                <div class="stat-card gsap-fade-in">
                    <h3 class="stat-number" data-target="100">0</h3>
                    <p class="stat-unit">%</p>
                    <p class="stat-label">Économie Circulaire</p>
                </div>
            </div>
        </div>

        <div class="fourth-part">
            <div class="content-wrapper">
                <div class="left-content">
                    <h2>Agissons Ensemble pour une Planète Plus Propre</h2>
                    <p>Nous sommes à la recherche de partenariats pour étendre notre impact. Contactez-nous pour explorer les possibilités de collaboration et découvrir comment notre technologie peut s'adapter à vos besoins spécifiques.</p>
                    <a href="/contact" class="btn-primary">Contactez Notre Équipe</a>
                </div>
                <div class="right-content">
                    <div class="contact-form-card">
                        <h3>Demande de Contact</h3>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Votre nom">
                                <input type="text" name="surname" placeholder="Votre prénom">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Votre email">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Votre message" name="email"></textarea>
                            </div>
                            <button type="submit" class="btn-submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
        include __DIR__."/components/footer.php";
    ?>

    <script src="/asset/accueil.js" type="module"></script>



    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = form.querySelector('.btn-submit');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const actionUrl = '/'; 
            const formData = new FormData(form);

            submitBtn.textContent = 'Envoi en cours...';
            submitBtn.disabled = true;

            fetch(actionUrl, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau ou réponse du serveur non valide');
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    // --- Début de la modification : Afficher le toast SweetAlert2 ---
                    Swal.fire({
                        toast: true,
                        icon: 'success',
                        title: data.message,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                    // --- Fin de la modification ---
                    form.reset(); // Réinitialise le formulaire
                } else {
                    // --- Début de la modification : Afficher le toast SweetAlert2 en cas d'échec ---
                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        title: data.message,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                    // --- Fin de la modification ---
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                // --- Début de la modification : Afficher un toast générique en cas d'erreur ---
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Une erreur est survenue lors de l\'envoi.',
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
                // --- Fin de la modification ---
            })
            .finally(() => {
                submitBtn.textContent = 'Envoyer';
                submitBtn.disabled = false;
            });
        });
    });
    </script>
</body>
</html>