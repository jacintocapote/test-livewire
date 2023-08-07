const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                raleway: ['Raleway', ...defaultTheme.fontFamily.sans]
            },
            backgroundImage: theme => ({
                'car': "url('/images/background.png')",
            }),
            colors: {
                purple: "#3F54D1",
                delete: '#FF7777',
                error: '#FF9F9F',
                greyaction: '#5a5a5a80',
                scroll: "#00000080"
            },
            maxWidth: {
                'image-card': '336px',  
            },
            maxHeight: {
                'image-card': '300px',
                'image-actions': '68px',
                'image-button': '30px',
                'image-card': '336px',
                'modal': '385px',
                'gallery-container': '644px',
            },
            minWidth: {
                'gallery-container': '1248px',
                'back-list': '100px',
                'button-upload': '176px',
                'modal': '560px',
            },
            minHeight: {
                'image-actions': '68px',
                'image-button': '30px',
                'gallery-container': '720px',
                'image-card': '300px',
            },
            spacing: {
                'actions': '66.5%',
                'header-bottom': '18px',
                'header-top': '80px',
                'text-form': '312px',
                '9': '9px',
                '16': '16px',
                '40': '40px',
                '60': '60px',
                '63': '63px',
                '79': '79px',
                '320': '320px',
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
        "./node_modules/@themesberg/flowbite/**/*.js"
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
}
