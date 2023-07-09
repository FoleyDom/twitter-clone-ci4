/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export const content = ["./app/Views/*.php", "./app/Views/**/*.php", "./app/Views/**/**/*.php", "./public/*.js"];
export const theme = {
  extend: {
    fontFamily: {
      sans: ['Inter var', ...defaultTheme.fontFamily.sans],
    },
  },
};
export const plugins = [require('@tailwindcss/forms'), require('@tailwindcss/typography'),];

