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
                <img src="/asset/images/partenaires.png" alt="Deux personnes qui se serrent la main" class="partners-image">
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
                        <img src="/asset/images/P2.jpeg" alt="Partenaire Technologique A" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Partenaire Technologique </h3>
                        <p class="partner-card-description">
                        Scania accompagne notre transition énergétique avec des solutions de transport fiables, innovantes et adaptées aux défis du développement durable.
                        <a href="https://www.scania.com/fr/fr/home.html/" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/P5.jpeg" alt="Institution Financière B" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Institution Financière </h3>
                        <p class="partner-card-description">
                           Partenaire stratégique majeur, facilitant l’intégration régionale et soutenant le financement de nos infrastructures durables à grande échelle.
                        </p>
                        <a href="https://commission.europa.eu/strategy-and-policy/priorities-2019-2024/stronger-europe-world/global-gateway_en" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/P4.jpeg" alt="Collectivité Territoriale C" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Gestionnaire Public des Déchets Urbains </h3>
                        <p class="partner-card-description">
                           Partenaire opérationnel essentiel, assurant la gestion efficace des déchets et contribuant activement à la propreté urbaine dans le cadre du projet.
                        <a href="https://www.hysacam-proprete.com/" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                  
              

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/P6.jpeg" alt="Centre de Recherche E" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Autorité Municipale de la Capitale</h3>
                        <p class="partner-card-description">
                            Partenaire institutionnel engagé, jouant un rôle stratégique dans l’ancrage territorial du projet et facilitant sa mise en œuvre au sein de la capitale. Elle accompagne activement les initiatives locales de transition énergétique durable.
                        </p>
                        <a href="https://www.ongola.com/communaute-urbaine-yaounde-cameroun/" class="partner-card-link">Visiter leur site →</a>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-card-image-wrapper">
                        <img src="/asset/images/P3.jpeg" alt="Opérateur de Transport F" class="partner-card-image">
                    </div>
                    <div class="partner-card-content">
                        <h3 class="partner-card-title">Instance Métropolitaine Côtière</h3>
                        <p class="partner-card-description">
                            Partenaire institutionnel engagé, jouant un rôle stratégique dans l’ancrage territorial du projet et facilitant sa mise en œuvre au sein de la capitale. Elle accompagne activement les initiatives locales de transition énergétique durable.
                        </p>
                        <a href="https://www.govserv.org/CM/Duala/638961459539920/Communaut%C3%A9-Urbaine-de-Douala" class="partner-card-link">Visiter leur site →</a>
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
                       <a href="/contact"> Devenir Partenaire</a>
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
                   <a href="/impact" style="color: white;">
  <button class="contact-us-button">
    <i class="fa-solid fa-envelope"></i> Contactez-nous
  </button>
</a>
        </div>
    </section>



    <?php
        include __DIR__."/components/footer.php";
    ?>

    <script src="/asset/partenaire.js" type="module"></script>
</body>
</html>