module.exports = function(grunt){
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-imagemin');

    require ('time-grunt')(grunt);

    grunt.initConfig({

        copy: {
            main: {
                files: [{
                    expand: true,
                    cwd: 'dev/',
                    src: ['**/*.html'],
                    dest: 'dist/'
                }]
            }
        },

        imagemin: {
            dist: {
                files: [{
                    expand: true,
                    cwd: './dev/images',
                    src: '{,*/}**/*.{png,jpg,jpeg,svg}',
                    dest: './dist/images'
                }]
            }
        },

        uglify: {
            dev: {
                files: {
                    'dist/js/scripts.js' : ['dev/javascripts/**/*.js']
                }// End files
            } // End dev
        }, // End uglify

        compass: {

            dev: {
                options: {
                    sassDir: 'dev/scss',
                    cssDir: 'dist/css',
                    environment: 'development',
                    require: ['susy', 'breakpoint'],
                    outputStyle: 'expanded',
                    app: 'stand_alone'
                }// End options
            } // End dev

        }, // End compass

        watch: {
            options: {
                livereload: true
            }, // End options

            images: {
                files: ['dev/images/*.*'],
                tasks: ['imagemin:dist']
            }, // End images

            scss: {
                files: ['dev/scss/**/*.scss'],
                tasks: ['compass:dev']
            }, // End scss

            js: {
                files: ['dev/javascripts/**/*.js'],
                tasks: ['uglify:dev']
            }, // End js

            html: {
                livereload: true,
                files: ['dev/*.html'],
                tasks: 'copy:main'
            }

        } // End watch

    }); // End initConfig

    grunt.registerTask('default', ['watch']);

}; // End module.exports