module.exports = {
  theme: {
    extend: {
      borderRadius: {
        'xl': '0.75rem'
      },
    },
    colors: {
      black: '#222228',
      white: '#fff',
      transparent: 'transparent',
      gray: {
        900: '#3E3E3E',
        500: '#737E86'
      },
      purple: {
        500: '#473288',
        400: '#7B66EF',
        300: '#372B7D'
      },
      yellow: {
        100: '#FEF4CE',
        500: '#FCA80F'
      }
    },
  },
  variants: {},
  corePlugins: {
    container: false,
  },
  plugins: [
    require('tailwind-bootstrap-grid')({
      gridGutterWidth: '32px',
    })
  ]
}