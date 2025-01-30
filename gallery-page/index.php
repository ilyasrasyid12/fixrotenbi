<!DOCTYPE html>
<html lang="id" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/webp" href="../assets/images/logo-circle.webp">
  <title>Rotenbi | Galery</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- External CSS -->
  <link href="../dist/output.css" rel="stylesheet">
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

<body class="overflow-x-hidden" data-page="gallery">

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

  <!-- Main Content -->
  <section class="mx-2 lg:mx-24 mt-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <?php
        $imagesPerPage = 12;
        $imageFiles = glob('../assets/gallery-img/galeri_rotenbi*.webp');
        $totalImages = count($imageFiles);
        $totalPages = ceil($totalImages / $imagesPerPage);
        $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $startIndex = ($currentPage - 1) * $imagesPerPage;

        for ($i = $startIndex; $i < min($startIndex + $imagesPerPage, $totalImages); $i++) {
            // Mendapatkan nama file gambar tanpa path dan ekstensi
            $imageName = basename($imageFiles[$i], '.webp');

            // Membuat teks alternatif (alt text) dari nama file
            //$altText = ucwords(str_replace(['-', '_'], ' ', $imageName)); // Mengganti tanda hubung dan garis bawah dengan spasi, lalu mengubah huruf awal setiap kata menjadi kapital

            echo '<img src="' . $imageFiles[$i] . '" alt="galeri Rotenbi" class="w-full h-60 object-cover" data-aos="fade-up">';
        }
        ?>
    </div>

    <!-- Pagination Buttons -->
    <div class="flex justify-center mt-4 md:mt-6 text-white" data-aos="fade-up">
      <?php for ($page = 1; $page <= $totalPages; $page++): ?>
        <a href="?page=<?php echo $page; ?>" class="px-4 py-2 mx-1 <?php echo ($page == $currentPage) ? 'font-bold bg-primary text-white' : 'bg-white text-black border border-primary'; ?>">
          <?php echo $page; ?>
        </a>
      <?php endfor; ?>
      <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>" class="text-black px-4 py-2 mx-1 border border-primary" data-translate="next">Next</a>
      <?php endif; ?>
    </div>
  </section>

  <a href="https://wa.me/+6281339545432" target="_blank"
    class=" bg-green-400 hover:bg-green-600 h-14 w-14 transition-all duration-300 hover:scale-110 fixed bottom-6 right-6 z-50 rounded-full flex justify-center items-center">
    <i class="fa-brands fa-whatsapp text-4xl text-white"></i>
  </a>


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

  <!-- Custom Scripts -->
  <script src="../scripts/generateElements.js"></script>
  <script src="../scripts/navbar.js"></script>
  <script src="../scripts/language.js"></script>
  <script src="../scripts/scroll-animation.js"></script>

</body>

</html>
