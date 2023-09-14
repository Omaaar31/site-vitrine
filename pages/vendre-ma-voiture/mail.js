// Function to update the countdown timer
function mettreAJourCompteARebours() {
    const secondesRestantes = document.getElementById("secondesRestantes");
    const secondes = parseInt(secondesRestantes.innerText);

    if (secondes > 0) {
        secondesRestantes.innerText = secondes - 1;
        setTimeout(mettreAJourCompteARebours, 1000); // Call the function every 1 second
    } else {
        // Redirect the user after 10 seconds
        window.location.href = "../../index.html";
    }
}

// Start countdown when page is loaded
window.addEventListener("load", function() {
    setTimeout(mettreAJourCompteARebours, 1000); // Call the function every 1 second
});