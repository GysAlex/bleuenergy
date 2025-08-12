<?php
// social-impact.php
$page_title = "Impact Social - Blue Energy";
$page_description = "Découvrez comment Blue Energy améliore la qualité de vie et transforme les communautés";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href=<?php asset('global.css') ?>>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #4CAF50;
            --secondary-green: #388E3C;
            --accent-teal: #009688;
            --dark-bg: #1a1a2e;
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


/*This line help to fix the problem on the nav-bar */
ul{
    margin-bottom: 0;
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
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/social.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            position: relative;
        }
        
        .section-title {
            color: var(--primary-green);
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--accent-teal);
        }
        
        .benefit-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
            border-left: 5px solid var(--primary-green);
        }
        
        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .benefit-icon {
            font-size: 2rem;
            color: var(--primary-green);
            margin-bottom: 15px;
        }
        
        .checklist-item {
            position: relative;
            padding-left: 35px;
            margin-bottom: 15px;
            list-style: none;
        }
        
        .checklist-item:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
            color: var(--primary-green);
        }
        
        .solution-img {
            max-height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .urban-img {
            max-height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        /* Footer style from your previous pages */
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
            background: linear-gradient(90deg, var(--primary-green), var(--accent-teal));
        }
        
        .footer-section h3 {
            color: var(--primary-green);
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
            background: var(--primary-green);
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
            color: var(--primary-green);
        }
        
        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-section ul li a:hover {
            color: var(--primary-green);
            padding-left: 5px;
        }
        
        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 30px;
            text-align: center;
            color: #999;
            font-size: 0.9rem;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(76, 175, 80, 0.2);
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
            background: var(--primary-green);
            transform: translateY(-5px);
        }
        
        .newsletter-form {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 12px;
            border: 1px solid #333;
            border-radius: 5px;
            background: rgba(255,255,255,0.1);
            color: white;
        }
        
        .newsletter-form input::placeholder {
            color: #ccc;
        }
        
        .newsletter-form button {
            background: var(--primary-green);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .newsletter-form button:hover {
            background: var(--secondary-green);
            transform: translateY(-2px);
        }
        
        .divider {
            height: 3px;
            background: linear-gradient(90deg, var(--primary-green), var(--accent-teal));
            margin: 40px 0;
            border: none;
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .floating-animation {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <?php
        include __DIR__."/components/header.php";
    ?>
    <!-- Hero Section -->
    <section class="hero-section" data-aos="fade-down">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Impact Social</h1>
            <p class="lead fs-3">Ensemble pour des communautés plus saines et durables</p>
        </div>
    </section>

    <!-- Quality of Life Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title" data-aos="fade-right">Amélioration de la Qualité de vie</h2>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card">
                        <div class="benefit-icon pulse-animation">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <h3>Prévention des maladies hydriques</h3>
                        <p>Réduction significative des risques d'épidémies grâce à une meilleure gestion des déchets.</p>
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             class="solution-img" alt="Prévention des maladies">
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card">
                        <div class="benefit-icon pulse-animation">
                            <i class="fas fa-smog"></i>
                        </div>
                        <h3>Réduction de l'insalubrité</h3>
                        <p>Réduire la pollution des déchets brûlés protège santé, air, climat et environnement local.</p>
                        <img src="https://images.unsplash.com/photo-1584473457406-6240486418e9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             class="solution-img" alt="Réduction de l'insalubrité">
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-card">
                        <div class="benefit-icon pulse-animation">
                            <i class="fas fa-broom"></i>
                        </div>
                        <h3>Assainissement Urbain</h3>
                        <p>Amélioration générale de la salubrité des espaces publics.</p>
                        <img src="https://images.unsplash.com/photo-1470004914212-05527e49370b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             class="solution-img" alt="Assainissement Urbain">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Urban Transformation Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title" data-aos="fade-right">Transformation Urbaine</h2>
            
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="images/ville.jpg" 
                         class="urban-img shadow-lg floating-animation w-100" alt="Ville propre">
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <ul class="list-unstyled">
                        <li class="checklist-item">Désencombrement des rues des déchets</li>
                        <li class="checklist-item">Amélioration de la mobilité urbaine</li>
                        <li class="checklist-item">Réduction des inondations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Benefits Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title" data-aos="fade-right">Bénéfices pour la Communauté</h2>
            
            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4>Création d'emplois locaux</h4>
                        <p>Opportunités d'emploi pour la population locale</p>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Education</h4>
                        <p>Programmes de formation sur l'environement</p>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Développement économique</h4>
                        <p>Stimulation de l'économie locale</p>
                    </div>
                </div>
                
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Autonomie énergétique</h4>
                        <p>Réduction de la dépendance énergétique</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="divider">

    <?php
        include __DIR__."/components/footer2.php";
    ?>
    <script>
        // Initialize animations
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Add hover effect to cards
        document.querySelectorAll('.benefit-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 15px 30px rgba(0,0,0,0.2)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
            });
        });
    </script>
</body>
</html>