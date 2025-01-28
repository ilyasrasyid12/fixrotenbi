<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/styles.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="../dist/scroll-animation.css" rel="stylesheet">
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
        <li><a href="../about/index.php">Tentang Kami</a></li>
        <li><a href="index.php">Gallery</a></li>
        <li><a href="../contact/index.php">Kontak</a></li>
      </ul>
    </div>
    
    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <section class="mx-2 lg:mx-24 mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <?php
          // Mengatur jumlah gambar per halaman
          $imagesPerPage = 12;
          // Mengambil semua gambar dari direktori
          $imageFiles = glob('../assets/gallery-img/gallery (*.webp'); // Mengambil semua file .webp
          $totalImages = count($imageFiles); // Menghitung total gambar
          // Menghitung total halaman
          $totalPages = ceil($totalImages / $imagesPerPage);
          // Mendapatkan halaman saat ini dari query string, default ke 1
          $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
          // Menghitung indeks gambar yang akan ditampilkan
          $startIndex = ($currentPage - 1) * $imagesPerPage;
          
          // Loop untuk menampilkan gambar
          for ($i = $startIndex; $i < min($startIndex + $imagesPerPage, $totalImages); $i++) {
              echo '<img src="' . $imageFiles[$i] . '" class="w-full h-60 object-cover scroll-animation">';
          }
        ?>
        </div>
        <!-- Pagination Buttons -->
        <div class="flex justify-center mt-4 md:mt-6 text-white">
            <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                <a href="?page=<?php echo $page; ?>" class="px-4 py-2 mx-1 <?php echo ($page == $currentPage) ? 'font-bold bg-secondary text-primary' : 'bg-primary text-white'; ?>">
                    <?php echo $page; ?>
                </a>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <a href="?page=<?php echo $currentPage + 1; ?>" class="bg-primary px-4 py-2 mx-1">Next</a>
            <?php endif; ?>
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
    <!-- Memuat scroll animation -->
    <script src="../scripts/scroll-animation.js"></script>
    <!-- Memuat script untuk loading file HTML -->
</body>
</html>