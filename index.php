<!DOCTYPE html>
<html lang="id" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/favicon.png">

  <link rel="icon" type="image/webp" href="./assets/images/logo-circle.webp">

  <title>Rotenbi | Tas Anyaman
  Berkelanjutan</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <link href="dist/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="./dist/myCSS.css">
  <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">



  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>


</head>

<body data-page="home">


  <!-- Navbar -->
  <div id="navbar" class="navbar  px-7 py-1 drop-shadow-md fixed z-20 w-full transition-all duration-500 ease-in-out ">
    <div class="navbar-wrapper grid grid-cols-[50%_30%_20%] md:grid-cols-[10%_80%_10%]">
      <!-- Logo -->
      <a href="#" class="w-20 h-20 relative">
        <img src="./assets/images/transparent-logo.webp" alt="Logo" class="h-full w-full object-contain">
      </a>

      <!-- Menu List (Desktop) -->
      <div class="nav-list hidden md:flex items-center gap-4">
        <a href="./about" class="" data-translate="about">Tentang Kami</a>
        <a href="./gallery-page" class="" data-translate="gallery">Gallery</a>
        <a href="./contact" class="" data-translate="contact">Kontak</a>
      </div>

      <!-- Language Selector -->
      <div class="language flex items-center justify-end bg-transparent">
        <select id="language" name="language" class="bg-transparent" onchange="changeLanguage()">
          <option value="ind" selected>IND</option>
          <option value="eng">ENG</option>
        </select>
      </div>

      <!-- Hamburger Button (Mobile) -->
      <button class="text-black text-3xl block md:hidden">
        <i id="menu-button" class="fas fa-bars"></i>
      </button>
    </div>
  </div>

  <!-- Menu List (Mobile) -->
  <div id="mobile-menu"
    class="fixed right-0 top-0 w-[50vw] h-[100vh] bg-white shadow-lg flex flex-col items-start p-5 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden z-30">

    <!-- Tombol Close (X) -->
    <button id="close-button" class="text-black text-3xl self-end">
      <i class="fas fa-times"></i>
    </button>

    <!-- Menu Items -->
    <a href="./about" class="mb-4 mt-6" data-translate="about">Tentang Kami</a>
    <a href="./gallery-page" class="mb-4" data-translate="gallery">Gallery</a>
    <a href="./contact" class="mb-4" data-translate="contact">Kontak</a>
  </div>
  <!-- end Navbar -->


  <!--hero section-->
  <section class=" flex justify-center align-middle h-[100vh]">
    <div class="grid grid-cols-1 lg:grid-cols-3 w-full relative ">
      <div class="img-wrapper hidden lg:block relative w-full  ">
        <img src="./assets/images/hero-2.webp" alt="Rotenbi" class="w-full h-full object-cover">
      </div>
      <div class="text-wrapper absolute lg:relative flex flex-col lg:justify-end bottom-0 w-full text-center gap-2  ">
        <!-- main title -->
        <div class="title lg:absolute lg:mb-0 lg:top-28 lg:-right-1/4 z-10 mb-10">
          <h1 class="text-6xl lg:text-7xl font-bold">ROTENBI</h1>
          <h3 class="text-xl lg:text-2xl flex">
            <span class="text-primary" data-translate="hero1">Tas Anyaman</span>
            <span class="ml-2" data-translate="hero2">Berkelanjutan</span>
          </h3>
        </div>
        <!-- title 2 -->
        <h3 class="text-xl lg:text-2xl lg:absolute lg:bottom-28 lg:-left-1/4 z-10 order-3" data-translate="hero3">Tas
          anyaman & Hadiah Perusahaan
        </h3>
        <!-- button -->
        <div class="flex justify-center mt-4 z-10 pb-5">
          <a href="#produk-kami" class="scroll-link">
            <button class="px-4 py-2 bg-primary text-white rounded hover:bg-opacity-80"
              data-translate="button-see">Lihat Selengkapnya</button>
          </a>
        </div>
      </div>
      <div class="img-wrapper relative">
        <img src="./assets/images/hero-1.webp" alt="R" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  <!-- end hero section -->


  <!-- tentang Menganyam -->
  <section class="flex relative mx-2 lg:mx-24 gap-3 mt-10 flex-col-reverse lg:flex-row" data-aos="fade-up">
    <div class="text-wrapper justify-center flex flex-col text-center lg:text-start gap-5 lg:gap-2">
      <h2 class="text-4xl uppercase">
        <span data-translate="index-about">TENTANG </span>
        <span class="text-primary font-bold block" data-translate="index-weaving">MENGANYAM</span>
      </h2>
      <p class="text-secondary md:w-4/5" data-translate="index-about-p">Menganyam merupakan proses menjalin bilah secara
        tindih menindih,silang menyilang membentuk suatu jalinan yang indah dan unik. Kegiatan menganyam menjadi
        kegiatan rutin yang dilakoni para perajin di Rotenbi</p>
    </div>
    <div class="img-wrapper h-auto relative lg:w-[40vw] flex-shrink-0">
      <img src="./assets/images/tentang-menganyam.webp" alt="menganyam" class="w-full h-full object-contain">
    </div>
  </section>

  <section class="mx-2 lg:mx-24 relative mt-10" data-aos="fade-up">
    <h2 class="text-4xl text-center uppercase">
      <span data-translate="index-type">JENIS </span>
      <span class="text-primary font-bold block" data-translate="index-type-weaving">ANYAMAN</span>
    </h2>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 mt-10" id="jenisAnyamanContainer">

    </div>
  </section>
  <!-- end tentang Menganyam -->




  <!--section produk -->
  <section id="produk-kami" class="mx-2 lg:mx-24  mt-10 relative" data-aos="fade-up">
    <h2 class="text-4xl text-end uppercase">
      <span data-translate="products">PRODUK</span>
      <span class="text-primary font-bold block" data-translate="our">KAMI</span>
    </h2>
    <div class="content-wrapper flex flex-col lg:flex-row gap-5 relative w-full mt-5">
      <div class="img-wrapper flex-shrink-0 h-auto relative lg:w-[30vw] ">
        <img src="./assets/images/produk-main.webp" alt="produk rotenbi" class="w-full h-full object-cover"
          loading="lazy">
      </div>
      <div class="w-full ">
        <section id="looping">
          <div class="wrapper">
            <div class="itemLeft item1"><img src="./assets/images/produk-1.webp" alt="produk rotenbi" loading="lazy">
            </div>
            <div class="itemLeft item2"><img src="./assets/images/produk-2.webp" alt="produk rotenbi" loading="lazy">
            </div>
            <div class="itemLeft item3"><img src="./assets/images/produk-3.webp" alt="produk rotenbi" loading="lazy">
            </div>
          </div>
          <div class="wrapper">
            <div class="itemRight item1"><img src="./assets/images/produk-4.webp" alt="produk rotenbi" loading="lazy">
            </div>
            <div class="itemRight item2"><img src="./assets/images/produk-5.webp" alt="produk rotenbi" loading="lazy">
            </div>
            <div class="itemRight item3"><img src="./assets/images/produk-6.webp" alt="produk rotenbi" loading="lazy">
            </div>
          </div>
        </section>

      </div>
    </div>
  </section>
  <!-- end Section produk -->

  <!-- Produk Kustom -->
  <section class="mt-10 md:mt-16 mx-2 lg:mx-24" data-aos="fade-up">
    <div class=" mb-4 ">
      <h2 class="text-4xl text-start uppercase">
        <span data-translate="custom">PRODUK KOSTUM</span>
        <span class="text-primary font-bold block " data-translate="souvenir">SOUVENIR</span>
      </h2>
    </div>
    <!-- Gambar scrollable dengan Swiper -->
    <div class="swiper mySwiper h-80">
      <div class="swiper-wrapper">
        <?php
        // Loop untuk menampilkan gambar 6 kali
        for ($i = 1; $i < 5; $i++) {
          echo '<div class="swiper-slide relative w-full "><img src="./assets/images/collection-' . $i . '.webp" alt="produk suvenir" class="w-full h-full object-contain" data-aos="fade-up"></div>';
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
        <button class="px-4 py-2 bg-primary text-white rounded hover:bg-opacity-80" data-translate="button-see">Lihat
          Selengkapnya</button>
      </a>

    </div>
  </section>

  <!-- workshop -->
  <section class="relative mt-7" data-aos="fade-up">
    <div class="img-wrapper relative w-full h-[230px] md:h-[450px]">
      <div class="text-wrapper absolute text-white z-10 w-3/4 md:w-1/2 top-1/2 -translate-y-1/2 mx-3">
        <h3 class="font-bold lg:text-3xl" data-translate="workshop">Perajin & Workshop Kami</h3>
        <p class="text-stone-200 text-xs lg:text-base" data-translate="empowers">Rotenbi memberdayakan perajin lokal
          yang dididik khusus menyesuaikan standar kualitas, untuk memperbaiki ekonomi mereka dan kapasitas mereka
          sebagai perajin dan juga sebagai bentuk partisipasi Rotenbi meningkatkan ekonomi lokal.</p>
      </div>
      <div class="gradient absolute w-full h-full bg-gradient-to-r from-black"></div>
      <img src="./assets/images/workshop-img.webp" alt="workshop Rotenbi" class="w-full h-full object-cover">
    </div>
  </section>
  <!-- end worskhop -->




  <section class="mx-2 lg:mx-24 mt-10 md:mt-16" data-aos="fade-up">
    <div class="grid grid-cols-12">
      <div class="col-span-2  sm:col-span-4 h-line w-full h-full  flex items-center justify-center">
        <div class="line w-full bg-primary h-[2px]"></div>
      </div>
      <h2
        class="col-span-8 sm:col-span-4 text-4xl text-center text-primary font-bold w-full flex-shrink-0 uppercase mb-4"
        data-translate="impact">DAMPAK </h2>
      <div class="col-span-2 sm:col-span-4 h-line w-full  h-full flex items-center justify-center">
        <div class="line w-full bg-primary h-[2px]"></div>
      </div>
    </div>
    <div class="mt-5 flex flex-wrap lg:flex-nowrap justify-center items-center gap-4" id="card-benefit">
    </div>

  </section>

  <section class="mx-2 lg:mx-24 mt-8 md:mt-16" data-aos="fade-up">
    <div class="flex flex-col md:flex-row items-center gap-4 pb-1">
      <!-- Kolom Gambar -->
      <img src="./assets/images/menciptakan-senyuman.webp" alt="foto seseorang lagi tersenyum" class="w-full md:w-1/3">
      <!-- Kolom Teks -->
      <div class="flex flex-col justify-center text-black md:ml-20 md:w-1/3">
        <h2 class="text-black font-semibold mb-4 text-4xl uppercase">
          <span data-translate="create">Menciptakan Banyak</span>
          <span class="text-primary" data-translate="smile">Senyum</span>
          <span data-translate="index-for">untuk mereka</span>
        </h2>
        <p class="text-secondary" data-translate="smile-p"> Rotenbi dapat menciptakan senyum untuk mereka para yang
          terlibat pada proses kami, sehingga anak-anak dari para perajin kami dapat melanjutkan pendidikannya dengan
          baik.
        </p>
      </div>
    </div>
  </section>

  <section class="mx-2 lg:mx-24 mt-10 md:mt-16" data-aos="fade-up">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <h2 class="text-3xl sm:text-4xl w-full font-legular text-black" data-translate="partnership">Informasi Kemitraan &
        Pelatihan </h2>
      <p class="text-secondary" data-translate="partnership-p">Kami membuka peluang untuk kemitraan dan menyediakan
        pelatihan berkualitas bagi Anda yang ingin berkembang bersama kami. Jika Anda memiliki pertanyaan atau
        membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui kontak berikut:</p>
    </div>
    <div class="mt-8 mx-6 md:mx-0">
      <a href="https://wa.me/+6281339545432"
        class=" flex w-full md:w-1/3 justify-between items-center border-b-[1px] border-black pb-1 my-4 hover:scale-105 transition-all ease-in-out">
        <div class="flex gap-x-2 items-center">
          <i class="fa-brands fa-whatsapp text-3xl text-primary"></i>
          <h2 class="text-lg md:text-2xl text-primary">Whatsapp</h2>
        </div>
        <i class="fa-solid fa-arrow-right text-primary text-2xl -rotate-45"></i>
      </a>
      <a href="mailto:rotanbali58944@gmail.com"
        class=" flex w-full md:w-1/3 justify-between items-center border-b-[1px] border-black pb-1 my-4 hover:scale-105 transition-all ease-in-out">
        <div class="flex gap-x-2 items-center">
          <i class="fa-solid fa-envelope text-3xl text-primary"></i>
          <h2 class="text-lg md:text-2xl text-primary">Email</h2>
        </div>
        <i class="fa-solid fa-arrow-right text-primary text-2xl -rotate-45"></i>
      </a>
      <a href="https://maps.app.goo.gl/JqMCpQTgTTZpzqSs5"
        class=" flex w-full md:w-1/3 justify-between items-center border-b-[1px] border-black pb-1 my-4 hover:scale-105 transition-all ease-in-out">
        <div class="flex gap-x-2 items-center">
          <i class="fa-solid fa-location-dot text-3xl text-primary"></i>
          <h2 class="text-lg md:text-2xl text-primary">Location</h2>
        </div>
        <i class="fa-solid fa-arrow-right text-primary text-2xl -rotate-45"></i>
      </a>
    </div>
  </section>

  <section class="mx-2 lg:mx-24 mt-10 md:mt-16" data-aos="fade-up">
    <div class="grid grid-cols-12">
      <div class="col-span-2  sm:col-span-3 h-line w-full h-full  flex items-center justify-center">
        <div class="line w-full bg-primary h-[2px]"></div>
      </div>
      <h2 class="col-span-8 sm:col-span-6 text-lg sm:text-4xl text-center font-bold w-full flex-shrink-0 uppercase">
        <span data-translate="partners">MITRA &</span>
        <span class="text-primary" data-translate="collaborations">KERJA SAMA</span>
      </h2>
      <div class="col-span-2 sm:col-span-3 h-line w-full  h-full flex items-center justify-center">
        <div class="line w-full bg-primary h-[2px]"></div>
      </div>
    </div>
    <div id="looping-brand">
    </div>
  </section>

  <section class="relative mt-7" data-aos="fade-up">
    <div class="img-wrapper relative w-full h-[230px] md:h-[450px]">
      <div class="text-wrapper absolute text-white z-10 w-3/4 md:w-1/2 top-1/2 -translate-y-1/2 mx-3">
        <h3 class="font-bold lg:text-3xl uppercase" data-translate="thanks">TERIMAKASIH TELAH MENDUKUNG PEMBERDAYAAN
          KAMI</h3>
      </div>
      <div class="gradient absolute w-full h-full bg-gradient-to-r from-black"></div>
      <img src="./assets/images/thanks-card.webp" alt="terimakasih dari Rotenbi" class="w-full h-full object-cover">
    </div>
  </section>



  <a href="https://wa.me/+6281339545432" target="_blank"
    class=" bg-green-400 hover:bg-green-600 h-14 w-14 transition-all duration-300 hover:scale-110 fixed bottom-6 right-6 z-50 rounded-full flex justify-center items-center">
    <i class="fa-brands fa-whatsapp text-4xl text-white"></i>
  </a>


  <div id="footer-container"></div>

  <script src="./scripts/generateElements.js"></script>
  <!-- Memuat script untuk Swiper -->
  <script src="node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
  <script src="./scripts/generateJenisAnyaman.js"></script>
  <script src="./scripts/generateCardBenefit.js"></script>
  <script src="./scripts/generateMitra.js"></script>
  <script src="./scripts/navbar.js"></script>
  <!--mengubah bahasa-->
  <script src="./scripts/language.js"></script>



  <!-- Import AOS JavaScript -->
  <script src="./node_modules/aos/dist/aos.js"></script>
  <script>
    // Initialize AOS (Animate on Scroll)
    AOS.init({
      duration: 500, // Durasi animasi
      once: true // Animasi hanya berjalan sekali
    });
  </script>

</body>

</html>