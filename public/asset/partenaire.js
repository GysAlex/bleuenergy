import { animate_navBar, lenisFunction, toggleMenu, heroAnimation } from "./global.js"




function animatePartnersSection() {

    gsap.registerPlugin(ScrollTrigger);
    const partnersTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: ".partners-section",
            start: "top center", // Déclenche l'animation lorsque la section entre dans le viewport
            toggleActions: "play none none reverse", // L'animation se joue une seule fois à l'entrée et se réinitialise à la sortie
        }
    });

    partnersTimeline.to(".partners-title", {
        y: 0, // Retour à la position d'origine
        duration: 0.8,
        ease: "power2.out"
    });

    partnersTimeline.to(".partners-description", {
        opacity: 1,
        stagger: 0.2, // Les deux paragraphes s'animent l'un après l'autre
        duration: 1,
        ease: "power1.out"
    }, "<0.2"); // Commence 0.2 secondes après la fin de l'animation précédente
}

function animatePartnersImageHover() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.to(".partners-image", {
        scale: 1,
        duration: 0.5,
        ease: "power2.in",
        paused: true // L'animation est en pause par défaut
    });

    // L'effet est déclenché par un événement 'hover'
    document.querySelector(".partners-image-wrapper").addEventListener("mouseenter", () => {
        gsap.to(".partners-image", { scale: 1.1, duration: 0.5 });
    });
    document.querySelector(".partners-image-wrapper").addEventListener("mouseleave", () => {
        gsap.to(".partners-image", { scale: 1, duration: 0.5 });
    });
}


    function animatePartnersStrategicSection() {
        // Animation du titre de la section (inchangée)
        gsap.to(".partners-strategic-title", {
            scrollTrigger: {
                trigger: ".partners-strategic-section",
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "back"
        });

        // Utilisation d'une boucle forEach pour animer chaque carte
        const partnerCards = document.querySelectorAll(".partner-card");

        partnerCards.forEach((card, index) => {
            let fromVars;

            // Logique pour définir la direction d'origine
            if (index % 2 === 0) {
                // Cartes paires (0, 2, 4...) viennent du haut-gauche
                fromVars = {
                    x: -100,
                    y: -50,
                    opacity: 0,
                    scale: 0.8,
                    duration: 1,
                    ease: "back"
                };
            } else {
                // Cartes impaires (1, 3, 5...) viennent du bas-droite
                fromVars = {
                    x: 100,
                    y: 50,
                    opacity: 0,
                    scale: 0.8,
                    duration: 1,
                    ease: "back"
                };
            }

            // Animation GSAP pour la carte actuelle
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card, // Chaque carte a son propre déclencheur
                    start: "top 90%",
                    toggleActions: "play none none reverse",
                },
                ...fromVars // Utilise les variables définies
            });
        });
    }




function animateJoinPartnersSection() {
    gsap.to(".join-partners-benefits-card", {
        scrollTrigger: {
            trigger: ".join-partners-content",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
        x: 0, // Retour à la position d'origine
        opacity: 1,
        duration: 0.8,
        ease: "power2.out"
    });

    gsap.to(".join-partners-form-card", {
        scrollTrigger: {
            trigger: ".join-partners-content",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
        x: 0, // Retour à la position d'origine
        opacity: 1,
        duration: 0.8,
        delay: 0.2, // Délai pour que l'animation de la carte de droite commence après celle de gauche
        ease: "power2.out"
    });
}


function animatePartnersContactSection() {
    const contactSectionElements = document.querySelectorAll(".partners-contact-title, .partners-contact-description, .contact-us-button");

    gsap.to(contactSectionElements, {
        scrollTrigger: {
            trigger: ".partners-contact-section",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
        y: 0, // Retour à la position d'origine
        opacity: 1,
        duration: 0.8,
        stagger: 0.2, // Délai entre l'animation de chaque élément
        ease: "power2.out"
    });
}


window.onload = ()=>{
    animate_navBar()
    toggleMenu()
    lenisFunction()
    heroAnimation()
    animatePartnersSection()
    animatePartnersImageHover()
    animatePartnersStrategicSection()
    animateJoinPartnersSection()
    animatePartnersContactSection()
}