import { animate_navBar, lenisFunction, toggleMenu, heroAnimation } from "./global.js"


function animateCollecteSection() {
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".collecte-section",
            start: "center 80%",
            toggleActions: "play none none reverse",
        }
    });

    // Animation de l'image
    tl.from(".collecte-image-wrapper", {
        opacity: 0,
        duration: 1,
        ease: "power2.out"
    });

    // Animation des points de la liste
    const detailItems = gsap.utils.toArray(".collecte-details .detail-item");
    tl.from(detailItems, {
        x: 500,
        opacity: 0,
        duration: 1,
        stagger: 0.4,
        ease: "power2.out"
    }, "<0.2"); // Commence 0.2s avant la fin de l'animation de l'image
}

function animateTransportSection() {
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".transport-section",
            start: "center 80%",
            toggleActions: "play none none reverse",
        }
    });

    // Animation de l'image
    tl.from(".transport-image-wrapper", {
        opacity: 0,
        duration: 1,
        ease: "power2.in"
    });

    // Animation des points de la liste
    const detailItems = gsap.utils.toArray(".transport-details .detail-item");
    tl.from(detailItems, {
        x: -200,
        opacity: 0,
        duration: 1,
        stagger: 0.4,
        ease: "power2.out"
    }, "<0.2"); // Commence 0.2s avant la fin de l'animation de l'image
}


function animateStatsCounter() {
    const stats = gsap.utils.toArray(".stat-number");

    stats.forEach(stat => {
        const targetValue = parseInt(stat.getAttribute("data-target"));
        const unit = stat.textContent;

        gsap.to(stat, {
            innerText: targetValue,
            duration: 2,
            snap: { innerText: 1 },
            scrollTrigger: {
                trigger: stat,
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
            onUpdate: function() {
                stat.textContent = Math.ceil(this.targets()[0].innerText) + unit;
            }
        });
    });
}
    


window.onload = ()=>{
    animate_navBar()
    toggleMenu()
    lenisFunction()
    heroAnimation()
    animateCollecteSection()
    animateTransportSection()
    animateStatsCounter()
}