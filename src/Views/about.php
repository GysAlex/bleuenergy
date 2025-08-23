<?php
// Configuration de la page
$page_title = "À Propos";
$company_name = "Blue energy";
$tagline = "Pionniers de la Valorisation Énergétique";
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <title>Notre Histoire et Engagement | Blue Energy</title>
    <meta name="description" content="Découvrez l'histoire de Blue Energy, notre vision et notre engagement à transformer les déchets urbains en une ressource énergétique précieuse grâce à l'innovation et la durabilité.">
    <meta name="keywords" content="Blue Energy, notre histoire, engagement, développement durable, énergie renouvelable, gestion des déchets, innovation, vision, mission, Cameroun">

    <meta property="og:title" content="L'Histoire de Blue Energy | Des Déchets à l'Énergie Durable">
    <meta property="og:description" content="Née de la conviction que les déchets sont une ressource inexploitée, Blue Energy s'engage à bâtir un avenir où la durabilité est au cœur de la transition énergétique.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.bleueenergy.com/notre-histoire.html">
    <meta property="og:image" content="https://www.bleueenergy.com/asset/images/bleue-energy-histoire.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Notre Histoire | Blue Energy, Pionniers de la Transition Énergétique">
    <meta name="twitter:description" content="Nous sommes les visionnaires derrière la transformation des déchets urbains en une solution énergétique pour les défis de demain. Découvrez notre mission et nos valeurs.">

    <link rel="stylesheet" href=<?php asset('global.css') ?>>

    <?php
        include __DIR__."/components/meta.php";
    ?>

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #2c5530;
            --secondary-blue: #3498db;
            --accent-green: #28a745;
            --dark-bg: #1a1a2e;
            --light-bg: #f8f9fa;
            --text-dark: #333;
            --text-light: #666;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Animations personnalisées */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInScale {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .animate-on-scroll {
            opacity: 0;
            transition: all 0.8s ease-out;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-left {
            animation: fadeInLeft 0.8s ease-out forwards;
        }

        .animate-right {
            animation: fadeInRight 0.8s ease-out forwards;
        }

        .animate-scale {
            animation: slideInScale 0.8s ease-out forwards;
        }

        /* Header */
       

        /* Hero Section */
        .hero {
            height: 70vh;
            background: var(--simple-gradient), url('/asset/images/logo.png');
            background-size: cover;
            background-position-x: center;
            background-position-y: 45%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            clip-path: ellipse(100% 85% at 50% 15%);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 70%, rgba(52, 152, 219, 0.3) 0%, transparent 50%);
            animation: float 6s ease-in-out infinite;
        }

        .hero-content {
            max-width: 700px;
            z-index: 2;
            position: relative;
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: slideInScale 1.2s ease-out;
        }

        .hero p {
            font-size: 1rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            animation: fadeInUp 1.5s ease-out;
        }

        /* Sections */
        .section {
            padding: 4rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 2.5rem;
            color: var(--primary-green);
            position: relative;
            font-weight: 600;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(45deg, var(--primary-green), var(--secondary-blue));
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        /* Company Description */
        .company-description {
            background: var(--light-bg);
            position: relative;
            overflow: hidden;
        }

        .company-description::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(52, 152, 219, 0.05) 0%, transparent 70%);
            animation: float 8s ease-in-out infinite reverse;
        }

        .description-content {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .description-content p {
            font-size: 1rem;
            line-height: 1.7;
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        /* Team Section */
        .team-section {
            background: white;
            position: relative;
        }

        .team-member {
            display: flex;
            align-items: center;
            gap: 2rem;
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 1.8rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .team-member::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(44, 85, 48, 0.05), transparent);
            transition: left 0.6s ease;
        }

        .team-member:hover::before {
            left: 100%;
        }

        .team-member:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 40%;
            object-fit: cover;
            border: 4px solid var(--primary-green);
            transition: all 0.3s ease;
        }

        .team-member:hover img {
            transform: scale(1.05);
        }

        .member-info {
            flex: 1;
        }

        .member-quote {
            font-style: italic;
            color: var(--text-light);
            margin-bottom: 1rem;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .member-name {
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .member-title {
            color: var(--secondary-blue);
            font-size: 0.85rem;
        }

        /* Gallery Section */
        .gallery-section {
            background: var(--light-bg);
            position: relative;
        }

        #galleryCarousel {
            margin-top: 2.5rem;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .carousel-item img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .carousel-item:hover img {
            transform: scale(1.02);
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 1rem;
            bottom: 20px;
            color: white;
            backdrop-filter: blur(5px);
        }

        .carousel-caption h5 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .carousel-caption p {
            font-size: 0.85rem;
            margin-bottom: 0;
        }

        /* Values Section */
        .values-section {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-blue));
            color: white;
            position: relative;
            overflow: hidden;
        }

        .values-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
            animation: float 10s linear infinite;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.8rem;
            margin-top: 2.5rem;
            position: relative;
            z-index: 2;
        }

        .value-item {
            text-align: center;
            padding: 1.8rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .value-item:hover {
            transform: translateY(-8px) scale(1.02);
            background: rgba(255, 255, 255, 0.15);
        }

        .value-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #fff;
            transition: transform 0.3s ease;
        }

        .value-item:hover .value-icon {
            transform: scale(1.1);
            animation: pulse 0.6s ease;
        }

        .value-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
        }

        .value-description {
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta-section {
            background: var(--dark-bg);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 70% 30%, rgba(40, 167, 69, 0.2) 0%, transparent 50%);
            animation: float 8s ease-in-out infinite;
        }

        .cta-content {
            max-width: 550px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .cta-content p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 28px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 0.9rem;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--primary-green), var(--secondary-blue));
            color: white;
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /*This line help to fix the problem on the nav-bar */
        .desktop-menu-items {
            margin-bottom: 0;
        }


        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 0.95rem; }
            .section { padding: 3rem 0; }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 80px 0;
                min-height: 80vh;
            }
            
            .section-title {
                font-size: 1.8rem;
                margin-bottom: 2rem;
            }
            
            .team-member {
                flex-direction: column;
                text-align: center;
                padding: 1.5rem;
            }

            .carousel-item img {
                height: 300px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .values-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .navbar-collapse {
                background-color: rgba(44, 85, 48, 0.95);
                border-radius: 10px;
                margin-top: 0.5rem;
                padding: 1rem;
            }
        }

        @media (max-width: 576px) {
            .hero h1 { font-size: 1.8rem; }
            .section-title { font-size: 1.6rem; }
            .carousel-item img { height: 250px; }
            .container { padding: 0 1rem; }
        }
    </style>
</head>
<body>
    
    <?php
        include __DIR__."/components/header.php";
    ?>
    



    <section class="hero">
        <div class="hero-content">
            <h1>Notre Histoire</h1>
            <p>Découvrez l'entreprise et les visionnaires derrière ce projet ambitieux, ainsi que notre présence active au cœur des défis  de demain.</p>
        </div>
    </section>

    <section class="section company-description">
        <div class="container">
            <h2 class="section-title animate-on-scroll"><?php echo $company_name; ?></h2>
            <p class="section-title animate-on-scroll" style="font-size: 1.1rem; color: #3498db;"><?php echo $tagline; ?></p>
            
            <div class="description-content animate-on-scroll">
                <p>Blue Energy est née de la conviction que les déchets urbains représentent une ressource énergétique inexploitée au sein des défis actuels.</p>
                
                <p>Notre équipe dynamique place l'innovation et la durabilité au cœur des solutions, collaborant avec les municipalités et communautés pour transformer les déchets en opportunités.</p>
            </div>
        </div>
    </section>

    <section class="section team-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Notre Vision</h2>
            
            <div class="team-member animate-on-scroll">
                <img src="/asset/images/Mr Biheng.jpg" alt="Photo de Roger Thierry BIKENE">
                <div class="member-info">
                    <div class="member-quote">"Plus qu'une simple initiative de transport durable,
                         Waste-to-Energy représente une réponse concrète aux défis écologiques, 
                         énergétiques et sociale de notre temps. En transformant les déchets en une source d'énergie vitale 
                         pour le réseau urbain, nous ne nous contentons pas d'offrir un service de transport public de qualité
                          supérieure ou à répondre au problème des déchets urbaine ;
                         nous construisons un modèle d'économie circulaire et d'autonomie énergétique locale. Ce projet,
                          qui s'inscrit dans l'initiative Global Gateway de l'Union européenne et 
                         ancré dans des partenariats stratégiques avec les Communautés Urbaines de Yaoundé et Douala,
                          incarne 
                        la collaboration nécessaire pour assurer un développement durable pour tous au Cameroun."</div>
                    <div class="member-name">Roger Thierry BIHENG Bi MBENOUN</div>
                    <div class="member-title">Fondateur - CEO Blue Energy</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section gallery-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Notre Galerie</h2>
            
            <div id="galleryCarousel" class="carousel slide animate-on-scroll" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <?php
                    $gallery_items = [
                        [
                            'image' => '/asset/images/d.jpg',
                            'alt' => 'Rencontre avec les partenaires',
                            'title' => 'Primature'
                        ],
                        [
                            'image' => '/asset/images/a.jpg',
                            'alt' => 'Rencontre avec les partenaires',
                            'title' => 'MINDHU'
                        ],
                        [
                            'image' => '/asset/images/b.jpg',
                            'alt' => 'Rencontre avec les partenaires',
                            'title' => 'CUY'
                        ],
                        [
                            'image' => '/asset/images/e.jpg',
                            'alt' => 'Rencontre avec les partenaires',
                            'title' => 'CAA'
                        ]
                    ];

                    foreach ($gallery_items as $index => $item) {
                        $active_class = ($index == 0) ? 'active' : '';
                        ?>
                        <div class="carousel-item <?php echo $active_class; ?>">
                            <img src="<?php echo $item['image']; ?>" class="d-block w-100" alt="<?php echo $item['alt']; ?>">
                            <div class="carousel-caption">
                                <h5><?php echo $item['title']; ?></h5>
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
            <h2 class="section-title animate-on-scroll" style="color: white;">Nos Valeurs</h2>
            
            <div class="values-grid">
                <?php
                $values = [
                    [
                        'icon' => 'fas fa-leaf',
                        'title' => 'Durabilité',
                        'description' => 'Engagement envers des pratiques respectueuses de l\'environnement.'
                    ],
                    [
                        'icon' => 'fas fa-rocket',
                        'title' => 'Innovation',
                        'description' => 'Solutions technologiques innovantes pour transformer les défis.'
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Responsabilité',
                        'description' => 'Actions éthiques et transparentes envers tous nos partenaires.'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Collaboration',
                        'description' => 'Partenariats solides dans l\'écosystème énergétique durable.'
                    ]
                ];

                foreach ($values as $index => $value) {
                    ?>
                    <div class="value-item animate-on-scroll" style="animation-delay: <?php echo $index * 0.2; ?>s">
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
            <div class="cta-content animate-on-scroll">
                <h2 class="section-title" style="color: white;">Ensemble, Construisons un Avenir Plus Vert</h2>
                <p>Rejoignez-nous dans cette aventure transformatrice pour créer des villes plus propres et énergétiquement autonomes.</p>
                
                <div class="cta-buttons">
                    <a href="/impact" class="btn btn-primary">Découvrir Notre Impact</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
        include __DIR__."/components/footer.php";
    ?>

    <script src="/asset/about.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Add staggered animation delays
        document.querySelectorAll('.values-grid .value-item').forEach((item, index) => {
            item.style.animationDelay = (index * 0.2) + 's';
        });



        // Add hover effects to interactive elements
        document.querySelectorAll('.team-member, .value-item, .btn').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = this.style.transform + ' scale(1.02)';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = this.style.transform.replace(' scale(1.02)', '');
            });
        });

        // Carousel auto-advance with pause on hover
        const carousel = document.querySelector('#galleryCarousel');
        if (carousel) {
            const bsCarousel = new bootstrap.Carousel(carousel, {
                interval: 4000,
                ride: 'carousel'
            });

            carousel.addEventListener('mouseenter', () => {
                bsCarousel.pause();
            });

            carousel.addEventListener('mouseleave', () => {
                bsCarousel.cycle();
            });
        }

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
            
            // Trigger animations on load
            setTimeout(() => {
                document.querySelectorAll('.animate-on-scroll').forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('animated');
                    }, index * 100);
                });
            }, 300);
        });

        // Form validation and enhancement
        const newsletterForm = document.querySelector('form[method="POST"]');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                
                if (email && email.includes('@')) {
                    // Simulate form submission
                    this.querySelector('button').innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                    
                    setTimeout(() => {
                        this.querySelector('button').innerHTML = '<i class="fas fa-check"></i>';
                        this.querySelector('input').value = '';
                        
                        // Show success message
                        const successMsg = document.createElement('div');
                        successMsg.className = 'alert alert-success mt-2';
                        successMsg.textContent = 'Inscription réussie !';
                        this.appendChild(successMsg);
                        
                        setTimeout(() => {
                            successMsg.remove();
                            this.querySelector('button').innerHTML = '<i class="fas fa-check"></i>';
                        }, 3000);
                    }, 1500);
                }
            });
        }

        // Add dynamic particle effects to hero section
        function createParticle() {
            const hero = document.querySelector('.hero');
            if (!hero) return;
            
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDuration = (Math.random() * 3 + 2) + 's';
            particle.style.width = particle.style.height = Math.random() * 4 + 2 + 'px';
            
            hero.appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 5000);
        }

        // Create particles periodically
    </script>

</body>
</html>