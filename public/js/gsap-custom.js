gsap.registerPlugin(ScrollTrigger);

gsap.to(".gsap-parallax", {
    y: () => window.innerHeight * 0.3,  // 30% der Viewport-Höhe nach unten verschieben
    ease: "none",
    scrollTrigger: {
        trigger: ".gsap-parallax",
        start: "top top",
        end: "bottom top",
        scrub: true,
    }
});