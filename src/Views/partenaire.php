<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=<?php asset('global.css') ?>>
    <link rel="stylesheet" href=<?php asset('partenaire.css') ?>>
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
                         Ensemble, Nous Bâtissons l'Avenir Durable
                    </div>

                    <div class="explain">
                        <p>
                            Notre projet d'envergure s'appuie sur des collaborations stratégiques avec des leaders et des acteurs clés engagés pour l'environnement, la technologie et le développement durable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="partners-section">
        <div class="partners-content-container">
            <div class="partners-image-wrapper">
                <img src="/assets/images/usine.jfif" alt="Deux personnes qui se serrent la main" class="partners-image">
            </div>
            <div class="partners-text-container">
                <div class="partners-heading-wrapper">
                    <h2 class="partners-title">Des Collaborations Essentielles à Notre Réussite</h2>
                </div>
                <p class="partners-description main-description">
                    Nous sommes fiers de collaborer avec un éventail de partenaires dont l'expertise et l'engagement sont cruciaux pour la réalisation et le succès de notre initiative de valorisation des déchets en énergie.
                </p>
                <p class="partners-description sub-description">
                    Chacun de nos partenaires apporte une valeur unique à notre écosystème, contribuant à l'efficacité, la durabilité et l'impact positif de notre projet sur l'environnement et la société.
                </p>
            </div>
        </div>
    </section>

    <section class="partners-strategic-section">
        <div class="partners-strategic-container">
            <h2 class="partners-strategic-title">Nos Partenaires Stratégiques</h2>

            <div class="partners-cards-grid">

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/usine.jfif" alt="Partenaire Technologique A" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Partenaire Technologique A</h3>
                        <p class="partner-card-description">
                            Leader mondial en solutions d'ingénierie énergétique, apportant une expertise technique de pointe dans la conception de nos usines de traitement.
                        </p>
                        <a href="#" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/usine.jfif" alt="Institution Financière B" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Institution Financière B</h3>
                        <p class="partner-card-description">
                            Partenaire financier majeur, soutenant le développement et le déploiement de nos infrastructures à grande échelle.
                        </p>
                        <a href="#" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/usine.jfif" alt="Collectivité Territoriale C" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Collectivité Territoriale C</h3>
                        <p class="partner-card-description">
                            Partenaire institutionnel clé, facilitant la mise en œuvre locale du projet et l'intégration de nos solutions dans le cadre urbain.
                        </p>
                        <a href="#" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/usine.jfif" alt="Fournisseur de Services Logistiques D" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Fournisseur de Services Logistiques D</h3>
                        <p class="partner-card-description">
                            Spécialiste de la logistique verte, optimisant nos opérations de collecte et de transport des déchets.
                        </p>
                        <a href="#" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/usine.jfif" alt="Centre de Recherche E" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Centre de Recherche E</h3>
                        <p class="partner-card-description">
                            Partenaire en recherche et développement, explorant de nouvelles voies d'optimisation pour nos procédés de valorisation énergétique.
                        </p>
                        <a href="#" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/usine.jfif" alt="Opérateur de Transport F" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Opérateur de Transport F</h3>
                        <p class="partner-card-description">
                            Opérateur de réseau de transport urbain, partenaire pour l'intégration de notre énergie dans la mobilité durable.
                        </p>
                        <a href="#" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

            </div>

            <p class="partners-strategic-footer">
                Nos partenaires partagent notre vision d'un avenir plus durable et contribuent activement à la réussite de notre projet de valorisation énergétique.
            </p>

        </div>
    </section>
    
    <section class="join-partners-section">
        <div class="join-partners-container">
            <h2 class="join-partners-title">Rejoignez Notre Réseau de Partenaires Engagés</h2>
            <p class="join-partners-description">
                Vous partagez notre vision d’un avenir durable et souhaitez contribuer à un projet d’impact ? Nous sommes constamment à la recherche de nouvelles collaborations pour renforcer notre initiative.
            </p>

            <div class="join-partners-content">

                <div class="join-partners-benefits-card">
                    <h3 class="card-title">Les avantages du partenariat</h3>
                    <div class="benefit-item">
                        <span class="i-container">
                            <i class="fa-solid fa-bullhorn benefit-icon"></i>
                        </span>
                        <div class="benefit-text">
                            <div class="benefit-title">Innovation Partagée</div>
                            <span class="benefit-description">Accédez à des technologies de pointe et contribuez à leur développement.</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <span class="i-container">
                            <i class="fa-solid fa-leaf benefit-icon"></i>
                        </span>
                        
                        <div class="benefit-text">
                            <div class="benefit-title">Impact Environnemental</div>
                            <span class="benefit-description">Participez concrètement à la transition énergétique.</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <span class="i-container">
                            <i class="fa-solid fa-bullhorn benefit-icon"></i>
                        </span>
                        <div class="benefit-text">
                            <div class="benefit-title">Visibilité et Notoriété</div>
                            <span class="benefit-description">Associez votre image à un projet innovant et responsable.</span>
                        </div>
                    </div>
                </div>

                <div class="join-partners-form-card">
                    <h3 class="card-title">Soumettre une proposition</h3>
                    <p class="form-description">
                        Complétez le formulaire ci-dessous pour nous faire part de votre intérêt à devenir partenaire. Notre équipe vous contactera dans les meilleurs délais pour discuter des possibilités de collaboration.
                    </p>
                    <button class="join-partners-button">
                        Devenir Partenaire
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section class="partners-contact-section">
        <div class="partners-contact-container">
            <h2 class="partners-contact-title">Vous avez des questions sur nos partenaires</h2>
            <p class="partners-contact-description">
                Notre équipe dédiée aux partenariats stratégiques est à votre disposition pour répondre à toutes vos questions et explorer les possibilités de collaboration.
            </p>
            <button class="contact-us-button">
                <i class="fa-solid fa-envelope"></i> Contactez-nous
            </button>
        </div>
    </section>



    <?php
        include __DIR__."/components/footer.php";
    ?>

    <script src="/asset/partenaire.js" type="module"></script>
</body>
</html>