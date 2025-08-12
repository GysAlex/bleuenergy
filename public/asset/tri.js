
import { animate_navBar, lenisFunction, toggleMenu } from "./global.js"


function heroAnimation()
{
    gsap.registerPlugin(SplitText)

    const split = SplitText.create('.hero .title', {type: "words, chars"})

    console.log(split)


    const tl = gsap.timeline()

    tl.from(split.words, {
        y: -100,
        opacity: 0,
        rotation: "random(-80, 80)",
        duration: 0.7, 
        ease: "back",
        stagger: 0.15
    })
    .from('.hero .explain', {
        yPercent: -50,
        opacity: 0,
        duration: 0.7
    })
    .from('.hero .cta button:first-child', {
        x: 400,
        opacity: 0,
        ease: "back",
    })
}


function animateTriAvantagesSection() {
    const triAvantagesTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: ".tri-avantages-section",
            start: "top center",
            toggleActions: "play none none reverse",
        }
    });

    triAvantagesTimeline.from(".tri-avantages-title", {
        opacity: 0,
        y: 20,
        duration: 0.6,
        ease: "power2.out"
    });

    triAvantagesTimeline.from(".avantage-card", {
        opacity: 0,
        y: 30,
        duration: 0.8,
        stagger: 0.2, // Délai entre l'animation de chaque carte
        ease: "power2.out"
    }, "<0.2"); // Commence 0.2s avant la fin de l'animation du titre
}


function animateTriTechnologiesSection() {
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".tri-technologies-section",
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    });

    // Animation du titre
    tl.from(".tri-technologies-title", {
        y: 20,
        opacity: 0,
        duration: 0.6,
        ease: "power2.out"
    });

    // Animation de la carte de gauche
    tl.from(".technology-card--left", {
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    }, "<0.2"); // Commence 0.2s avant la fin de l'animation du titre

    // Animation de la carte de droite
    tl.from(".technology-card--right", {
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    }, "<0.2"); // Commence en même temps que la carte de gauche
}

function animateNosProduitsSection() {
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".nos-produits-section",
            start: "40% 80%",
            markers: true,
            toggleActions: "play none none reverse",
        }
    });

    tl.from(".nos-produits-title", {
        y: 100,
        opacity: 0,
        duration: 1,
        ease: "power2.out"
    });

    tl.from(".produit-card", {
        opacity: 0,
        duration: 0.8,
        stagger: 0.5,
        ease: "power2.in"
    }, "<0.2");

}


    function animateTriProcessusSection() {
        // On utilise gsap.utils.toArray pour sélectionner tous les éléments .processus-item
        const processItems = gsap.utils.toArray('.processus-item');
    
        // Création d'une "timeline" GSAP pour enchaîner les animations
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".tri-processus-section",
                start: "top center",
                toggleActions: "play none none reverse",
            }
        });

        // 1. Animation du titre
        tl.from(".tri-processus-title", {
            y: 20,
            opacity: 0,
            duration: 0.6,
            ease: "power2.out"
        });

        // 2. Animation de l'élément du milieu (la 3ème dans le tableau, donc index 2)
        tl.from(processItems[2], {
            y: -150, // Point de départ sur l'axe Y (du haut)
            opacity: 0,
            duration: 1.2,
            ease: "back.out(1.7)"
        });

        // 3. Animation des éléments 2 et 4 (index 1 et 3)
        tl.from([processItems[1], processItems[3]], {
            y: -150,
            opacity: 0,
            duration: 1.2,
            ease: "back.out(3)",
            stagger: 0.2
        }, "-=0.9");

        // 4. Animation des éléments 1 et 5 (index 0 et 4)
        tl.from([processItems[0], processItems[4]], {
            y: -150,
            opacity: 0,
            duration: 1.2,
            ease: "back.out(3)",
            stagger: 0.2
        }, "-=0.9");
    }



window.onload = ()=>{
    animate_navBar()
    toggleMenu()
    lenisFunction()
    heroAnimation()
    animateTriAvantagesSection()
    animateTriTechnologiesSection()
    animateNosProduitsSection()
    animateTriProcessusSection() 
}