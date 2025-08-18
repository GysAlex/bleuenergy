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
    .from('.hero .cta button:last-child', {
        xPercent: -100,
        opacity: 0,
        ease: "back", 
    })

}
function svgDrawSection()
{
    gsap.registerPlugin(DrawSVGPlugin, MotionPathPlugin, GSDevTools, ScrollTrigger)

    let isMobile = window.matchMedia("(max-width: 1200px)").matches;


    if (!isMobile)
    {
        const pulse = gsap.timeline({
            defaults:{
                autoAlpha: 1,
                scale: 1.2,
                ease: "elastic",
                transformOrigin: "center",
            }
        })
        .to(".ball1", {}, 0.40)
        .to(".ball2", {}, 1.17)
        .to(".ball3", {}, 2.28)
        .from(".main-content-wrapper .section-collecte .content-text", {
            opacity: 0,
            x: -100,
            scale: 1,
            ease: "power2.inOut"
        }, 0.2)
        .from(".main-content-wrapper .section-collecte .content-image img", {
            yPercent: 100,
            opacity: 0,
            boxShadow: "rgba(108, 196, 108, .25)",
            ease: "power2.inOut"
        }, 0.3)
        .from(".main-content-wrapper .section-transformation .content-text", {
            opacity: 0,
            x: 100,
            scale: 1,
            ease: "power2.inOut"
        }, 1.07)
        .from(".main-content-wrapper .section-transformation .content-image img", {
            yPercent: 100,
            opacity: 0,
            boxShadow: "rgba(3, 106, 161, 0.25)",
            ease: "power2.inOut"
        }, 0.97)
        .from(".main-content-wrapper .section-impact .content-text", {
            opacity: 0,
            x: -100,
            scale: 1,
            ease: "power2.inOut"
        }, 2.18)
        .from(".main-content-wrapper .section-impact .content-image img", {
            yPercent: 100,
            opacity: 0,
            boxShadow: "rgba(255, 215, 0, .25)",
            ease: "power2.inOut"
        }, 2.08)
        .to(".ball", {fill: "rgba(3, 106, 161, 0.8)"}, 1.10)
        .to('.ball', {fill: "#ffd700"}, 2.20)


        const main = gsap.timeline({
            scrollTrigger: {
                trigger: ".mysvg",
                scrub: 1.1,
                start: "top center",
                end: "bottom center"
            }
        })
        .to('.ball', {autoAlpha: 1, duration: 0.05})
        .from(".theLine", {
            drawSVG: 0,
            duration: 4
        })
        .to(".ball01", {
            motionPath: {
                path: ".theLine",
                align: ".theLine",
                alignOrigin: [0.5, 0.5]
            },
            duration: 4
        }, 0)
        .add(pulse, 0)
    }

    else
    {
        gsap.from(".main-content-wrapper .section-collecte .content-text", {
            scrollTrigger:{
                trigger: ".main-content-wrapper .section .content-text",
                start: "-50% center",
                end: "bottom center",
                toggleActions: "play resume none reverse",
            },
            opacity: 0,
            x: -100,
            duration: 1,
            ease: "power2.in"
        })

        gsap.from(".main-content-wrapper .section-collecte img", {
            scrollTrigger:{
                trigger: ".main-content-wrapper .section-collecte img",
                start: "-50% center",
                end: "bottom center",
                toggleActions: "play resume none reverse",
            },
            opacity: 0,
            x: 100,
            duration: 1,
            ease: "power2.in"
        })

        gsap.from(".main-content-wrapper .section-transformation .content-text", {
            scrollTrigger:{
                trigger: ".main-content-wrapper .section-transformation .content-text",
                start: "-50% center",
                end: "bottom center",
                toggleActions: "play resume none reverse",
            },
            opacity: 0,
            x: 100,
            duration: 1,
            ease: "power2.in"
        })

        gsap.from(".main-content-wrapper .section-transformation img", {
            scrollTrigger:{
                trigger: ".main-content-wrapper .section-transformation img",
                start: "-50% center",
                end: "bottom center",
                toggleActions: "play resume none reverse",
            },
            opacity: 0,
            x: -100,
            duration: 1,
            ease: "power2.in"
        })

        gsap.from(".main-content-wrapper .section-impact .content-text", {
            scrollTrigger:{
                trigger: ".main-content-wrapper .section-impact .content-text",
                start: "-50% center",
                end: "bottom center",
                toggleActions: "play resume none reverse",
            },
            opacity: 0,
            x: -100,
            duration: 1,
            ease: "power2.in"
        })

        gsap.from(".main-content-wrapper .section-impact img", {
            scrollTrigger:{
                trigger: ".main-content-wrapper .section-impact img",
                start: "-50% center",
                end: "bottom center",
                toggleActions: "play resume none reverse",
            },
            opacity: 0,
            x: 100,
            duration: 1,
            ease: "power2.in"
        })

    }

    // GSDevTools.create({animation: main})
}

function animateSecondPart() {
    gsap.registerPlugin(ScrollTrigger);
    const secondPart = document.querySelector('.second-part');

    
    gsap.from(secondPart.querySelector('.image-card'), {
        x: -100, 
        opacity: 0,
        duration: 1.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: secondPart,
            start: "top 80%", // Déclenche l'animation lorsque le haut de la section est à 80% de la fenêtre
            toggleActions: "play none none reverse",
        }
    });

    // Animation du titre et du paragraphe du contenu texte
    gsap.from(secondPart.querySelectorAll('.text-content .gsap-slide-up'), {
        y: 50, // Commence 50px plus bas
        opacity: 0,
        duration: 1,
        stagger: 0.3, // Anime chaque élément avec un délai de 0.3s
        ease: "power2.out",
        scrollTrigger: {
            trigger: secondPart,
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    });

    // Animation des éléments de la liste de fonctionnalités
    gsap.from(secondPart.querySelectorAll('.feature-item'), {
        xPercent: 100,
        duration: 0.8,
        stagger: 0.6,
        ease: "power1.out",
        scrollTrigger: {
            trigger: secondPart.querySelector('.features-list'),
            start: "top 90%",
            toggleActions: "play none none reverse",
        }
    });

    // Animation des icônes de la carte
    gsap.from(secondPart.querySelectorAll('.icons-container .icon-item'), {
        y: 20,
        opacity: 1,
        duration: 0.4,
        ease: "power1.out",
        scrollTrigger: {
            trigger: secondPart.querySelector('.icons-container'),
            start: "top 90%",
            toggleActions: "play none none reverse",
        }
    });
}

function animateStats() {
    const statsCards = gsap.utils.toArray(".third-part .stat-card");
    
    // Crée une seule timeline pour orchestrer toutes les animations
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".third-part",
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    });

    // Parcourt chaque carte pour ajouter les animations à la timeline
    statsCards.forEach((card, i) => {
        const numberElement = card.querySelector(".stat-number");
        const targetValue = parseInt(numberElement.getAttribute("data-target"));
        const unitElement = card.querySelector(".stat-unit");
        const unitText = unitElement.textContent.trim();
        const proxy = { val: 0 };

        // Ajoute l'animation d'apparition de la carte à la timeline
        tl.from(card, {
            y: () => {
                if (i === 1) return -100; 
                if (i === 2) return 100; 
                return 0;
            },
            x: () => {
                if (i === 0) return -100; 
                if (i === 3) return 100; 
                return 0;
            },
            opacity: 0,
            duration: 1,
            ease: "power2.out"
        }, i === 0 ? 0 : "< 0.5"); // Ajoute un délai avec un petit effet de chevauchement, c'est très intéressant

        // Ajoute l'animation d'incrémentation des chiffres juste après
        tl.to(proxy, {
            val: targetValue,
            duration: 2,
            ease: "power1.out",
            onUpdate: () => {
                let displayValue = proxy.val;

                if (targetValue >= 1000000) {
                    displayValue = (proxy.val / 1000000).toFixed(1) + "M";
                } else if (targetValue >= 1000) {
                    displayValue = Math.round(proxy.val / 1000) + "K";
                } else if (unitText === "%") {
                    displayValue = Math.round(proxy.val) + "%";
                } else if (unitText === "MWh") {
                    displayValue = Math.round(proxy.val) + "MWh";
                } else {
                    displayValue = Math.round(proxy.val);
                }

                numberElement.textContent = displayValue;
            }
        }, "<"); // Utilise une position relative pour que l'incrémentation commence en même temps que l'apparition de la carte
    });
}

function animateFourthPart() {
    const fourthPart = document.querySelector('.fourth-part');
    if (!fourthPart) return; // S'assure que la section existe

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: fourthPart,
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    });

    // Anime le contenu de gauche
    tl.from(fourthPart.querySelector('.left-content'), {
        x: -100,
        opacity: 0,
        duration: 1.2,
        ease: "power2.out"
    }, 0); // Démarre en même temps que l'autre animation

    // Anime le contenu de droite (la carte du formulaire)
    tl.from(fourthPart.querySelector('.right-content'), {
        x: 100,
        opacity: 0,
        duration: 1.2,
        ease: "power2.out"
    }, 0.2); // Démarre avec un léger délai après la gauche
}

window.onload = ()=>{
    svgDrawSection()
    animate_navBar()
    animateSecondPart()
    animateStats()
    animateFourthPart()
    toggleMenu()
    animate_navBar()
    lenisFunction()
    heroAnimation()
}