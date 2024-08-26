import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                white: "#FFFFFF",
                green: {
                    light: "#C4FF00",
                },
                blue: {
                    dark: "#303E59",
                    light: "#134B70",
                },
                gray: {
                    light: "#F5F5F5",
                },
            },
        },
    },

    plugins: [forms],
};
