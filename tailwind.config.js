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
      "blue-sky": "#31CFF6",
      "grey-dark": "#333333",
    },

    extend: {
      fontFamily: {
        roboto: ["roboto", "sans-serif"],
        opens: ["open sans", "sans-serif"],
      },
      animation: {
        toggleTheme: "toggleTheme 2s ease-in-out infinite",
        load: "load 2s .2s ease-in-out forwards",
        "slide-down": "slide-down .6s ease-in-out forwards",
      },
      keyframes: {
        toggleTheme: {
          "0%": { transform: "rotate(0deg)" },
          "100%": {
            transform: "rotate(360deg) translateY(4rem)",
          },
        },
        load: {
          "0%": {
            transform: "scaleX(1)",
          },
          "100%": {
            transform: "scaleX(0)",
          },
        },
        "slide-down": {
          from: {
            transform: "translateY(-2rem)",
          },
          to: {
            transform: "translateY(0)",
          },
        },
      },
    },
  },
  darkMode: "class",
  plugins: [],
};
