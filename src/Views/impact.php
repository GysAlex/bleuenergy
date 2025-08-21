<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impact</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-green: #4CAF50;
            --secondary-blue: #2196F3;
            --accent-teal: #009688;
            --gradient-bg: linear-gradient(135deg, #4CAF50 0%, #2196F3 100%);
            --text-dark: #333;
            --text-light: #666;
            --light-grey: #e0e0e0;
            --red-color: #f44336; /* Specific red for CO2 chart */
            --orange-color: #ff9800; /* Specific orange for CO2 chart */
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
        }

         /* Header */
       
        /* Hero Section */
        .hero-section {
            background: var(--gradient-bg);
            padding: 200px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1.2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Impact Cards */
        .impact-section {
            padding: 80px 0;
            background: linear-gradient(to bottom, #f8f9fa, #ffffff);
        }

        .impact-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            height: 97%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .impact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .impact-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
        }

        .impact-icon.environmental {
            background: linear-gradient(135deg, #4CAF50, #66BB6A);
        }

        .impact-icon.social {
            background: linear-gradient(135deg, #2196F3, #42A5F5);
        }

        .impact-icon.economic {
            background: linear-gradient(135deg, #009688, #26A69A);
        }

        /* Styles for circular progress */
        .circle-progress {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;

            justify-content: center;
            margin: 1.5rem auto 1rem;
            position: relative;
            /* Using conic-gradient for the fill effect */
            background: conic-gradient(
                var(--primary-green) calc(var(--progress-green, 0) * 1%),
                var(--secondary-blue) calc(var(--progress-blue, 0) * 1%),
                var(--accent-teal) calc(var(--progress-teal, 0) * 1%),
                var(--light-grey) 0%
            );
            overflow: hidden;
            box-shadow: 0 0 0 8px rgba(0,0,0,0.05);
            transition: background 0.5s ease-out; /* For general background changes */
        }

        /* Specific conic gradients for each circle to show individual color fills */
        .circle-progress.green {
            background: conic-gradient(var(--primary-green) calc(var(--progress-val, 0) * 1%), var(--light-grey) calc(var(--progress-val, 0) * 1%));
        }

        .circle-progress.blue {
            background: conic-gradient(var(--secondary-blue) calc(var(--progress-val, 0) * 1%), var(--light-grey) calc(var(--progress-val, 0) * 1%));
        }

        .circle-progress.teal {
            background: conic-gradient(var(--accent-teal) calc(var(--progress-val, 0) * 1%), var(--light-grey) calc(var(--progress-val, 0) * 1%));
        }


        .circle-progress::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 85%;
            height: 85%;
            border-radius: 50%;
            background: white;
            z-index: 1;
        }

        .circle-progress .impact-number {
            position: relative;
            z-index: 2;
            font-size: 2.8rem;
            font-weight: 800;
            margin: 0;
            line-height: 1;
            color: var(--text-dark);
            transition: color 0.5s ease-out;
        }

        .circle-progress.green .impact-number { color: var(--primary-green); }
        .circle-progress.blue .impact-number { color: var(--secondary-blue); }
        .circle-progress.teal .impact-number { color: var(--accent-teal); }

        .circle-progress small {
            position: relative;
            z-index: 2;
            font-size: 0.8rem;
            color: var(--text-light);
            text-align: center;
            padding: 0 10px;
            margin-top: 5px;
        }

        .impact-card .impact-description {
            display: none;
        }

        .impact-card .impact-small-description {
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Detailed Sections */
        .detail-section {
            padding: 60px 0;
        }

        .detail-section:nth-child(even) {
            background: #f8f9fa;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: var(--text-dark);
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        .section-title .fas {
            color: var(--primary-green);
            font-size: 2.2rem;
        }


        .feature-item {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border-left: 4px solid var(--primary-green);
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateX(5px);
        }

        .feature-icon-wrapper {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-green);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .feature-icon {
            color: white;
            font-size: 1.2rem;
        }


        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        /* Charts and Stats */
        .chart-container {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }

        /* Specific styles for CO2 chart details */
        .co2-chart-details {
            display: flex;
            justify-content: space-around;
            margin-top: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .co2-chart-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 8px;
            color: white;
            width: 120px;
            flex-shrink: 0;
        }

        .co2-chart-item h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
            line-height: 1;
        }

        .co2-chart-item small {
            font-size: 0.8rem;
            text-align: center;
        }

        .co2-chart-item.green-bg { background: var(--primary-green); }
        .co2-chart-item.red-bg { background: var(--red-color); }
        .co2-chart-item.orange-bg { background: var(--orange-color); }

        .co2-chart-legend {
            margin-top: 1.5rem;
            padding: 1rem;
            background-color: #f0f8f0;
            border-left: 5px solid var(--primary-green);
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .co2-chart-legend i {
            font-size: 1.5rem;
            color: green;
        }
        .co2-chart-legend p {
            margin: 0;
            color: red;
            font-size: 0.95rem;
        }


        .progress-item {
            margin-bottom: 1.5rem;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .progress {
            height: 12px;
            border-radius: 10px;
            background: #e9ecef;
        }

        .progress-bar {
            border-radius: 10px;
            transition: width 1.5s ease-in-out;
        }

        /* Community Section */
        .community-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .community-card:hover {
            transform: scale(1.02);
        }

        .community-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .community-content {
            padding: 1.5rem;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient-bg);
            padding: 80px 0;
            color: white;
            text-align: center;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .cta-buttons .btn {
            margin: 0.5rem;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: white;
            color: var(--primary-green);
        }

        /* Footer */

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

            .circle-progress {
                width: 140px;
                height: 140px;
            }
            .circle-progress .impact-number {
                font-size: 2rem;
            }
            .co2-chart-details {
                justify-content: center;
            }
            .co2-chart-item {
                width: 100px; /* Smaller width on mobile */
                padding: 8px;
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
                font-size: 1.4rem;
            }

            .info-item {
                padding: 20px;
            }
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

    </style>
</head>
<body>
    

    <section class="hero-section" id="accueil">
        <div class="container">
            <div class="hero-content text-center" data-aos="fade-up">
                <h1 class="hero-title">Transformer les Défis en Progrès Concrets</h1>
                <p class="hero-subtitle">
                    À travers nos technologies, nos projets génèrent des bénéfices  pour
                    l'environnement, la société et l'économie. Découvrez un avenir plus durable et
                    prospère pour tous.
                </p>
            </div>
        </div>
    </section>
<style>
    a{
        text-decoration: none;
    }
</style>
    <section class="impact-section" id="impact">
        <div class="container">
          
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="impact-card">
                        <div class="impact-icon environmental">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3><a href="impact-enviro.php">Impact Environnemental</a></h3>
                        <p class="impact-small-description">Pour une planète plus verte</p>
                        <div class="circle-progress green" data-target="2.2" data-full-target="2.2" data-unit="M" data-decimals="1">
                            <div class="impact-number green counter">0</div>
                            <small>de tonnes de CO₂ évitées par an</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="impact-card">
                        <div class="impact-icon social">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3><a href="impact social.php">Impact social</a></h3>
                        <p class="impact-small-description">Améliorer la qualité de vie</p>
                        <div class="circle-progress blue" data-target="+75" data-full-target="+750" data-unit="+" data-decimals="0">
                            <div class="impact-number blue counter">0</div>
                            <small>emplois durables créés</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="impact-card">
                        <div class="impact-icon economic">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3><a href="impact-eco.php">Impact Economique</a></h3>
                        <p class="impact-small-description">Stimuler la croissance et assurer une autonomie énergétique</p>
                        <div class="circle-progress teal" data-target="+91.25" data-full-target="" data-unit="M" data-decimals="1">
                            <div class="impact-number teal counter">0</div>
                            <small>de valeur économique générée</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                <i class="fas fa-leaf"></i> Pour une Planète Plus Verte
            </h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="feature-item">
                        <div class="feature-icon-wrapper" style="background-color: var(--primary-green);">
                            <i class="fas fa-recycle feature-icon"></i>
                        </div>
                        <h4 class="feature-title">Valorisation des Déchets</h4>
                        <p>Plus de +2,2 millions de tonnes de déchets valorisées par an produient par nos usines , couvrant la totalité des déchets produits par 5 villes de taille moyenne.<br>
                       .</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper" style="background-color: var(--primary-green);">
                            <i class="fas fa-smog feature-icon"></i>
                        </div>
                        <h4 class="feature-title">Réduction des Émissions de CO₂</h4>
                        <p>Jusqu'à +1,5 million de tonnes de CO₂ équivalent évitées chaque année, correspondant à retirer l'équivalent de 300 000 voitures de la circulation.</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-wrapper" style="background-color: var(--primary-green);">
                            <i class="fas fa-solar-panel feature-icon"></i>
                        </div>
                        <h4 class="feature-title">Production d'Énergie Renouvelable</h4>
                        <p>+912,5 GWh d'énergie verte produite annuellement, alimentant le réseau urbain et pouvant fournir l'électricité à plus de 300 000 foyers par an.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="chart-container">
                        <h5>Réduction des Émissions de CO₂</h5>
                        <div style="max-width: 300px; margin: 0 auto; ">
                            <canvas id="co2Chart"></canvas>
                        </div>
                        <div class="co2-chart-details">
                            <div class="co2-chart-item green-bg">
                                <h3>+65%</h3>
                                <small>CO₂ Évité</small>
                            </div>
                            <div class="co2-chart-item red-bg">
                                <h3>+20%</h3>
                                <small>Émissions Restantes</small>
                            </div>
                            <div class="co2-chart-item orange-bg">
                                <h3>+15%</h3>
                                <small>Objectif 2028</small>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                <i class="fas fa-heart"></i> Améliorer la Qualité de Vie 
            </h2>
            <div class="row">
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="community-card">
                        <div class="community-image" style="background-image: url('images/emploi.jpg')"></div>
                        <div class="community-content">
                            <h5><i class="fas fa-briefcase"></i> Création d'Emplois</h5>
                            <p>Plus de +750 emplois créés dans des secteurs durables, offrant des opportunités de carrière dans les technologies vertes.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="community-card">
                        <div class="community-image" style="background-image: url('images/enviro.jpg')"></div>
                        <div class="community-content">
                            <h5><i class="fas fa-hands-helping"></i> Éducation et Sensibilisation</h5>
                            <p>Programmes éducatifs pour sensibiliser aux enjeux environnementaux et sociaux.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="community-card">
                        <div class="community-image" style="background-image: url('images/BUS.png')"></div>
                        <div class="community-content">
                            <h5><i class="fas fa-city"></i> Mobilité Urbaine Améliorée</h5>
                            <p>Solutions de transport durable réduisant la pollution urbaine et améliorant la qualité de l'air dans les villes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                <i class="fas fa-chart-bar"></i> Stimuler la Croissance et Assurer une Autonomie Énergétique
            </h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="chart-container">
                        <h5>Impact Économique Comparatif</h5>
                        <div class="progress-item">
                            <div class="progress-label">
                                <span>Création de Valeur</span>
                        
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" data-width="95"></div>
                            </div>
                        </div>
                        <div class="progress-item">
                            <div class="progress-label">
                                <span>Économies Énergétiques</span>
                                
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" data-width="75"></div>
                            </div>
                        </div>
                        <div class="progress-item">
                            <div class="progress-label">
                                <span>Investissements </span>
                                <span>estimé à +600 000 000 000 fcfa </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" data-width="60"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="feature-item">
                        <i class="fas fa-battery-full feature-icon"></i>
                        <h4 class="feature-title">Autonomie Énergétique</h4>
                        <p>Développement de solutions énergétiques locales réduisant la dépendance aux énergies fossiles importées.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-coins feature-icon"></i>
                        <h4 class="feature-title">Valorisation des Ressources</h4>
                        <p>Transformation de déchets en ressources valorisables générant des revenus supplémentaires pour les communautés.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-leaf feature-icon"></i>
                        <h4 class="feature-title">Flotte Verte</h4>
                        <p>Transition vers une flotte de véhicules électriques et hybrides, réduisant les coûts opérationnels de 40%.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container text-center" data-aos="fade-up">
            <h2 class="cta-title">Un Avenir Durable, Réalisé Ensemble</h2>
            <p class="mb-4">
                Rejoignez-nous dans notre mission pour créer un impact positif et durable.
                Ensemble, nous pouvons transformer les défis d'aujourd'hui en opportunités de demain.
            </p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-light btn-lg">Découvrir Notre Technologie</a>
                <a href="About.php" class="btn btn-outline-light btn-lg">En Savoir Plus Sur Notre Projet</a>
                <a href="contact.php" class="btn btn-outline-light btn-lg">Nous Contacter pour Collaborer</a>
            </div>
        </div>
    </section>

      

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Function to animate numbers and circular progress
        function animateImpactCounters() {
            const circleProgressElements = document.querySelectorAll('.circle-progress:not([data-animated])');
            
            circleProgressElements.forEach(circleProgress => {
                const counterElement = circleProgress.querySelector('.impact-number.counter');
                if (!counterElement) return;

                const target = parseFloat(circleProgress.getAttribute('data-target'));
                const fullTarget = parseFloat(circleProgress.getAttribute('data-full-target')) || target;
                const unit = circleProgress.getAttribute('data-unit') || '';
                const decimals = parseInt(circleProgress.getAttribute('data-decimals')) || 0;
                
                const duration = 2000;
                const start = 0;
                let startTime = null;

                const animate = (currentTime) => {
                    if (!startTime) startTime = currentTime;
                    const progress = (currentTime - startTime) / duration;

                    if (progress < 1) {
                        let currentValue = start + progress * (fullTarget - start);
                        let percentage = (currentValue / fullTarget) * 100;

                        counterElement.innerText = currentValue.toFixed(decimals) + unit;
                        circleProgress.style.setProperty('--progress-val', Math.min(100, percentage)); // Use --progress-val
                        requestAnimationFrame(animate);
                    } else {
                        counterElement.innerText = fullTarget.toFixed(decimals) + unit;
                        circleProgress.style.setProperty('--progress-val', 100); // Use --progress-val
                        circleProgress.setAttribute('data-animated', 'true');
                    }
                };
                
                requestAnimationFrame(animate);
            });
        }

        // Progress Bars Animation
        function animateProgressBars() {
            const progressBars = document.querySelectorAll('.progress-bar:not([data-animated])');
            
            progressBars.forEach(bar => {
                const width = bar.getAttribute('data-width');
                setTimeout(() => {
                    bar.style.width = width + '%';
                    bar.setAttribute('data-animated', 'true');
                }, 500);
            });
        }

        // Function to create CO2 Chart
        let co2ChartInstance = null; // To store the chart instance

        function createCO2Chart() {
            const ctx = document.getElementById('co2Chart');

            // Destroy existing chart if it exists
            if (co2ChartInstance) {
                co2ChartInstance.destroy();
            }

            co2ChartInstance = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Avec notre projet', 'Sans notre projet', 'Objectif 2025'],
                    datasets: [{
                        data: [65, 20, 15],
                        backgroundColor: [
                            'var(--primary-green)',
                            'var(--red-color)',
                            'var(--orange-color)'
                        ],
                        hoverOffset: 10,
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '80%',
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed !== null) {
                                        label += context.parsed + '%';
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    animation: {
                        animateRotate: true,
                        animateScale: true
                    }
                }
            });
        }

        // Intersection Observer for triggering animations
        const observerOptions = {
            threshold: 0.4,
            rootMargin: '0px 0px -50px 0px'
        };

        const impactObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateImpactCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const progressBarObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateProgressBars();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const co2ChartObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    createCO2Chart();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.6 });


        // Observe elements when the DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            const impactSection = document.querySelector('.impact-section');
            if (impactSection) {
                impactObserver.observe(impactSection);
            }

            const co2ChartContainer = document.querySelector('#co2Chart').closest('.chart-container');
            if (co2ChartContainer) {
                co2ChartObserver.observe(co2ChartContainer);
            }

            const economicSection = document.querySelector('.detail-section .row:nth-child(2) .chart-container');
            if (economicSection) {
                progressBarObserver.observe(economicSection);
            }
        });
    </script>
</body>
</html>