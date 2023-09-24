/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.{html,php,js}", "./app/Cells/**/*.{html,php,js}"],
  theme: {
    colors: {
      primary: "#3F51B5",
      "dark-primary": "#303F9F",
      "light-primary": "#C5CAE9",
      secondary: "#FCFC11",
      "dark-secondary": "#D1D137",
      accent: "#FF5722",
      white: "#FFF",
      black: "#000",
      "light-grey": "#BDBDBD",
      "background-transparent": "rgba(0,0,0,0.66)",
    },

    extend: {
      fontFamily: {
        roboto: ["roboto", "sans-serif"],
        opens: ["open sans", "sans-serif"],
      },
    },
  },
  plugins: [],
};
