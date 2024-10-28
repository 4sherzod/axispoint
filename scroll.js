document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const dropdown = document.querySelector('.dropdown');

    
    window.addEventListener('scroll', function() {
        console.log("Scroll Y Position:", window.scrollY); // Check scroll position
        
        if (window.scrollY > 50) { // Adjust the threshold if needed
            header.classList.add('scrolled');
            dropdown.classList.add('scrolled');
            console.log('scrolled');
        } else {
            header.classList.remove('scrolled');
            dropdown.classList.remove('scrolled');
        }
    });
});
