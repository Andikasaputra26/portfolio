/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.php'],
  theme: {
    container:{
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary:'#14b8a6',
        secondary:'#64748b',
        dark:'#0f172a',
        navy:'#FFEBCD',
      },
      screens:{
        '2xl': '1320px',
      },
    },
  },
  plugins: [],
};
