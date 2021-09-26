const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    darkMode: 'class',
    theme: {
        extend: {},
        screens: {
            'tablet': '48em', // '768px',
            'desktop': '64em', // '1024px',
            'landscape': { 'raw': '(orientation: landscape)' },
            'print': { 'raw': 'print' },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.warmGray,
            red: colors.red,
        },
        'responsive-font': {
            'min-fs': '0.875', // 14px
            'max-fs': '1.00', // 16px
            'min-vw': '20', // 320px
            'max-vw': '45', // 720px
        }
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('./tailwind.responsive-font'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
