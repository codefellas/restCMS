module.exports = function (grunt) {
    grunt.initConfig({
        concat: {
            my_target: {
                files: {
                    'Js/Min.Debug.js': ['js/*.js']
                }
            }
        },
        uglify: {
            my_target: {
                files: {
                    'Js/Min.js':  ['js/*.js']
                }
            }
        },
        compass: {                  // Task
            dist: {                   // Target
                options: {              // Target options
                    config: 'config.rb'
                }
            }
        },
        watch: {
            sass: {
                files: ['css/sass/*.{scss,sass}'],
                tasks: ['compass']
            },
            css: {
                files: ['*.css']
            },
            js: {
                files: [
                    'js/*.js'
                ],
                tasks: ['concat', 'uglify'],
                options: { livereload: true }
            },
            livereload: {
                files: ['css/*.css'],
                options: { livereload: true }
            }
        }// watch
    });

    // carrega plugins
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['compass', 'concat', 'uglify', 'watch']);

};