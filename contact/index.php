<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/styles.css" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <title>Proyek Tailwind CSS</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>

</head>

<body class="overflow-x-hidden">
  <!-- Navbar -->
  <div id="navbar" class="navbar px-7 py-1 drop-shadow-md fixed z-20 w-full transition-all duration-500 ease-in-out">
    <div class="navbar-wrapper grid grid-cols-[50%_30%_20%] md:grid-cols-[10%_80%_10%]">
      <!-- Logo -->
      <a href="../" class="w-20 h-20 relative">
        <img src="../assets/images/transparent-logo.webp" alt="Logo" class="h-full w-full object-contain" />
      </a>

      <!-- Menu List (Desktop) -->
      <div class="nav-list hidden md:flex items-center gap-4">
        <a href="../">Beranda</a>
        <a href="../about">Tentang Kami</a>
        <a href="../gallery-page">Gallery</a>
        <a href="../contact">Kontak</a>
      </div>

      <!-- Language Selector -->
      <div class="language flex items-center justify-end bg-transparent">
        <select id="language" name="language" class="bg-transparent">
          <option value="ind" selected>IND</option>
          <option value="eng">ENG</option>
        </select>
      </div>

      <!-- Hamburger Button (Mobile) -->
      <button class="text-black text-3xl block md:hidden" id="menu-button">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu"
    class="fixed right-0 top-0 w-[50vw] h-[100vh] bg-white shadow-lg flex flex-col items-start p-5 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden z-30">
    <button id="close-button" class="text-black text-3xl self-end">
      <i class="fas fa-times"></i>
    </button>
    <a href="../" class="mb-4 mt-6">Beranda</a>
    <a href="../about" class="mb-4 ">Tentang Kami</a>
    <a href="../gallery-page" class="mb-4">Gallery</a>
    <a href="../contact" class="mb-4">Kontak</a>
  </div>
  <!-- end Navbar -->

  <section class="mx-2 lg:mx-24 mt-20 scroll-animation">
    <div class="md:flex md:flex-row-2">
      <img src="../assets/images/kontak-img.webp" class="md:w-3/5 h-full">
      <div class="md:ml-6">
        <h2 class="text-4xl text-black font-semibold mt-4 md:mt-0 text-center md:text-left">Hubungi <span
            class="text-primary"> Kami</span></h2>
        <div class="flex gap-x-2 items-center mt-6">
          <i class="fa-brands fa-whatsapp text-4xl text-primary"></i>
          <h2 class="text-2xl text-primary ml-4">+62923824728242</h2>
        </div>
        <div class="flex gap-x-2 items-center mt-6"><i class=""></i>
          <i class="fa-brands fa-facebook text-4xl text-primary"></i>
          <h2 class="text-2xl text-primary ml-4">facebook-name</h2>
        </div>
        <div class="flex gap-x-2 items-center mt-6">
          <i class="fa-solid fa-envelope text-4xl text-primary"></i>
          <h2 class="text-2xl text-primary ml-4">user@gmail.com</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="mx-2 lg:mx-24 mt-10 scroll-animation">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31576.307430204073!2d115.34549117088322!3d-8.39788120095577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21bffa0bae5b7%3A0x31bb37ab6cd12ca8!2sRotenbi%20Bali!5e0!3m2!1sid!2sid!4v1737958983377!5m2!1sid!2sid&zoom=15"
      width="100%" height="450" style="border:0; pointer-events: auto;" allowfullscreen loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </section>

  <div id="footer-container"></div>

  <script src="../scripts/generateElements.js"></script>
  <script src="../scripts/navbar.js"></script>
  <!-- Memuat script untuk loading file HTML -->
</body>

</html>