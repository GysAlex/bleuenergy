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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=<?php asset('global.css') ?>>
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
            --simple-gradient: linear-gradient(90deg, rgba(22, 101, 52, 0.5), rgba(3, 106, 161, 0.5));
        }



        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

       
        
        /*This line help to fix the problem on the nav-bar */
       ul{
            margin-bottom: 0;
        }

        /* Header */
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



       

        /* Hero Section - Background Image avec overlay vert foncé */
        .hero {
            background: 
                linear-gradient(rgba(0, 80, 0, 0.7), rgba(0, 80, 0, 0.7)),
                url('images/ac.jpg') no-repeat center center;
            background-size: cover;
            padding: 150px 0;
            color: white;
            position: relative;
            text-align: left;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero h1 {
            font-size: 2.8rem;
            color: white;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.2rem;
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

        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            color: #28a745;
            font-size: 2rem;
            font-weight: 600;
        }

        .faq-item {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-left: 4px solid #28a745;
            transition: all 0.3s ease;
            cursor: pointer;
            margin-bottom: 20px;
            height: 100%;
        }

        .faq-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .faq-item h3 {
            color: #28a745;
            margin-bottom: 15px;
            font-size: 1.2rem;
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
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
            background: white;
        }

        .contact-form h2 {
            color: #28a745;
            margin-bottom: 20px;
            font-size: 1.8rem;
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
            height: 150px;
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
            width: 50px;
            height: 50px;
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

        /*Forcing the mobile nav-bar effect */

        .mobile-menu ul li:hover a
        {
            background: var(--simple-gradient);
            background-clip: text;
            color: transparent;    
        }

    </style>
</head>
<body>
    <!-- Navigation -->

    <?php
        include __DIR__."/components/header.php";
    ?>


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

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title animate-fade">
                <i class="fas fa-question-circle"></i> Questions Fréquemment Posées
            </h2>
            <div class="row">
                <div class="col-md-6 col-lg-3 animate-fade" style="animation-delay: 0.1s">
                    <div class="faq-item">
                        <h3><i class="fas fa-cogs"></i> Comment fonctionne votre technologie ?</h3>
                        <p>Notre technologie utilise un processus avancé de méthanisation et de conversion thermique pour transformer les déchets organiques en biocarburant et en électricité, le tout avec un impact environnemental minimal.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 animate-fade" style="animation-delay: 0.2s">
                    <div class="faq-item">
                        <h3><i class="fas fa-handshake"></i> Comment devenir partenaire ?</h3>
                        <p>Pour devenir partenaire, vous pouvez nous contacter via le formulaire en précisant la nature de votre intérêt et nous appoiter de développement. Notre équipe vous proposera un rendez-vous pour explorer les possibilités de collaboration.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 animate-fade" style="animation-delay: 0.3s">
                    <div class="faq-item">
                        <h3><i class="fas fa-briefcase"></i> Quels emplois disponibles ?</h3>
                        <p>Nous recrutons régulièrement dans plusieurs domaines : environnemental, gestion de projets, logistique, maintenance technique, développement durable et communication.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 animate-fade" style="animation-delay: 0.4s">
                    <div class="faq-item">
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
                                <p><strong>ceo@blueenergy.com</strong></p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <h3>Téléphone</h3>
                                <p>Appelez-nous pour une réponse rapide</p>
                                <p><strong>+237 696 74 83 92</strong></p>
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


    <!-- Footer -->
    <?php
        include __DIR__."/components/footer2.php";
    ?>
    
    <script>

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