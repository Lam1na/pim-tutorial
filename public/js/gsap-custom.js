
gsap.registerPlugin(ScrollTrigger);

// Parallax für Bilder und Text
gsap.utils.toArray(".gsap-parallax-img, .gsap-parallax-txt").forEach((elem) => {
  const speed = parseFloat(elem.dataset.gsapSpeed) || 0.3;

  gsap.to(elem, {
    y: () => -(speed * 200), // 200px bei speed 1
    ease: "none",
    scrollTrigger: {
      trigger: elem,
      start: "top+=100 bottom",
      end: "bottom top-=100",
      scrub: 0.5
    }
  });
});

