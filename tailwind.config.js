/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "assets/**/*.svg",
    "_includes/**/*.{html,njk,md}",
    "_site/**/*.{html,njk,md}",
  ],
  theme: {
    colors: {
      'blue': '#62cdff',
      'blue-dark': '#2b303f',
      'purple': '#7e5bef',
      'pink': '#ff49db',
      'orange': '#ff7849',
      'green': '#6ce879',
      'yellow': '#ffc82c',
      'gold': '#ffab62',
      'gray-dark': '#273444',
      'gray': '#8492a6',
      'gray-light': '#d3dce6',
    },
    fontFamily: {
      sans: ['sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    extend: {
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    },
    fontWeight: {
      light: 200,
      normal: 400,
      bold: 600,
    }
  },
  safelist: [
    {
      pattern: /pl-\d+/,
      variants: ['md'],
    },
  ],
  plugins: [],
}

