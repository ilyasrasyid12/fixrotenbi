<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="./dist/myCSS.css">
  <link href="../dist/scroll-animation.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <title>Proyek Tailwind CSS</title>

  <style>
    /* {
      border: 1px solid red !important; 
    }*/

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
        <img src="./assets/images/main-logo.webp" class="py-2 w-16 md:w-24 mr-2 md:mr-16">
        <ul id="menu" class="hidden md:flex items-center gap-x-4 md:gap-x-8 text-sm md:text-base">
          <li><a href="./index.php">Utama</a></li>
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
      <li><a href="./index.php">Utama</a></li>  
      <li><a href="./about/index.php">Tentang Kami</a></li>
      <li><a href="./gallery-page/index.php">Gallery</a></li>
      <li><a href="./contact/index.php">Kontak</a></li>
    </ul>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>


  <!--hero section-->
  <section class=" flex justify-center align-middle scroll-animation">
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
  <section class="flex relative mx-2 lg:mx-24 gap-3 mt-10 flex-col-reverse lg:flex-row scroll-animation">
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

  <section class="mx-2 lg:mx-24 relative mt-10 scroll-animation">
    <h2 class="text-4xl text-center">JENIS <span class="text-primary font-bold block">ANYAMAN</span> </h2>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 mt-10" id="jenisAnyamanContainer">
     
    </div>
  </section>
  <!-- end tentang Menganyam -->




  <!--section produk -->
  <section class="mx-2 lg:mx-24  mt-10 relative scroll-animation">
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
  <section class="mt-10 md:mt-16 mx-2 lg:mx-24 scroll-animation">
    <div class=" mb-4 ">
      <h2 class="text-4xl text-start">PRODUK KOSTUM <span class="text-primary font-bold block">SOVUVENIR</span> </h2>
    </div>
    <!-- Gambar scrollable dengan Swiper -->
    <div class="swiper mySwiper h-80">
      <div class="swiper-wrapper">
        <?php
        // Loop untuk menampilkan gambar 6 kali
        for ($i = 1; $i < 5; $i++) {
          echo '<div class="swiper-slide relative w-full "><img src="./assets/images/collection-' . $i . '.webp" alt="" class="w-full h-full object-contain scroll-animation"></div>';
        }
        ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <!-- Tombol di tengah -->
    <div class="flex justify-center mt-4">
      <a href="./assets/Rotenbi-Collection_compressed.pdf" download>
        <button class="px-4 py-2 bg-primary text-white rounded hover:bg-opacity-80">Lihat Selengkapnya</button>
      </a>

    </div>
  </section>

  <!-- workshop -->
  <section class="relative mt-7 scroll-animation">
    <div class="img-wrapper relative w-full h-[230px] md:h-[450px]">
      <div class="text-wrapper absolute text-white z-10 w-3/4 md:w-1/2 top-1/2 -translate-y-1/2 mx-3">
        <h3 class="font-bold lg:text-3xl">Perajin & Workshop Kami</h3>
        <p class="text-stone-200 text-xs lg:text-base">Rotenbi memberdayakan perajin lokal yang dididik khusus
          menyesuaikan standar kualitas,
          untuk memperbaiki ekonomi mereka dan kapasitas mereka sebagai perajin dan juga sebagai bentuk partisipasi
          Rotenbi meningkatkan ekonomi lokal.</p>
      </div>
      <div class="gradient absolute w-full h-full bg-gradient-to-r from-black"></div>
      <img src="./assets/images/workshop-img.webp" alt="" class="w-full h-full object-cover">
    </div>
  </section>
  <!-- end worskhop -->




  <section class="mx-2 lg:mx-24 mt-10 md:mt-16 scroll-animation">
    <div class="grid grid-cols-12">
      <div class="col-span-2  sm:col-span-4 h-line w-full h-full  flex items-center justify-center">
        <div class="line w-full bg-primary h-[2px]"></div>
      </div>
      <h2 class="col-span-8 sm:col-span-4 text-4xl text-center text-primary font-bold w-full flex-shrink-0">DAMPAK </h2>
      <div class="col-span-2 sm:col-span-4 h-line w-full  h-full flex items-center justify-center">
        <div class="line w-full bg-primary h-[2px]"></div>
      </div>
    </div>
    <div class="mt-5 flex flex-wrap lg:flex-nowrap justify-center items-center gap-4" id="card-benefit">
    </div>

  </section>

  <section class="mx-2 lg:mx-24 mt-8 md:mt-16 scroll-animation">
    <div class="flex flex-col md:flex-row items-center gap-4 pb-1 border-b-[1px] border-black">
      <!-- Kolom Gambar -->
      <img src="./assets/images/menciptakan-senyuman.webp" class="w-full md:w-1/3">
      <!-- Kolom Teks -->
      <div class="flex flex-col justify-center text-black md:ml-20 md:w-1/3">
        <h2 class="text-black font-semibold mb-4 text-4xl">
          Menciptakan Banyak <span class="text-primary">Senyum</span> untuk mereka
        </h2>
        <p class="text-secondary">
          Rotenbi dapat menciptakan senyum untuk mereka para yang terlibat pada proses kami, sehingga anak-anak dari
          para perajin kami dapat melanjutkan pendidikannya dengan baik.
        </p>
      </div>
    </div>
  </section>

  <section class="mx-2 lg:mx-24 mt-10 md:mt-16 scroll-animation">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <h2 class="text-3xl sm:text-4xl w-full font-legular text-black">Informasi Kemitraan & Pelatihan </h2>
      <p class="text-secondary">Kami membuka peluang untuk kemitraan dan menyediakan pelatihan berkualitas
        bagi Anda yang ingin berkembang bersama kami. Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih
        lanjut, jangan ragu untuk menghubungi kami melalui kontak berikut:</p>
    </div>
    <div class="mt-8 gap-y-6">
      <a href=""
        class="flex w-full md:w-1/3 justify-between items-center border-b-[1px] border-black pb-1 my-4 hover:scale-105 transition-all ease-in-out ">
        <div class="flex gap-x-2 items-center">
          <i class="fa-brands fa-whatsapp text-3xl text-primary"></i>
          <h2 class="text-lg md:text-2xl text-primary">Whatsapp</h2>
        </div>
        <i class="fa-solid fa-arrow-right text-primary text-2xl -rotate-45"></i>
      </a>
      <a href=""
        class="flex w-full md:w-1/3 justify-between items-center border-b-[1px] border-black pb-1 my-4 hover:scale-105 transition-all ease-in-out">
        <div class="flex gap-x-2 items-center">
          <i class="fa-solid fa-envelope text-3xl text-primary"></i>
          <h2 class="text-lg md:text-2xl text-primary">Email</h2>
        </div>
        <i class="fa-solid fa-arrow-right text-primary text-2xl -rotate-45"></i>
      </a>
      <a href=""
        class="flex w-full md:w-1/3 justify-between items-center border-b-[1px] border-black pb-1 my-4 hover:scale-105 transition-all ease-in-out">
        <div class="flex gap-x-2 items-center">
          <i class="fa-solid fa-location-dot text-3xl text-primary"></i>
          <h2 class="text-lg md:text-2xl text-primary">Location</h2>
        </div>
        <i class="fa-solid fa-arrow-right text-primary text-2xl -rotate-45"></i>
      </a>
    </div>
  </section>

  <section class="mx-2 lg:mx-24 mt-10 md:mt-16 scroll-animation">
    <div class="grid grid-cols-12">
      <div class="col-span-2  sm:col-span-3 h-line w-full h-full  flex items-center justify-center">
        <div class="line w-full bg-primary h-[2px]"></div>
      </div>
      <h2 class="col-span-8 sm:col-span-6 text-lg sm:text-4xl text-center font-bold w-full flex-shrink-0">MITRA & KERJA
        <span class="text-primary ">SAMA</span>
      </h2>
      <div class="col-span-2 sm:col-span-3 h-line w-full  h-full flex items-center justify-center">
        <div class="line w-full bg-primary h-[2px]"></div>
      </div>
    </div>
    <div id="looping-brand">
    </div>
  </section>

  <section class="relative mt-7 scroll-animation">
    <div class="img-wrapper relative w-full h-[230px] md:h-[450px]">
      <div class="text-wrapper absolute text-white z-10 w-3/4 md:w-1/2 top-1/2 -translate-y-1/2 mx-3">
        <h3 class="font-bold lg:text-3xl">TERIMAKASIH TELAH MENDUKUNG PEMBERDAYAAN KAMI</h3>
      </div>
      <div class="gradient absolute w-full h-full bg-gradient-to-r from-black"></div>
      <img src="./assets/images/thanks-card.webp" alt="" class="w-full h-full object-cover">
    </div>
  </section>

  <flass="px-8 md:px-24 mt-10 md:mt-16 grid grid-cols-1 md:grid-cols-2 lg:gap-x-24 mb-8">
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
    </flass=>
    <!-- Memuat scroll animation -->
    <script src="../scripts/scroll-animation.js"></script>
    <!-- Memuat script untuk Swiper -->
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="./scripts/generateJenisAnyaman.js"></script>
    <script src="./scripts/generateCardBenefit.js"></script>
    <script src="./scripts/generateMitra.js"></script>
    <!-- Memuat script untuk loading file HTML -->

</body>

</html>
