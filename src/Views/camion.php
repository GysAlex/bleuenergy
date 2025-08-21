<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Flotte de Véhicules Spécialisés</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'poppins';
            line-height: 1.3;
            color: #1d1f1eff;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            height: 70vh;
            background: linear-gradient(135deg, rgba(0,100,150,0.8), rgba(15, 131, 73, 0.8)), 
                        url('public/asset/images/scania1.jpeg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(ellipse at center, transparent 0%, rgba(0,0,0,0.3) 100%);
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
            animation: slideUp 1s ease-out 0.3s both;
        }

        .hero h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.9;
        }

        /* Floating truck animation */
        .truck-icon {
            position: absolute;
            top: 20%;
            right: 10%;
            font-size: 6rem;
            color: rgba(255,255,255,0.1);
            animation: float 6s ease-in-out infinite;
            z-index: 1;
        }

        /* Services Section */
        .services {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .service-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            animation: slideInLeft 1s ease-out;
        }

        .service-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .service-image:hover img {
            transform: scale(1.05);
        }

        .service-content {
            animation: slideInRight 1s ease-out;
        }

        .service-content h2 {
            font-size: 2.5rem;
            color: #2c5282;
            margin-bottom: 20px;
            position: relative;
        }

        .service-content h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #4299e1, #63b3ed);
            border-radius: 2px;
        }

        .service-content p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #666;
        }

        .features-list {
            list-style: none;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 0.6s ease-out;
            animation-fill-mode: both;
        }

        .feature-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4299e1, #63b3ed);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-weight: bold;
        }

        .feature-text h4 {
            color: #2c5282;
            margin-bottom: 5px;
        }

        .feature-text p {
            color: #666;
            font-size: 0.9rem;
            margin: 0;
        }

        /* Transport Section */
        .transport {
            padding: 100px 0;
            background: white;
        }

        .transport h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #2c5282;
            margin-bottom: 60px;
            animation: fadeInUp 1s ease-out;
        }

        .transport-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .transport-content {
            animation: slideInLeft 1s ease-out;
        }

        .transport-image {
            position: relative;
            animation: slideInRight 1s ease-out;
        }

        .transport-image img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .transport-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .transport-feature {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease;
            animation: zoomIn 0.6s ease-out;
            animation-fill-mode: both;
        }

        .transport-feature:hover {
            transform: translateY(-5px);
            background: linear-gradient(135deg, #4299e1, #63b3ed);
            color: white;
        }

        .transport-feature i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #4299e1;
            transition: color 0.3s ease;
        }

        .transport-feature:hover i {
            color: white;
        }

        /* Stats Section */
        .stats {
            padding: 80px 0;
            background: linear-gradient(135deg, #2c5282 0%, #3182ce 100%);
            color: white;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            max-width: 800px;
            margin: 0 auto;
        }

        .stat-item {
            padding: 30px;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
            animation: bounceIn 0.8s ease-out;
            animation-fill-mode: both;
        }

        .stat-item:hover {
            transform: scale(1.05);
        }

        .stat-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #ffd700;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Contact Section */
        .contact {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            text-align: center;
        }

        .contact h2 {
            font-size: 2.5rem;
            color: #2c5282;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out;
        }

        .contact-btn {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(135deg, #4299e1, #63b3ed);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(66, 153, 225, 0.3);
            animation: pulse 2s ease-in-out infinite;
        }

        .contact-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(66, 153, 225, 0.4);
            animation: none;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .services-grid, .transport-grid { grid-template-columns: 1fr; gap: 40px; }
            .stats-grid { grid-template-columns: 1fr; }
            .transport-features { grid-template-columns: 1fr; }
            .truck-icon { display: none; }
        }

        /* Parallax effect */
        .parallax {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .parallax-element {
            position: absolute;
            width: 20px;
            height: 20px;
            background: rgba(66, 153, 225, 0.1);
            border-radius: 50%;
            animation: floatRandom 10s infinite linear;
        }

        @keyframes floatRandom {
            0% { transform: translateY(100vh) rotate(0deg); }
            100% { transform: translateY(-100vh) rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Parallax background -->
    <div class="parallax">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <div class="parallax-element" style="
                left: <?php echo rand(0, 100); ?>%; 
                animation-delay: <?php echo rand(0, 10); ?>s;
                animation-duration: <?php echo rand(8, 15); ?>s;
            "></div>
        <?php endfor; ?>
    </div>

    <!-- Hero Section -->
    <section class="hero">
    
        <div class="hero-content">
            <h1>Notre Flotte des caminions Spécialisés</h1>
            <p>Une solution adaptée pour le transport des déchets, la distribution des bacs à ordures et
                 la mise en place d’un espace dédiés aux bacs au sein des quartiers de la ville de Douala et Yaoundé. </p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="services-grid">
                <div class="service-image">
                    <img src="public/asset/images/scania.jpg" alt="Camion de collecte">
                </div>
                <div class="service-content">
                    <h2>Camions de Collecte</h2>
                    <p>La flotte des camions spécialisés assure la collecte sécurisée et la distribution et
                 le ramassage avec des véhicules adaptés pour les besoins des populations.
                 Équipés d'un système de haute technologie et de sécurité, ces véhicules garantissent un transport fiable 
                 et respectueux de l'environnement</p>
                    
                    <ul class="features-list">
                        <?php
                        $features = [
                            ['icon' => '🌱', 'title' => 'Transport écologique', 'desc' => 'Solutions durables'],
                            ['icon' => '🛡️', 'title' => 'Sécurité avancée', 'desc' => 'Technologies de pointe'],
                            ['icon' => '⚡', 'title' => 'Efficacité énergétique', 'desc' => 'Consommation optimisée'],
                            ['icon' => '🔧', 'title' => 'Maintenance préventive', 'desc' => 'Entretien professionnel']
                        ];
                        
                        foreach ($features as $index => $feature):
                        ?>
                            <li class="feature-item" style="animation-delay: <?php echo $index * 0.1; ?>s">
                                <div class="feature-icon"><?php echo $feature['icon']; ?></div>
                                <div class="feature-text">
                                    <h4><?php echo $feature['title']; ?></h4>
                                    <p><?php echo $feature['desc']; ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Transport Section -->
    <section class="transport">
        <div class="container">
            <h2>Bus de transport</h2>
            <div class="transport-grid">
                <div class="transport-content">
                    <p>Scania est reconnue dans le monde entier pour ses solutions de transport fiable, économe en énergie. Dans un contexte où la préoccupation environnementale devient de plus en plus importante, Scania privilégie des bus équipés de déchargement automatisés, rendant ces processus plus efficaces et plus économes et stimuler des initiatives de transport plus durable.</p>
                    
                    <div class="transport-features">
                        <?php
                        $transportFeatures = [
                            ['icon' => '🚌', 'title' => 'Confort et sécurité'],
                            ['icon' => '⚡', 'title' => 'Efficacité énergétique'],
                            ['icon' => '🌿', 'title' => 'Respect environnement'],
                            ['icon' => '🛠️', 'title' => 'Technologie avancée']
                        ];
                        
                        foreach ($transportFeatures as $index => $tFeature):
                        ?>
                            <div class="transport-feature" style="animation-delay: <?php echo $index * 0.1; ?>s">
                                <div><?php echo $tFeature['icon']; ?></div>
                                <h4><?php echo $tFeature['title']; ?></h4>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="transport-image">
                    <img src="public/asset/images/scannia.jpg" alt="Bus Scania">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <?php
                $stats = [
                    ['icon' => '🚛', 'number' => '200+', 'label' => 'Véhicules'],
                    ['icon' => '🌍', 'number' => '95%', 'label' => 'Écologique'],
                    ['icon' => '⭐', 'number' => '24/7', 'label' => 'Service']
                ];
                
                foreach ($stats as $index => $stat):
                ?>
                    <div class="stat-item" style="animation-delay: <?php echo $index * 0.2; ?>s">
                        <div class="stat-icon"><?php echo $stat['icon']; ?></div>
                        <div class="stat-number"><?php echo $stat['number']; ?></div>
                        <div class="stat-label"><?php echo $stat['label']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <h2>Vous avez des questions ?</h2>
            <a href="#contact" class="contact-btn">Nous Contacter</a>
        </div>
    </section>

    <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('[style*="animation"]');
            animatedElements.forEach(el => {
                el.style.animationPlayState = 'paused';
                observer.observe(el);
            });
        });

        // Parallax scroll effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax-element');
            
            parallaxElements.forEach((element, index) => {
                const speed = 0.5 + (index % 3) * 0.2;
                element.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
            });
        });

        // Smooth scrolling for anchor links
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

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = counter.textContent;
                const isPercentage = target.includes('%');
                const isPlus = target.includes('+');
                const isSlash = target.includes('/');
                
                let numericTarget;
                if (isPercentage) {
                    numericTarget = parseInt(target);
                } else if (isPlus) {
                    numericTarget = parseInt(target);
                } else if (isSlash) {
                    return; // Skip 24/7
                } else {
                    numericTarget = parseInt(target);
                }
                
                let current = 0;
                const increment = numericTarget / 50;
                
                const updateCounter = () => {
                    if (current < numericTarget) {
                        current += increment;
                        if (isPercentage) {
                            counter.textContent = Math.floor(current) + '%';
                        } else if (isPlus) {
                            counter.textContent = Math.floor(current) + '+';
                        } else {
                            counter.textContent = Math.floor(current);
                        }
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
            });
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.addEventListener('DOMContentLoaded', () => {
            const statsSection = document.querySelector('.stats');
            if (statsSection) {
                statsObserver.observe(statsSection);
            }
        });
    </script>
</body>
</html>