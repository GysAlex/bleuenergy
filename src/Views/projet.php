<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Projet Waste-to-Energy | Architecture Financière & Étapes Clés - Bleue Energies</title>
    
    <meta name="description" content="Découvrez le projet Waste-to-Energy de Bleue Energies au Cameroun. Explorez son architecture financière robuste, ses étapes de maturation et son plan d'investissement de 600 milliards FCFA.">
    <meta name="keywords" content="projet, Waste-to-Energy, WTE, déchets, énergie, Cameroun, investissement, architecture financière, étapes clés, développement durable, Yaoundé, Douala, financement, 600 milliards FCFA">
    <meta name="author" content="Bleue Energies">
    <link rel="canonical" href="https://www.bleueenergy.com/project">
    
    <meta property="og:title" content="Projet Waste-to-Energy | Plan d'Investissement & Étapes - Bleue Energies">
    <meta property="og:description" content="Découvrez le projet Waste-to-Energy de Bleue Energies au Cameroun. Explorez son architecture financière robuste, ses étapes de maturation et son plan d'investissement de 600 milliards FCFA.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.bleueenergy.com/project">
    <meta property="og:image" content="https://www.bleueenergy.com/asset/images/wte.jpg">
    

    <?php
        include __DIR__."/components/meta.php";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/asset/global.css">
    <style>
        * {
            box-sizing: border-box;
        }

        :root
        {
            --color-blue-primary: #3b82f6; /* Bleu BleueEnergy */
            --color-green-primary: #10b981; /* Vert BleueEnergy */
            --color-dark-blue: #1e40af;
            --color-light-gray: #f8fafc; /* Fond clair */
            --color-border-gray: #e2e8f0;
            --color-text-dark: #334155;
            --color-text-muted: #64748b;
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
            max-width: 1250px;
            width: 92%;
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
            grid-template-columns: 5fr 3fr;
            gap: 2rem;
            margin-bottom: 3rem;
            align-items: start;
        }

        .org-hierarchy {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            padding: 1rem;
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .org-level {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .org-item {
            background-color: var(--color-light-gray);
            border: 1px solid var(--color-border-gray);
            border-radius: 0.5rem;
            padding: 1.25rem 1rem;
            width: 25%;
            min-width: max-content;
            text-align: center;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .org-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .org-item h4 {
            margin-top: 0.5rem;
            margin-bottom: 0.25rem;
            font-size: 1rem;
            font-weight: 600;
            color: var(--color-text-dark);
        }

        .org-item p {
            margin: 0;
            font-size: 0.875rem;
            color: var(--text-color);
        }
        
        /* Styles spécifiques aux boîtes SPV */
        .spv-box {
            background-color: white;
            border: 1px solid var(--color-border-gray);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            padding: 1rem;
            border-radius: 0.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-width: 150px;
        }

        .spv-yaounde {
            border-color: var(--color-blue-primary);
        }

        .spv-douala {
            border-color: var(--color-green-primary);
        }

        .spv-box i {
            color: var(--color-blue-primary);
            margin-bottom: 0.5rem;
        }
        
        .spv-douala i {
            color: var(--color-green-primary);
        }
        
        /* STYLES COLONNE DE DROITE (PARTICIPATION ET SOUTIEN) */
        .participation-box {
            background-color: white;
            align-self: center;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 1rem;
        }

        .participation-box > h4, .org-hierarchy > h4  {
            font-size: 1.1rem;
            font-weight: 700;
            background: var(--simple-gradient);
            color: transparent;
            background-clip: text;
        }

        .participation-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .participation-item i {
            font-size: 2rem;
        }

        .participation-content h5 {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-color);
            margin: 0;
        }

        .participation-content p {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--color-green-primary);
            margin: 0;
        }
        
        .participation-content small {
            font-size: 0.875rem;
            color: var(--text-color);
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
        // Fonction pour détecter les éléments visibles lors du défilement
        function observeElements() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        
                        // Animation spéciale pour les éléments avec décalage (stagger)
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
        'title' => 'Waste to Energy',
        'description' => 'Nous impactons le développement durable en Afrique.',
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
                'description' => 'Formalisation du projet assurée, avec de nouveaux engagements d\'infrastructures avec les différentes parties prenantes.',
                'status' => 'completed'
            ],
            [
                'title' => 'Étapes Futures',
                'description' => 'Finalisation de tous les aspects de la construction immobilière et du transfert du projet.',
                'status' => 'future'
            ]
        ],
        'investments' => [
            ['label' => 'Usines Waste-to-Energy', 'amount' => '', 'color' => 'blue'],
            ['label' => 'Usines de méthanisation', 'amount' => '', 'color' => 'green'],
            ['label' => 'Centres de collecte', 'amount' => '', 'color' => 'yellow'],
            ['label' => 'Usines de tri semi-automatique', 'amount' => '', 'color' => 'red'],
            ['label' => 'Data Centers', 'amount' => '', 'color' => 'blue'],
        ]
    ];

    $navigationItems = [
      
    ];
    ?>

    <section class="hero">
        <div class="hero-content">
            <h1><?= $projectData['title'] ?></h1>
            <p><?= $projectData['description'] ?></p>
        </div>
    </section>

    <section class="architecture">
        <div class="container">
            <h2 class="section-title">Une Architecture Financière Robuste</h2>
            <p class="section-subtitle">
                Le projet s'organise autour d'une structure financière solide et d'une gouvernance partagée entre acteurs publics et privés, garantissant sa viabilité à long terme.
            </p>

            <div class="org-structure">
                <div class="org-hierarchy">
                    <h4 style="">Structure Organisationnelle</h4>
                    
                    <div class="org-level top-level">
                        <div class="org-item spv-box spv-yaounde">
                            <i class="fa-solid fa-building fa-2x"></i>
                            <h4 style="color: #3b82f6;">SPV Yaoundé</h4>
                            <p>Partenariat CUY</p>
                        </div>
                        <div class="org-item spv-box spv-douala">
                            <i class="fa-solid fa-building fa-2x"></i>
                            <h4 style="color: #16a34a;">SPV Douala</h4>
                            <p>Partenariat CUD</p>
                        </div>
                    </div>

                    <div class="org-level intermediate-level">
                        <div class="org-item state-box">
                            <i class="fa-solid fa-landmark fa-2x"></i>
                            <h4>État camerounais</h4>
                            <p>et ses démembrements</p>
                        </div>
                        <div class="org-item bank-box">
                            <i class="fa-solid fa-building-columns fa-2x"></i>
                            <h4>Banques</h4>
                            <p>Gestion des fonds verts</p>
                        </div>
                    </div>

                    <div class="org-level bottom-level">
                        <div class="org-item supplier-box">
                            <i class="fa-solid fa-toolbox fa-2x"></i>
                            <h4>Fournisseurs</h4>
                            <p>d'équipements</p>
                        </div>
                        <div class="org-item operator-box">
                            <i class="fa-solid fa-gears fa-2x"></i>
                            <h4>Exploitants</h4>
                            <p>Déchets, énergie, transport</p>
                        </div>
                        <div class="org-item investor-box">
                            <i class="fa-solid fa-handshake-angle fa-2x"></i>
                            <h4>Investisseurs</h4>
                            <p>Publics et privés</p>
                        </div>
                    </div>
                </div>

                <div class="participation-box">
                    <h4 class="h4" >Participation et Soutien</h4>
                    <div class="participation-item">
                        <i class="fa-solid fa-building fa-2x" style="color: #3b82f6;"></i>
                        <div class="participation-content">
                            <h5>Participation de l'État</h5>
                            <p>15% à 20%</p>
                            <small>du capital de chaque SPV</small>
                        </div>
                    </div>
                    <div class="participation-item">
                        <i class="fa-solid fa-handshake-angle fa-2x" style="color: #10b981;"></i>
                        <div class="participation-content">
                            <h5>Stratégie financière</h5>
                            <small >
                                Le projet s'inscrit dans la stratégie nationale de l'État pour le développement de l'industrie verte.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <h2 class="section-title fade-in">Nos Prochaines Étapes Clés</h2>
            <p class="section-subtitle fade-in">
                Notre vision de développement ambitieuse nous guidera pour concrétiser ce projet structurant.
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

    <section class="maturation">
        <div class="container">
            <h2 class="section-title fade-in">Maturation du Projet</h2>
            <p class="section-subtitle fade-in">
                Pour assurer la progression efficace du projet, nous identifions les actions prioritaires suivantes :
            </p>

            <div class="maturation-grid stagger-container">
                <div class="maturation-item stagger-item">
                    <h4>Finalisation des études</h4>
                    <p>Études de faisabilité techniques complètes avec choix du SPV</p>
                </div>
                <div class="maturation-item green stagger-item">
                    <h4>Identification des sites</h4>
                    <p>Choix de 5 à 20 emplacements à valoriser et sécurisés</p>
                </div>
                <div class="maturation-item stagger-item">
                    <h4>Attribution de concessions</h4>
                    <p>Concessions de 30 à 99 ans pour le traitement des déchets</p>
                </div>
                <div class="maturation-item green stagger-item">
                    <h4>Signature de contrats d'achat d'énergie</h4>
                    <p>Signature des PPA (Power Purchase Agreement)</p>
                </div>
                <div class="maturation-item stagger-item">
                    <h4>Formalités administratives</h4>
                    <p>Facilitation des procédures administratives et l'engagement des différentes parties</p>
                </div>
                <div class="maturation-item green stagger-item">
                    <h4>Accord d'exclusivité</h4>
                    <p>Exclusivité des déchets avec les collectivités centrales</p>
                </div>
            </div>
        </div>
    </section>

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
                        <div>■ Usines de tri semi-automatique</div>
                        <div>■ Usines de méthanisation</div>
                        <div>■ Centres de collecte</div>
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

    <section class="cta">
        <div class="container">
            <h2 class="fade-in">Une Vision d'Avenir, des Chiffres Concrets</h2>
            <div class="cta-buttons scale-up">
                <a href="/technologie" class="btn btn-primary"> Notre Technologie</a>
                <a href="/impact" class="btn btn-secondary">Notre Impact</a>
                <a href="/partenaire" class="btn btn-secondary">Devenez Partenaire</a>
            </div>
        </div>
    </section>

    <?php 
        include __DIR__."/components/footer.php"     
    ?>
    <script src="/asset/default.js" type="module"></script>
</body>
</html>