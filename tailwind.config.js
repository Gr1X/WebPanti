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
                archivo: ['Archivo', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
                lato: ['Lato', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
            },
            backgroundImage: {
                'login-bg': "url('/images/bg.jpg')",
            },
            colors: {
                // Define your custom color palette
                custom: {
                    50: '#335441', //hijau tua
                    75: '#668C64', //hijau muda dikit
                   100: '#A9B782', //hijau muda
                   200: '#DEAE48', //oren
                   300: '#DFAE48', //kuning?
                   350: '#FFE68B',  //kuning part 2
                   375: '#FFEDA9', //kuning part 3
                   400: '#FFFDF1', //putih cuman lebih gelap dikit
                   500: '#FFFFFF'  //putih
                },
                
                cream: '#FCFBF1',
                lightGreen: '#C7A59D',
                yellowAccent: '#788D7C',
                greenPrimary: '#BC705B',
                greenDark: '#8BA172',
            },
        },
    },

    plugins: [forms],
};
