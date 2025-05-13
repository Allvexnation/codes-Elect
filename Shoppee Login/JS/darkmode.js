//darkmode function

const themeToggle = document.getElementById('theme-toggle');
const moonIcon = document.getElementById('moon-icon');
const sunIcon = document.getElementById('sun-icon');

if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark-mode');
    moonIcon.style.display = 'none';
    sunIcon.style.display = 'inline';
}

themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
        moonIcon.style.display = 'none';
        sunIcon.style.display = 'inline';
    } else {
        localStorage.setItem('theme', 'light');
        moonIcon.style.display = 'inline';
        sunIcon.style.display = 'none';
    }
});