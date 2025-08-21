<?php
// Traitement du formulaire de contact
$message_sent = false;
$error_message = '';

if ($_POST) {
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
    $sujet = isset($_POST['sujet']) ? trim($_POST['sujet']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validation basique
    if (empty($nom) || empty($email) || empty($message)) {
        $error_message = 'Veuillez remplir tous les champs obligatoires.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Veuillez entrer une adresse email valide.';
    } else {
        // Ici vous pourriez envoyer l'email ou sauvegarder en base de données
        $message_sent = true;
    }
}

// Traitement du formulaire newsletter
$newsletter_sent = false;
if (isset($_POST['newsletter_email'])) {
    $newsletter_email = trim($_POST['newsletter_email']);
    if (filter_var($newsletter_email, FILTER_VALIDATE_EMAIL)) {
        $newsletter_sent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        include __DIR__."/components/meta.php";
    ?>
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        
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
        }

       
        /* Header */
       
        /* Hero Section - Background Image avec overlay vert foncé */
        .hero {
            background: 
                linear-gradient(rgba(0, 80, 0, 0.7), rgba(0, 80, 0, 0.7)),
                url('public/asset/images/ac.jpg') no-repeat center center;
            background-size: cover;
            padding: 150px 0;
            color: white;
            position: relative;
            text-align: left;
            min-height: 90vh;
            display: flex;
            align-items: center;
         
        }

        .hero h1 {
            font-size: 1.8rem;
            color: white;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.1rem;
            color: #eee;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .btn-primary {
            background: #28a745;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .btn-primary:hover {
            background: #218838;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        }

       

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
            background: white;
        }

        .contact-form h2 {
            color: #28a745;
            margin-bottom: 20px;
            font-size: 1.1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-form p {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.2);
            outline: none;
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .contact-info {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 100%;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .info-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        .info-icon {
            width: 34px;
            height: 30px;
            background: #28a745;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
            color: white;
            font-size: 1.2rem;
        }

        .info-content h3 {
            color: #333;
            margin-bottom: 8px;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .info-content p {
            color: #666;
            font-size: 1rem;
            margin: 5px 0;
            line-height: 1.6;
        }

        .info-content strong {
            color: #28a745;
            font-weight: 500;
        }
     
        /* Map Section - Centré sur Douala Akwa */
        .map-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .map-container {
            height: 450px;
            background: #ddd;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .map-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 15px;
        }

        /* Newsletter Section */
        .newsletter-section {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            padding: 80px 0;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .newsletter-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .newsletter-section h2 {
            margin-bottom: 20px;
            font-size: 2.2rem;
            font-weight: 600;
            position: relative;
        }

        .newsletter-section p {
            margin-bottom: 30px;
            opacity: 0.9;
            font-size: 1.1rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
            gap: 10px;
            position: relative;
        }

        .newsletter-form input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .newsletter-form button {
            background: rgba(255,255,255,0.2);
            color: white;
            border: 1px solid rgba(255,255,255,0.3);
            padding: 15px 25px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .newsletter-form button:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
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
        }
    </style>
</head>
<body>
     <!-- Navigation -->
   

    <!-- Hero Section avec Background Image et overlay vert foncé -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 animate-left">
                    <div class="hero-content">
                        <h1>Agissons Ensemble pour une<br>Planète Plus Propre</h1>
                        <p>Nous sommes à la recherche de partenariats pour étendre notre impact. Contactez-nous pour explorer les possibilités de collaboration et découvrir comment notre technologie peut s'adapter à vos besoins spécifiques.</p>
                        <a href="#contact" class="btn-primary animate-pulse">
                            <i class="fas fa-paper-plane"></i> Contactez Notre Équipe
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
    /* FAQ Section */
    .faq-section {
        padding: 80px 0;
        background: #f8f9fa;
        overflow: hidden;
    }

    .section-title {
        text-align: center;
        margin-bottom: 60px;
        color: #28a745;
        font-size: 2rem;
        font-weight: 600;
    }

    .faq-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        perspective: 1000px;
    }

    .faq-column {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: calc(50% - 10px);
        max-width: 500px;
    }

    .faq-item {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border-left: 4px solid #28a745;
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        cursor: pointer;
        height: auto;
        transform-style: preserve-3d;
        position: relative;
    }

    .faq-item:hover {
        transform: translateY(-10px) rotateY(5deg) scale(1.03);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .faq-item h3 {
        color: #28a745;
        margin-bottom: 15px;
        font-size: 1rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .faq-item h3 i {
        font-size: 1.5rem;
    }

    .faq-item p {
        color: #666;
        font-size: 1rem;
        line-height: 1.7;
        transform: translateZ(30px);
    }

    /* Animation */
    @keyframes floatIn {
        0% {
            opacity: 0;
            transform: translateY(50px) rotateX(-30deg);
        }
        100% {
            opacity: 1;
            transform: translateY(0) rotateX(0);
        }
    }

    .animate-float {
        animation: floatIn 0.8s ease-out forwards;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .faq-column {
            width: 100%;
        }
    }
</style>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="section-title animate-fade">
            <i class="fas fa-question-circle"></i> Questions Fréquemment Posées
        </h2>
        <div class="faq-container">
            <div class="faq-column">
                <div class="faq-item animate-float" style="animation-delay: 0.1s">
                    <h3><i class="fas fa-cogs"></i> Comment fonctionne votre technologie ?</h3>
                    <p>Notre technologie utilise un processus avancé de méthanisation et de conversion thermique pour transformer les déchets organiques en biocarburant.</p>
                </div>
                <div class="faq-item animate-float" style="animation-delay: 0.3s">
                    <h3><i class="fas fa-briefcase"></i> Quels emplois disponibles ?</h3>
                    <p>Nous recrutons régulièrement dans plusieurs domaines : environnemental, gestion de projets, logistique, maintenance technique, développement durable.</p>
                </div>
            </div>
            <div class="faq-column">
                <div class="faq-item animate-float" style="animation-delay: 0.2s">
                    <h3><i class="fas fa-handshake"></i> Comment devenir partenaire ?</h3>
                    <p>Pour devenir partenaire, vous pouvez nous contacter via le formulaire en précisant la nature de votre intérêt et nous vous contacterons dans les plus brefs délais.</p>
                </div>
                <div class="faq-item animate-float" style="animation-delay: 0.4s">
                    <h3><i class="fas fa-users"></i> Bénéfices pour la communauté ?</h3>
                    <p>Notre projet crée des emplois locaux, diminue les coûts énergétiques municipaux et améliore les infrastructures de transport public, tout en sensibilisant à l'économie circulaire.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 animate-left">
                    <div class="contact-form">
                        <h2><i class="fas fa-seedling"></i> Envoyez-nous un Message</h2>
                        <p>Utilisez le formulaire ci-dessous pour nous envoyer votre requête. Nous nous efforçons de répondre dans les plus brefs délais.</p>
                        
                        <?php if ($message_sent): ?>
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle"></i> Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($error_message): ?>
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-circle"></i> <?php echo htmlspecialchars($error_message); ?>
                            </div>
                        <?php endif; ?>
                        
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="nom"><i class="fas fa-user"></i> Nom Complet *</label>
                                <input type="text" id="nom" name="nom" required value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> Adresse E-mail *</label>
                                <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="telephone"><i class="fas fa-phone"></i> Numéro de Téléphone</label>
                                <input type="tel" id="telephone" name="telephone" value="<?php echo isset($_POST['telephone']) ? htmlspecialchars($_POST['telephone']) : ''; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="sujet"><i class="fas fa-tag"></i> Sujet du Message *</label>
                                <select id="sujet" name="sujet" required>
                                    <option value="">Sélectionnez un sujet</option>
                                    <option value="partenariat" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'partenariat') ? 'selected' : ''; ?>>Partenariat</option>
                                    <option value="emploi" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'emploi') ? 'selected' : ''; ?>>Opportunités d'emploi</option>
                                    <option value="information" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'information') ? 'selected' : ''; ?>>Demande d'information</option>
                                    <option value="autre" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'autre') ? 'selected' : ''; ?>>Autre</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message"><i class="fas fa-comment"></i> Votre Message *</label>
                                <textarea id="message" name="message" required placeholder="Décrivez votre demande en détail..."><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                            </div>
                            
                            <button type="submit" class="btn-primary">
                                <i class="fas fa-paper-plane"></i> Envoyer le Message
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6 animate-right">
                    <div class="contact-info">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h3>Email</h3>
                                <p>Envoyez-nous votre email à tout moment</p>
                                <p><strong></strong></p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <h3>Téléphone</h3>
                                <p>Appelez-nous pour une réponse rapide</p>
                                <p><strong></strong></p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Adresse</h3>
                                <p>Blue energy</p>
                                <p>Cameroun,Douala/Akwa</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h3>Heures d'Ouverture</h3>
                                <p>Du Lundi au Vendredi</p>
                                <p>8h00 - 17h00</p>
                                
                            </div>
                        </div>
                        
                        <div class='icons'>
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section centrée sur Douala Akwa -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title animate-fade">
                <i class="fas fa-map-marked-alt"></i> Où Nous Trouver
            </h2>
            <div class="map-container animate-fade">
                <!-- Carte centrée sur Douala Akwa -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.818244799062!2d9.68327631476244!3d4.041629096612963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061126f3a3d8e7f%3A0x3a9b1a0c9b4b4b4b!2sAkwa%2C%20Douala%2C%20Cameroun!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr"
                    allowfullscreen="150"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Localisation Blue Energy - Douala Akwa">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <h2 class="animate-fade">Newsletter</h2>
            <p class="animate-fade" style="animation-delay: 0.2s">Abonnez-vous à notre newsletter pour recevoir les dernières actualités sur notre projet et les avancées dans le domaine de l'économie circulaire.</p>
            
            <?php if ($newsletter_sent): ?>
                <div class="alert alert-success animate-fade" style="max-width: 400px; margin: 0 auto 20px;">
                    <i class="fas fa-check-circle"></i> Merci pour votre inscription à notre newsletter !
                </div>
            <?php endif; ?>
            
            <form class="newsletter-form animate-fade" method="POST" action="" style="animation-delay: 0.4s">
                <input type="email" name="newsletter_email" placeholder="Votre adresse email" required>
                <button type="submit">
                    <i class="fas fa-paper-plane"></i> S'abonner
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Animation du header au scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Animation des éléments au défilement
        const animateElements = document.querySelectorAll('.animate-fade, .animate-left, .animate-right');
        
        function checkScroll() {
            animateElements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translate(0, 0)';
                }
            });
        }
        
        // Initial check
        checkScroll();
        
        // Check on scroll
        window.addEventListener('scroll', checkScroll);
    </script>
</body>
</html>