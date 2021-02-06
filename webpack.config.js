/**
 * Webpack configuration.
 */
const isProductionMode = process.env.NODE_ENV === 'production';
console.log(
	isProductionMode
		? 'Running production build'
		: 'Starting development server'
);

const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

const BUILD_PATH = path.resolve(__dirname, 'dist');

module.exports = {
	entry: './src/js/index.js',
	output: {
		filename: 'main.js',
		path: BUILD_PATH,
	},
	module: {
		rules: [
			{
				test: /\.css$/,
				use: [
					MiniCssExtractPlugin.loader,
					'css-loader',
					'postcss-loader',
				],
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: 'style.css',
		}),
	],
	optimization: {
		minimize: isProductionMode ? true : false,
		minimizer: [new CssMinimizerPlugin(), new UglifyJsPlugin()],
	},
};
