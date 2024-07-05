import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
          screens: {
              xs: "420px",
              sm: "680px",
              md: "768px",
              lg: "1024px",
              xl: "1280px",
              "2xl": "1536px"
          },
          // colors: {
          //     emerald: {
          //         50: '#ecfdf5',
          //         100: '#d1fae5',
          //         200: '#a7f3d0',
          //         300: '#6ee7b7',
          //         400: '#34d399',
          //         500: '#10b981',
          //         600: '#059669',
          //         700: '#047857',
          //         800: '#065f46',
          //         900: '#064e3b',
          //         950: '#022c22',
          //     },
          // }
      },
    },
    plugins: [],
  }
