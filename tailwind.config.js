const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './storage/framework/views/*.php',
        './resources/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito sans', 'Nunito', ...defaultTheme.fontFamily.sans],
            },
            typography: {
                DEFAULT: {
                    css: {
                        a: {
                            'text-decoration': 'none',
                            '&:hover': {
                                'text-decoration': 'none',
                            },
                        },
                    },
                },
            },
            boxShadow: {
                link: '0 -4px 0 0 rgba(252, 165, 165, 0.4) inset',
                'link-hover': '0 -4px 0 0 rgba(252, 165, 165, 1) inset',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};
