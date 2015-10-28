module.exports = function (grunt) {


    // Define the configuration for all the tasks
    grunt.initConfig({

        watch: {

            styles: {
                files: ['assets/scss/**/*.scss'],
                tasks: ['sass'],
                options: {
                    livereload:12345,
                }
            },

        },

        sass: {

            dist: {
                files: {
                    'assets/css/style.css': 'assets/scss/style.scss'
                },            
                options: {
                        //debugInfo: true,
                        lineNumbers: true
                }
            }
        },

        /*uglify: {
            all: {
                files: {
                    'theme/js/min/js.min.js': [
                    'theme/js/**.js'
                    ]
                }
            },
        }*/

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    //grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default',['watch','sass']);

};
