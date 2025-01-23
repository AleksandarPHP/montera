document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    const body = document.body;
    const mediaLogo = document.getElementById("media-logo");
    const regularLogo = document.getElementById("regular-logo");
    body.style.paddingTop = "0";

    if (navbar && navbar.classList.contains("transparent")) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 250) {
                navbar.classList.remove("transparent");
                if (mediaLogo) {
                    mediaLogo.src = "assets/images/black-logo.webp";
                }
                if (regularLogo) {
                    regularLogo.src = "assets/images/black-logo.webp";
                }
            } else {
                navbar.classList.add("transparent");
                if (mediaLogo) {
                    mediaLogo.src = "assets/images/white-logo.webp";
                }
                if (regularLogo) {
                    regularLogo.src = "assets/images/white-logo.webp";
                }
            }
        });
    }
});
