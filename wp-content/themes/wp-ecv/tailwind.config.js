const fs = require('fs');
const themeJson = fs.readFileSync('./theme.json');
const theme = JSON.parse(themeJson);
const colors = theme.settings.color.palette.reduce((acc, item) => {
    acc[item.slug] = item.color
    return acc;
}, {});

module.exports = {
    theme: {
        mode: 'jit',
        extend: {
            borderColor: ['hover'],
            fontFamily: {
                'karla': ['Karla', 'sans-serif'],
                'dm': ['DM Serif Display', 'serif'],
            },
            screens: {
                'sm': '36rem',
                'md': '48rem',
                'lg': '62rem',
                'xl': '80rem',
                '2xl': '100rem',
            },
            colors: colors,
            fontSize: {
                'xxs': '.65rem',
                'xs': '.75rem',
                'sm': '.875rem',
                'base': '1rem',
                'lg': '1.125rem',
                'xl': '1.25rem',
                '2xl': '1.5rem',
                '3xl': '1.875rem',
                '4xl': '2.25rem',
                '5xl': '3rem',
                '6xl': '4rem',
                '7xl': '6rem',
                '8xl': '8rem',
                'heading': '2.5rem',
            },
            ratios: {
                'xs': 1.125,
                'sm': 1.333,
                'md': 1.5,
                'lg': 1.618,
                'xl': 2,
                '2xl': 3,
            },
            zIndex: {
                'before': '-1',
            },
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/line-clamp'),
    ],
    purge: {
        enabled: true,
        content: [
            './app/**/*.php',
            './templates/**/*.php',
            './footer.php',
            './header.php',
            './index.php',
            './functions.php',
            './archive-event.php',
            './single-event.php',
            './front-page.php',
        ],
    },
}
