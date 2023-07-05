/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

export default {

  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],

  //police a utilisé paar defaut
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },

    },

  },

  //reset les formulaires avec la strategie class
  plugins: [
    require('@tailwindcss/forms')({
      strategy: 'class', // only generate classes
    }),
  ],
}
