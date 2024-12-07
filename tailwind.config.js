import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'login-bg': "url('/images/bg.jpg')",
            },
            colors: {
                // Define your custom color palette
                custom: {
                    50: '#546C8E',  //Biru 
                    100: '#A95B51', //Merah
                    200: '#B9877C', //Pink
                    300: '#FFFFFF', //Putih
                    400: '#1B2A39'  //Hitam
                },
            },
        },
    },

    plugins: [forms],
};
