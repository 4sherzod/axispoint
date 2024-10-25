<?php
function renderLoader() {
     echo '
     <link rel="stylesheet" href="load.css">
     <script>
          window.addEventListener("load", () => {
               const loader = document.querySelector(".loader");

               loader.classList.add("loader--hidden");

               loader.addEventListener("transitionend", () => {
                    document.body.removeChild(loader);
               });
          });

     </script>
     <div class="loader"></div>
     ';
}