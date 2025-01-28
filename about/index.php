<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/styles.css" rel="stylesheet">
  <link href="../dist/scroll-animation.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <title>Proyek Tailwind CSS</title>
</head>
<body class="overflow-x-hidden">
    <!-- Memuat Header dan Footer -->
    <header class="flex bg-white text-black shadow-xl mb-6">
      <div class="flex justify-between px-8 md:px-24 w-full relative">
        <div class="flex">
          <img src="../assets/images/main-logo.webp" class="py-2 w-16 md:w-24 mr-2 md:mr-16">
          <ul id="menu" class="hidden md:flex items-center gap-x-4 md:gap-x-8 text-sm md:text-base">
            <li><a href="../index.php">Utama</a></li>
            <li><a href="../about/index.php">Tentang Kami</a></li>
            <li><a href="../gallery-page/index.php">Gallery</a></li>
            <li><a href="../contact/index.php">Kontak</a></li>
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
        <li><a href="../index.php">Utama</a></li>  
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
    
    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <section class="relative lg:h-[80vh] scroll-animation">
        <img src="../assets/images/hero-about.webp" alt="" class="w-full h-full object-cover">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <img src="../assets/images/Logo-transparent.webp" class="w-48 md:w-52 lg:w-60">
            <h2 class="hidden md:block text-white text-center text-6xl font-bold">ROTENBI</h2>
        </div>
    </section>

    <section class="mx-2 lg:mx-24 mt-10 flex flex-col items-center text-center scroll-animation">
        <h2 class="mb-4 text-4xl text-black md:w-2/3">TENTANG <span class="font-bold text-primary">KAMI</span></h2>
        <p class="md:w-2/3">Rotenbi adalah industri kriya anyaman yang fokus menciptakan inovasi berkelanjutan yang memiliki nilai seni, budaya, modernisasi, dan ramah lingkungan. Produk yang dihasilkan seperti tas, dompet, souvenir, dan produk unik lainnya.</p>    
    </section>

    <section class="mx-2 lg:mx-24 mt-10 flex flex-col items-center text-center scroll-animation">
        <h2 class=" font-bold mb-4 text-4xl text-primary md:w-2/3">VISI</h2>
        <p class="md:w-2/3">“Memberdayakan perajin lokal dengan menciptakan produk anyaman berkelanjutan yang mendukung budaya dan ramah lingkungan.”</p>    
    </section>

    <section class="mx-2 lg:mx-24 mt-10 flex flex-col items-center text-center scroll-animation">
        <h2 class=" font-bold mb-4 text-4xl text-primary md:w-2/3">MISI</h2>
        <p class="md:w-2/3">“Memberdayakan perajin lokal dengan menciptakan produk anyaman berkelanjutan yang mendukung budaya dan ramah lingkungan.”</p>    
    </section>

    <section class="mx-2 lg:mx-24 mt-10 scroll-animation">
        <h2 class=" text-4xl text-black mb-4 text-center md:text-left">DAMPAK <span class="font-bold md:block text-primary"> POSITIF</span></h2>
        <div class="flex flex-col md:flex-row-reverse">
            <div class="md:w-1/2 md:border-l-2 md:border-black">
                <img src="../assets/images/about-dampak.webp" class="w-full md:ml-8">
            </div>      
            <p class="md:w-1/2 mr-6 text-left mt-6 md:mt-0">Rotenbi memberikan dampak nyata bagi para perajin lokal dengan memberdayakan mereka melalui pelatihan khusus untuk memenuhi standar kualitas yang tinggi. Upaya ini tidak hanya meningkatkan ekonomi mereka, tetapi juga memperluas kapasitas mereka sebagai perajin, sekaligus berkontribusi dalam peningkatan ekonomi lokal.<br/><br/>
            Kami menciptakan kebahagiaan bagi para perajin yang terlibat dalam proses produksi kami, dengan memastikan kesejahteraan mereka. Dengan penghasilan yang lebih baik, para perajin mampu mendukung pendidikan anak-anak mereka, memberikan harapan untuk masa depan yang lebih cerah.<br/><br/>
            Rotenbi juga mengadopsi pendekatan "zero waste" dengan menggunakan  bahan anyaman dari serat alam, memastikan proses produksi kami ramah lingkungan tanpa mencemari tanah atau air. Dengan melibatkan perajin desa, kami tidak hanya menciptakan lapangan kerja yang menjaga keterampilan tradisional, tetapi juga mengurangi ketergantungan pada mesin besar.<br/><br/>
            Setiap pembelian produk kami, seperti tas, dompet, souvenir, dan produk unik lainnya, mendukung kesejahteraan perajin sekaligus memperkuat ekonomi komunitas lokal secara berkelanjutan. Dengan menggabungkan inovasi, tradisi, seni, budaya, dan ramah lingkungan, Rotenbi berkomitmen menciptakan masa depan yang lebih baik, adil, dan berkelanjutan.</p> 
        </div>   
    </section>

    <section class="mx-2 lg:mx-24 mt-10 scroll-animation">
        <div class="flex flex-col md:flex-row-reverse items-center justify-center">
            <div class="md:w-1/2 flex justify-center">
                <img src="../assets/images/NI-KOMANG-ROSIANI.webp" class="w-full h-full md:h-1/2 md:w-1/2 md:mr-20">
            </div>
            <div class="text-left md:w-1/2 flex flex-col mt-6 md:mt-0 md:ml-40">
                <h2 class="text-4xl font-bold text-primary text-center md:text-left">NI KOMANG ROSIANI</h2>
                <p class="text-4xl font-bold md:mt-2 text-center md:text-left">Founder Rotenbi Bali</p>
            </div>
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
    <script src="../scripts/scroll-animation.js"></script>
    <!-- Memuat script untuk loading file HTML -->
</body>
</html>