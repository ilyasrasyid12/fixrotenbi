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
        <div class="md:flex md:flex-row-2">
            <img src="../components/images/contact.png" class="md:w-3/5 h-full">
            <div class="md:ml-6">
                <h2 class="text-xl md:text-6xl text-black font-semibold mt-4 md:mt-0 text-center md:text-left">Hubungi <span class="md:block text-primary"> Kami</span></h2>
                <div class="flex gap-x-2 items-center mt-6">
                    <i class="fa-brands fa-whatsapp text-3xl text-primary"></i>
                    <h2 class="text-lg md:text-2xl text-primary ml-4">+62923824728242</h2>
                </div>
                <div class="flex gap-x-2 items-center mt-6"><i class=""></i> 
                    <i class="fa-brands fa-facebook text-3xl text-primary"></i>
                    <h2 class="text-lg md:text-2xl text-primary ml-4">facebook-name</h2>
                </div>
                <div class="flex gap-x-2 items-center mt-6">
                    <i class="fa-solid fa-envelope text-3xl text-primary"></i>
                    <h2 class="text-lg md:text-2xl text-primary ml-4">user@gmail.com</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="px-8 md:px-24 mt-8 md:mt-16">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31576.307430204073!2d115.34549117088322!3d-8.39788120095577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21bffa0bae5b7%3A0x31bb37ab6cd12ca8!2sRotenbi%20Bali!5e0!3m2!1sid!2sid!4v1737958983377!5m2!1sid!2sid&zoom=15" 
            width="100%" 
            height="450" 
            style="border:0; pointer-events: auto;" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
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