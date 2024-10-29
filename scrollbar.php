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
                top: 0;
                z-index: 1000;
            }

            .nav-item {
                margin: 0 20px;
                padding-bottom: 10px;
                position: relative;
                font-size: 18px;
                color: #333;
                text-decoration: none;
            }

            .nav-item.active::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 3px;
                background-color: #333;
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
                    rootMargin: "0px",
                    threshold:  [0, 0.1, 0.25, 0.5] // Trigger when 50% of the section is in view
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
            });
        </script>
    ';
}
