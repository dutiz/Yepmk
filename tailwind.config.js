module.exports = {
  theme: {
    extend: {
      borderRadius: {
        'xl': '0.75rem'
      }
    }
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