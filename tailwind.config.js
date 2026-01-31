/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        bukhari: {
          gold: '#C5A059',      // ذهبي مطفي فاخر
          goldHover: '#B08D45', // درجة أغمق عند الماوس
          black: '#0F0F0F',     // أسود فحمي (الخلفية الأساسية)
          dark: '#1A1A1A',      // رمادي غامق للسكيشن
          light: '#F5F5F7',     // أبيض رخامي للنصوص
        },
      },
      fontFamily: {
        arabic: ['Alexandria', 'sans-serif'], // خط الإسكندرية
      },
    },
  },
  plugins: [],
}