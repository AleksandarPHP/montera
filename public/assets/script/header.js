document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    const body = document.body;
    const mediaLogo = document.getElementById("media-logo");
    const regularLogo = document.getElementById("regular-logo");
    const regularLogo2 = document.getElementById("regular-logo2");
    const offcanvas = document.querySelector(".offcanvas");
    const btnClose = document.querySelector(".btn-close");
    body.style.paddingTop = "0";

    if (navbar && navbar.classList.contains("transparent")) {
        if (window.matchMedia("(max-width: 1440px)").matches)
            offcanvas.style.setProperty(
                "background-color",
                "#000",
                "important"
            );

        btnClose.style.setProperty("filter", "invert(1)");

        navbar.classList.add("transparent");
        if (mediaLogo) {
            mediaLogo.src = "assets/images/white-logo.webp";
        }
        if (regularLogo || regularLogo2) {
            regularLogo.src = "assets/images/white-logo.webp";
            regularLogo2.src = "assets/images/white-logo.webp";
        }

        window.addEventListener("scroll", () => {
            if (window.scrollY > 250) {
                if (window.matchMedia("(max-width: 1440px)").matches)
                    offcanvas.style.setProperty(
                        "background-color",
                        "var(--bs-offcanvas-bg)",
                        "important"
                    );

                navbar.classList.remove("transparent");
                btnClose.style.removeProperty("filter");

                if (mediaLogo) {
                    mediaLogo.src = "assets/images/black-logo.webp";
                }
                if (regularLogo || regularLogo2) {
                    regularLogo.src = "assets/images/black-logo.webp";
                    regularLogo2.src = "assets/images/black-logo.webp";
                }
            } else {
                if (window.matchMedia("(max-width: 1440px)").matches)
                    offcanvas.style.setProperty(
                        "background-color",
                        "#000",
                        "important"
                    );

                btnClose.style.setProperty("filter", "invert(1)");

                navbar.classList.add("transparent");
                if (mediaLogo) {
                    mediaLogo.src = "assets/images/white-logo.webp";
                }
                if (regularLogo || regularLogo2) {
                    regularLogo.src = "assets/images/white-logo.webp";
                    regularLogo2.src = "assets/images/white-logo.webp";
                }
            }
        });
    }
});
