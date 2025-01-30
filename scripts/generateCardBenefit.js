const translationsdescription = {
  'ind': {
    // Card Benefit
    'benefit-title-1': 'Lingkungan yang Lebih Hijau',
    'benefit-description-1': 'Kami mengadopsi pendekatan "zero waste dan menggunakan bahan anyaman dari serat alam, memastikan produksi kami tidak mencemari tanah maupun air.',
    'benefit-title-2': 'Pemberdayaan Komunitas Lokal',
    'benefit-description-2': 'Melibatkan pengrajin desa, kami menciptakan lapangan kerja tanpa bergantung pada mesin besar, sekaligus melestarikan keterampilan tradisional.',
    'benefit-title-3': 'Meningkatkan Ekonomi Desa',
    'benefit-description-3': 'Setiap pembelian produk mendukung kesejahteraan pengrajin dan memperkuat ekonomi komunitas lokal secara berkelanjutan.',
    'benefit-title-4': 'Kontribusi untuk Masa Depan',
    'benefit-description-4': 'Dengan memadukan inovasi dan tradisi, kami berkomitmen menciptakan masa depan yang lebih ramah lingkungan dan adil.',

  },
  'eng': {

    'benefit-title-1': 'A Greener Environment',
      'benefit-description-1': 'We adopt a "zero waste" approach and use woven materials from natural fibers, ensuring our production does not pollute the land or water.',
      'benefit-title-2': 'Empowering Local Communities',
      'benefit-description-2': 'Involving village artisans, we create jobs without relying on large machines, while preserving traditional skills.',
      'benefit-title-3': 'Boosting Village Economy',
      'benefit-description-3': 'Every purchase of our products supports the welfare of artisans and strengthens the local community economy sustainably.',
      'benefit-title-4': 'Contributing to the Future',
      'benefit-description-4': 'By combining innovation and tradition, we are committed to creating a more environmentally friendly and fair future.',

  }
};
const contentData = [
    {
      imgSrc: './assets/svg/lingkungan.svg',
      titleKey: 'benefit-title-1',
      descriptionKey: 'benefit-description-1'
    },
    {
      imgSrc: './assets/svg/pemberdayaan.svg',
      titleKey: 'benefit-title-2',
      descriptionKey: 'benefit-description-2'
    },
    {
      imgSrc: './assets/svg/ekonomi.svg',
      titleKey: 'benefit-title-3',
      descriptionKey: 'benefit-description-3'
    },
    {
      imgSrc: './assets/svg/kontribusi.svg',
      titleKey: 'benefit-title-4',
      descriptionKey: 'benefit-description-4'
    }
];

// Fungsi untuk membuat elemen content-wrapper
function createContentWrapper(content) {
  const contentWrapper = document.createElement('div');
  contentWrapper.classList.add('content-wrapper', 'sm:max-w-52', 'mx-7', 'sm:mx-0', 'flex', 'flex-col', 'justify-center', 'items-center', 'text-center', 'gap-3');

  // Menggunakan translationsdescription untuk teks
  contentWrapper.innerHTML = `
    <div class="img-wrapper relative w-14 h-14">
      <img src="${content.imgSrc}" alt="manfaat dari Rotenbi" class="h-full w-full object-contain">
    </div>
    <h4 class="font-semibold" data-translate="${content.titleKey}">${translationsdescription['ind'][content.titleKey]}</h4>
    <p class="text-secondary text-xs" data-translate="${content.descriptionKey}">${translationsdescription['ind'][content.descriptionKey]}</p>
  `;
  
  return contentWrapper;
}

// Menambahkan semua konten ke dalam container
const cardContainer = document.getElementById('card-benefit');
contentData.forEach(content => {
  cardContainer.appendChild(createContentWrapper(content));
});