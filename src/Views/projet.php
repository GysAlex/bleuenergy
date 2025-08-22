<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include __DIR__."/components/meta.php";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/asset/global.css">
    <title> projet</title>
    <style>
        * {
            box-sizing: border-box;
        }


        /* Header Navigation */
        .header {
            background: linear-gradient(135deg, #5bb14fb7 0%, #06b6d4 100%);
            padding: 1rem 0;
        }

       

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #4be54681 0%, #06b6d4 100%);
            color: white;
            padding: 7rem 0;
            text-align: center;
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Container */
        .container {
            max-width: var(--max-content_size);
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Architecture Section */
        .architecture {
            padding: 4rem 0;
            background: #f8fafc;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #1e92afff;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            color: #64748b;
            margin-bottom: 3rem;
            max-width: 700px;
        }

        .org-structure {
            display: grid;
            grid-template-columns: 2fr 2fr 3fr;
            gap: 2rem;
            margin-bottom: 3rem;
            align-items: start;
        }

        .org-hierarchy {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .org-level {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .org-item {
            background: white;
            padding: 1rem;
            border-radius: 0.5rem;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            min-width: 120px;
            font-size: 0.9rem;
        }

        .org-item.state {
            background: #f0f9ff;
            border: 2px solid #0ea5e9;
        }

        .org-item.municipality {
            background: #f5f5f5;
            border: 2px solid #6b7280;
        }

        .org-item.providers {
            background: #fef3c7;
            border: 2px solid #f59e0b;
        }

        .org-item.exploitants {
            background: #dcfce7;
            border: 2px solid #22c55e;
        }

        .org-item.beneficiaries {
            background: #fce7f3;
            border: 2px solid #ec4899;
        }

        .org-box {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .org-box.spv {
            border: 2px solid #3b82f6;
        }

        .org-box.private {
            border: 2px solid #10b981;
        }

        .org-icon {
            width: 3rem;
            height: 3rem;
            margin: 0 auto 1rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
        }

        .spv-icon {
            background: #6da3faff;
        }

        .private-icon {
            background: #10b981;
        }

        .participation-box {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            border-left: 4px solid #10b981;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        /* Steps Section */
        .steps {
            padding: 4rem 0;
        }

        .steps-timeline {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
        }

        .step {
            flex: 1;
            text-align: center;
            position: relative;
        }

        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 1rem;
            right: -50%;
            left: 50%;
            height: 2px;
            background: #e2e8f0;
        }

        .step.active:not(:last-child)::after {
            background: #10b981;
        }

        .step-icon {
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
        }

        .step.active .step-icon {
            background: #96bbf7ff;
        }

        .step.completed .step-icon {
            background: #10b981;
        }

        .step.future .step-icon {
            background: #9ca3af;
        }

        /* Maturation Section */
        .maturation {
            padding: 4rem 0;
            background: #f8fafc;
        }

        .maturation-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin: 2rem 0;
        }

        .maturation-item {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-left: 4px solid #3b82f6;
        }

        .maturation-item.green {
            border-left-color: #10b981;
        }

        .maturation-item h4 {
            color: #8da6f7ff;
            margin-bottom: 0.5rem;
        }

        /* Investment Section */
        .investment {
            padding: 4rem 0;
        }

        .investment-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem;
            margin: 2rem 0;
        }

        .budget-summary {
            text-align: center;
        }

        .budget-amount {
            font-size: 2.5rem;
            font-weight: bold;
            color: #10b981;
            margin: 1rem 0;
        }

        .chart-placeholder {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: conic-gradient(
                #3b82f6 0deg 180deg,
                #10b981 180deg 270deg,
                #f59e0b 270deg 300deg,
                #ef4444 300deg 360deg
            );
            margin: 0 auto;
        }

        .investment-details {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .investment-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .investment-item:last-child {
            border-bottom: none;
        }

        .investment-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .investment-dot {
            width: 0.75rem;
            height: 0.75rem;
            border-radius: 50%;
        }

        .dot-blue { background: #8ab5fcff; }
        .dot-green { background: #10b981; }
        .dot-yellow { background: #f59e0b; }
        .dot-red { background: #ef4444; }

        .investment-amount {
            font-weight: 600;
        }

        /* Call to Action */
        .cta {
            background: linear-gradient(135deg, #0c7e24ff 0%, #176370ff 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .cta h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .btn {
            padding: 0.7rem 1.1rem;
            border-radius: 0.3rem;
            text-decoration: none;
            font-weight: 200;
            transition: all 0.3s;
            width: 200px;
            height: 50px;
        }

        .btn-primary {
            background: white;
            color: #8c86fdff;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid white;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        /* Footer */
       

        /* Animations et effets scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }

        .slide-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease;
        }

        .slide-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .scale-up {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s ease;
        }

        .scale-up.visible {
            opacity: 1;
            transform: scale(1);
        }

        .stagger-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .stagger-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Animations spécifiques */
        .org-item {
            transition: all 0.3s ease;
        }

        .org-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .step {
            transition: all 0.6s ease;
        }

        .chart-placeholder {
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .investment-item {
            transition: all 0.3s ease;
        }

        .investment-item:hover {
            background: #f8fafc;
            padding-left: 1.5rem;
        }
        @media (max-width: 768px) {
            .org-structure,
            .maturation-grid,
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .investment-content {
                grid-template-columns: 1fr;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
        /* Responsive */
        @media (max-width: 768px) {
            .org-structure,
            .maturation-grid,
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .investment-content {
                grid-template-columns: 1fr;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .org-level {
                flex-direction: column;
                align-items: center;
            }

            .steps-timeline {
                flex-direction: column;
                gap: 2rem;
            }

            .step:not(:last-child)::after {
                display: none;
            }
        }
    </style>
</head>
<body>
    <?php
        include __DIR__."/components/header.php";
    ?>
    <script>
        // Fonction pour détecter les éléments visibles lors du scroll
        function observeElements() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        
                        // Animation spéciale pour les éléments avec stagger
                        if (entry.target.classList.contains('stagger-container')) {
                            const items = entry.target.querySelectorAll('.stagger-item');
                            items.forEach((item, index) => {
                                setTimeout(() => {
                                    item.classList.add('visible');
                                }, index * 200);
                            });
                        }
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            // Observer tous les éléments avec des classes d'animation
            document.querySelectorAll('.fade-in, .slide-left, .slide-right, .scale-up, .stagger-container').forEach((el) => {
                observer.observe(el);
            });
        }

        // Initialiser les animations au chargement
        document.addEventListener('DOMContentLoaded', function() {
            observeElements();
            
            // Animation du hero au chargement
            setTimeout(() => {
                document.querySelector('.hero-content').style.opacity = '1';
                document.querySelector('.hero-content').style.transform = 'translateY(0)';
            }, 300);
        });
    </script>
    <?php
    // Configuration des données
    $projectData = [
        'title' => ' Waste to Energy',
        'description' => 'Nous impactons le developpement durable en Afrique.',
        'budget' => '600 milliards',
        'currency' => 'FCFA ',
        'phases' => [
            [
                'title' => 'Juillet - Décembre 2026',
                'description' => 'Nous vous présentons le parcours de notre projet :
                 comment nous avons établi des partenariats 
                 et une stratégie de financement pour le mener à bien.',
                'status' => 'active'
            ],
            [
                'title' => '2028',
                'description' => 'Formalisation du dit projet assuré, avec nouveaux géhements infrastructures avec les différentes parties prenantes.',
                'status' => 'completed'
            ],
            [
                'title' => 'Étapes Futures',
                'description' => 'Finalisation de tous les aspects construction immobilière et transférement du projet.',
                'status' => 'future'
            ]
        ],
        'investments' => [
            ['label' => 'Usines Waste-to-Energy', 'amount' => '', 'color' => 'blue'],
            ['label' => 'Usines de méthanisation', 'amount' => '', 'color' => 'green'],
            ['label' => 'Centres de collecte', 'amount' => '', 'color' => 'yellow'],
            ['label' => 'Rues à énergie', 'amount' => '', 'color' => 'red'],
            ['label' => 'Data Centers', 'amount' => '', 'color' => 'blue'],
        ]
    ];

    $navigationItems = [
      
    ];
    ?>

    <!-- Header -->
   
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1><?= $projectData['title'] ?></h1>
            <p><?= $projectData['description'] ?></p>
        </div>
    </section>

    <!-- Architecture Section -->
    <section class="architecture">
        <div class="container">
            <h2 class="section-title">Une Architecture Financière Robuste</h2>
            <p class="section-subtitle">
                Le projet s'organise autour d'une structure financière solide et d'une gouvernance participative entre acteurs publics et privés, garantissant sa viabilité à long terme.
            </p>

            <div class="org-structure">
                <div class="org-hierarchy">
                    <h4 style="text-align: center; color: #1e40af; margin-bottom: 1rem;">Structure Organisationnelle</h4>
                    
                    <!-- État -->
                    <div class="org-level">
                        <div class="org-item state">
                            <div style="font-weight: bold;">État</div>
                            <div style="font-size: 0.8rem; color: #64748b;">Gouvernement central</div>
                        </div>
                    </div>
                    
                    <!-- Municipalités -->
                    <div class="org-level">
                        <div class="org-item municipality">
                            <div style="font-weight: bold;">Municipalités</div>
                            <div style="font-size: 0.8rem; color: #64748b;">Autorités des territoires</div>
                        </div>
                    </div>
                    
                    <!-- Niveau intermédiaire -->
                    <div class="org-level">
                        <div class="org-item providers">
                            <div style="font-weight: bold;">Fournisseurs</div>
                            <div style="font-size: 0.8rem; color: #64748b;">Services techniques</div>
                        </div>
                        <div class="org-item exploitants">
                            <div style="font-weight: bold;">Exploitants</div>
                            <div style="font-size: 0.8rem; color: #64748b;">Opérateurs industriels</div>
                        </div>
                        <div class="org-item beneficiaries">
                            <div style="font-weight: bold;">Bénéficiaires</div>
                            <div style="font-size: 0.8rem; color: #64748b;">Communautés locales</div>
                        </div>
                    </div>
                </div>
                <div class="org-box spv">
                    <div class="org-icon spv-icon">SPV</div>
                    <h4>SPV Sécurisé</h4>
                    <p>Structure dédiée</p>
                </div>
                
                <div class="org-box private">
                    <div class="org-icon private-icon">30%</div>
                    <h4>30% Privé</h4>
                    <p>Capital des fonds privés</p>
                </div>
                
                <div class="participation-box">
                    <h4>Participation et Soutien</h4>
                    <div style="margin: 1rem 0;">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <span style="color: #3b82f6;">👥</span>
                            <span>Participation de l'État</span>
                        </div>
                        <div style="color: #10b981; font-weight: 600;">15 à 30%</div>
                        <small style="color: #64748b;">du capital de démarrage</small>
                    </div>
                    <div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <span style="color: #10b981;">🎯</span>
                            <span>Stratégie Spéciale</span>
                        </div>
                        <small style="color: #64748b;">
                            Cautionnement de l'État dans le cadre de l'initiative nationale pour l'industrie verte
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="steps">
        <div class="container">
            <h2 class="section-title fade-in">Nos Prochaines Étapes Clés</h2>
            <p class="section-subtitle fade-in">
                Notre vision de développement ambitieux nous guidera pour concrétiser ce projet structurant.
            </p>

            <div class="steps-timeline stagger-container">
                <?php foreach ($projectData['phases'] as $index => $phase): ?>
                    <div class="step <?= $phase['status'] ?> stagger-item">
                        <div class="step-icon"><?= $index + 1 ?></div>
                        <h4><?= $phase['title'] ?></h4>
                        <p><?= $phase['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Maturation Section -->
    <section class="maturation">
        <div class="container">
            <h2 class="section-title fade-in">Maturation du Projet</h2>
            <p class="section-subtitle fade-in">
                Pour assurer la progression efficace du projet, nous identifions les actions prioritaires suivantes
            </p>

            <div class="maturation-grid stagger-container">
                <div class="maturation-item stagger-item">
                    <h4>Finalisation des études</h4>
                    <p>Études de faisabilité techniques complètes avec choix du SPV</p>
                </div>
                <div class="maturation-item green stagger-item">
                    <h4>Identification des sites</h4>
                    <p>Choix de 5 à 20 emplacements à valoriser et en sécurité</p>
                </div>
                <div class="maturation-item stagger-item">
                    <h4>Attribution de concessions</h4>
                    <p>Concessions de 30 à 99 ans pour le traitement des déchets</p>
                </div>
                <div class="maturation-item green stagger-item">
                    <h4>Signature d'achat d'énergie</h4>
                    <p>Signatures des PPA (Power Purchase Agreement)</p>
                </div>
                <div class="maturation-item stagger-item">
                    <h4>Formalités administratives</h4>
                    <p>Facilitation des procédures administratives en engagement des différentes parties</p>
                </div>
                <div class="maturation-item green stagger-item">
                    <h4>Accord d'exclusivité</h4>
                    <p>Exclusivité des déchets avec les collectivités centralisées</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Section -->
    <section class="investment">
        <div class="container">
            <h2 class="section-title fade-in" style="text-align: center;">Plan des investissements</h2>
            
            <div class="investment-content">
                <div class="budget-summary slide-left">
                    <h3>Budget Total</h3>
                    <div class="budget-amount"><?= $projectData['budget'] ?><br><?= $projectData['currency'] ?></div>
                    <div class="chart-placeholder"></div>
                    <div style="margin-top: 1rem; font-size: 0.9rem; color: #64748b;">
                        <div>■ Usines Waste-to-Energy</div>
                        <div>■ Usine de tri semi automatique</div>
                        <div>■ Usines de méthanisation</div>
                        <div>■ Centres de collectes</div>
                        <div>■ Data Centers</div>
                    </div>
                </div>
                
                <div class="investment-details slide-right">
                    <h3></h3>
                    <?php foreach ($projectData['investments'] as $investment): ?>
                        <div class="investment-item">
                            <div class="investment-label">
                                <span class="investment-dot dot-<?= $investment['color'] ?>"></span>
                                <?= $investment['label'] ?>
                            </div>
                            <div class="investment-amount"><?= $investment['amount'] ?></div>
                        </div>
                    <?php endforeach; ?>
                   
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <div class="container">
            <h2 class="fade-in">Une Vision d'Avenir, des Chiffres Concrets</h2>
            <div class="cta-buttons scale-up">
                <a href="technologie.php" class="btn btn-primary"> Notre Technologie</a>
                <a href="impact.php" class="btn btn-secondary">Notre Impact</a>
                <a href="partenaire.php" class="btn btn-secondary">Devenez Partenaire</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php 
        include __DIR__."/components/footer.php"    
    ?>
    <script src="/asset/default.js" type="module"></script>
</body>
</html>