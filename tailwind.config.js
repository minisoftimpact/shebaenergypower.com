import forms from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                inter: ['Inter', 'sans-serif'],
            },
            colors: {
                brand: {
                    primary: "#F9B512",
                    secondary: "#EE2026",
                },
            },
            container: {
                center: true,
                screens: {
                    sm: "640px",
                    md: "768px",
                    lg: "1024px",
                    xl: "1024px",
                    "2xl": "1080px",
                },
                padding: "1rem",
            },
        },
    },

    plugins: [forms],
};
