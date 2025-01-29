const menuButton = document.getElementById("menu-button");
const closeButton = document.getElementById("close-button");
const mobileMenu = document.getElementById("mobile-menu");
const hamburgerIcon = document.getElementById("hamburger-icon");

// Buka Menu
menuButton.addEventListener("click", () => {
  mobileMenu.classList.remove("translate-x-full");
});

// Tutup Menu
closeButton.addEventListener("click", () => {
  mobileMenu.classList.add("translate-x-full");
});

window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 100) {
    navbar.classList.add("bg-white", "shadow-md");
    navbar.classList.remove("bg-transparent");
  } else {
    navbar.classList.remove("bg-white", "shadow-md");
    navbar.classList.add("bg-transparent");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Ambil URL saat ini tanpa query string atau hash
  const currentPath = window.location.pathname;

  // Ambil semua link navbar (desktop & mobile)
  const navLinks = document.querySelectorAll(".nav-list a, #mobile-menu a");

  navLinks.forEach((link) => {
    const linkPath = new URL(link.href, window.location.origin).pathname; // Ambil path dari link

    // Cek apakah path halaman saat ini cocok dengan path link (mengatasi trailing slash)
    if (currentPath.startsWith(linkPath)) {
      link.classList.add("active");
    }
  });
});


