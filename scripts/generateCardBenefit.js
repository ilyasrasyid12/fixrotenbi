const contentData = [
    {
      imgSrc: './assets/svg/lingkungan.svg',
      title: 'Lingkungan yang Lebih Hijau',
      description: 'Kami mengadopsi pendekatan "zero waste dan menggunakan bahan anyaman dari serat alam, memastikan produksi kami tidak mencemari tanah maupun air.'
    },
    {
      imgSrc: './assets/svg/pemberdayaan.svg',
      title: 'Pemberdayaan Komunitas Lokal',
      description: 'Melibatkan pengrajin desa, kami menciptakan lapangan kerja tanpa bergantung pada mesin besar,sekaligus melestarikan keterampilan tradisional.'
    },
    {
      imgSrc: './assets/svg/ekonomi.svg',
      title: 'Meningkatkan Ekonomi Desa',
      description: 'Setiap pembelian produk mendukung kesejahteraan pengrajin dan memperkuat ekonomi komunitas lokal secara berkelanjutan.'
    },
    {
      imgSrc: './assets/svg/kontribusi.svg',
      title: 'Kontribusi untuk Masa Depan',
      description: 'Dengan memadukan inovasi dan tradisi, kami berkomitmen menciptakan masa depan yang lebih ramah lingkungan dan adil.'
    }
  ];

  // Fungsi untuk membuat elemen content-wrapper
  function createContentWrapper(content) {
    const contentWrapper = document.createElement('div');
    contentWrapper.classList.add('content-wrapper', 'sm:max-w-52', 'mx-7', 'sm:mx-0', 'flex', 'flex-col', 'justify-center', 'items-center', 'text-center', 'gap-3');

    contentWrapper.innerHTML = `
      <div class="img-wrapper relative w-14 h-14">
        <img src="${content.imgSrc}" alt="" class="h-full w-full object-contain">
      </div>
      <h4 class="font-semibold">${content.title}</h4>
      <p class="text-secondary text-xs">${content.description}</p>
    `;
    
    return contentWrapper;
  }

  // Menambahkan semua konten ke dalam container
  const cardContainer = document.getElementById('card-benefit');
  contentData.forEach(content => {
    cardContainer.appendChild(createContentWrapper(content));
  });