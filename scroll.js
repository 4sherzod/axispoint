function getDarkSectionInView() {
    const darkSections = document.querySelectorAll('.dark-section');
    for (const section of darkSections) {
        const rect = section.getBoundingClientRect();
        // Check if the section is at or below the top bar height
        if (rect.top <= 0 && rect.bottom > 0) {
            return section; // Found a dark-section in view
        }
    }
    return null; // No dark-section in view
}

// Function to update the closest element on scroll and toggle the 'scrolled' class
window.addEventListener("scroll", function() {
    const topBarHeight = 40; // Replace with actual top bar height
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
