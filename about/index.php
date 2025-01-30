<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyek Tailwind CSS</title>

  <!-- External CSS -->
  <link href="../dist/styles.css" rel="stylesheet">
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

    
    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <section class="relative lg:h-[80vh]" data-aos="fade-up">
        <img src="../assets/images/hero-about.webp" alt="tentang Rotenbi" class="w-full h-full object-cover">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <!--img src="../assets/images/Logo-transparent.webp" class="w-48 md:w-52 lg:w-60"-->
            <h2 class="hidden md:block text-white text-center text-6xl font-bold">ROTENBI</h2>
        </div>
    </section>

    <section class="mx-2 lg:mx-24 mt-10 flex flex-col items-center text-center" data-aos="fade-up">
        <h2 class="mb-4 text-4xl text-black md:w-2/3">
          <span data-translate="about-about">Tentang</span> <span class="font-bold text-primary" data-translate="us">Kami</span>
        </h2>
        <p class="md:w-2/3" data-translate="about-p1">Rotenbi adalah industri kriya anyaman yang fokus menciptakan inovasi berkelanjutan yang memiliki nilai seni, budaya, modernisasi, dan ramah lingkungan. Produk yang dihasilkan seperti tas, dompet, souvenir, dan produk unik lainnya.</p>    
    </section>

    <section class="mx-2 lg:mx-24 mt-10 flex flex-col items-center text-center" data-aos="fade-up">
        <h2 class=" font-bold mb-4 text-4xl text-primary md:w-2/3" data-translate="visi">VISI</h2>
        <p class="md:w-2/3" data-translate="about-p2">“Memberdayakan perajin lokal dengan menciptakan produk anyaman berkelanjutan yang mendukung budaya dan ramah lingkungan.”</p>    
    </section>

    <section class="mx-2 lg:mx-24 mt-10" data-aos="fade-up">
        <h2 class=" text-4xl mb-4 text-center md:text-left">
          <span class="text-black" data-translate="impact">DAMPAK</span>
          <span class="font-bold md:block text-primary" data-translate="positive"> POSITIF</span></h2>
        <div class="flex flex-col md:flex-row-reverse">
            <div class="md:w-1/2 md:border-l-2 md:border-black">
                <img src="../assets/images/about-dampak.webp" alt="dampak positif dari Rotenbi" class="w-full md:ml-8">
            </div>      
            <p class="md:w-1/2 mr-6 text-left mt-6 md:mt-0" data-translate="impact-p1">
              Rotenbi memberikan dampak nyata bagi para perajin lokal dengan memberdayakan mereka melalui pelatihan khusus untuk memenuhi standar kualitas yang tinggi. Upaya ini tidak hanya meningkatkan ekonomi mereka, tetapi juga memperluas kapasitas mereka sebagai perajin, sekaligus berkontribusi dalam peningkatan ekonomi lokal.<br/><br/>
              Kami menciptakan kebahagiaan bagi para perajin yang terlibat dalam proses produksi kami, dengan memastikan kesejahteraan mereka. Dengan penghasilan yang lebih baik, para perajin mampu mendukung pendidikan anak-anak mereka, memberikan harapan untuk masa depan yang lebih cerah.<br/><br/>
              Rotenbi juga mengadopsi pendekatan "zero waste" dengan menggunakan bahan anyaman dari serat alam, memastikan proses produksi kami ramah lingkungan tanpa mencemari tanah atau air. Dengan melibatkan perajin desa, kami tidak hanya menciptakan lapangan kerja yang menjaga keterampilan tradisional, tetapi juga mengurangi ketergantungan pada mesin besar.<br/><br/>
              Setiap pembelian produk kami, seperti tas, dompet, souvenir, dan produk unik lainnya, mendukung kesejahteraan perajin sekaligus memperkuat ekonomi komunitas lokal secara berkelanjutan. Dengan menggabungkan inovasi, tradisi, seni, budaya, dan ramah lingkungan, Rotenbi berkomitmen menciptakan masa depan yang lebih baik, adil, dan berkelanjutan.
            </p>
        </div>   
    </section>

    <section class="mx-2 lg:mx-24 mt-10" data-aos="fade-up">
        <div class="flex flex-col md:flex-row-reverse items-center justify-center">
            <div class="md:w-1/2 flex justify-center">
                <img src="../assets/images/NI-KOMANG-ROSIANI.webp" alt="NI KOMANG ROSIANI" class="w-full h-full md:h-1/2 md:w-1/2 md:mr-20">
            </div>
            <div class="text-left md:w-1/2 flex flex-col mt-6 md:mt-0 md:ml-40">
                <h2 class="text-3xl md:text-4xl font-bold text-primary text-center md:text-left">NI KOMANG ROSIANI</h2>
                <p class="text-3xl md:text-4xl font-bold md:mt-2 text-center md:text-left" data-translate="founder">Founder Rotenbi Bali</p>
            </div>
        </div>
    </section>


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
  <script src="../scripts/navbar.js"></script>
  <script src="../scripts/generateElements.js"></script>
  <!--mengubah bahasa-->
  <script src="../scripts/language.js"></script>
    <!-- Memuat script untuk loading file HTML -->
</body>
</html>