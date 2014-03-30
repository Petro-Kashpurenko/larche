/*global module:false*/
module.exports = function(grunt) {

    grunt.initConfig({
        jshint: {
            files: ['Gruntfile.js', 'src/js/app/**/*.js', 'src/js/app/*.js'],
        },

        compass: {
            dist: {
                options: {
                    config: 'config.rb',
                    require: 'susy',
                    cssDir: 'css'
                }
            }
        },

        watch: {
            styles: {
                files: ['sass/**/*.scss', 'sass/*.scss'],
                tasks: ['compass']
            }
        }

    });


    // Load JSHint task
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task.
    grunt.registerTask('default', 'jshint', 'compass');
};