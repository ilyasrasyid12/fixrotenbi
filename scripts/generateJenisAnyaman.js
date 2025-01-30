const anyamanData = {
    tumbuhan: [
        { img: './assets/jenis-anyaman/flora1.webp', name: 'Kelerai Tampuk Manggis' },
        { img: './assets/jenis-anyaman/flora2.webp', name: 'Kelerai Bunga Cangkih' },
        { img: './assets/jenis-anyaman/flora3.webp', name: 'Kelerai Bunga Cina' }
    ],
    "nama Manusia": [
        { img: './assets/jenis-anyaman/nama-manusia1.webp', name: 'Kelerai Mak Mek' },
        { img: './assets/jenis-anyaman/nama-manusia2.webp', name: 'Kelerai Mak Mek' },
        { img: './assets/jenis-anyaman/nama-manusia3.webp', name: 'Kelerai Mak Mek' }
    ],
    haiwan: [
        { img: './assets/jenis-anyaman/fauna1.webp', name: 'Kelerai Jari Kedidi' },
        { img: './assets/jenis-anyaman/fauna2.webp', name: 'Kelerai Jari Kedidi' },
        { img: './assets/jenis-anyaman/fauna3.webp', name: 'Kelerai Jari Kedidi' }
    ],
    abstrak: [
        { img: './assets/jenis-anyaman/abstrak1.webp', name: 'Kelerai Empak Sebilik' },
        { img: './assets/jenis-anyaman/abstrak2.webp', name: 'Kelerai Empak Sebilik' },
        { img: './assets/jenis-anyaman/abstrak3.webp', name: 'Kelerai Empak Sebilik' }
    ]
};

const container = document.getElementById('jenisAnyamanContainer');

// Fungsi untuk mengenerate konten
const generateAnyamanContent = (jenis, data) => {
    const div = document.createElement('div');
    div.classList.add('lg:text-center', 'font-semibold', 'flex', 'lg:flex-col', 'gap-4', 'lg:justify-center', 'items-center', 'overflow-x-scroll', 'lg:overflow-x-hidden');

    const title = document.createElement('h4');
    title.textContent = jenis.toUpperCase();
    div.appendChild(title);

    data.forEach(item => {
        const content = document.createElement('div');
        content.classList.add('content', 'flex', 'flex-col', 'items-center', 'text-center');
        
        const imgWrapper = document.createElement('div');
        imgWrapper.classList.add('img-wrapper', 'relative', 'h-20', 'w-20', 'flex-shrink-0');
        
        const img = document.createElement('img');
        img.src = item.img;
        img.alt = item.name;
        img.classList.add('w-full', 'h-full', 'object-cover');
        img.setAttribute('loading', 'lazy');

        imgWrapper.appendChild(img);
        
        const caption = document.createElement('p');
        caption.classList.add('text-secondary', 'font-normal', 'text-center');
        caption.textContent = item.name;
        
        content.appendChild(imgWrapper);
        content.appendChild(caption);
        
        div.appendChild(content);
    });

    return div;
};

// Menggenerate konten untuk setiap jenis anyaman
for (const [jenis, data] of Object.entries(anyamanData)) {
    const generatedContent = generateAnyamanContent(jenis, data);
    container.appendChild(generatedContent);
}
