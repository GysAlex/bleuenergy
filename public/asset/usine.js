import { animate_navBar, lenisFunction, toggleMenu, heroAnimation } from "./global.js"

    function animateUniteTriSection() {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".usine-unite-tri-section",
                start: "top 80%",
                toggleActions: "play none none reverse",
            }
        });

        tl.from(".usine-title, .usine-subtitle, .usine-description", {
            y: 20,
            opacity: 0,
            duration: 0.6,
            stagger: 0.2,
            ease: "power2.out"
        });

        tl.from(".point-card", {
            y: 30,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.out"
        }, "<0.2");
    }

    function animateWteUsineSection() {
        // Crée une timeline GSAP pour séquencer les animations
        const tl = gsap.timeline({
            scrollTrigger: {
                // Déclenche l'animation lorsque la section est visible
                trigger: ".wte-usine-section",
                // Commence l'animation lorsque le haut de la section arrive à 60% de la fenêtre d'affichage
                start: "top 60%", 
                // Permet de jouer l'animation à l'entrée et de la renverser en sortant
                toggleActions: "play none none reverse",
            }
        });

        // Animation du bloc d'image de gauche
        tl.from(".wte-usine-image-content", {
            duration: 0.8,
            opacity: 0,
            x: -100, // Part de la gauche
            ease: "power2.out",
        });

        // Animation des éléments de la liste de droite
        const items = gsap.utils.toArray(".wte-usine-item");
        tl.from(items, {
            duration: 0.8,
            opacity: 0,
            x: 100, // Part de la droite
            stagger: 0.2, // Délai entre chaque élément
            ease: "power2.out"
        }, "<0.2"); // Commence l'animation 0.2s avant la fin de la précédente
    }

    function animateBiogazSection() {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".biogaz-section",
                start: "top 60%",
                toggleActions: "play none none reverse",
            }
        });

        // Animation des éléments de la liste de gauche
        const items = gsap.utils.toArray(".biogaz-item");
        tl.from(items, {
            duration: 0.8,
            opacity: 0,
            x: -100, // Part de la gauche
            stagger: 0.2,
            ease: "power2.out"
        });

        // Animation du bloc d'image de droite
        tl.from(".biogaz-image-content", {
            duration: 0.8,
            opacity: 0,
            x: 100, // Part de la droite
            ease: "power2.out",
        }, "<0.2"); // Commence 0.2s avant la fin de l'animation précédente
    }

    function animateCtaSection() {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".cta-section",
                start: "top 80%",
                toggleActions: "play none none reverse",
            }
        });

        // Animation du titre
        tl.from(".cta-title", {
            duration: 0.8,
            opacity: 0,
            y: 50,
            ease: "power2.out"
        });

        // Utilisation de gsap.utils.toArray() pour sélectionner tous les boutons
        const buttons = gsap.utils.toArray(".cta-button");

        // Animation des boutons
        tl.to(buttons, {
            duration: 0.8,
            opacity: 1,
            y: 0,
            stagger: 0.2, // Apparition en cascade
            ease: "power2.out"
        }, "<0.2");
    }


window.onload = ()=>{
    animate_navBar()
    toggleMenu()
    lenisFunction()
    heroAnimation()
    animateWteUsineSection()
    animateBiogazSection()
    animateCtaSection()
}