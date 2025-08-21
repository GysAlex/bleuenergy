
<html lang="fr">
<head>
    <?php
        include __DIR__."/components/meta.php";
    ?>
    <title>Impact Environnemental</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-green: #4CAF50;
            --secondary-blue: #2196F3;
            --accent-teal: #009688;
            --gradient-bg: linear-gradient(135deg, #4CAF50 0%, #2196F3 100%);
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
            padding-top: 70px;
        }
        .navbar {
            background-color: transparent !important; /* Make it transparent by default */
            transition: background-color 0.3s ease;
        }

       
    

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .animate-fade {
            animation: fadeIn 1s ease-out;
        }

        .animate-left {
            animation: slideInLeft 0.8s ease-out;
        }

        .animate-right {
            animation: slideInRight 0.8s ease-out;
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }

      
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 400"><rect fill="%23558B2F" width="1200" height="400"/><path fill="%23689F38" d="M0,200 Q300,150 600,180 T1200,160 L1200,400 L0,400 Z"/></svg>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 100%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 300;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.3rem;
            opacity: 0.9;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
            max-width: 800px;
            margin: 0 auto;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #2E7D32;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .solution-card {
            text-align: center;
            padding: 40px 30px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .solution-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #4CAF50, #2196F3);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .solution-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .solution-card:hover::before {
            transform: scaleX(1);
        }

        .solution-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .solution-icon::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.3);
            border-radius: 50%;
            transition: all 0.4s ease;
            transform: translate(-50%, -50%);
        }

        .solution-card:hover .solution-icon {
            transform: rotate(360deg) scale(1.1);
        }

        .solution-card:hover .solution-icon::before {
            width: 100%;
            height: 100%;
        }

        .solution-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2E7D32;
        }

        .solution-card p {
            color: #666;
            line-height: 1.6;
        }

        .impact-section {
            background: linear-gradient(135deg, #E8F5E8 0%, #C8E6C9 100%);
        }

        .impact-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-card {
            padding: 40px 30px;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 50px;
            height: 3px;
            background: #4CAF50;
            transform: translateX(-50%);
            transition: width 0.6s ease;
        }

        .stat-card:hover::before {
            width: 100%;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 15px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
        }

        .stat-card:hover .stat-number {
            transform: scale(1.1);
            color: #45a049;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #666;
            font-weight: 500;
        }

        .process-section {
            background: #fff;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .process-step {
            padding: 20px;
        }

        .process-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 15px;
            background: #4CAF50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        .benefits-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .benefits-image {
            width: 100%;
            height: 300px;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('images/nature.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
        }

        .benefits-list {
            list-style: none;
        }

        .benefits-list li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            color: #666;
        }

        .benefits-list li:before {
            content: "🌱";
            position: absolute;
            left: 0;
            top: 10px;
        }

        .cta-section {
            background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
            color: white;
            text-align: center;
        }

        .cta-button {
            display: inline-block;
            background: white;
            color: #2E7D32;
            padding: 15px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }

        .cta-button:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .benefits-section {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .solutions-grid {
                grid-template-columns: 1fr;
            }
        }
.lien-fleche {
    /* Style de base du lien */
    color: green;
    text-decoration: none;
    font-size: 1.2rem;
    font-weight: bold;
    display: inline-block;
    padding-left: 20px; /* Espace pour la flèche à gauche */
    position: relative; /* Point de référence pour la flèche animée */
    transition: all 0.3s ease-in-out; /* Animation de transition pour le survol */
}

.lien-fleche:hover {
    color: blue;
}

.lien-fleche::before {
    /* Création de la flèche (le triangle) */
    content: "";
    position: absolute;
    top: 50%;
    left: 0; /* Positionne la flèche à gauche du texte */
    transform: translateY(-50%); /* Centrage vertical parfait */
    
    /* Définition de la taille de la flèche */
    border-top: 10px solid transparent;
    border-bottom: 8px solid transparent;
    border-right: 30px solid green; /* Largeur et couleur de la flèche */
    
    /* Animation de la flèche */
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.lien-fleche:hover::before {
    /* Effet d'animation au survol */
    opacity: 1; /* Rendre la flèche visible */
    left: 15px; /* Déplacer la flèche vers la droite */
}
    </style>
</head>
<body>
    <?php
    // Configuration des données
    $solutions = [
        [
            'icon' => '',
            'title' => 'Biogaz',
            'description' => 'Production d\'énergie propre à partir de déchets organiques'
        ],
        [
            'icon' => '',
            'title' => 'BioÉlectricité',
            'description' => 'Production renouvelable d\'électricité à partir de la biomasse agricole'
        ],
        [
            'icon' => '',
            'title' => 'Bio Diesel',
            'description' => 'Carburants bio-sourcés végétaux pour un carburant propre et durable'
        ],
        [
            'icon' => '',
            'title' => 'Biofertilisant',
            'description' => 'Solutions naturelles pour améliorer la fertilité des sols'
        ],
        [
            'icon' => '',
            'title' => 'Caoutchouc Recyclé',
            'description' => 'Valorisation des déchets en matériaux utiles'
        ]
    ];

    $stats = [
        ['number' => '50K', 'label' => 'tonnes de CO2 évitées'],
        ['number' => '1000+', 'label' => 'hectares de terres enrichies'],
        ['number' => '25K', 'label' => 'tonnes de déchets valorisés'],
        ['number' => '1000+', 'label' => 'emplois verts créés']
    ];

    $processSteps = [
        ['icon' => '', 'title' => 'Collecte et ramassage des Déchets'],
        ['icon' => '', 'title' => 'Tri et Préparation'],
        ['icon' => '', 'title' => 'Production d\'Énergie'],
        ['icon' => '', 'title' => 'Transformation en Produits'],
        ['icon' => '', 'title' => 'Communication']
    ];

    $benefits = [
        'Réduction des émissions de gaz à effet de serre',
        'Création d\'emplois locaux',
        'Amélioration de la fertilité des sols',
        'Gestion durable des déchets',
        'Développement de l\'économie circulaire'
    ];
    ?>
<a href="impact.php" class="lien-fleche">precedente</a>
 
    <!-- Hero Section -->
    <section class="hero-section animate-fade">
        <div class="hero-content animate-left">
            <h1>Notre Impact Environnemental</h1>
            <p>Transformer les déchets en ressources durables pour l'Afrique</p>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title animate-fade">Solutions Écologiques Innovantes</h2>
            <p class="section-subtitle animate-fade" style="animation-delay: 0.2s">
                Notre approche intégrée transforme les déchets organiques en ressources précieuses, contribuant à
                un avenir plus durable pour le Cameroun.
            </p>
            
            <div class="solutions-grid">
                <?php 
                $delay = 0.1;
                foreach ($solutions as $solution): 
                ?>
                <div class="solution-card animate-fade" style="animation-delay: <?php echo $delay; ?>s">
                    <div class="solution-icon"><?php echo $solution['icon']; ?></div>
                    <h3><?php echo $solution['title']; ?></h3>
                    <p><?php echo $solution['description']; ?></p>
                </div>
                <?php 
                $delay += 0.1;
                endforeach; 
                ?>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="section impact-section">
        <div class="container">
            <h2 class="section-title animate-fade">Impact</h2>
            <div class="impact-stats">
                <?php 
                $delay = 0.1;
                foreach ($stats as $stat): 
                ?>
                <div class="stat-card animate-fade" style="animation-delay: <?php echo $delay; ?>s">
                    <div class="stat-number"><?php echo $stat['number']; ?></div>
                    <div class="stat-label"><?php echo $stat['label']; ?></div>
                </div>
                <?php 
                $delay += 0.1;
                endforeach; 
                ?>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section process-section">
        <div class="container">
            <h2 class="section-title animate-fade">Notre Processus de Valorisation</h2>
            <div class="process-steps">
                <?php 
                $delay = 0.1;
                foreach ($processSteps as $step): 
                ?>
                <div class="process-step animate-fade" style="animation-delay: <?php echo $delay; ?>s">
                    <div class="process-icon"><?php echo $step['icon']; ?></div>
                    <h4><?php echo $step['title']; ?></h4>
                </div>
                <?php 
                $delay += 0.1;
                endforeach; 
                ?>
            </div>
        </div>
    </section>

   
    <!-- CTA Section -->
    <section class="section cta-section">
        <div class="container">
            <h2>Rejoignez Notre Initiative Écologique</h2>
            <p>Ensemble, créons un avenir plus durable pour le Cameroun</p>
            <a href="About.php" class="cta-button">En Savoir Plus</a>
        </div>
    </section>

    <!-- Footer -->
  

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Animation du navbar au scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Animation des éléments au défilement
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) translateX(0)';
                }
            });
        }, observerOptions);

        // Observer tous les éléments animés
        document.querySelectorAll('.animate-fade, .animate-left, .animate-right').forEach(el => {
            el.style.opacity = '0';
            if (el.classList.contains('animate-left')) {
                el.style.transform = 'translateX(-50px)';
            } else if (el.classList.contains('animate-right')) {
                el.style.transform = 'translateX(50px)';
            } else {
                el.style.transform = 'translateY(20px)';
            }
            observer.observe(el);
        });

        // Animation des cartes au survol
        document.querySelectorAll('.solution-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Animation des statistiques avec compteur
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = counter.textContent;
                const numericTarget = parseInt(target.replace(/[^\d]/g, ''));
                const suffix = target.replace(/[\d]/g, '');
                let current = 0;
                const increment = numericTarget / 100;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= numericTarget) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current) + suffix;
                    }
                }, 20);
            });
        }

        // Lancer l'animation des compteurs quand la section impact est visible
        const impactSection = document.querySelector('.impact-section');
        const impactObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    impactObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        if (impactSection) {
            impactObserver.observe(impactSection);
        }

        // Smooth scrolling pour les liens de navigation
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
    </script>
</body>
</html>