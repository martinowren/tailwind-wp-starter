const purgecssWordpress = require('purgecss-with-wordpress');

module.exports = {
	purge: {
		content: [
			'./**.php',
			'./src/**/**.css',
			'./src/**/**.php',
			'./src/**/**.js',
		],
		options: purgecssWordpress.safelist,
	},
	darkMode: false, // or 'media' or 'class'
	theme: {
		extend: {},
	},
	variants: {
		extend: {},
	},
	plugins: [require('@tailwindcss/forms')],
};
