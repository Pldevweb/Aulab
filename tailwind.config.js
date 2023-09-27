const defaultTheme = require('tailwindcss/defaultTheme')
const plugin = require('tailwindcss/plugin')

module.exports = {
    theme: {
        extend: {
            textColor: {
                'main-color': '#5e5e4a',
                'link': '#fff',
                'link-hover': '#424230',
                'menu-link': '#6d6d5c',
                'menu-link-hover': '#9b9b76',
                'pale' : '#c1c1ba',
                'button': '#5e5e4a',
            },
            minHeight: {
                '1/2': '50%',
              },
            fontFamily: {
                sans: ['Helvetica', 'Arial', 'sans-serif', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'accueil': "url('/storage/app/public/images/accueilimg.jpg')",
                'pattern': "url('/storage/app/public/images/pattern.png')",
            }),
            backgroundColor: {
                'body': '#DBDBD8',
                'card': '#f8f8f8',
                'footer': '#cdcdc8',
                'footer-2': '#c1c1ba',
                'button': '#5e5e4a',
                'button-hover': '#70705c',
                'button-focus': 'red',
                'button-active': '#797963',
                'notactive': '#dbdbd8',
                'active': '#c1c1ba',
                'primary': '#5e5e4a',
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        plugin(function ({ addBase, addComponents, addUtilities, theme }) {
          addBase({
            'h1': {
              fontSize: theme('fontSize.2xl'),
            },
            'h2': {
              fontSize: theme('fontSize.xl'),
            },
            'h3': {
                fontSize: theme('fontSize.lg'),
              },
          })
          addComponents({
            '.active': {
                fontWeight: theme('fontWeight.bold'),
                backgroundColor: theme('backgroundColor.active'),
            },
            '.notactive': {
                fontWeight: theme('fontWeight.normal'),
                backgroundColor: theme('backgroundColor.notactive'),
            },
          })
          addUtilities({
            '.content-auto': {
              contentVisibility: 'auto',
            },
          })
        })
      ]
}
