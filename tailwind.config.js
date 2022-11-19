const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                Spinner: 'Spinner 10s linear infinite '
            },
            keyframes: {
                Spinner: {
                    '0%' :{
                        transform : 'rotate(0deg)'
                    },
                    '100%' : {
                        transform : 'rotate(360deg)'
                        
                    }   
                }
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tailwind-scrollbar-hide')
    ],
};
