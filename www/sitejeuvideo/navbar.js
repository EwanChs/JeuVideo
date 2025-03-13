document.addEventListener("DOMContentLoaded", function () {
    // Sélection des éléments
    const burgerMenu = document.querySelector(".burger-menu");
    const navMenu = document.querySelector(".nav-menu");
    const searchInput = document.querySelector(".nav-search input");
    const cartIcon = document.querySelector(".cart");
    
    let cartCount = 0;

    // Toggle du menu burger
    burgerMenu.addEventListener("click", function () {
        navMenu.classList.toggle("active");
    });

    // Animation de la barre de recherche (focus)
    searchInput.addEventListener("focus", function () {
        this.style.width = "250px";
    });

    searchInput.addEventListener("blur", function () {
        this.style.width = "200px";
    });

    // Simuler l'ajout au panier
    cartIcon.addEventListener("click", function () {
        cartCount++;
        this.innerHTML = `<i class="fas fa-shopping-cart"></i> <span class="cart-count">${cartCount}</span>`;
    });
});
