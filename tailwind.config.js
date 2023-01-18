/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
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
      dropShadow: {
        "btn": "10px 20px 20px rgba(0, 0, 0, 0.25)",
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('postcss-import'),
    require('autoprefixer')
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