<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/styles.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">
  <title>Proyek Tailwind CSS</title>
</head>
<body class="overflow-x-hidden">
    <!-- Memuat Header dan Footer -->
    <header class="flex bg-white text-black shadow-xl mb-6">
      <div class="flex justify-between px-8 md:px-24 w-full relative">
        <div class="flex">
          <img src="components/logo/logo.png" class="py-2 w-16 md:w-24 mr-2 md:mr-16">
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

    
    <!--hero section-->
    <section class="relative">
      <img src="./components/images/hero.png" alt="Gambar" class="h-80 md:w-full md:h-full">
      <button class="absolute bottom-4 lg:bottom-8 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-primary text-white rounded hover:bg-opacity-70">
        Tentang Kami
      </button>
    </section>

    
    <section class="flex flex-col-reverse md:flex-row md:justify-between px-8 md:px-24 w-full mt-6 md:mt-16 gap-x-8 md:gap-x-56">
      <!-- Konten -->
      <div class="md:w-1/2"> <!-- Tambahkan kelas untuk mengatur lebar pada tampilan md -->
        <div class="flex md:block font-semibold text-xl justify-center md:text-6xl mb-4 mt-4">
          <h2 class="">TENTANG <span class="text-primary">MENGANYAM</span></h2>
          
        </div>
        <p class="text-sm md:text-lg text-center md:text-left">Menganyam merupakan proses menjalin bilah secara tindih menindih, silang menyilang membentuk suatu jalinan yang indah dan unik. Kegiatan menganyam menjadi kegiatan rutin yang dilakoni para perajin di Rotenbi.</p>
      </div>

      <!-- Gambar -->
      <img src="./components/images/Tentang.png" alt="Gambar" class="md:w-full md:h-full mb-4 md:mb-0"> <!-- Gambar di atas pada tampilan mobile -->
    </section>



    <section class="mb-4 mt-10 md:px-80 md:mt-20">
      <!--text dan jenis-->
      <div class="">
        <div class="flex font-semibold text-xl md:text-6xl mb-8 justify-center">
          <h2>JENIS <span class="text-primary">ANYAMAN</span></h2>     
        </div>
        <div class="flex justify-between px-8 md:px-16 md:gap-x-24 text-xl font-semibold">
          <p>tumbuhan</p>
          <p>Manusia</p>
          <p>Hewan</p>
          <p>Abstrak</p>
        </div>
      </div>
      
      <!--gambarnya-->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-x-2 md:gap-x-8 mt-2 md:mt-10 px-8">
        <?php
        // Loop untuk menampilkan gambar 16 kali
        for ($i = 0; $i < 8; $i++) {
            echo '<div class="mt-4">';
            echo '<img src="./components/anyaman/1.png" class="w-full">';
            echo '<p class="flex items-center text-center text-sm md:text-lg mt-2">Kelerai Tampuk Manggis</p>';
            echo '</div>';
        }
        ?>
      </div>
    </section>

    <!--section produk -->
    <section class="mt-10 md:mt-16 px-8 md:px-24">
      <div class="font-semibold mb-4 md:mb-8 text-xl md:text-6xl text-center md:text-right">
        <h2>PRODUK <span class="md:block text-primary">KAMI</span></h2>
      </div>
      <div class="flex flex-col md:flex-row gap-x-4 w-full">
        <img src="./components/produk/1.png" class="h-auto w-full md:w-1/2 mr-2">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-4 w-full">
          <?php
          // Loop untuk menampilkan gambar 6 kali
          for ($i = 0; $i < 6; $i++) {
              echo '<img src="./components/produk/2.png" class="w-full h-auto">';
          }
          ?>
        </div>
      </div>
    </section>

    <!-- Produk Kustom -->
    <section class="mt-10 md:mt-16 px-8 md:px-24">
      <div class="font-semibold mb-4 md:mb-8 text-xl md:text-6xl text-center md:text-left">
        <h2 class="">Produk Kustom <span class="md:block text-primary ">Souvenir</span></h2>
      </div>
      <!-- Gambar scrollable dengan Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <?php
          // Loop untuk menampilkan gambar 6 kali
          for ($i = 0; $i < 6; $i++) {
              echo '<div class="swiper-slide"><img src="./components/sovenir/1.png" alt="" class="w-full"></div>';
          }
          ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      
      <!-- Tombol di tengah -->
      <div class="flex justify-center mt-4">
        <button class="px-4 py-2 bg-primary text-white rounded hover:bg-opacity-80">Lihat Selengkapnya</button>
      </div>
    </section>


    <section class="mt-10 md:mt-16 relative">
      <img src="./components/images/workshop-kami.png" class="w-full h-60 md:h-full">
      <div class="absolute inset-0 flex flex-col items-start justify-center px-8 md:px-24 text-white bg-opacity-50">
        <h2 class="text-base text-lg md:text-xl font-bold mb-2">Perajin & Workshop Kami</h2>
        <p class="text-left text-xs md:text-lg mb-2 md:w-1/2">
            Rotenbi memberdayakan perajin lokal yang dididik khusus menyesuaikan standar kualitas,
            untuk memperbaiki ekonomi mereka dan kapasitas mereka sebagai perajin dan juga sebagai bentuk partisipasi
            Rotenbi meningkatkan ekonomi lokal.
        </p>
      </div>
    </section>

    <section class="px-8 md:px-24 mt-8 mt-10 md:mt-16">
      <div class="">
        <h2 class="flex text-primary justify-center font-semibold mb-4 text-xl md:text-6xl text-primary">DAMPAK</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4">
      <?php
        // Loop untuk menampilkan gambar 6 kali
        for ($i = 0; $i < 4; $i++) {
            
          echo'<div class="flex flex-col items-center mt-8 md:mt-2">';
          echo'<i class="flex fa-solid fa-hand-holding-droplet fa-2x mt-4 mb-6 text-primary"></i>';
          echo'<h4 class="font-semibold text-center mb-2">Lingkungan yang lebih hijau</h4>';
          echo'<p class="px-8 text-sm text-center">Kami mengadopsi pendekatan "zero waste" dan menggunakan bahan anyaman dari serat alam, memastikan produksi kami tidak mencemari tanah maupun air.</p>';
          echo'</div>';
        }
      ?>
      </div>
    </section>

    <section class="px-8 md:px-24 mt-8 md:mt-16">
      <div class="flex flex-col md:flex-row items-center gap-4">
        <!-- Kolom Gambar -->
        <img src="./components/images/menciptakan.png" class="w-full md:w-1/3">
        <!-- Kolom Teks -->
        <div class="flex flex-col justify-center text-black md:ml-20 md:w-1/3">
          <h2 class="text-black font-semibold mb-4 text-lg md:text-6xl">
            Menciptakan Banyak <span class="text-primary">Senyum</span> untuk mereka
          </h2>
          <p class="text-sm md:text-lg">
            Rotenbi dapat menciptakan senyum untuk mereka para yang terlibat pada proses kami, sehingga anak-anak dari para perajin kami dapat melanjutkan pendidikannya dengan baik.
          </p>
        </div>
      </div>
    </section>

      <section class="px-8 md:px-24 mt-10 md:mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <h2 class="text-xl md:text-6xl w-full font-legular text-black">Informasi Kemitraan & Pelatihan </h2>
          <p class="text-base md:text-lg md:ml-6">Kami membuka peluang untuk kemitraan dan menyediakan pelatihan berkualitas bagi Anda yang ingin berkembang bersama kami. Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui kontak berikut:</p>
        </div>
        <div class="mt-8 gap-y-6">
          <div class="flex w-full md:w-1/3 justify-between items-center border-b-2 border-black pb-1 my-4">
            <div class="flex gap-x-2 items-center">
                <i class="fa-brands fa-whatsapp text-3xl text-primary"></i>
                <h2 class="text-lg md:text-2xl text-primary">Whatsapp</h2>
            </div>
            <i class="fa-solid fa-arrow-up-right-from-square text-primary text-2xl"></i>
          </div>
          <div class="flex w-full md:w-1/3 justify-between items-center border-b-2 border-black pb-1 my-4">
            <div class="flex gap-x-2 items-center">
                <i class="fa-solid fa-envelope text-3xl text-primary"></i>
                <h2 class="text-lg md:text-2xl text-primary">Email</h2>
            </div>
            <i class="fa-solid fa-arrow-up-right-from-square text-primary text-2xl"></i>
          </div>
          <div class="flex w-full md:w-1/3 justify-between items-center border-b-2 border-black pb-1 my-4">
            <div class="flex gap-x-2 items-center">
                <i class="fa-solid fa-location-dot text-3xl text-primary"></i>
                <h2 class="text-lg md:text-2xl text-primary">Location</h2>
            </div>
            <i class="fa-solid fa-arrow-up-right-from-square text-primary text-2xl"></i>
          </div>
        </div>
      </section>

      <section class="px-8 md:px-24 mt-10 md:mt-16">
        <h2 class="flex text-black font-semibold mb-4 text-xl md:text-6xl justify-center mb-8">Mitra dan <span class="text-primary md:ml-4"> Kerjasama</span></h2>
        <div class="grid grid-cols-4">
          <img src="./components/mitra/telkom.png" alt="">
          <img src="./components/mitra/telkom.png" alt="">
          <img src="./components/mitra/telkom.png" alt="">
          <img src="./components/mitra/telkom.png" alt="">
        </div>
        <div class="mt-8">
          <div class="grid grid-cols-4">
            <img src="./components/mitra/telkom.png" alt="">
            <img src="./components/mitra/telkom.png" alt="">
            <img src="./components/mitra/telkom.png" alt="">
            <img src="./components/mitra/telkom.png" alt="">
          </div>
        </div>
      </section>

      <section class="p-0 mt-10 md:mt-16">
        <img src="./components/images/thanks.png" class="w-full h-full">
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
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <!-- Memuat script untuk loading file HTML -->
    
</body>
</html>
