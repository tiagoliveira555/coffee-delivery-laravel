/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
            'roboto': ['Roboto', 'sans-serif'],
            'baloo': ['"Baloo 2"', 'sans-serif']
          },
        colors: {
            'product': {
                'yellow-light': '#F1E9C9',
                'yellow': '#DBAC2C',
                'yellow-dark': '#C47F17',
                'purple-light': '#EBE5F9',
                'purple': '#8047F8',
                'purple-dark': '#4B2995'
            },
            'base': {
                'white': '#FFFFFF',
                'background': '#FAFAFA',
                'card': '#F3F2F2',
                'input': '#EDEDED',
                'button': '#E6E5E5',
                'hover': '#D7D5D5',
                'lable': '#8D8686',
                'text': '#574F4D',
                'subtitle': '#403937',
                'title': '#272221'
            },
        },
        fontSize: {
            'icon': '22px'
        },
        backgroundImage: {
            'intro': "url(http://coffee-delivery.test/imgs/intro-background.png)",
            'border-gradient': "linear-gradient(102.89deg, #DBAC2C 2.61%, #8047F8 98.76%)"
        }
      },
    },
    plugins: [],
  }
