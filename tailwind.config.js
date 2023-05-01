/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./dist/client/views/*.php",
    "./dist/client/views/*.html"
  ],
  theme: {
    extend: {
      backgroundImage: {
        'signup': "url('./client/images/bg_signup.jpg')",
        'lido': "url('../images/lido_logo.png')"
      },
      textColor:{
        'primary': '#CC2D4A'
      },
    },
  },
  plugins: [],
}

