<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/styles.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <title>Proyek Tailwind CSS</title>
</head>
<body class="overflow-x-hidden">
    <!-- Memuat Header dan Footer -->
    <header class="flex bg-white text-black shadow-xl mb-6">
      <div class="flex justify-between px-8 md:px-24 w-full relative">
        <div class="flex">
          <img src="../components/logo/logo.png" class="py-2 w-16 md:w-24 mr-2 md:mr-16">
          <ul id="menu" class="hidden md:flex items-center gap-x-4 md:gap-x-8 text-sm md:text-base">
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>
        <div class="flex items-center gap-x-8">
          <p class="text-lg md:text-base">IND</p>
          <button class="md:hidden cursor-pointer relative z-20 transform transition-transform duration-300 hover:scale-110" id="hamburger-icon">
            <i class="fa-solid fa-bars text-lg"></i>
          </button>
        </div>
      </div>
    </header>

    <!-- Sliding Menu (Hamburger) -->
    <div id="sliding-menu" class="fixed inset-0 bg-white shadow-xl transform translate-x-full z-50 transition-transform duration-300">
      <div class="flex justify-end p-4 mr-2">
        <button id="close-btn" class="text-2xl">
          <i class="fa-solid fa-times"></i>
        </button>
      </div>
      <ul class="flex flex-col items-center gap-y-4">
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
    
    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <section class="px-8 md:px-24 mt-10 md:mt-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <?php
          // Loop untuk menampilkan gambar 6 kali
          for ($i = 0; $i < 12; $i++) {
              echo '<img src="../gallery/g1.jpg" class="w-full">';
          }
        ?>
        </div>
        <!-- Pagination Buttons -->
        <div class="flex justify-center mt-4 md:mt-6 text-white">
            <button class="bg-primary px-4 py-2 mx-1">1</button>
            <button class="bg-primary px-4 py-2 mx-1">2</button>
            <button class="bg-primary px-4 py-2 mx-1">Next</button>
        </div>
    </section>
    
    <footer class="px-8 md:px-24 mt-10 md:mt-16 grid grid-cols-1 md:grid-cols-2 lg:gap-x-24 mb-8">
      <div>
          <h2 class="font-semibold text-xl md:text-2xl text-primary">
              Jangan lewatkan penawaran eksklusif, rilis terbaru, dan inspirasi kami
          </h2>
          <div class="flex w-full items-center border-b-2 border-black pb-1 my-4">
              <p>Nama</p>
          </div>
          <div class="flex w-full items-center border-b-2 border-black pb-1 my-4">
              <p>Pesan</p>
          </div>
            <div class="flex justify-center md:justify-start">
              <button class="transform px-4 py-2 bg-primary text-white rounded hover:bg-opacity-70">Kirim</button>
          </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-4 lg:justify-between-200 mt-4 md:mt-0 gap-y-4">
          <div class="flex border-black lg:border-none border-b-2 justify-between">
              <div>
                <h4 class="font-semibold text-xl lg:text-base">Butuh Bantuan</h4>
                <div class="hidden lg:block">
                  <p>Email</p>
                  <p>Whatsapp</p>
                </div>
              </div>
              <i class="fa-solid fa-arrow-up-right-from-square text-primary text-2xl lg:hidden"></i>
          </div>
          <div class="flex border-black lg:border-none border-b-2 justify-between">
              <div>
                <h4 class="font-semibold text-xl lg:text-base">Tentang Rotenbi</h4>
                <div class="hidden lg:block">
                  <p>Cerita kamo</p>
                  <p>Blog</p>
                  <p>Kontak</p>
                </div>
              </div>
              <i class="fa-solid fa-arrow-up-right-from-square text-primary text-2xl lg:hidden"></i>
          </div>
          <div class="flex border-black border-b-2 lg:border-none justify-between">
              <div>
                <h4 class="font-semibold text-xl lg:text-base">Marketplace</h4>
                <div class="hidden lg:block">
                  <p>Shopee</p>
                  <p>Tokopedia</p>
                </div>
              </div>
              <i class="fa-solid fa-arrow-up-right-from-square text-primary text-2xl lg:hidden"></i>
          </div>
          <div class="flex border-black lg:border-none border-b-2 justify-between">
              <div>
                <h4 class="font-semibold text-xl lg:text-base">Social Media</h4>
                <div class="hidden lg:block">
                  <p>Instagram</p>
                  <p>facebook</p>
                  <p>Youtube</p>
                </div>
              </div>
              <i class="fa-solid fa-arrow-up-right-from-square text-primary text-2xl lg:hidden"></i>
          </div>
      </div>
    </footer>
    <!-- Memuat script untuk Swiper -->
    <script src="../script.js"></script>
    <!-- Memuat script untuk loading file HTML -->
</body>
</html>