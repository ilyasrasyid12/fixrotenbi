<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="./dist/myCSS.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <title>Proyek Tailwind CSS</title>

  <style>
    * {
      /* border: 1px solid red !important; */
    }

    body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>


</head>

<body class="">


  <!-- Memuat Header dan Footer -->
  <header class="flex bg-white text-black shadow-xl mb-6">
    <div class="flex justify-between px-8 md:px-24 w-full relative">
      <div class="flex">
        <img src="components/logo/logo.png" class="py-2 w-16 md:w-24 mr-2 md:mr-16">
        <ul id="menu" class="hidden md:flex items-center gap-x-4 md:gap-x-8 text-sm md:text-base">
          <li><a href="./about/">Tentang Kami</a></li>
          <li><a href="./gallery-page/">Gallery</a></li>
          <li><a href="./contact/">Kontak</a></li>
        </ul>
      </div>
      <div class="flex items-center gap-x-8">
        <p class="text-lg md:text-base">IND</p>
        <button
          class="md:hidden cursor-pointer relative z-20 transform transition-transform duration-300 hover:scale-110"
          id="hamburger-icon">
          <i class="fa-solid fa-bars text-lg"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- Sliding Menu (Hamburger) -->
  <div id="sliding-menu"
    class="fixed inset-0 bg-white shadow-xl transform translate-x-full z-50 transition-transform duration-300">
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
  <section class=" flex justify-center align-middle ">
    <div class="grid grid-cols-1 lg:grid-cols-3 w-full relative ">
      <div class="img-wrapper hidden lg:block relative w-full">
        <img src="./assets/images/hero-2.webp" alt="" class="w-full h-full object-cover">
      </div>
      <div class="text-wrapper absolute lg:relative flex flex-col lg:justify-end bottom-0 w-full text-center gap-2  ">
        <!-- main title -->
        <div class="title lg:absolute lg:mb-0 lg:top-28 lg:-right-1/4 z-10 mb-10">
          <h1 class="text-6xl lg:text-7xl font-bold">ROTENBI</h1>
          <h3 class="text-xl lg:text-2xl"><span class="text-primary">Tas Anyaman</span> Berkelanjutan</h3>
        </div>
        <!-- title 2 -->
        <h3 class="text-xl lg:text-2xl lg:absolute lg:bottom-28 lg:-left-1/4 z-10 order-3 ">Tas Anyaman & Corporate Gift
        </h3>
        <!-- button -->
        <div class="flex justify-center mt-4 z-10">
          <button class="px-4 py-2 bg-primary text-white rounded hover:bg-opacity-80">Lihat Selengkapnya</button>
        </div>
      </div>
      <div class="img-wrapper relative"><img src="./assets/images/hero-1.webp" alt=""
          class="w-full h-full object-cover"></div>
    </div>
  </section>

  <!-- end hero section -->


  <!-- tentang Menganyam -->
  <section class="flex relative mx-2 lg:mx-24 gap-3 mt-10 flex-col-reverse lg:flex-row  ">
    <div class="text-wrapper justify-center flex flex-col text-center lg:text-start gap-5 lg:gap-2">
      <h2 class="text-4xl">TENTANG <span class="text-primary font-bold block">MENGANYAM</span> </h2>
      <p class="text-secondary">Menganyam merupakan proses menjalin bilah secara tindih
        menindih,silang menyilang membentuk suatu jalinan yang
        indah dan unik. Kegiatan menganyam menjadi kegiatan
        rutin yang dilakoni para perajin di Rotenbi</p>
    </div>
    <div class="img-wrapper h-auto relative lg:w-[40vw] flex-shrink-0">
      <img src="./assets/images/tentang-menganyam.webp" alt="" class="w-full h-full object-contain">
    </div>
  </section>

  <section class="mx-2 lg:mx-24 relative mt-10">
    <h2 class="text-4xl text-center">JENIS <span class="text-primary font-bold block">ANYAMAN</span> </h2>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 mt-10" id="jenisAnyamanContainer">
      <!-- <div
        class="lg:text-center font-semibold flex lg:flex-col gap-4 lg:justify-center items-center overflow-x-scroll lg:overflow-x-hidden">
        <h4>TUMBUHAN</h4>
        <div class="content flex flex-col items-center text-center ">
          <div class="img-wrapper relative h-20 w-20 flex-shrink-0">
            <img src="./assets/jenis-anyaman/flora1.webp" alt="" class="w-full h-full object-cover">
          </div>
          <p class="text-secondary font-normal text-center">Kelerai Tampuk
            Manggis</p>
        </div>
      </div>
      <div
        class="lg:text-center font-semibold flex lg:flex-col gap-4 lg:justify-center items-center overflow-x-scroll lg:overflow-x-hidden">
        <h4>NAMA MANUSIA</h4>
        <div class="content flex flex-col items-center text-center ">
          <div class="img-wrapper relative h-20 w-20 flex-shrink-0">
            <img src="./assets/jenis-anyaman/nama-manusia1.webp" alt="" class="w-full h-full object-cover">
          </div>
          <p class="text-secondary font-normal text-center">Kelerai Mak Mek</p>
        </div>
      </div>
      <div
        class="lg:text-center font-semibold flex lg:flex-col gap-4 lg:justify-center items-center overflow-x-scroll lg:overflow-x-hidden">
        <h4>HAIWAN</h4>
        <div class="content flex flex-col items-center text-center ">
          <div class="img-wrapper relative h-20 w-20 flex-shrink-0">
            <img src="./assets/jenis-anyaman/fauna1.webp" alt="" class="w-full h-full object-cover">
          </div>
          <p class="text-secondary font-normal text-center">Kelerai Jari Kedidi</p>
        </div>
      </div>
      <div
        class="lg:text-center font-semibold flex lg:flex-col gap-4 lg:justify-center items-center overflow-x-scroll lg:overflow-x-hidden">
        <h4>ABSTRAK</h4>
        <div class="content flex flex-col items-center text-center ">
          <div class="img-wrapper relative h-20 w-20 flex-shrink-0">
            <img src="./assets/jenis-anyaman/abstrak1.webp" alt="" class="w-full h-full object-cover">
          </div>
          <p class="text-secondary font-normal text-center">Kelerai Empak Sebilik</p>
        </div>
      </div> -->
    </div>
  </section>
  <!-- end tentang Menganyam -->




  <!--section produk -->
  <section class="mx-2 lg:mx-24  mt-10 relative">
    <h2 class="text-4xl text-end">PRODUK <span class="text-primary font-bold block">KAMI</span> </h2>
    <div class="content-wrapper flex flex-col lg:flex-row gap-5 relative w-full mt-5">
      <div class="img-wrapper flex-shrink-0 h-auto relative lg:w-[30vw] ">
        <img src="./assets/images/produk-main.webp" alt="" class="w-full h-full object-cover" loading="lazy">
      </div>
      <div class="w-full ">
        <section id="looping">
          <div class="wrapper">
            <div class="itemLeft item1"><img src="./assets/images/produk-1.webp" alt="" loading="lazy"></div>
            <div class="itemLeft item2"><img src="./assets/images/produk-2.webp" alt="" loading="lazy"></div>
            <div class="itemLeft item3"><img src="./assets/images/produk-3.webp" alt="" loading="lazy"></div>
          </div>
          <div class="wrapper">
            <div class="itemRight item1"><img src="./assets/images/produk-4.webp" alt="" loading="lazy"></div>
            <div class="itemRight item2"><img src="./assets/images/produk-5.webp" alt="" loading="lazy"></div>
            <div class="itemRight item3"><img src="./assets/images/produk-6.webp" alt="" loading="lazy"></div>
          </div>
        </section>

      </div>
    </div>
  </section>
  <!-- end Section produk -->

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
      <div class="swiper-pagination"></div>
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
      <h2 class=" text-lg md:text-xl font-bold mb-2">Perajin & Workshop Kami</h2>
      <p class="text-left text-xs md:text-lg mb-2 md:w-1/2">
        Rotenbi memberdayakan perajin lokal yang dididik khusus menyesuaikan standar kualitas,
        untuk memperbaiki ekonomi mereka dan kapasitas mereka sebagai perajin dan juga sebagai bentuk partisipasi
        Rotenbi meningkatkan ekonomi lokal.
      </p>
    </div>
  </section>

  <section class="px-8 md:px-24 mt-10 md:mt-16">
    <div class="">
      <h2 class="flex justify-center font-semibold mb-4 text-xl md:text-6xl text-primary">DAMPAK</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4">
      <?php
      // Loop untuk menampilkan gambar 6 kali
      for ($i = 0; $i < 4; $i++) {

        echo '<div class="flex flex-col items-center mt-8 md:mt-2">';
        echo '<i class="flex fa-solid fa-hand-holding-droplet fa-2x mt-4 mb-6 text-primary"></i>';
        echo '<h4 class="font-semibold text-center mb-2">Lingkungan yang lebih hijau</h4>';
        echo '<p class="px-8 text-sm text-center">Kami mengadopsi pendekatan "zero waste" dan menggunakan bahan anyaman dari serat alam, memastikan produksi kami tidak mencemari tanah maupun air.</p>';
        echo '</div>';
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
          Rotenbi dapat menciptakan senyum untuk mereka para yang terlibat pada proses kami, sehingga anak-anak dari
          para perajin kami dapat melanjutkan pendidikannya dengan baik.
        </p>
      </div>
    </div>
  </section>

  <section class="px-8 md:px-24 mt-10 md:mt-16">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <h2 class="text-xl md:text-6xl w-full font-legular text-black">Informasi Kemitraan & Pelatihan </h2>
      <p class="text-base md:text-lg md:ml-6">Kami membuka peluang untuk kemitraan dan menyediakan pelatihan berkualitas
        bagi Anda yang ingin berkembang bersama kami. Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih
        lanjut, jangan ragu untuk menghubungi kami melalui kontak berikut:</p>
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
    <h2 class="flex text-black font-semibold text-xl md:text-6xl justify-center mb-8">Mitra dan <span
        class="text-primary md:ml-4"> Kerjasama</span></h2>
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
  <script src="./scripts/generateJenisAnyaman.js"></script>
  <!-- Memuat script untuk loading file HTML -->

</body>

</html>