/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {

    },
    colors: {
      "white" : "#FFFFFF",
      "black" : "#000000",
      "landing-background" : "#f5ebe0",
    }
  },
  plugins: [

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