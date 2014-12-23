'use strict';

module.exports = function(grunt){

	// Load all tasks
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		
		watch:{
			css:{
				files: ['src/sass/**/*.scss', 'public/css/style.css'],
				tasks: ['sass']
			},

			js:{
				files: ['Gruntfile.js', 'src/js/**/*.js'],
				tasks: ['jshint','uglify']
			},

			options:{
				livereload: 35729
			},

			php:{
				files:['**/*.php'],
				options:{
					livereload: 35729
				}
			}

		},

		jshint:{
			options:{jshintrc: '.jshintrc'},

			all: [
				'Gruntfile.js',
				'src/app.js'
			]
		},

		uglify:{
			options:{
				mangle: false 
			},

			my_target:{

			files:{
				'public/js/app.min.js': [
				 'src/js/vendor/*.js',
				 'src/js/lib/*.js',
				 'src/js/app.js'
				]
			}
		 }
		},

		sass:{ 
			dist:{
				options:{ style: 'compressed' },
				files:{ 'public/css/style.css' : 'src/sass/style.scss' }
			}
		},//sass(scss)



});

	//Carregar plugins

	// grunt.loadNpmTasks('grunt-contrib-uglify');
	// grunt.loadNpmTasks('grunt-contrib-sass');


	//registrando tarefas

	grunt.registerTask( 'default', [ 'watch' ] ); 


};