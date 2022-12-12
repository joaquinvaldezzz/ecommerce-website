const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.php', './*.html', './includes/**/*.{php,html}'],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '2rem',
      },
    },
    extend: {
      backgroundImage: {
        'sign-in': "url('public/images/banner/banner-sign-in.jpg')",
        'create-an-account': "url('public/images/banner/banner-create-an-account.jpg')",
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [],
}
