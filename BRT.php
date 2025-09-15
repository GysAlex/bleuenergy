<?php
// Configuration de base
$page_title = "Solutions de connectivités BRT";
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-green: #00B894;
            --primary-blue: #0984e3;
            --light-gray: #f8f9fa;
            --dark-gray: #2d3436;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
        }
        
        .hero-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: var(--primary-green);
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .bus-image {
            max-width: 90%;
            height: auto;
            transition: transform 0.3s ease;
        }
        
        .bus-image:hover {
            transform: scale(1.05);
        }
        
        .btn-custom-green {
            background-color: var(--primary-green);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-custom-green:hover {
            background-color: #00a085;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 184, 148, 0.3);
            color: white;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--primary-green);
            color: var(--primary-green);
            background: transparent;
            padding: 10px 25px;
            border-radius: 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-outline-custom:hover {
            background-color: var(--primary-green);
            color: white;
            transform: translateY(-2px);
        }
        
        .vision-section {
            padding: 60px 0;
            background: white;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
            border-left: 4px solid var(--primary-green);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: rotateY(180deg);
        }
        
        .connectivity-section {
            background: linear-gradient(45deg, var(--light-gray), white);
            padding: 80px 0;
        }
        
        .optimization-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-left: 5px solid var(--primary-blue);
        }
        
        .optimization-card:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 25px rgba(9, 132, 227, 0.2);
        }
        
        .charging-section {
            padding: 60px 0;
            background: white;
        }
        
        .vehicle-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .vehicle-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .vehicle-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .impact-section {
            background: var(--light-gray);
            padding: 60px 0;
        }
        
        .impact-icon {
            width: 80px;
            height: 80px;
            background: var(--primary-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }
        
        .impact-icon:hover {
            background: var(--primary-blue);
            transform: rotate(360deg);
        }
        
        .pilot-projects {
            padding: 60px 0;
            background: white;
        }
        
        .project-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
        }
        
        .project-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .cta-section {
            background: linear-gradient(45deg, var(--primary-green), var(--primary-blue));
            padding: 60px 0;
            color: white;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 40px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary-green);
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>

<body>
    <!-- Section Hero -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4 fade-in">Solution connectivité <span class="text-success">BRT</span> électrique à 100% Verte.<br></h1>
                    <p class="lead mb-4 fade-in">Révolutionnons le transport urbain durable avec nos solutions hybrides de Bus Rapid Transit et de métros.</p>
                    <div class="fade-in">
                        <a href="#vision" class="btn-custom-green me-3">Découvrir nos solutions</a>
                        <a href="#projets" class="btn-outline-custom">Voir nos projets</a>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <img src="images/Bus.png" alt="Bus BRT moderne" class="bus-image img-fluid pulse">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Vision -->
    <section id="vision" class="vision-section">
        <div class="container">
            <h2 class="text-center section-title fade-in">Notre vision</h2>
            <p class="text-center lead mb-5 fade-in">Grâce au Waste to Energy, les déchets se transforment en bioélectricité pour alimenter le BRT électrique, réduisant durablement l’empreinte carbone et ouvrant la voie à une mobilité urbaine 100 % verte.</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-leaf text-white fa-2x"></i>
                        </div>
                        <h4 class="text-success">Durabilité</h4>
                        <p>Solutions énergétiques propres pour un transport respectueux de l'environnement</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-wheelchair text-white fa-2x"></i>
                        </div>
                        <h4 class="text-success">Accessibilité</h4>
                        <p>Solutions pour rendre les transports publics accessibles à tous sans exception</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-wifi text-white fa-2x"></i>
                        </div>
                        <h4 class="text-success">Connectivité</h4>
                        <p>Solutions technologiques avancées pour un transport intelligent et connecté</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Connectivité BRT -->
    <section class="connectivity-section">
        <div class="container">
            <h2 class="text-center section-title fade-in">Connectivité BRT</h2>
            <p class="text-center lead mb-5 fade-in"> Un écosystème de transport qui connecte les communautés tout en réduisant l'empreinte carbone</p>
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="optimization-card fade-in">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5><i class="fas fa-route text-primary me-2"></i>Optimisation des itinéraires</h5>
                                <p class="mb-0">Systèmes intelligents de planification et de contrôle en temps réel</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <i class="fas fa-map fa-3x text-primary opacity-25"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="optimization-card fade-in">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5><i class="fas fa-charging-station text-primary me-2"></i>Infrastructure de recharge</h5>
                                <p class="mb-0">Stations de recharge rapides intégrées aux arrêts BRT</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <i class="fas fa-bolt fa-3x text-primary opacity-25"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="optimization-card fade-in">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5><i class="fas fa-mobile-alt text-primary me-2"></i>Connectivité numérique</h5>
                                <p class="mb-0">Applications mobiles et systèmes de paiement intégrés</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <i class="fas fa-smartphone fa-3x text-primary opacity-25"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="images/image.jpeg" alt="Schéma connectivité" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Stations de Recharge E-Mobilité -->
    <section id="recharge" class="charging-section">
        <div class="container">
            <h2 class="text-center section-title fade-in">Stations de Recharge E-Mobilité</h2>
            <p class="text-center lead mb-5 fade-in">Solutions de recharge adaptées à chaque type de véhicule</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="vehicle-card fade-in">
                        <img src="images/bus elect.jpeg" alt="Bus électrique">
                        <div class="p-3">
                            <h5>Bus Électriques</h5>
                            <p class="mb-0">Stations haute puissance pour flottes urbaines</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vehicle-card fade-in">
                        <img src="images/voiture.jpeg" alt="Voiture électrique">
                        <div class="p-3">
                            <h5>Voitures Électriques</h5>
                            <p class="mb-0">Bornes de recharge rapide publiques</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vehicle-card fade-in">
                        <img src="images/moto.jpeg" alt="Moto électrique">
                        <div class="p-3">
                            <h5>Motos Électriques</h5>
                            <p class="mb-0">Solutions de recharge compactes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Impact Attendu -->
    <section class="impact-section">
        <div class="container">
            <h2 class="text-center section-title fade-in">Impact Attendu</h2>
            <p class="text-center lead mb-5 fade-in">Les bénéfices de nos solutions pour les villes et les citoyens</p>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="fade-in">
                        <div class="impact-icon">
                            <i class="fas fa-chart-line text-white fa-2x"></i>
                        </div>
                        <h5>Efficacité</h5>
                        <p>Amélioration des temps de trajet</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="fade-in">
                        <div class="impact-icon">
                            <i class="fas fa-leaf text-white fa-2x"></i>
                        </div>
                        <h5>Environnement</h5>
                        <p>Réduction des émissions CO2</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="fade-in">
                        <div class="impact-icon">
                            <i class="fas fa-users text-white fa-2x"></i>
                        </div>
                        <h5>Social</h5>
                        <p>Accessibilité pour tous</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="fade-in">
                        <div class="impact-icon">
                            <i class="fas fa-coins text-white fa-2x"></i>
                        </div>
                        <h5>Économique</h5>
                        <p>Réduction des coûts de transport</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets Pilotes -->
   
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Animation au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observer tous les éléments avec la classe fade-in
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));
        });

        // Smooth scrolling pour les ancres
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

        // Animation des cartes au hover
        document.querySelectorAll('.feature-card, .vehicle-card, .project-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Animation des icônes d'impact
        document.querySelectorAll('.impact-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                this.style.animation = 'none';
                setTimeout(() => {
                    this.style.animation = 'pulse 0.5s';
                }, 10);
            });
        });

        // Compteur animé (exemple)
        function animateCounter(element, start, end, duration) {
            let current = start;
            const increment = (end - start) / (duration / 16);
            
            const timer = setInterval(() => {
                current += increment;
                element.textContent = Math.round(current);
                
                if (current >= end) {
                    element.textContent = end;
                    clearInterval(timer);
                }
            }, 16);
        }

        // Parallax effect léger
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.hero-section::before');
            
            parallaxElements.forEach(element => {
                const speed = 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Loading animation
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });

        // Responsive menu handling
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        console.log('BRT Connectivity Solutions - Page chargée avec succès!');
    </script>
</body>
</html>