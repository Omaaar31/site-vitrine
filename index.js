const arrowContainer = document.querySelector('.arrow-container');
const menuMobile = document.querySelector('.menu-icon');
const sidebar = document.querySelector('.sidebar');
const overlay = document.querySelector('.overlay');
const logo = document.querySelector('.logo');
const close = document.querySelector('.close-button');
const returnTop = document.querySelector('.arrow-container-return-top');
const marques = document.querySelector('#marque');
const vehicules = document.querySelector('#vehicule');
const nom = document.querySelector('#nom');
const prenom = document.querySelector('#prenom');
const immatriculation = document.querySelector('#immatriculation');
const form = document.querySelector('.form');

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
    sidebar.classList.remove('open'); // Close the sidebar
    overlay.classList.remove('active'); // Deactivate the overlay
    logo.classList.remove('logo-hidden');
});

close.addEventListener('click', () => {
    sidebar.classList.remove('open'); // Close the sidebar
    overlay.classList.remove('active'); // Deactivate the overlay
    logo.classList.remove('logo-hidden');
});

returnTop.addEventListener('click', () => {
    window.scrollTo(0, 0);
});

marques.addEventListener('change', () => {
    const selectedValue = marques.value;
    console.log('Selected Brand: ' + selectedValue);
});

vehicules.addEventListener('change', () => {
    const selectedValue = vehicules.value;
    console.log('Selected Vehicle: ' + selectedValue);
});

document.addEventListener("DOMContentLoaded", function() {
    const spinner = document.getElementById("spinner");
    const buttonText = document.getElementById("button-text");
    const submitButton = document.getElementById("submit-button");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Empêcher la soumission du formulaire pour cet exemple

        // Désactiver le bouton et masquer le texte du bouton
        submitButton.disabled = true;
        buttonText.style.display = "none";

        // Afficher le spinner
        spinner.classList.remove("hidden");

        // Ici, vous pouvez effectuer le traitement du formulaire,
        // par exemple, une requête AJAX ou autre.

        // Une fois le traitement terminé (simulé ici avec setTimeout), réactivez le bouton
        setTimeout(function() {
            // Masquer le spinner
            spinner.classList.add("hidden");

            // Réactiver le bouton
            submitButton.disabled = false;

            // Rétablir le texte du bouton
            buttonText.style.display = "inline";
        }, 6000); // Vous pouvez ajuster le délai en fonction de votre traitement réel
    });
});


/* Script that protects against XSS vulnerability */
function escapeHtml(text) {
    let map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };

    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}

form.addEventListener('submit', function(event) {
    event.preventDefault();
    const fields = [
        { input: nom, name: 'Last Name' },
        { input: prenom, name: 'First Name' },
        { input: immatriculation, name: 'License Plate' }
    ];

    const specialChars = /[&<>"']/;
    let invalidFields = [];

    fields.forEach(field => {
        const value = field.input.value;
        const convertedValue = escapeHtml(value);

        if (specialChars.test(convertedValue)) {
            invalidFields.push(field.name);
        }
    });

    if (invalidFields.length > 0) {
        alert(`Veuillez supprimer les caractères spéciaux de votre ${invalidFields.join(' , ')} !`);
    } else {
        event.target.submit();
    }
});

/* End of script */

// Initialize ScrollReveal
const sr = ScrollReveal();

// Configure options for the slide-in effect
const revealOptions = {
    distance: "100%", // Horizontal displacement distance (slide in from the right)
    duration: 1000, // Animation duration in milliseconds
    origin: "left", // Direction from which the element will be revealed
    opacity: 0, // Starts with opacity 0 (invisible)
    reset: false, // Reset the animation when out of view
    easing: "ease-in-out", // Animation type
};

// Apply the slide-in effect to each element individually
sr.reveal(".step-one", {...revealOptions, delay: 200 });
sr.reveal(".step-two", {...revealOptions, delay: 400 });
sr.reveal(".step-three", {...revealOptions, delay: 600 });
sr.reveal(".step-four", {...revealOptions, delay: 800 });