// public/js/theme-switcher.js

document.addEventListener('DOMContentLoaded', () => {

  // Curtain-Transition beim Themewechsel mit synchroner Dauer aus CSS-Variable
  function runCurtainTransition(callback) {
    const curtain = document.getElementById('theme-curtain');
    if (!curtain) return callback(); // Wenn Curtain nicht existiert

    // CSS-Variable auslesen und umwandeln in ms
    const computedStyle = getComputedStyle(curtain);
    const duration = computedStyle.getPropertyValue('--curtain-transition-duration').trim();
    const durationMs = parseFloat(duration) * (duration.includes('ms') ? 1 : 1000);

    console.log('🔍 durationMs:', durationMs);

    curtain.classList.add('active'); // Vorhang anzeigen
    setTimeout(() => {
      callback(); // Theme wird gewechselt
      setTimeout(() => {
        curtain.classList.remove('active'); // Vorhang ausblenden
      }, durationMs);
    }, 100); // kurze Pause vor Theme-Wechsel
  }

  // Theme anwenden
  function applyTheme(theme) {
    let appliedTheme = theme;

    if (theme === 'auto') {
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      appliedTheme = prefersDark ? 'dark' : 'light';
    }

    document.documentElement.setAttribute('data-theme', appliedTheme);
    localStorage.setItem('theme', theme);

    document.querySelectorAll('.dropdown-item[data-theme]').forEach(el => {
      el.classList.toggle('active', el.getAttribute('data-theme') === theme);
    });

    // Icon in der Navbar aktualisieren
    const iconTarget = document.querySelector('.dropdown-toggle i');
    if (iconTarget) {
      const selectedIcon = document.querySelector(`.dropdown-item[data-theme="${theme}"] i`);
      if (selectedIcon) {
        iconTarget.className = selectedIcon.className;
      }
    }
  }

  // Gespeichertes Theme oder Default "auto"
  const savedTheme = localStorage.getItem('theme') || 'auto';
  applyTheme(savedTheme);

  // Theme-Wechsler Buttons
  document.querySelectorAll('.dropdown-item[data-theme]').forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault();
      const theme = el.getAttribute('data-theme');
      runCurtainTransition(() => applyTheme(theme));
    });
  });

  // Wenn sich das System-Theme ändert (nur bei "auto")
  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    if (localStorage.getItem('theme') === 'auto') {
      applyTheme('auto');
    }
  });

});