import { animate_navBar, lenisFunction, toggleMenu, heroAnimation } from "./global.js"


function animateBiogazSection() {
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: "#biogaz-essentiel",
            start: "20px 60%", // Démarre l'animation quand le haut de la section est à 80% de la fenêtre (plus haut)
            toggleActions: "play none none reverse",
        }
    });

    // Animation du titre et du paragraphe
    tl.from("#biogaz-essentiel .biogaz-title, #biogaz-essentiel .biogaz-paragraphe", {
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    });

    // Animation de l'image (biogaz-image-wrapper)
    tl.from("#biogaz-essentiel .biogaz-image-wrapper", {
        x: -100, // Déplace l'image de la gauche vers la droite
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    }, "<0.2"); // Commence 0.2s après l'animation précédente

    // Animation des éléments de la liste (biogaz-item)
    tl.from("#biogaz-essentiel .biogaz-item", {
        x: 100, // Déplace les éléments de la liste de la droite vers la gauche
        opacity: 0,
        duration: 0.8,
        stagger: 0.6, // Anime chaque élément avec un petit décalage
        ease: "power2.out"
    }, "<0.2"); // Commence 0.2s après l'animation précédente
}

function animateGazDifferenceSection() {
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: "#gaz-difference-section",
            start: "20px 60%", 
            toggleActions: "play none none reverse",
        }
    });

    // Animation du titre et du paragraphe
    tl.from("#gaz-difference-section .biogaz-title,#gaz-difference-section .biogaz-paragraphe", {
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    });

    // Animation des éléments de la liste
    tl.from("#gaz-difference-section .biogaz-item", {
        x: -100, // Déplace les éléments de la liste de la gauche vers la droite
        opacity: 0,
        duration: 0.8,
        stagger: 0.6,
        ease: "power2.out"
    }, "<0.2");

    // Animation de l'image
    tl.from("#gaz-difference-section .biogaz-image-wrapper", {
        x: 100, // Déplace l'image de la droite vers la gauche
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    }, "<0.2");
}

function animateBiogazProcessGrid() {
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: "#biogaz-process-section",
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    });

    const processCards = gsap.utils.toArray("#biogaz-process-section .biogaz-process-card");

    tl.from(processCards, {
        opacity: 0,
        duration: 0.8,
        stagger: 0.5,
        ease: "power2.out"
    });
}




// Fonction pour animer les éléments au défilement
function animateOnScroll(element, direction) {
    const yValue = direction === 'up' ? 50 : -50; // Déplacement vertical
    gsap.from(element, {
        opacity: 0,
        y: yValue,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: element,
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    });
}


function animateBiogazContact() {
    gsap.registerPlugin(SplitText, ScrollTrigger);

    const sectionStart = document.querySelector("#biogaz-contact-section");
    const contactTitle = document.querySelector("#biogaz-contact-section .biogaz-contact-title");
    const contactDescription = document.querySelector("#biogaz-contact-section .biogaz-contact-description");
    const contactButton = document.querySelector("#biogaz-contact-section .contact-us-button");

    // Scinde le texte du bouton en caractères pour l'animation
    const splitTextButton = new SplitText(contactButton, {
        type: "chars"
    });

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: sectionStart,
            start: "top center",
            toggleActions: "play none none reverse",
        }
    });

    // Animation du titre et du paragraphe
    tl.from([contactTitle, contactDescription], {
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    });

    // Animation du bouton (le conteneur)
    tl.from(contactButton, {
        opacity: 0,
        y: 200,
        duration: 0.8,
        ease: "power2.out"
    }, "<0.2");

    // Animation des caractères du bouton
    tl.from(splitTextButton.chars, {
        x: 150,
        opacity: 0,
        duration: 0.7,
        ease: "power4.out",
        stagger: 0.04
    }, "<"); // Commence en même temps que l'animation du conteneur du bouton
}


document.addEventListener("DOMContentLoaded", () => {
    // ... vos autres fonctions d'animation ...

    // Animation du titre
    animateOnScroll("#biogaz-avantages .biogaz-avantages-title", 'up');

    // Animation de chaque carte individuellement
    const avantagesItems = gsap.utils.toArray("#biogaz-avantages .avantages-item");
    avantagesItems.forEach((item, index) => {
        gsap.from(item, {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: index * 0.2, // Décalage pour l'effet de cascade
            scrollTrigger: {
                trigger: item, // Le trigger est l'élément lui-même
                start: "top 80%",
                toggleActions: "play none none reverse",
            }
        });
    });
});


window.onload = ()=>{
    heroAnimation()
    animate_navBar()
    toggleMenu()
    lenisFunction()
    animateBiogazSection()
    animateGazDifferenceSection()
    animateBiogazProcessGrid()
    animateBiogazContact()
}