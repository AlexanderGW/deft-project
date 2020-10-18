module.exports = function (grunt) {
	const sass = require('node-sass');

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			theme: {
				options: {
					implementation: sass,
					sourceMap: true
				},
				files: {
					'vendor/alexandergw/deft/src/plugin/example/asset/example.css': 'vendor/alexandergw/deft/src/plugin/example/asset/example.scss',
					'vendor/alexandergw/deft/src/plugin/debug/asset/debug.css': 'vendor/alexandergw/deft/src/plugin/debug/asset/debug.scss'
				}
			}
		},
		watch: {
			sass: {
				files: ['**/*.scss'],
				tasks: [
					'sass:theme'
				]
			}
		}
	});
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', [
		'sass:theme'
	]);
};