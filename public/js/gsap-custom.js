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

gsap.to(".hero-title", {
  y: 400,
  ease: "none",
  scrollTrigger: {
    trigger: ".hero",
    start: "top top",
    end: "bottom top",
    scrub: true,
  }
});

gsap.to(".hero-subtitle", {
  y: 200,
  ease: "none",
  scrollTrigger: {
    trigger: ".hero",
    start: "top top",
    end: "bottom top",
    scrub: true,
  }
});