<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/styles.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <title>Proyek Tailwind CSS</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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
        <a href="../">Beranda</a>
        <a href="../about">Tentang Kami</a>
        <a href="../gallery-page">Gallery</a>
        <a href="../contact">Kontak</a>
      </div>

      <!-- Language Selector -->
      <div class="language flex items-center justify-end bg-transparent">
        <select id="language" name="language" class="bg-transparent">
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
  <div id="mobile-menu"
    class="fixed right-0 top-0 w-[50vw] h-[100vh] bg-white shadow-lg flex flex-col items-start p-5 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden z-30">
    <button id="close-button" class="text-black text-3xl self-end">
      <i class="fas fa-times"></i>
    </button>
    <a href="../" class="mb-4 mt-6">Beranda</a>
    <a href="../about" class="mb-4 ">Tentang Kami</a>
    <a href="../gallery-page" class="mb-4">Gallery</a>
    <a href="../contact" class="mb-4">Kontak</a>
  </div>
  <!-- end Navbar -->

  <section class="mx-2 lg:mx-24 mt-20">
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
      $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
      // Menghitung indeks gambar yang akan ditampilkan
      $startIndex = ($currentPage - 1) * $imagesPerPage;

      // Loop untuk menampilkan gambar
      for ($i = $startIndex; $i < min($startIndex + $imagesPerPage, $totalImages); $i++) {
        echo '<img src="' . $imageFiles[$i] . '" class="w-full h-60 object-cover ">';
      }
      ?>
    </div>
    <!-- Pagination Buttons -->
    <div class="flex justify-center mt-4 md:mt-6 text-white ">
      <?php for ($page = 1; $page <= $totalPages; $page++): ?>
        <a href="?page=<?php echo $page; ?>"
          class="px-4 py-2 mx-1 <?php echo ($page == $currentPage) ? 'font-bold bg-primary text-white' : 'bg-white text-black border border-primary'; ?>">
          <?php echo $page; ?>
        </a>
      <?php endfor; ?>
      <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>" class="text-black px-4 py-2 mx-1 border border-primary">Next</a>
      <?php endif; ?>
    </div>
  </section>

  <div id="footer-container"></div>

  <script src="../scripts/generateElements.js"></script>
  <script src="../scripts/navbar.js"></script>
  <!-- Memuat script untuk loading file HTML -->
</body>

</html>