const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addBase, theme }) {
    addBase({
        ':root': {
            '--min-fs': theme('responsive-font.min-fs'),
            '--max-fs': theme('responsive-font.max-fs'),
            '--min-vw': theme('responsive-font.min-vw'),
            '--max-vw': theme('responsive-font.max-vw'),
            '--min-fs-rem': 'var(--min-fs) * 1rem',
            '--max-fs-rem': 'var(--max-fs) * 1rem',
            '--min-vw-rem': 'var(--min-vw) * 1rem',
            '--slope': '(var(--max-fs) - var(--min-fs)) * (100vw - var(--min-vw-rem)) / (var(--max-vw) - var(--min-vw))',
            'font-size': 'clamp(var(--min-fs-rem), var(--min-fs-rem) + var(--slope), var(--max-fs-rem))',
        },
    })
}, {
    theme: {
        'responsive-font': {
            'min-fs': '1', // 16px
            'max-fs': '1.25', // 20px
            'min-vw': '20', // 320px
            'max-vw': '45', // 720px
        }
    }
})
