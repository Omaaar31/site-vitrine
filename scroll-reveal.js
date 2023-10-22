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