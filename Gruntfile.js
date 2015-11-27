module.exports = function (grunt) {


    // Define the configuration for all the tasks
    grunt.initConfig({

        watch: {

            styles: {
                files: [
                    'assets/scss/**/*.scss', 
                    'modelbuffs.com/assets/scss/**/*.scss',
                    'planearts.com/assets/scss/**/*.scss',
                    'mymahoganymodel.com/assets/scss/**/*.scss',
                ],
                tasks: ['sass'],
                options: {
                    livereload:12345,
                }
            },

            copy: {
                files: ['modelbuffs.com/*'],
                tasks: ['copy'],
            },            

        },

        sass: {

            dist: {
                files: {
                    'assets/css/style.css': 'assets/scss/style.scss',
                    'modelbuffs.com/assets/css/style.css': 'modelbuffs.com/assets/scss/style.scss',
                    'planearts.com/assets/css/style.css': 'planearts.com/assets/scss/style.scss',
                    'mymahoganymodel.com/assets/css/style.css': 'mymahoganymodel.com/assets/scss/style.scss',
                },            
                options: {
                        //debugInfo: true,
                        lineNumbers: true
                }
            }
        },

        copy: {
          planearts: {
            expand: true,
            cwd: 'modelbuffs.com/',
            src: ['**', '!**/assets/**'],
            dest: 'planearts.com/',
          },
          mymahogany: {
            expand: true,
            cwd: 'modelbuffs.com/',
            src: ['**', '!**/assets/**'],
            dest: 'mymahoganymodel.com/',
          },          
        },        

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('default',['watch','sass']);

};
