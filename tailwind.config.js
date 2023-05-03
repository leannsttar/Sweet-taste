/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./dist/client/views/*.php",
    "./dist/client/views/*.html",
    "./dist/admin/views/*.php",
    "./dist/admin/views/*.html"
  ],
  theme: {
    extend: {
      backgroundImage: {
        'signup': "url('./client/images/bg_signup.jpg')",
        'login': "url('./client/images/bg_login.jpg')",
        'index1': "url('./client/images/bg_index.jpg')",
        'index2': "url('./client/images/bg2_index.jpg')",
        'index3': "url('./client/images/bg3_index.jpg')"
      },
      textColor:{
        'primary': '#CC2D4A'
      },
    },
  },
  plugins: [],
}

