document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    const body = document.body;
    body.style.paddingTop = "0";

    if (navbar && navbar.classList.contains("transparent")) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 250) {
                navbar.classList.remove("transparent");
            } else {
                navbar.classList.add("transparent");
            }
        });
    }
});
