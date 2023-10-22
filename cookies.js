document.addEventListener('DOMContentLoaded', function() {
    let cookieBanner = document.getElementById('cookie-banner');
    let acceptButton = document.getElementById('accept-cookie');

    // Vérifier si l'utilisateur a déjà accepté les cookies en consultant le stockage local
    if (localStorage.getItem('cookieAccepted') !== 'true') {
        // Afficher la bannière uniquement si le consentement n'a pas encore été donné
        cookieBanner.style.display = 'block';
    } else {
        // Masquer la bannière si le consentement a déjà été donné
        cookieBanner.style.display = 'none';
    }

    // Gérer le clic sur le bouton "J'accepte"
    acceptButton.addEventListener('click', function() {
        // Masquer la bannière
        cookieBanner.style.display = 'none';
        // Stocker le consentement dans le stockage local du navigateur
        localStorage.setItem('cookieAccepted', 'true');
    });
});