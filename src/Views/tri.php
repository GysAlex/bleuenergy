<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=<?php asset('global.css') ?>>
    <link rel="stylesheet" href=<?php asset('tri.css') ?>>
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
                        Technologies de Tri des Déchets
                    </div>

                    <div class="explain">
                        <p>
                            Solutions innovantes pour une Afrique durable
                        </p>
                    </div>
                    <div class="cta">
                        <button>
                            <a href="">
                                <span class="little-effect">Découvrir nos solutions</span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="tri-avantages-section">
        <div class="tri-avantages-container">
            <h2 class="tri-avantages-title">Pourquoi le Tri des Déchets ?</h2>

            <div class="tri-avantages-grid">

                <div class="avantage-card">
                    <i class="fa-solid fa-fire-flame-curved avantage-icon"></i>
                    <h3 class="avantage-title">Valorisation Énergétique</h3>
                    <p class="avantage-description">
                        Transformation des déchets en ressources énergétiques durables
                    </p>
                </div>

                <div class="avantage-card">
                    <i class="fa-solid fa-leaf avantage-icon"></i>
                    <h3 class="avantage-title">Production de Ressources</h3>
                    <p class="avantage-description">
                        Création de produits à valeur ajoutée à partir des déchets
                    </p>
                </div>

                <div class="avantage-card">
                    <i class="fa-solid fa-earth-europe avantage-icon"></i>
                    <h3 class="avantage-title">Protection Environnementale</h3>
                    <p class="avantage-description">
                        Réduction de l'impact écologique et préservation des écosystèmes
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="tri-technologies-section">
        <div class="tri-technologies-container">
            <h2 class="tri-technologies-title">Nos Technologies de Tri</h2>
            <div class="technologies-grid">
                <div class="technology-card technology-card--left">
                    <div class="technology-image">
                        <img src="/asset/images/hero.jpg" alt="Tri des Déchets Organiques">
                    </div>
                    <div class="technology-content">
                        <h3 class="technology-title">Tri des Déchets Organiques</h3>
                        <ul class="technology-benefits">
                            <li class="benefit-item"><i class="fa-solid fa-sprout"></i> Production de biogaz</li>
                            <li class="benefit-item"><i class="fa-solid fa-sprout"></i> Création de biofertilisants</li>
                            <li class="benefit-item"><i class="fa-solid fa-sprout"></i> Valorisation agricole</li>
                            <li class="benefit-item"><i class="fa-solid fa-sprout"></i> Réduction des émissions</li>
                        </ul>
                    </div>
                </div>
                <div class="technology-card technology-card--right">
                    <div class="technology-image">
                        <img src="/asset/images/hero.jpg" alt="Traitement Thermique">
                    </div>
                    <div class="technology-content">
                        <h3 class="technology-title">Traitement Thermique</h3>
                        <ul class="technology-benefits">
                            <li class="benefit-item"><i class="fa-solid fa-fire"></i> Valorisation des textiles</li>
                            <li class="benefit-item"><i class="fa-solid fa-fire"></i> Production de chaleur</li>
                            <li class="benefit-item"><i class="fa-solid fa-fire"></i> Traitement des résidus</li>
                            <li class="benefit-item"><i class="fa-solid fa-fire"></i> Récupération d'énergie</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nos-produits-section">
        <div class="nos-produits-container">
            <h2 class="nos-produits-title">Nos Produits</h2>
            <div class="produits-grid">

                <div class="produit-card">
                    <i class="fa-solid fa-fire-flame-curved produit-icon"></i>
                    <h3 class="produit-title">Biogaz</h3>
                    <p class="produit-description">
                        Énergie renouvelable pour les communautés locales
                    </p>
                </div>

                <div class="produit-card">
                    <i class="fa-solid fa-seedling produit-icon"></i>
                    <h3 class="produit-title">Biofertilisants</h3>
                    <p class="produit-description">
                        Enrichissement naturel des sols agricoles
                    </p>
                </div>

                <div class="produit-card">
                    <i class="fa-solid fa-industry produit-icon"></i>
                    <h3 class="produit-title">Biocarburant</h3>
                    <p class="produit-description">
                        Alternative durable aux carburants fossiles
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="tri-processus-section">
        <div class="tri-processus-container">
            <h2 class="tri-processus-title">Notre Processus</h2>

            <div class="processus-grid">
                <div class="processus-item ball">
                    <div class="processus-number">1</div>
                    <p class="processus-label">Collecte et ramassage</p>
                </div>
                <div class="processus-item ball">
                    <div class="processus-number">2</div>
                    <p class="processus-label">Tri initial</p>
                </div>
                <div class="processus-item ball">
                    <div class="processus-number">3</div>
                    <p class="processus-label">Traitement</p>
                </div>
                <div class="processus-item ball">
                    <div class="processus-number">4</div>
                    <p class="processus-label">Production</p>
                </div>
                <div class="processus-item">
                    <div class="processus-number">5</div>
                    <p class="processus-label">Distribution</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="tri-contact-section">
        <div class="tri-contact-container">
            <h2 class="tri-contact-title">Vous souhaitez en savoir plus ?</h2>
            <div class="tri-contact-details">
                <div class="contact-item">
                    <i class="fa-solid fa-location-dot contact-icon"></i>
                    <p class="contact-info">123 Rue Principale, Ville</p>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-envelope contact-icon"></i>
                    <p class="contact-info">contact@ecotri.com</p>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-phone contact-icon"></i>
                    <p class="contact-info">+123 456 789</p>
                </div>
            </div>
        </div>
    </section>

    <?php
        include __DIR__."/components/footer.php";
    ?>

    <script src="/asset/tri.js" type="module"></script>
</body>
</html>