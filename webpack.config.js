/**
 * Webpack configuration.
 */

/**
 ** Mode settings
 */
const isProductionMode = process.env.NODE_ENV === 'production';
console.log(
	isProductionMode
		? 'Running production build'
		: 'Starting development server'
);

/**
 * Imports
 */
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

/**
 * Paths
 */
const ENTRY_PATH = './src/js/index.js';
const BUILD_PATH = path.resolve(__dirname, 'dist');

/**
 * Filenames
 */
const JS_BUILD_FILENAME = 'main.js';
const CSS_BUILD_FILENAME = 'style.css';

module.exports = {
	entry: ENTRY_PATH,
	output: {
		filename: JS_BUILD_FILENAME,
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
			{
				test: /\.m?js$/,
				exclude: /(node_modules|bower_components)/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['@babel/preset-env'],
					},
				},
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: CSS_BUILD_FILENAME,
		}),
	],
	optimization: {
		minimize: isProductionMode ? true : false,
		minimizer: [new CssMinimizerPlugin(), new UglifyJsPlugin()],
	},
};
