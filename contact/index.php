<!DOCTYPE html>
<html lang="id" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/webp" href="../assets/images/logo-circle.webp">
  <title>Rotenbi | Kontak</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- External CSS -->
  <link href="../dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="../node_modules/aos/dist/aos.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>

<body class="overflow-x-hidden"  data-page="contact">

  <!-- Navbar -->
  <div id="navbar" class="navbar px-7 py-1 drop-shadow-md fixed z-20 w-full transition-all duration-500 ease-in-out">
    <div class="navbar-wrapper grid grid-cols-[50%_30%_20%] md:grid-cols-[10%_80%_10%]">
      <!-- Logo -->
      <a href="../" class="w-20 h-20 relative">
        <img src="../assets/images/transparent-logo.webp" alt="Logo" class="h-full w-full object-contain" />
      </a>

      <!-- Menu List (Desktop) -->
      <div class="nav-list hidden md:flex items-center gap-4">
        <a href="../" data-translate="home">Beranda</a>
        <a href="../about" data-translate="about">Tentang Kami</a>
        <a href="../gallery-page" data-translate="gallery">Gallery</a>
        <a href="../contact" data-translate="contact">Kontak</a>
      </div>

      <!-- Language Selector -->
      <div class="language flex items-center justify-end bg-transparent">
        <select id="language" name="language" class="bg-transparent" onchange="changeLanguage()">
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
  <div id="mobile-menu" class="fixed right-0 top-0 w-[50vw] h-[100vh] bg-white shadow-lg flex flex-col items-start p-5 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden z-30">
    <button id="close-button" class="text-black text-3xl self-end">
      <i class="fas fa-times"></i>
    </button>
    <a href="../" class="mb-4 mt-6" data-translate="home">Beranda</a>
    <a href="../about" class="mb-4" data-translate="about">Tentang Kami</a>
    <a href="../gallery-page" class="mb-4" data-translate="gallery">Gallery</a>
    <a href="../contact" class="mb-4" data-translate="contact">Kontak</a>
  </div>
  <!-- end Navbar -->

  <section class="mx-2 lg:mx-24 mt-20" data-aos="fade-up">
    <div class="md:flex md:flex-row-2">
      <img src="../assets/images/kontak-img.webp" alt="kontak Rotenbi" class="md:w-3/5 h-full">
      <div class="md:ml-6">
        <h2 class="text-4xl text-black font-semibold mt-4 md:mt-0 text-center md:text-left">
          <span data-translate="contact-contact">Hubungi</span> <span class="text-primary" data-translate="us">Kami</span>
        </h2>
        <div class="flex gap-x-2 items-center mt-6">
          <i class="fa-brands fa-whatsapp text-3xl text-primary"></i>
          <h2 class="text-lg text-primary ml-4">+62923824728242</h2>
        </div>
        <div class="flex gap-x-2 items-center mt-6"><i class=""></i>
          <i class="fa-brands fa-facebook-f text-3xl text-primary"></i>
          <h2 class="text-lg text-primary ml-4">rotanbali589</h2>

        </div>
        <div class="flex gap-x-2 items-center mt-6">
          <i class="fa-solid fa-envelope text-3xl text-primary"></i>
          <h2 class="text-lg text-primary ml-4">rotanbali58944@gmail.com</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="mx-2 lg:mx-24 mt-10" data-aos="fade-up">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31576.307430204073!2d115.34549117088322!3d-8.39788120095577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21bffa0bae5b7%3A0x31bb37ab6cd12ca8!2sRotenbi%20Bali!5e0!3m2!1sid!2sid!4v1737958983377!5m2!1sid!2sid&zoom=15"
      width="100%" height="450" style="border:0; pointer-events: auto;" allowfullscreen loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </section>

  <a href="https://wa.me/+6281339545432" target="_blank"
    class=" bg-green-400 hover:bg-green-600 h-14 w-14 transition-all duration-300 hover:scale-110 fixed bottom-6 right-6 z-50 rounded-full flex justify-center items-center">
    <i class="fa-brands fa-whatsapp text-4xl text-white"></i>
  </a>


  <div id="footer-container"></div>

  <!-- Import AOS JavaScript -->
  <script src="../node_modules/aos/dist/aos.js"></script>
  <script>
    // Initialize AOS (Animate on Scroll)
    AOS.init({
      duration: 1000, // Durasi animasi
      once: true // Animasi hanya berjalan sekali
    });
  </script>
  <script src="../scripts/generateElements.js"></script>
  <script src="../scripts/navbar.js"></script>
  <!--mengubah bahasa-->
  <script src="../scripts/language.js"></script>

  <!-- Memuat script untuk loading file HTML -->
</body>

</html>