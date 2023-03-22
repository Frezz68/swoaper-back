/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "white" : "#FFFFFF",
        "black" : "#000000",
        "dark-blue": "#253784",
        "light-blue": "#7daee6",
        "gray-blue": "#dae5ef",
        "landing-background" : "#f5ebe0",
      },
      boxShadow: {
        "btn": "10px 20px 20px rgba(0, 0, 0, 0.25)",
        "nav": "-3px 57px 48px -21px rgba(0,0,0,0.1)"
      },
      fontFamily: {
        sans: ['Poppins'],
      },
      height: {
        "video": "1000px",
      },
      margin: {
        "rates": "5rem",
      },
      padding: {
        '100px': '100px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('postcss-import'),
    require('autoprefixer'),
    require('flowbite/plugin')
  ]
}

// /** @type {import('tailwindcss').Config} */
// module.exports = {
//   content: [
//
//   ],
//   theme: {
//     extend: {},
//   },
//   plugins: {
//    tailwindcss: {},
//    autoprefixer: {},
//   }
// }