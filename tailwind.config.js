
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif']
      },
      fontSize: {
        "2xs": ".625rem" //10px
      },
      colors: {
        "black": "#060606"
      }
    },
  },
  plugins: [],
}
