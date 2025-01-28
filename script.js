document.addEventListener("DOMContentLoaded", () => {
  const hamburgerIcon = document.getElementById("hamburger-icon");
  const slidingMenu = document.getElementById("sliding-menu");
  const overlay = document.getElementById("overlay");
  const closeBtn = document.getElementById("close-btn");

  // Fungsi untuk menampilkan dan menyembunyikan sliding menu
  hamburgerIcon.addEventListener("click", () => {
    console.log("Hamburger icon clicked!");
    slidingMenu.classList.toggle("translate-x-0"); // Tampilkan menu
    slidingMenu.classList.toggle("translate-x-full"); // Sembunyikan menu
    overlay.classList.toggle("hidden"); // Tampilkan overlay
  });

  closeBtn.addEventListener("click", () => {
    slidingMenu.classList.add("translate-x-full"); // Sembunyikan menu
    slidingMenu.classList.remove("translate-x-0"); // Pastikan kelas 'translate-x-0' hilang
    overlay.classList.add("hidden"); // Sembunyikan overlay
  });

  overlay.addEventListener("click", () => {
    slidingMenu.classList.add("translate-x-full"); // Sembunyikan menu
    slidingMenu.classList.remove("translate-x-0"); // Pastikan kelas 'translate-x-0' hilang
    overlay.classList.add("hidden"); // Sembunyikan overlay
  });

  // Swiper initialization
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 3000,
    },
    
  });

  // swiper for produk section

});
