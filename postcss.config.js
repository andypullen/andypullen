module.exports = () => ({
    purge: [
      './src/**/*.html',
      './src/**/*.vue',
      './src/**/*.jsx',
    ],
    plugins: [require("tailwindcss")],
  })