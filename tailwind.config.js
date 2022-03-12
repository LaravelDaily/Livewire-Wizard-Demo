/*const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/!*.blade.php',
        './storage/framework/views/!*.php',
        './resources/views/!**!/!*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};*/

module.exports = {
    presets: [
        require("./vendor/wireui/wireui/tailwind.config.js")
    ],
    content: [
        "./resources/**/*.blade.php",

        "./vendor/vildanbina/livewire-wizard/resources/views/*.blade.php",
        "./vendor/wireui/wireui/resources/**/*.blade.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/View/**/*.php"
    ],
    plugins: [
        require("@tailwindcss/forms"),
    ],
};
