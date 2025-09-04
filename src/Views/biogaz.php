<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include __DIR__."/components/meta.php";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=<?php asset('global.css') ?>>
    <link rel="stylesheet" href=<?php asset('biogaz.css') ?>>
    <title>Blueu Energy | Biogaz </title>
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
                        Le biogaz, une énergie d’avenir pour le transport durable
                    </div>

                    <div class="explain">
                        <p>
                            Le biogaz s'impose comme un levier incontournable pour un transport durable. Il est une solution immédiate et efficace pour décarboner les poids lourds et diversifier les options énergétiques de la mobilité.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    
    <section class="biogaz-section" id="biogaz-essentiel">
        <div class="biogaz-container">
            <h2 class="biogaz-title">Pourquoi le biogaz est essentiel ?</h2>
            <p class="biogaz-paragraphe">
                Pour réduire rapidement les émissions et diversifier les solutions énergétiques, le biogaz est un levier incontournable, notamment pour décarboner les véhicules lourds.
            </p>

            <div class="biogaz-grid">
                <div class="biogaz-image-content">
                    <div class="biogaz-image-wrapper">
                        <div class="biogaz-subtitle">Une solution immédiate et efficace</div>
                        <img src="/asset/images/bus-biogaz-carburant-renouvelable.jpeg" alt="Illustration de l'utilisation du biogaz dans le transport">
                    </div>
                </div>

                <div class="biogaz-list">
                    <div class="biogaz-item">
                        <div class="biogaz-icon-wrapper">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div class="biogaz-text-content">
                            <h4 class="biogaz-item-title">Décarboner les Poids Lourds</h4>
                            <p class="biogaz-item-description">
                                Les véhicules lourds ont une longue durée de vie. Le biogaz offre une solution rapide pour remplacer les carburants fossiles et réduire leurs émissions dès aujourd'hui.
                            </p>
                        </div>
                    </div>
                    <div class="biogaz-item">
                        <div class="biogaz-icon-wrapper">
                            <i class="fa-solid fa-car-side"></i>
                        </div>
                        <div class="biogaz-text-content">
                            <h4 class="biogaz-item-title">Solution pour le Parc Existant</h4>
                            <p class="biogaz-item-description">
                                Même avec l’essor des véhicules électriques, une grande partie du parc mondial fonctionnera encore avec des moteurs à combustion d’ici 2030. Le biogaz est une alternative propre et immédiate.
                            </p>
                        </div>
                    </div>
                    <div class="biogaz-item">
                        <div class="biogaz-icon-wrapper">
                            <i class="fa-solid fa-tree"></i>
                        </div>
                        <div class="biogaz-text-content">
                            <h4 class="biogaz-item-title">Réduction des Émissions</h4>
                            <p class="biogaz-item-description">
                                Contrairement au gaz naturel, le biogaz est renouvelable et permet de réduire les émissions de CO2 jusqu'à 80%, contribuant à la lutte contre le changement climatique.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="biogaz-section second" id="gaz-difference-section">
        <div class="biogaz-container">
            <h2 class="biogaz-title">Gaz naturel ou biogaz : quelle différence ?</h2>
            <p class="biogaz-paragraphe">
                Bien que composés de la même molécule (méthane, CH₄), leur origine et leur impact environnemental diffèrent grandement.
            </p>

            <div class="biogaz-grid inverse-grid"> <div class="biogaz-list">
                    <div class="biogaz-item">
                        <div class="biogaz-icon-wrapper">
                            <i class="fa-solid fa-industry"></i>
                        </div>
                        <div class="biogaz-text-content">
                            <h4 class="biogaz-item-title">Gaz Naturel : Une Énergie Fossile</h4>
                            <p class="biogaz-item-description">
                                Le gaz naturel est une ressource fossile, extraite du sous-sol, dont la combustion contribue directement aux émissions de CO₂ et au réchauffement climatique.
                            </p>
                        </div>
                    </div>
                    <div class="biogaz-item">
                        <div class="biogaz-icon-wrapper">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <div class="biogaz-text-content">
                            <h4 class="biogaz-item-title">Biogaz : Une Alternative Renouvelable</h4>
                            <p class="biogaz-item-description">
                                Le biogaz est issu de la valorisation de déchets organiques, ce qui en fait une énergie renouvelable qui réduit jusqu’à 80 % des émissions de CO₂.
                            </p>
                        </div>
                    </div>
                    <div class="biogaz-item">
                        <div class="biogaz-icon-wrapper">
                            <i class="fa-solid fa-recycle"></i>
                        </div>
                        <div class="biogaz-text-content">
                            <h4 class="biogaz-item-title">Impact Environnemental</h4>
                            <p class="biogaz-item-description">
                                En utilisant le biogaz, nous transformons des déchets en une source d'énergie propre, participant ainsi à une économie circulaire et à la protection de l'environnement.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="biogaz-image-content">
                    <div class="biogaz-image-wrapper">
                        <div class="biogaz-subtitle">Méthane : Fossile vs Renouvelable</div>
                        <img src="/asset/images/bioVSnatural.webp" alt="Comparaison entre biogaz et gaz naturel">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="biogaz-process-section" id="biogaz-process-section">
        <div class="biogaz-process-container">
            <h2 class="biogaz-process-title">Comment produit-on du biogaz ?</h2>
            <p class="biogaz-process-paragraphe">
                Le biogaz est issu de la valorisation des déchets organiques à travers un processus de digestion anaérobie. Ce cycle vertueux transforme les déchets en énergie propre et en sous-produits utiles.
            </p>
            
            <div class="biogaz-process-grid">
                <div class="biogaz-process-card">
                    <div class="biogaz-process-icon-wrapper">
                        <i class="fa-solid fa-trash-can"></i>
                    </div>
                    <h4 class="biogaz-process-item-title">1. Collecte et Traitement des Déchets</h4>
                    <p class="biogaz-process-item-description">
                        Les déchets organiques (résidus agricoles, fumier, déchets alimentaires, etc.) sont collectés et préparés pour le processus de méthanisation.
                    </p>
                </div>
                <div class="biogaz-process-card">
                    <div class="biogaz-process-icon-wrapper">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <h4 class="biogaz-process-item-title">2. Digestion Anaérobie</h4>
                    <p class="biogaz-process-item-description">
                        Des bactéries transforment la matière organique dans un digesteur fermé, un processus qui libère du biogaz.
                    </p>
                </div>
                <div class="biogaz-process-card">
                    <div class="biogaz-process-icon-wrapper">
                        <i class="fa-solid fa-wind"></i>
                    </div>
                    <h4 class="biogaz-process-item-title">3. Raffinage en Biométhane</h4>
                    <p class="biogaz-process-item-description">
                        Le biogaz brut est purifié pour en faire du biométhane, qui est composé à 97 % de méthane pur, le rendant utilisable comme carburant.
                    </p>
                </div>
            </div>
            
            <div class="biogaz-products">
                <h3 class="biogaz-products-title">Des sous-produits à valeur ajoutée</h3>
                <div class="products-grid">
                    <div class="product-item">
                        <i class="fa-solid fa-seedling"></i>
                        <p>Biofertilisants pour l’agriculture</p>
                    </div>
                    <div class="product-item">
                        <i class="fa-solid fa-industry-alt"></i>
                        <p>CO₂ pour l’industrie ou l’agroalimentaire</p>
                    </div>
                    <div class="product-item">
                        <i class="fa-solid fa-sun"></i>
                        <p>Énergie locale produite à faible coût</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="biogaz-avantages-section" id="biogaz-avantages">
        <div class="biogaz-avantages-container">
            <h2 class="biogaz-avantages-title">Les avantages du biogaz</h2>

            <div class="avantages-grid">
                <div class="avantages-item">
                    <div class="avantages-icon">
                        <i class="fa-solid fa-cloud-arrow-down"></i>
                    </div>
                    <h4 class="avantages-label">Réduction massive des émissions de CO₂</h4>
                    <p class="avantages-text">
                        La production et l'utilisation du biogaz permettent de réduire les émissions de CO₂ de manière significative, contribuant directement à la lutte contre le changement climatique.
                    </p>
                </div>
                <div class="avantages-item">
                    <div class="avantages-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h4 class="avantages-label">Alternative économique et fiable</h4>
                    <p class="avantages-text">
                        Le biogaz est une solution rentable pour la décarbonation du transport lourd, offrant une source d'énergie stable et locale.
                    </p>
                </div>
                <div class="avantages-item">
                    <div class="avantages-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h4 class="avantages-label">Création d'emplois locaux</h4>
                    <p class="avantages-text">
                        Le développement de la filière biogaz génère de l'emploi et renforce la sécurité énergétique à l'échelle locale.
                    </p>
                </div>
                <div class="avantages-item">
                    <div class="avantages-icon">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <h4 class="avantages-label">Contribution aux objectifs de développement durable</h4>
                    <p class="avantages-text">
                        Le biogaz s'inscrit pleinement dans les Objectifs de Développement Durable (ODD), notamment ceux liés à l'énergie propre et à la gestion des déchets.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="biogaz-contact-section" id="biogaz-contact-section">
        <div class="biogaz-contact-container">
            <h2 class="biogaz-contact-title">Avec le biogaz, construisons un avenir durable</h2>
            <p class="biogaz-contact-description">
                Chez Blue Energy, nous transformons les déchets en énergie propre. Pour en savoir plus sur notre vision et nos projets, contactez notre équipe.
            </p>
            <a href="/contact#contact" style="text-decoration: none;" class="contact-us-button">
                <i class="fa-solid fa-envelope"></i> Contactez-nous
            </a>
        </div>
    </section>

    <?php
        include __DIR__."/components/footer.php";
    ?>

    <script src="/asset/biogaz.js" type="module"></script>
</body>
</html>