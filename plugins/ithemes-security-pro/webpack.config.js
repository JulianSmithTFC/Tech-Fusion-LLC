const ExtractTextPlugin = require( 'extract-text-webpack-plugin' );
const debug = process.env.NODE_ENV !== 'production';
const glob = require( 'glob' );
const path = require( 'path' );
const autoprefixer = require( 'autoprefixer' );

// Main CSS loader for everything but blocks..
const mainCSSExtractTextPlugin = new ExtractTextPlugin( {
	filename: function( getPath ) {
		return getPath( debug ? '[name].css' : '[name].min.css' ).replace( '/js/', '/css/' );
	},
} );

// Configuration for the ExtractTextPlugin.
const extractConfig = {
	use: [
		{ loader: 'raw-loader' },
		{
			loader: 'postcss-loader',
			options: {
				plugins: [
					autoprefixer,
				],
			},
		},
		{
			loader: 'sass-loader',
			options: {
				outputStyle: debug ? 'nested' : 'compressed',
				sourceMap: debug ? 'inline' : false,
				includePaths: [
					'packages/style-guide/src',
				],
			},
		},
	],
};

/*
Convert the wildcard entry points into an entry object suitable for Webpack consumption.

This requires an object where the key is the path to the destination file without a file extension
and the value is the path to the source file.

For Example:
[ 'pro/dashboard/entries/dashboard.js' ]
{ 'pro/dashboard/js/dashboard': './pro/dashboard/entries/dashboard.js' }
*/
const entries = glob.sync( 'pro/**/entries/*.js' ).reduce( function( acc, entry ) {
	const baseName = path.basename( entry, '.js' );
	const out = path.join( entry, '..', '..', 'js', baseName );

	acc[ out ] = './' + entry; // The entry needs to be marked as relative to the current directory.

	return acc;
}, {} );

function camelCaseDash( string ) {
	return string.replace(
		/-([a-z])/g,
		( match, letter ) => letter.toUpperCase()
	);
}

const wpPackages = [
	'a11y',
	'api-fetch',
	'autop',
	'blob',
	'blocks',
	'block-library',
	'block-serialization-default-parser',
	'block-serialization-spec-parser',
	'components',
	'compose',
	'core-data',
	'data',
	'date',
	'deprecated',
	'dom',
	'dom-ready',
	'edit-post',
	'editor',
	'element',
	'escape-html',
	'format-library',
	'hooks',
	'html-entities',
	'i18n',
	'is-shallow-equal',
	'keycodes',
	'list-reusable-blocks',
	'notices',
	'nux',
	'plugins',
	'redux-routine',
	'rich-text',
	'shortcode',
	'token-list',
	'url',
	'viewport',
	'wordcount',
];

const externals = {
	react: 'React',
	'react-dom': 'ReactDOM',
	moment: 'moment',
	jquery: 'jQuery',
	lodash: 'lodash',
	'lodash-es': 'lodash',
};

wpPackages.forEach( ( name ) => {
	externals[ `@wordpress/${ name }` ] = [ 'wp', camelCaseDash( name ) ];
} );

const config = {
	context: __dirname,
	devtool: debug ? 'inline-sourcemap' : false,
	mode: debug ? 'development' : 'production',
	entry: entries,
	output: {
		path: __dirname,
		filename: debug ? '[name].js' : '[name].min.js',
	},
	externals,
	module: {
		rules: [
			{ parser: { amd: false } },
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: [
					{
						loader: 'babel-loader',
					},
				],
			},
			{
				test: /\.s?css$/,
				use: mainCSSExtractTextPlugin.extract( extractConfig ),
			},
			{
				test: /\.svg$/,
				exclude: /node_modules/,
				use: [
					{
						loader: 'svg-react-loader',
						query: {
							classIdPrefix: 'itsec-icon-[name]-[hash:5]__',
						},
					},
				],
			},
		],
	},
	plugins: [
		mainCSSExtractTextPlugin,
	],
	resolve: {
		modules: [
			path.resolve( './' ),
			path.resolve( './node_modules' ),
		],
	},
};

module.exports = config;
