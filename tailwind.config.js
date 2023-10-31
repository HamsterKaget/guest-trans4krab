import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#000d25",
            },
            animation: {
                bounce: " bounce 1.1s infinite",
            },
            keyframes: {
                bounce: {
                    "0%, 100%": {
                        transform: "translateY(-7%)",
                        "animation-timing-function":
                            "cubic-bezier(0.8, 0, 1, 1)",
                    },
                    "50%": {
                        transform: "translateY(0)",
                        "animation-timing-function":
                            "cubic-bezier(0, 0, 0.2, 1)",
                    },
                },
            },
        },
    },

    plugins: [
        forms,
        require("flowbite/plugin")({
            charts: true,
        }),
    ],
    darkMode: "class",
};

// module.exports = {
//     content: [
//       "./resources/**/*.blade.php",
//       "./resources/**/*.js",
//       "./resources/**/*.vue",
//       "./node_modules/flowbite/**/*.js"
//     ],
//     theme: {
//       extend: {},
//     },
//     plugins: [
//         require('flowbite/plugin')
//     ],
//   }
