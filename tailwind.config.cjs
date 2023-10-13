/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
	theme: {
		extend: {
			fontFamily: {
				nunito: ['Nunito Sans'],
			},
			colors: {
			primaryGreen: '#39AF97',
			textSecondary: '#FFFFFF',
			backSoft: '#def2ee',
			pink: '#BF8092',
			},
		},
	},
	plugins: [],
}
	