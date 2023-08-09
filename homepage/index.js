const arrowContainer = document.querySelector('.arrow-container');
const menuMobile = document.querySelector('.menu-icon');
const sidebar = document.querySelector('.sidebar');
const overlay = document.querySelector('.overlay');
const logo = document.querySelector('.logo');
const close = document.querySelector('.close-button');

arrowContainer.addEventListener('click', () => {
    sidebar.classList.toggle('open');
    overlay.classList.toggle('active');
    logo.classList.toggle('logo-hidden');
});

menuMobile.addEventListener('click', () => {
    sidebar.classList.toggle('open');
    overlay.classList.toggle('active');
    logo.classList.toggle('logo-hidden');
});

overlay.addEventListener('click', () => {
    sidebar.classList.remove('open'); // Ferme la sidebar
    overlay.classList.remove('active'); // Désactive l'overlay
    logo.classList.remove('logo-hidden');
});

close.addEventListener('click', () => {
    sidebar.classList.remove('open'); // Ferme la sidebar
    overlay.classList.remove('active'); // Désactive l'overlay
    logo.classList.remove('logo-hidden');
});