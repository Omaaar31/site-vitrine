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

// Initialisez ScrollReveal
const sr = ScrollReveal();

// Configurez les options pour l'effet de balayage latéral
const revealOptions = {
    distance: "100%", // Distance de déplacement horizontal (balayage latéral à partir de la droite)
    duration: 1000, // Durée de l'animation en millisecondes
    origin: "left", // Direction de laquelle l'élément sera révélé
    opacity: 0, // Commence avec une opacité de 0 (invisible)
    reset: false, // Réinitialise l'animation lorsqu'elle est hors de la vue
    easing: "ease-in-out", // Type d'animation
};

// Appliquez l'effet de balayage latéral à chaque élément individuellement
sr.reveal(".step-one", {...revealOptions, delay: 200 });
sr.reveal(".step-two", {...revealOptions, delay: 400 });
sr.reveal(".step-three", {...revealOptions, delay: 600 });
sr.reveal(".step-four", {...revealOptions, delay: 800 });