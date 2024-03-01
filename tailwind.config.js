/** @type {import('tailwindcss').Config} config */
const config = {
  content: [
    './app/**/*.php', 
    './resources/**/*.{php,vue,js}',
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
    './partials/**/*.{html,js}',
  ],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
