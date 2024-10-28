function getDarkSectionInView() {
    const darkSections = document.querySelectorAll('.dark-section');
    const buffer = 20; // Adjust this value for earlier detection

    for (const section of darkSections) {
        const rect = section.getBoundingClientRect();
        
        // Check if the top of the section is within the buffer range
        if (rect.top <= buffer && rect.bottom > 0) {
            return section; // Found a dark-section in view
        }
    }
    return null; // No dark-section in view
}

// Function to update the closest element on scroll and toggle the 'scrolled' class
window.addEventListener("scroll", function() {
    const darkSection = getDarkSectionInView(); // Check for the currently visible dark-section

    const header = document.querySelector('header');
    const dropdown = document.querySelector('.dropdown');

    // Check if we have a dark-section currently visible
    if (darkSection) {
        console.log('dark');
        header.classList.remove("scrolled");
        dropdown.classList.remove("scrolled");
    } else {
        console.log('white');
        header.classList.add("scrolled");
        dropdown.classList.add("scrolled");
    }
});
