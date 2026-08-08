/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        paletDark: '#0b1120',
        paletCard: 'rgba(15, 23, 42, 0.92)',
        paletBorder: 'rgba(148, 163, 184, 0.12)',
        paletText: '#cbd5e1'
      },
      fontFamily: {
        sans: ['Inter', 'Segoe UI', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
