module.exports = function (grunt) {
	// time
	require('time-grunt')(grunt);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		    // Compress and zip only the files required for deployment to the server. Exclude all dev dependencies.
		    compress: {
		      main: {
		        options: {
		          archive: 'packaged/<%= pkg.name %>' + grunt.template.today('_yyyy-mm-dd_HH-MM') + '.zip',
							mode: 'zip'
		        },
		        expand: true,
		        cwd: '.',
		        src: [
							'**/*',
							'!**/node_modules/**',
							'!**/components/**',
							'!**/scss/**',
							'!**/bower.json',
							'!**/Gruntfile.js',
							'!**/package.json',
							'!**/composer.json',
							'!**/composer.lock',
							'!**/codesniffer.ruleset.xml',
							'!**/packaged/*'
						],
		        dest: '<%= pkg.name %>'
		      },
		    },
		sass: {

			options: {
				// If you can't get source maps to work, run the following command in your terminal:
				// $ sass scss/foundation.scss:css/foundation.css --sourcemap
				// (see this link for details: http://thesassway.com/intermediate/using-source-maps-with-sass )
				sourceMap: true
			},

			dist: {
				options: {
					outputStyle: 'compressed'
				},
				files: {
					'assets/stylesheets/foundation.css': 'assets/scss/foundation.scss',
					'assets/stylesheets/custom-editor-style.css': 'assets/scss/custom-editor-style.scss',
				}
			}

		},

		copy: {

			scripts: {
				expand: true,
				cwd: 'assets/components/foundation/js/vendor/',
				src: '**',
				flatten: 'true',
				dest: 'assets/javascript/vendor/'
			},

			elusiveicons: {
				expand: true,
				cwd: 'assets/components/elusive-icons/fonts',
				src: ['**'],
				dest: 'assets/fonts/'
			},

			slickCarousel: {
				expand: true,
				cwd: 'assets/components/slick-carousel/slick/fonts',
				src: ['**'],
				dest: 'assets/fonts/'
			},

		},

		'string-replace': {

			elusiveicons: {
				files: {
					'assets/elusive-icons/scss/_variables.scss': 'assets/elusive-icons/scss/_variables.scss'
				},

				options: {
					replacements: [
						{
							pattern: '../fonts',
							replacement: '../assets/fonts'
						}
					]
				}

			},

			slickCarousel: {
				files: {
					'assets/slick-carousel/slick/slick-theme.scss': 'assets/slick/slick-theme.scss'
				},

				options: {
					replacements: [
						{
							pattern: './fonts',
							replacement: '../assets/fonts'
						}
					]
				}

			}

		},

		concat: {

			options: {
				separator: ';'
			},

			dist: {

				src: [

					// Foundation core
					'assets/components/foundation/js/foundation/foundation.js',

					// Pick the components you need in your project
					//'assets/components/foundation/js/foundation/foundation.abide.js',
					//'assets/components/foundation/js/foundation/foundation.accordion.js',
					//'assets/components/foundation/js/foundation/foundation.alert.js',
					//'assets/components/foundation/js/foundation/foundation.clearing.js',
					//'assets/components/foundation/js/foundation/foundation.dropdown.js',
					//'assets/components/foundation/js/foundation/foundation.equalizer.js',
					'assets/components/foundation/js/foundation/foundation.interchange.js',
					//'assets/components/foundation/js/foundation/foundation.joyride.js',
					//'assets/components/foundation/js/foundation/foundation.magellan.js',
					//'assets/components/foundation/js/foundation/foundation.offcanvas.js',
					//'assets/components/foundation/js/foundation/foundation.orbit.js',
					//'assets/components/foundation/js/foundation/foundation.reveal.js',
					//'assets/components/foundation/js/foundation/foundation.slider.js',
					//'assets/components/foundation/js/foundation/foundation.tab.js',
					//'assets/components/foundation/js/foundation/foundation.tooltip.js',
					'assets/components/foundation/js/foundation/foundation.topbar.js',

					// Include your own custom scripts (located in the custom folder)
					'assets/javascript/custom/*.js',
					'!assets/javascript/custom/my-functions.js'

				],

				// Finally, concatenate all the files above into one single file
				dest: 'assets/javascript/foundation.js'

			}

		},

		uglify: {

			dist: {
				files: {
					// Shrink the file size by removing spaces
					'assets/javascript/foundation.js': ['assets/javascript/foundation.js']
				}
			}

		},

		svgstore: {
		  options: {
		    prefix : 'sprite-', // This will prefix each <symbol> ID
		    inheritviewbox : false,
      	svg: {
      	  id : 'sprite-container',
        	xmlns : 'http://www.w3.org/2000/svg',
        	style : 'display: none;',
      	},
    //	symbol: {
    //		viewBox : '0 0 100 100', // Set your default SVG Viewport
    //		style: 'width: 100px; height: 100px;', // Set your default Size
    //	},
		  },
		  sprite: {
				files: {
				  'assets/images/sprite/sprite.svg': ['assets/images/sprite/svgs/*.svg']
				}
		  }
		},

		watch: {
			grunt: {files: ['Gruntfile.js']},

			sass: {
				files: 'assets/scss/**/*.*',
				tasks: ['sass'],
				options: {
					livereload: true
				}
			},

			js: {
				files: 'assets/javascript/custom/**/*.js',
				tasks: ['concat', 'uglify'],
				options: {
					livereload: true
				}
			},

			svg: {
				files: 'assets/images/sprite/svgs/*.svg',
				tasks: ['svgstore'],
				options: {
					livereload: true
				},
			},

			all: {
				files: '**/*.php',
				options: {
					livereload: true
				}
			}

		},

		postcss: {
      options: {
        map: true,
        processors: [
					require('pixrem')(), // add fallbacks for rem units
          require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
					require('cssnano')() // minify the result
        ]
      },
      dist: {
        src: 'assets/stylesheets/foundation.css'
      }
		},

		browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'assets/stylesheets/*.css',
                        '**/*.php',
                        'assets/javascript/**/*.js'
                    ]
                },
                options: {
                    watchTask: true,
                    // fill in proxy address of local WP server
                    proxy: ""
                }
            }
        }
	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-string-replace');
	grunt.loadNpmTasks('grunt-contrib-compress');
	grunt.loadNpmTasks('grunt-svgstore');
	grunt.loadNpmTasks('grunt-browser-sync');

	grunt.registerTask('package', ['compress:main']);
	grunt.registerTask('build', ['copy', 'string-replace:elusiveicons', 'sass', 'postcss', 'concat', 'svgstore', 'uglify']);
	grunt.registerTask('browser-sync', ['browserSync', 'watch']);
	grunt.registerTask('default', ['watch']);
};
