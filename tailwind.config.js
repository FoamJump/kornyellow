/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./templates/**/*",
		"./contents/**/*",
		"./contents/index.php",
	],
	theme: {
		extend: {},
	},
	plugins: [
		require("daisyui"),
	],
}
