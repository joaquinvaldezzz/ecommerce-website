const defaultTheme = require('tailwindcss/defaultTheme')
const plugin = require('tailwindcss/plugin')
const contents = require('./contents')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [...contents],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '2rem',
      },
    },
    extend: {
      backgroundImage: {
        'sign-in': "url('../public/images/banner/banner-sign-in.jpg')",
        'create-an-account': "url('../public/images/banner/banner-create-an-account.jpg')",
        'about-us': "url('../public/images/banner/banner-about-us.jpg')",
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      lineHeight: {
        prose: 1.75,
      },
      minHeight: {
        25: '25vh',
        50: '50vh',
      },
    },
  },
  plugins: [
    plugin(({ addVariant }) => {
      addVariant('children', '& > :not([hidden]) ~ :not([hidden])')
    }),
  ],
}
