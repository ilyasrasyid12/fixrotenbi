/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php", 
  ],
  theme: {
    extend: {
      colors: {
        primary: '#754E1A',
      },
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'], // Menambahkan Montserrat sebagai font default
      },
    },
  },
  plugins: [],
};