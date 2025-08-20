<?php
// Configuration de la page
$page_title = "À Propos";
$company_name = "Blue energy";
$tagline = "Pionniers de la Valorisation Énergétique";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <link rel="stylesheet" href=<?php asset('global.css') ?>>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Variables CSS (si elles ne sont pas déjà définies ailleurs) */
        :root {
            --primary-green: #858585ff; /* Assurez-vous que cette couleur est définie ou remplacez-la */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Header */
        /* La classe navbar de Bootstrap est déjà fixée, mais nous pouvons ajouter des styles supplémentaires */
        /* RESTORED OLD NAVBAR STYLE */
        .navbar {
            background-color: transparent !important; /* Make it transparent by default */
            transition: background-color 0.3s ease;
        }

        
    

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-green) !important; /* Utilise la variable CSS */
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: color 0.3s ease, background-color 0.3s ease; /* Ajout de background-color à la transition */
            padding: 0.5rem 1rem; /* Ajout de padding pour une meilleure zone de survol */
            border-radius: 50px; /* Coins légèrement arrondis pour l'arrière-plan au survol */
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-green) !important; /* Garde la couleur primaire au survol */
            background-color: rgba(255, 255, 255, 0.23); /* Arrière-plan blanc transparent au survol */
        }
        
        /* Styles pour le bouton de bascule (toggler) de Bootstrap */
        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.7%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }


        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, rgba(44, 85, 48, 0.85), rgba(52, 152, 219, 0.75)), 
                        url('https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            z-index: 2;
            position: relative;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        /* Sections */
        .section {
            padding: 5rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c5530;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(45deg, #2c5530, #3498db);
        }

        /* Company Description */
        .company-description {
            background: #f8f9fa;
        }

        .description-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        /* Team Section */
        .team-section {
            background: white;
        }

        .team-member {
            display: flex;
            align-items: center;
            gap: 2rem;
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .member-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(45deg, #2c5530, #3498db);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            flex-shrink: 0;
        }

        .member-info {
            flex: 1;
        }

        .member-quote {
            font-style: italic;
            color: #666;
            margin-bottom: 1rem;
        }

        .member-name {
            font-weight: bold;
            color: #2c5530;
            margin-bottom: 0.5rem;
        }

        .member-title {
            color: #3498db;
            font-size: 0.9rem;
        }

        /* Gallery Section - Carousel Styles */
        .gallery-section {
            background: #f8f9fa;
        }

        #galleryCarousel {
            margin-top: 3rem;
            max-width: 1000px; /* Wider carousel */
            margin-left: auto;
            margin-right: auto;
        }

        .carousel-item img {
            width: 100%;
            height: 500px; /* Fixed height for carousel images */
            object-fit: cover; /* Ensure images cover the area without distortion */
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 15px;
            bottom: 20px;
            color: white;
        }

        .carousel-caption h5 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .carousel-caption p {
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        /* Values Section */
        .values-section {
            background: linear-gradient(135deg, #2c5530, #3498db);
            color: white;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .value-item {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .value-item:hover {
            transform: translateY(-5px);
        }

        .value-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #fff;
        }

        .value-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .value-description {
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            background: #1a1a1a;
            color: white;
            text-align: center;
        }

        .cta-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(45deg, #2c5530, #3498db);
            color: white;
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        .footer {
            background: #1a1a2e;
            color: white;
            padding: 70px 0 30px;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #28a745, #20c997);
        }

        .footer-section h3 {
            color: #20c997;
            margin-bottom: 25px;
            font-size: 1.3rem;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: #28a745;
        }

        .footer-section p {
            color: #ccc;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .footer-section ul {
            list-style: none;
            padding-left: 0;
        }

        .footer-section ul li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 20px;
        }

        .footer-section ul li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: #28a745;
        }

        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #20c997;
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 30px;
            text-align: center;
            color: #999;
            font-size: 0.9rem;
        }
        .icons{
            align-items: center;
            justify-content: center;
            display: flex;
            gap: 40px;
            margin-top: 30px;
            font-size: 1.1rem;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .social-links a:hover {
            background: #28a745;
            transform: translateY(-5px);
        }

        .alert {
            padding: 15px 20px;
            margin-bottom: 25px;
            border-radius: 8px;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }

        .alert::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-success::after {
            background: #28a745;
        }

        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert-danger::after {
            background: #dc3545;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.3rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 100px 0;
                text-align: center;
                min-height: auto;
            }
            
            .section-title {
                font-size: 1.8rem;
                margin-bottom: 40px;
            }
            
            .faq-item {
                padding: 25px;
            }
            
            .contact-info {
                margin-top: 40px;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            /* Ajustements pour la navbar sur mobile */
            .navbar-collapse {
                background-color: rgba(44, 85, 48, 0.95); /* Fond pour le menu déroulant */
                border-radius: 10px;
                margin-top: 0.5rem;
                padding: 1rem;
            }
            .navbar-nav .nav-link {
                padding: 0.8rem 1rem;
                text-align: center;
                margin: 0.5rem auto;
                width: fit-content;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .info-item {
                padding: 20px;
            }

            /* Mobile Responsiveness */
            .team-member {
                flex-direction: column;
                text-align: center;
            }

            .carousel-item img {
                height: 250px; /* Adjust height for smaller screens */
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Animation Classes - Simplified */
        .fade-in {
            opacity: 1;
            transition: opacity 0.6s ease;
        }

        /*This line help to fix the problem on the nav-bar */
       ul{
            margin-bottom: 0;
        }


        /* Scroll Progress Bar */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(45deg, #2c5530, #3498db);
            z-index: 9999;
            transition: width 0.3s ease;
        }

        /* Particle Animation Styles */
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            pointer-events: none;
            animation: floatUp ease-out infinite;
            opacity: 0; /* Initially hidden */
        }

        @keyframes floatUp {
            0% {
                transform: translateY(0px) translateX(0px);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(-1000px) translateX(100px); /* Adjust as needed */
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="progress-bar" id="progressBar"></div>
    
    <?php
        include __DIR__."/components/header.php";
    ?>
    

    <section class="hero">
        <div class="hero-content">
            <h1><b>Notre Histoire, Notre Engagement</b></h1>
            <p><b>Découvrez l'entreprise et les visionnaires derrière ce projet ambitieux, ainsi que notre présence active au cœur des défis énergétiques et environnementaux de demain.</b></p>
        </div>
    </section>

    <section class="section company-description">
        <div class="container">
            <h2 class="section-title"><?php echo $company_name; ?></h2>
            <p class="section-title" style="font-size: 1.2rem; color: #3498db;"><?php echo $tagline; ?></p>
            
            <div class="description-content">
                <p>Blue Energy est née de la conviction que les déchets urbains représentent une ressource énergétique inexploitée et déperdant au sein des défis énergétiques d'aujourd'hui et de demain. Notre équipe dynamique place l'innovation et la durabilité guides dans nos solutions. Notre ce qui nous autorise considérer comme des déchets est une source précieuse d'énergie pre-.</p>
                
                <p>Notre engagement envers l'innovation et la durabilité guide toutes nos actions. Nous collaborons étroitement avec les municipalités, les entreprises et les communautés pour créer un écosystème où les déchets deviennent une solution plutôt qu'un problème environnemental.</p>
            </div>
        </div>
    </section>

    <section class="section team-section">
     <style>
.team-member img {
    border-radius: 50%;
    object-fit: cover;
    width: 150px;
    height: 150px;
}
</style>

<div class="container">
    <h2 class="section-title">Notre Vision</h2>
    
    <div class="team-member">
        <img src="images/Mr Biheng.jpg" width='150' height='150' alt="Photo de Roger Thierry BIKENE">
        <div class="member-info">
            <div class="member-quote">"Ce projet révolutionnaire représente exactement le type d'avancée que nous devons tous en nous dans nos objectifs climatiques tout en offrant un service de transport public de qualité supérieure."</div>
            <div class="member-name">Roger Thierry BIHENG</div>
            <div class="member-title">Fondateur - CEO Blue Energy</div>
        </div>
    </div>
</div>
    <section class="section gallery-section">
        <div class="container">
            <h2 class="section-title">La galerie</h2>
            <p style="text-align: center; color: #666; margin-bottom: 2rem;">Une Présence Active sur le Terrain de l'Innovation et du Développement Durable</p>
            
            <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                <?php
                // Correction des chemins d'images et de la syntaxe
                $gallery_items = [
                
                    [
                        'image' => 'images/d.jpg',
                          'alt' => 'Inauguration de notre premier site pilote',
                        'date' => '12 Décembre 2023',
                        'title' => 'Inauguration de notre premier site pilote'
                  
                    ],
                    [
                        'image' => 'images/a.jpg',
                          'alt' => 'Inauguration de notre premier site pilote',
                        'date' => '12 Décembre 2023',
                        'title' => 'Inauguration de notre premier site pilote'
                     
                    ],
                    [
                        'image' => 'images/b.jpg',
                        'alt' => 'Inauguration de notre premier site pilote',
                        'date' => '12 Décembre 2023',
                        'title' => 'Inauguration de notre premier site pilote'
                    ],
                    [
                        'image' => 'images/e.jpg',
                        'alt' => 'Rencontre avec les partenaires municipaux',
                        'date' => '08 Novembre 2023',
                        'title' => 'Rencontre avec les partenaires municipaux'
                    ],
                  
                ];

                foreach ($gallery_items as $index => $item) {
                    $active_class = ($index == 0) ? 'active' : '';
                    ?>
                    <div class="carousel-item <?php echo $active_class; ?>">
                        <img src="<?php echo $item['image']; ?>" class="d-block w-100" alt="<?php echo $item['alt']; ?>">
                        <div class="carousel-caption">
                            <h5><?php echo $item['title']; ?></h5>
                            <p><?php echo $item['date']; ?></p>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="section values-section">
        <div class="container">
            <h2 class="section-title" style="color: white;">Nos Valeurs : Ce Qui Guide Nos Actions au Quotidien</h2>
            
            <div class="values-grid">
                <?php
                $values = [
                    [
                        'icon' => 'fas fa-leaf',
                        'title' => 'Durabilité',
                        'description' => 'Engagement envers des pratiques respectueuses de l\'environnement et créant des solutions durables.'
                    ],
                    [
                        'icon' => 'fas fa-rocket',
                        'title' => 'Innovation',
                        'description' => 'Recherche constante de solutions technologiques innovantes d\'énergie pour transformer les défis en opportunités.'
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Responsabilité',
                        'description' => 'Agir de manière éthique et transparente envers nos partenaires, la communauté et l\'environnement global.'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Collaboration',
                        'description' => 'Favoriser des partenariats et de la coopération avec tous les acteurs de l\'écosystème énergétique durable.'
                    ]
                ];

                foreach ($values as $index => $value) {
                    ?>
                    <div class="value-item">
                        <div class="value-icon"><i class="<?php echo $value['icon']; ?>"></i></div>
                        <div class="value-title"><?php echo $value['title']; ?></div>
                        <div class="value-description"><?php echo $value['description']; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="section cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="section-title" style="color: white;">Ensemble, Construisons un Avenir Plus Vert</h2>
                <p>Rejoignez-nous dans cette aventure transformatrice pour créer des villes plus propres tout en générant de l'énergie plus propres plus durable et énergétiquement autonomes.</p>
                
                <div class="cta-buttons">
                    <a href="impact.php" class="btn btn-primary">Découvrir Notre Impact</a>
                    <a href="#services" class="btn btn-secondary">Notre Collectivité</a>
                </div>
            </div>
        </div>
    </section>

     <!-- Footer -->
    <?php
        include __DIR__."/components/footer2.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Header scroll effect - to change navbar background
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const progressBar = document.getElementById('progressBar');
            
            if (window.scrollY > 50) { // Adjust this value as needed
                navbar.classList.add('scrolled');
                // Votre code pour l'effet de scroll...
            }
        });
    </script>
</body>
</html>