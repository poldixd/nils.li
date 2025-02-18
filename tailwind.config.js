const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    'tag--laravel',
    'tag--design',
    'tag--php',
    'tag--tailwind-css',
    'tag--nuxtjs',
    'tag--javascript',
    'tag--bootstrap',
    'tag--wordpress',
  ],
  theme: {
    extend: {
      fontFamily: {
        'inter-var': ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        'gradient-conic': 'conic-gradient(var(--tw-gradient-stops))',
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: theme('colors.slate.200'),
            'h1, h2, h3, h4, h5, h6': {
              color: theme('colors.slate.200'),
            },
            'a': {
              color: theme('colors.slate.200'),
            },
            'a:hover': {
              color: theme('colors.slate.400'),
            }
          },
        },
      }),
    },
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}
