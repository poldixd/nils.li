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
            '--tw-prose-body': theme('colors.slate[700]'),
            '--tw-prose-headings': theme('colors.slate[700]'),
            '--tw-prose-bullets': theme('colors.slate[700]'),
          }
        },
      }),
    },
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}
