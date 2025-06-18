// public/js/navbar.js

let lastScrollY = window.scrollY;
const navbar = document.querySelector('.navbar');
const sensitivity = 50; // Pixel-Schwelle

window.addEventListener('scroll', () => {
  const currentScrollY = window.scrollY;
  const delta = currentScrollY - lastScrollY;

  if (Math.abs(delta) > sensitivity) {
    if (delta > 0) {
      // Runterscrollen → Navbar verstecken
      navbar.classList.add('hide');
    } else {
      // Hochscrollen → Navbar zeigen
      navbar.classList.remove('hide');
    }
    lastScrollY = currentScrollY;
  }
});