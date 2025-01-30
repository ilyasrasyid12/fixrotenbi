// ganti rootnya ketika sudah di publish
document.addEventListener("DOMContentLoaded", function() {
    fetch("/components/footer.html") 
        .then(response => response.text())
        .then(data => {
            document.getElementById("footer-container").innerHTML = data;
        })
        .catch(error => console.error("Error loading footer:", error));
});

// Fungsi untuk smooth scroll
function smoothScroll(e) {
  e.preventDefault();
  const targetId = this.getAttribute('href');
  const targetElement = document.querySelector(targetId);
  
  targetElement.scrollIntoView({
    behavior: 'smooth',
    block: 'start'
  });
}

// Tambahkan event listener ke semua link yang mengarah ke section
document.addEventListener('DOMContentLoaded', function() {
  const scrollLinks = document.querySelectorAll('a[href^="#"]');
  scrollLinks.forEach(link => {
    link.addEventListener('click', smoothScroll);
  });
});


