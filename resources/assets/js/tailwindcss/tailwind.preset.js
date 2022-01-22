const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {},
        screens: {
            'tablet': '48em', // '768px',
            'desktop': '64em', // '1024px',
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.stone,
            red: colors.red,
        },
        'responsive-font': {
            'min-fs': '0.875', // 14px
            'max-fs': '1.00', // 16px
            'min-vw': '20', // 320px
            'max-vw': '45', // 720px
        }
    },
    plugins: [
        require('./tailwind.responsive-font'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/typography'),
    ],
}
