document.addEventListener("DOMContentLoaded", () => {
  const section = document.getElementById("looping-brand");
  const wrapperLeft = document.createElement("div");
  const wrapperRight = document.createElement("div");

  wrapperLeft.classList.add("wrapper-brand");
  wrapperRight.classList.add("wrapper-brand");

  const imagePath = "./assets/mitra";

  // Generate itemLeft-brand (1 to 16)
  for (let i = 1; i <= 16; i++) {
    const div = document.createElement("div");
    div.classList.add("itemLeft-brand", `brand-item${i}`);
    const img = document.createElement("img");
    img.classList.add("w-full", "h-full", "object-contain");
    img.src = `${imagePath}/(${i}).webp`;
    img.alt = `Brand ${i}`;
    img.loading = "lazy";
    div.appendChild(img);
    wrapperLeft.appendChild(div);
  }

  // Generate itemRight-brand (17 to 32)
  for (let i = 1; i <= 16; i++) {
    const div = document.createElement("div");
    div.classList.add("itemRight-brand", `brand-item${i}`);

    // Buat elemen <img> dengan gambar dari 17 hingga 32
    const img = document.createElement("img");
    img.classList.add("w-full", "h-full", "object-contain");
    img.src = `${imagePath}/(${i + 16}).webp`; // Offset 16 untuk mulai dari gambar ke-17
    img.alt = `Brand ${i + 16}`;
    img.loading = "lazy";

    div.appendChild(img);
    wrapperRight.appendChild(div);
  }

  // Tambahkan wrapper ke section
  section.appendChild(wrapperLeft);
  section.appendChild(wrapperRight);
});
