<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include __DIR__."/components/meta.php";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=<?php asset('global.css') ?>>
    <link rel="stylesheet" href=<?php asset('camion.css') ?>>
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
                         Notre Flotte de Véhicules Spécialisés
                    </div>

                    <div class="explain">
                        <p>
                           Une logistique optimisée pour la gestion des biodéchets et la distribution des bioproduits
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="collecte-section">
        <div class="collecte-container">
            <div class="collecte-grid">
                <div class="collecte-image-wrapper animation-fade">
                    <img src="/asset/images/camion.jpeg" alt="Camions de Collecte">
                </div>

                <div class="collecte-content">
                    <h2 class="collecte-title">Camions de Collecte</h2>
                    <p class="collecte-subtitle">
                        Flotte moderne pour la collecte efficace des déchets organiques.
                    </p>
                    <div class="collecte-details" >
                        <div class="detail-item"><i class="fa-solid fa-circle-check"></i> Capacité: 16-20 tonnes</div>
                        <div class="detail-item"><i class="fa-solid fa-circle-check"></i> Équipement: Systèmes de compression</div>
                        <div class="detail-item"><i class="fa-solid fa-circle-check"></i> Zones: Urbaines et périurbaines</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="transport-section">
        <div class="transport-container">
            <div class="transport-grid">
                <div class="transport-content">
                    <h2 class="transport-title">Véhicules eco-reponsables(bio-gaz, gaz-naturel)</h2>
                    <p class="transport-subtitle">
                        Véhicules spécialement équipés pour le transport sécurisé du biogaz.
                    </p>
                    <ul class="transport-details">
                        <li class="detail-item"><i class="fa-solid fa-circle-check"></i> Capacité: 20,000 litres</li>
                        <li class="detail-item"><i class="fa-solid fa-circle-check"></i> Sécurité: Systèmes de surveillance de pression</li>
                        <li class="detail-item"><i class="fa-solid fa-circle-check"></i> Certification: ADR</li>
                    </ul>
                </div>

                <div class="transport-image-wrapper animation-fade">
                    <img src="/asset/images/scania2.jpeg" alt="Transport de Biogaz">
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="stats-container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number" data-target="45">+</span>
                    <span class="stat-label">Véhicules</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="200">+</span>
                    <span class="stat-label">Tonnes/jour</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="25">+</span>
                    <span class="stat-label">Régions desservies</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="98">%</span>
                    <span class="stat-label">Taux de satisfaction</span>
                </div>
            </div>
        </div>
    </section>



    <?php
        include __DIR__."/components/footer.php";
    ?>

    <script src="/asset/camion.js" type="module"></script>
</body>
</html>