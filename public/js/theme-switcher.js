// theme-switcher.js

function applyTheme(theme) {
  if (theme === 'auto') {
    document.documentElement.removeAttribute('data-theme');
    localStorage.removeItem('theme');
  } else {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('theme', theme);
  }
}

// Event Listener
document.querySelectorAll('.theme-switch').forEach(item => {
  item.addEventListener('click', e => {
    e.preventDefault();
    const theme = e.currentTarget.getAttribute('data-theme');
    applyTheme(theme);
  });
});

// Beim Laden: Theme aus localStorage
document.addEventListener('DOMContentLoaded', () => {
  const saved = localStorage.getItem('theme');
  if (saved) {
    applyTheme(saved);
  }
});
