import { animate_navBar, lenisFunction, toggleMenu, heroAnimation } from "./global.js"



function ctaAnimation()
{
    gsap.registerPlugin(SplitText, ScrollTrigger);

    const sectionStart = document.querySelector(".final-techno");

    const splitText = new SplitText(".final-techno .cta-button", {
        type: "chars"
    });

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: sectionStart, 
            start: "top center",   
            toggleActions: "play none none reverse", 
            once: true,         
        }
    });

    tl.from(".call-to-action", {
        opacity: 0,
        y: 200
    })

    tl.from(splitText.chars, {
        x: 150,
        opacity: 0,
        duration: 0.7, 
        ease: "power4",
        stagger: 0.04 
    })

}


function techno_svg_animation() {
    gsap.registerPlugin(DrawSVGPlugin, ScrollTrigger);

    const isMobile = window.matchMedia("(max-width: 768px)").matches;

    // Animation pour les écrans de bureau (non mobile)
    if (!isMobile) {
        // --- Timeline des animations globales (SVG et autres) ---
        function createGlobalTimelineDesktop() {
            const globalTimeline = gsap.timeline();

            globalTimeline.from(".collect-section .section-header", {
                ease: "back",
                y: 100,
                opacity: 0,
                duration: 0.2
            }, 0.07);
            globalTimeline.from(".valorisation-section .section-header", {
                ease: "back",
                y: 100,
                opacity: 0,
                duration: 0.2
            }, 0.8);
            globalTimeline.from(".alimentation-section .alimentation-header", {
                ease: "back",
                y: 100,
                opacity: 0,
                duration: 0.2
            }, 2.41);

            globalTimeline.to(".first-arrow", {
                autoAlpha: 1,
                scale: 2,
                x: "-=12",
                ease: "elastic"
            }, 0.53);
            globalTimeline.to(".first-circle", {
                autoAlpha: 1,
                scale: 1.4,
                x: "-=12",
                y: "-=10",
                ease: "elastic"
            }, 0.65);
            globalTimeline.to(".fency-stuff", {
                width: "100%",
                ease: "power2.inOut"
            }, 0.80);
            globalTimeline.to(".fency-stuff", {
                height: "100%",
                ease: "power2.inOut"
            }, 1.25);
            globalTimeline.to(".second-circle", {
                autoAlpha: 1,
                scale: 1.4,
                x: "-=12",
                y: "-=10",
                ease: "elastic"
            }, 2.25);
            globalTimeline.to(".power-circle", {
                autoAlpha: 1,
                scale: 1.1,
                x: "-=16",
                y: "-=14",
                ease: "elastic"
            }, 2.80);

            globalTimeline.to(".c-left, .c-right", {
                width: "100%",
                ease: "power2.Out",
            }, 2.93);
            globalTimeline.to(".c-left, .c-right", {
                height: "100%",
                ease: "power2.in",
                duration: 0.3
            }, "< 0.01");
            globalTimeline.to(".alimentation-card .card-icon, .alimentation-card .card-title, .alimentation-card .card-description", {
                autoAlpha: 1,
                ease: "elastic"
            }, 3.2);
            globalTimeline.to(".destination-image-overlay", {
                clipPath: "circle(100% at 50% 50%)"
            });
            globalTimeline.to(".dest-bg", {
                width: "100%",
                ease: "power2.Out",
            }, 3.23);
            globalTimeline.to(".dest-bg", {
                height: "100%",
                ease: "power2.in",
                duration: 0.3
            }, "< 0.01");

            return globalTimeline;
        }

        // Timeline pour les `stat-card` (bureau)
        function createStatCardsTimelineDesktop() {
            const effTimeline = gsap.timeline({
                scrollTrigger: {
                    trigger: ".stats-container",
                    start: "63px 80%",
                    toggleActions: "play none none reverse",
                },
            });
            effTimeline.from(".stat-card", {
                duration: 0.4,
                ease: "power1.inOut",
                opacity: 0,
                stagger: {
                    amount: 0.4,
                    from: "center"
                }
            });
            effTimeline.to(".stat-card", {
                boxShadow: "1px 5px 10px #166534f5",
                stagger: {
                    amount: 0.4,
                    ease: "elastic"
                }
            }, 0.5);
            return effTimeline;
        }

        // Timeline pour les fourches (`forks`) (bureau)
        function createForksTimelineDesktop() {
            const forksTimeline = gsap.timeline({
                scrollTrigger: {
                    trigger: ".power-circle",
                    start: "-60px center",
                    scrub: true
                }
            });
            forksTimeline.from(".fork-right", {
                drawSVG: 0,
                duration: 4
            });
            forksTimeline.from(".fork-left", {
                drawSVG: 0,
                duration: 4
            }, "<");
            return forksTimeline;
        }

        // Timeline principale (bureau)
        function createMainTimelineDesktop() {
            const mainTimeline = gsap.timeline({
                scrollTrigger: {
                    trigger: ".tech_svg",
                    start: "top center",
                    scrub: 1.1,
                    end: "bottom center"
                }
            });
            mainTimeline.from("#main-line", {
                drawSVG: 0,
                duration: 4
            });
            mainTimeline.add(createGlobalTimelineDesktop(), 0);
            return mainTimeline;
        }

        // Exécution des animations du SVG pour le bureau
        createMainTimelineDesktop();
        createStatCardsTimelineDesktop();
        createForksTimelineDesktop();

    } else {
        // --- Code pour les écrans mobiles (avec des triggers individuels) ---

        // Animation de la section "Optimiser la Collecte"
        gsap.from(".collect-section .section-header", {
            scrollTrigger: {
                trigger: ".collect-section",
                start: "top 90%",
                toggleActions: "play none none reverse",
            },
            ease: "back",
            y: 50,
            opacity: 0,
            duration: 0.2
        });

        // Animation des cartes de statistiques
        gsap.from(".stats-container", {
            scrollTrigger: {
                trigger: ".stats-container",
                start: "10% center",
                toggleActions: "play none none reverse",
            },
            duration: 0.8,
            ease: "power1.inOut",
            opacity: 0,
            stagger: {
                amount: 0.2,
                from: "center"
            }
        });
        
        // Animation de la section "Nos Usines de Valorisation"
        gsap.from(".valorisation-section .section-header", {
            scrollTrigger: {
                trigger: ".valorisation-section",
                start: "top 90%",
                toggleActions: "play none none reverse",
            },
            ease: "back",
            y: 50,
            opacity: 0,
            duration: 0.2
        });

        // Animation de la carte "fency-stuff"
        gsap.to(".fency-stuff", {
            scrollTrigger: {
                trigger: ".fency-stuff",
                start: "top 90%",
                toggleActions: "play none none reverse",
            },
            width: "100%",
            ease: "power2.inOut"
        });
        gsap.to(".fency-stuff", {
            scrollTrigger: {
                trigger: ".fency-stuff",
                start: "center 90%",
                scrub: 1,
                toggleActions: "play none none reverse",
            },
            height: "100%",
            ease: "power2.inOut"
        });
        
        // Animation de la section "Alimentation du Réseau"
        gsap.from(".alimentation-section .alimentation-header", {
            scrollTrigger: {
                trigger: ".alimentation-section",
                start: "top 90%",
                toggleActions: "play none none reverse",
            },
            ease: "back",
            y: 50,
            opacity: 0,
            duration: 0.2
        });

        // Animations des éléments des cartes d'alimentation
        gsap.to(".c-left, .c-right", {
            scrollTrigger: {
                trigger: ".alimentation-cards-container",
                start: "top 90%",
                toggleActions: "play none none reverse",
            },
            width: "100%",
            ease: "power2.Out",
        });
        gsap.to(".c-left, .c-right", {
            scrollTrigger: {
                trigger: ".alimentation-cards-container",
                start: "center 90%",
                toggleActions: "play none none reverse",
            },
            height: "100%",
            ease: "power2.in",
            duration: 0.3
        });
        gsap.to(".alimentation-card .card-icon, .alimentation-card .card-title, .alimentation-card .card-description", {
            scrollTrigger: {
                trigger: ".alimentation-cards-container",
                start: "center 85%",
                toggleActions: "play none none reverse",
            },
            autoAlpha: 1,
            ease: "elastic"
        });

        // Animation de la carte de destination
        gsap.to(".destination-image-overlay", {
            scrollTrigger: {
                trigger: ".destination-card",
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
            clipPath: "circle(100% at 50% 50%)"
        });
        gsap.to(".dest-bg", {
            scrollTrigger: {
                trigger: ".destination-card",
                start: "top 90%",
                toggleActions: "play none none reverse",
            },
            width: "100%",
            ease: "power2.Out"
        });
        gsap.to(".dest-bg", {
            scrollTrigger: {
                trigger: ".destination-card",
                start: "center 90%",
                toggleActions: "play none none reverse",
            },
            height: "100%",
            ease: "power2.in",
            duration: 0.3
        });
    }
}

window.onload = ()=>{
    techno_svg_animation()
    lenisFunction()
    ctaAnimation()
    toggleMenu()
    heroAnimation()
    animate_navBar()
}