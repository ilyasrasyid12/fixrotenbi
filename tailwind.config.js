/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php", 
    "./**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#754E1A',
      },
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'], // Menambahkan Montserrat sebagai font default
      },
    },
  },
  plugins: [],
};