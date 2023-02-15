/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                sm: "767px",
                xs: "425px",
            },
            colors: {
                "black-slate": "#1B2024",
                "white-slate": "#D1D2D3",
                "slate-primary": "#F5F2F0",
                "orange-primary": "#D4A96F",
                "grey-primary": "#B8B6B5",
                "grey-text": "#3E3D3C",
                "gray-primary": "#22272B",
            },
            dropShadow: {
                "text-sm": "1px 1px 0px rgba(0,0,0.90)",
                "text-md": "1px 1px 2px rgba(0,0,0.90)",
                "text-lg": "1px 1px 3px rgba(0,0,0.90)",
                "text-xl": "1px 2px 4px rgba(0,0,0.90)",
            },
            container: {
                center: true,
                padding: {
                    DEFAULT: "1rem",
                    sm: "2rem",
                    lg: "4rem",
                    xl: "5rem",
                    "2xl": "6rem",
                },
            },
            fontFamily: {
                sans: ["Figtree", "sans-serif"],
                display: ["Roboto"],
                body: ["Lora"],
                Amatic: ["Amatic SC"],
            },
            fontSize: {
                xsm: ["clamp(0.62rem, calc(0.58rem + 0.30vw), 0.92rem)", "1.4"],
                msm: ["clamp(0.70rem, calc(0.62rem + 0.29vw), 1.10rem)", "1.4"],
                ssm: ["clamp(0.90rem, calc(0.82rem + 0.29vw), 1.10rem)", "1.4"],
                sm: ["clamp(1.00rem, calc(0.92rem + 0.39vw), 1.20rem)", "1.4"],
                base: [
                    "clamp(1.13rem, calc(0.98rem + 0.73vw), 1.40rem)",
                    "1.5",
                ],
                lg: ["clamp(1.27rem, calc(1.03rem + 1.19vw), 1.88rem)", "1.4"],
                xl: ["clamp(1.42rem, calc(1.06rem + 1.80vw), 2.34rem)", "1.4"],
                "2xl": [
                    "clamp(1.60rem, calc(1.08rem + 2.59vw), 2.93rem)",
                    "1.2",
                ],
                "3xl": [
                    "clamp(1.80rem, calc(1.08rem + 3.63vw), 3.66rem)",
                    "1.1",
                ],
                "3.5xl": [
                    "clamp(2.00rem, calc(1.03rem + 4.98vw), 4.5rem)",
                    "1",
                ],
                "4xl": [
                    "clamp(2.00rem, calc(1.03rem + 4.98vw), 4.958rem)",
                    "1",
                ],
                "5xl": ["clamp(2.28rem, calc(0.94rem + 6.71vw), 5.72rem)", "1"],
                "6xl": ["clamp(2.57rem, calc(0.78rem + 8.95vw), 7.15rem)", "1"],
            },
        },
    },
    plugins: [],
};
