// ganti rootnya ketika sudah di publish
document.addEventListener("DOMContentLoaded", function() {
    fetch("/fixrotenbi-main/components/footer.html") 
        .then(response => response.text())
        .then(data => {
            document.getElementById("footer-container").innerHTML = data;
        })
        .catch(error => console.error("Error loading footer:", error));
});


