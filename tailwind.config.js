/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/**.vue"
  ],
  theme: {
    extend: {
      width: {
        '96': '34rem',
      },
      height: {
        '96': '28rem',
      }
       
    },
  },
  plugins: [],
}

