export function toggleMenu()
{
    
    const notAllowElements = [
    ...document.querySelectorAll('.mobile-menu li'),
    ...document.querySelectorAll('.mobile-menu li a'),
    document.querySelector('.burger-menu')
    ]

 

    document.querySelector('.burger-menu').addEventListener('click', (event)=>{


        document.querySelector('.mobile-menu').classList.toggle('open')
        const element = event.currentTarget
        element.classList.toggle('open')

        document.querySelectorAll('.burger-menu p ').forEach((el) =>{
            el.classList.toggle('open')
        })

    })  

    
}

export function animate_navBar()
{

    gsap.registerPlugin(ScrollTrigger)

    gsap.set('.nav-bg', {
        backgroundColor: "white",
        opacity: 0
    })
    gsap.set('.burger-menu p', {
        backgroundColor: "white",
    })


    const tl = gsap.timeline(
        {
            scrollTrigger:{
            triggerActions: "play none none reverse",
            start: "+=60",
            end: "+=280",
            scrub: 1
        },
    })

    tl
    .to('.desktop-menu-items li a:not(.active)', {
        color: "#166534cc",
        stagger: 1
    })
    .to('.nav-bg', {
        opacity: 1,
        boxShadow: "1px 5px 10px rgba(0, 0, 0, .25)"
    }, "<")
    .to('.burger-menu p', {
        backgroundColor: "#166534cc",
        stagger: 1
    }, "<")
    .to('.mobile-menu', {
        backgroundColor: "#036aa1cc"
    })

}

export function lenisFunction()
{
    const lenis = new Lenis()

    function raf(time)
    {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)

}


export function heroAnimation()
{
    gsap.registerPlugin(SplitText)

    const split = SplitText.create('.hero .title', {type: "words, chars"})

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
}

