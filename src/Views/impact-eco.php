<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        include __DIR__."/components/meta.php";
    ?>
<head>
    <title>Notre Impact Économique et Social | Blue Energy</title>
    <meta name="description" content="Découvrez l'impact économique et social de Blue Energy sur les communautés locales en Afrique. Création d'emplois, réduction du coût de la vie et solutions pour un environnement plus sain.">
    <meta name="keywords" content="impact économique, impact social, création d'emplois, développement durable, énergie renouvelable, biocarburant, biogaz, villes propres, santé publique, agriculture durable, Blue Energy">

    <meta property="og:title" content="L'Impact de Blue Energy | Transformer les Défis Africains en Opportunités">
    <meta property="og:description" content="Nous transformons les déchets en richesse : des emplois locaux à la production d'énergie verte, notre projet a un impact positif mesurable sur l'économie et la société.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.bleueenergy.com/impact.html">
    <meta property="og:image" content="https://www.bleueenergy.com/asset/images/impact-economique.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Impact Économique et Social | Blue Energy">
    <meta name="twitter:description" content="Découvrez comment notre projet de valorisation des déchets contribue concrètement au développement durable, à l'économie locale et à l'amélioration de la qualité de vie en Afrique.">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1a9248ff;
            --secondary-blue: #3ea85eff;
            --success-green: #51CF66;
            --light-gray: #F8F9FA;
        }

        body {
            font-family:'poppins';
            
        }

        .hero-section {
            background: linear-gradient(rgba(45, 177, 100, 0.8), rgba(54, 79, 199, 0.8)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%2351CF66" width="1200" height="600"/><path fill="%234C6EF5" opacity="0.7" d="M0,300 Q300,100 600,300 T1200,300 V600 H0 V300"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            top: -50%;
            left: -50%;
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .floating-animation {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .card-hover {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(76, 110, 245, 0.2);
        }

        .icon-wrapper {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 20px;
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .icon-green { background: linear-gradient(135deg, #51CF66, #40C057); color: white; }
        .icon-blue { background: linear-gradient(135deg, #4C6EF5, #364FC7); color: white; }
        .icon-orange { background: linear-gradient(135deg, #FF922B, #FD7E14); color: white; }
.solution-image {
    height: 200px;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5));
    transition: all 0.3s ease;
}

.solution-card:hover .image-overlay {
    background: linear-gradient(to bottom, rgba(76, 110, 245, 0.3), rgba(81, 207, 102, 0.5));
}

        .cta-section {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
            animation: move 20s linear infinite;
        }

        @keyframes move {
            0% { transform: translateX(-100px) translateY(-100px); }
            100% { transform: translateX(100px) translateY(100px); }
        }

        .btn-custom {
            background: white;
            color: var(--primary-blue);
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn-custom:hover::before {
            left: 100%;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        /* Footer */
        
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
 <a href="impact.php" class="lien-fleche">precedente</a>
<body>
    <!-- Hero Section -->

    
    <section class="hero-section">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4 floating-animation" data-aos="fade-up">
                        Notre Impact Économique
                    </h1>
                    <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">
                        Transformer les défis en opportunités pour un avenir durable au Cameroun
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <!-- Impact Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-4 text-gradient" data-aos="fade-up">
                        Contribution à l'Économie Locale
                    </h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-hover h-100 text-center p-4">
                        <div class="icon-wrapper icon-green pulse-animation">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Création d'Emplois</h4>
                        <p class="text-muted">
                            Réduction significative du taux de chômage grâce à la création de nombreux emplois directs et indirects
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-hover h-100 text-center p-4">
                        <div class="icon-wrapper icon-blue pulse-animation">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Réduction du Coût de la Vie</h4>
                        <p class="text-muted">
                            Production locale d'engrais biologiques permettant une agriculture plus abordable
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-hover h-100 text-center p-4">
                        <div class="icon-wrapper icon-orange pulse-animation">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Développement Économique</h4>
                        <p class="text-muted">
                            Stimulation de l'économie locale par la production de biocarburant et de biogaz
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br><br><br>
   <!-- Solutions Section -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold mb-4 text-gradient" data-aos="fade-up">
                    Solutions pour un Environnement plus propre
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <!-- Ville Propre -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card">
                    <div class="solution-image" style="background-image: url('images/vd.jpg');">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="p-4">
                        <div class="icon-wrapper icon-green mb-3">
                            <i class="fas fa-city"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Villes Propres</h5>
                        <p class="text-muted">
                            Élimination efficace des déchets urbains et amélioration du cadre de vie
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Santé Publique -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card">
                    <div class="solution-image" style="background-image: url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="p-4">
                        <div class="icon-wrapper icon-blue mb-3">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Santé Publique</h5>
                        <p class="text-muted">
                            Réduction des maladies liées à l'insalubrité et assainissement urbain
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Agriculture Durable -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="solution-card">
                    <div class="solution-image" style="background-image: url('images/agric.jpg');">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="p-4">
                        <div class="icon-wrapper icon-green mb-3">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Agriculture Durable</h5>
                        <p class="text-muted">
                            Engrais biologiques pour des cultures saines et productives
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Énergie Verte -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="solution-card">
                    <div class="solution-image" style="background-image: url('images/en.jpg');">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="p-4">
                        <div class="icon-wrapper icon-blue mb-3">
                            <i class="fas fa-solar-panel"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Énergie Verte</h5>
                        <p class="text-muted">
                            Production locale d'énergie renouvelable et autonome
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br><br>
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">
                        Ensemble pour un Avenir Meilleur
                    </h2>
                    <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">
                        Rejoignez-nous dans notre mission de transformation écologique et sociale
                    </p>
                    <button class="btn btn-custom btn-lg floating-animation" data-aos="fade-up" data-aos-delay="400">
                        Rejoignez Notre Initiative
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add interactive hover effects
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Newsletter form handling
        document.querySelector('.btn-success').addEventListener('click', function(e) {
            e.preventDefault();
            const email = this.previousElementSibling.value;
            if(email) {
                alert('Merci pour votre inscription ! Vous recevrez bientôt nos dernières actualités.');
                this.previousElementSibling.value = '';
            } else {
                alert('Veuillez entrer une adresse email valide.');
            }
        });

        // CTA Button interaction
        document.querySelector('.btn-custom').addEventListener('click', function(e) {
            e.preventDefault();
            this.innerHTML = '<i class="fas fa-check"></i> Demande envoyée !';
            this.style.background = 'var(--success-green)';
            this.style.color = 'white';
            
            setTimeout(() => {
                this.innerHTML = 'Rejoignez Notre Initiative';
                this.style.background = 'white';
                this.style.color = 'var(--primary-blue)';
            }, 3000);
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero-section');
            const speed = scrolled * 0.5;
            parallax.style.transform = 'translateY(' + speed + 'px)';
        });

        // Counter animation for statistics
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const count = +counter.innerText;
                const increment = target / 200;
                
                if(count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => animateCounters(), 1);
                } else {
                    counter.innerText = target;
                }
            });
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.card-hover, .solution-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>