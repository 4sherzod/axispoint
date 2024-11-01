<?php
function scrollbar($array) {
    $size = sizeof($array);
    echo '
        <style>
            .nav-bar {
                display: flex;
                justify-content: center;
                padding: 20px;
                background-color: #f8f8f8;
                border-bottom: 1px solid #ddd;
                position: sticky;
                top: 80px; /* Offset by 100px from the top */
                z-index: 1000;
            }

            .nav-item {
                margin: 0 20px;
                padding-bottom: 10px;
                position: relative;
                font-size: 18px;
                color: #333;
                text-decoration: none;
                transition: color 0.3s ease; /* Smooth color transition */
            }

            .nav-item:hover {
                color: #dbbf8b; /* Change color on hover */
            }

            .nav-item::after {
                content: "";
                position: absolute;
                left: 50%; /* Start from the center */
                bottom: 0;
                width: 0;
                height: 3px;
                background-color: #dbbf8b; /* Underline color */
                transition: width 0.3s ease, left 0.3s ease; /* Smooth underline animation */
            }

            .nav-item:hover::after {
                width: 100%; /* Expand underline to full width */
                left: 0; /* Move starting point to the left */
            }

            .nav-item.active {
                // color: #dbbf8b; /* Optional: active state color */
            }

            .nav-item.active::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 3px;
                background-color: #dbbf8b;
            }

            .sectionforbar {
                /* Add any necessary styling for the sections here */
            }
        </style>
        <!-- Navigation Bar -->
        <div class="nav-bar">';
            for ($i = 0; $i < $size; $i += 2) {
                echo '<a href="#', $array[$i], '" class="nav-item" data-section="', $array[$i], '">', $array[$i + 1], '</a>';
            }
    echo '</div>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                // Select all navigation links
                const navItems = document.querySelectorAll(".nav-item");

                // Observer options
                const options = {
                    root: null, // viewport
                    rootMargin: "-80px 0px 0px 0px", // Adjusting for 100px offset
                    threshold: [0.8] // Trigger when section is in view
                };

                // Create an intersection observer
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        const sectionId = entry.target.getAttribute("id");
                        const navLink = document.querySelector(`.nav-item[data-section="${sectionId}"]`);
                        
                        // Add active class to the nav item if the section is in view
                        if (entry.isIntersecting) {
                            navItems.forEach(item => item.classList.remove("active"));
                            navLink.classList.add("active");
                        }
                    });
                }, options);

                // Observe each section with the .sectionforbar class
                document.querySelectorAll(".sectionforbar").forEach(section => {
                    observer.observe(section);
                });

                // Scroll offset adjustment
                navItems.forEach(item => {
                    item.addEventListener("click", (event) => {
                        event.preventDefault(); // Prevent default anchor link behavior
                        const targetId = item.getAttribute("href").substring(1);
                        const targetElement = document.getElementById(targetId);
                        
                        // Scroll to the target element with a 200px offset
                        if (targetElement) {
                            const yOffset = -180; // Offset in pixels
                            const yPosition = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
                            window.scrollTo({ top: yPosition, behavior: "smooth" });
                        }
                    });
                });
            });
        </script>
    ';
}
