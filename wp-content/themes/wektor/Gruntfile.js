module.exports = function (grunt) {
    grunt.initConfig({
            pkg: grunt.file.readJSON('package.json'),
            /**
             * Sass task
             */
            sass: {
                dev: {
                    options: {
                        style: 'expanded',
                        sourcemap: 'none'
                    },
                    files: {
                        'compiled/style-human.css': 'sass/style.scss'
                    }
                },
                dist: {
                    options: {
                        style: 'compressed',
                        require: 'susy',
                        sourcemap: 'none'
                    },
                    files: {
                        'compiled/style.css': 'sass/style.scss'
                    }
                }
            },
            /**
             * Autoprefixer
             */
            autoprefixer: {
                options: {
                    browsers: ['last 2 versions']
                },
                //prefix all files
                multiple_files: {
                    expand: true,
                    flatten: true,
                    src: 'compiled/*.css',
                    dest: ''
                }
            },

        // svgstore: {
        //     options: {
        //         prefix: 'shape-', // This will prefix each <g> ID
        //         cleanup: true,
        //         svg: { // will add and overide the the default xmlns="http://www.w3.org/2000/svg" attribute to the resulting SVG
        //             style: "display: none"
        //         }
        //     }
        //     ,
        //     default: {
        //         files: {
        //             'svg/svg-defs.svg': ['svg/*.svg']
        //         }
        //     }
        // },

        /**
             * Watch task
             */
            watch: {
                css: {
                    files: '**/*.scss',
                    // tasks: ['sass', 'autoprefixer', 'svgstore']
                    tasks: ['sass', 'autoprefixer']
                }
            }
        }
    );

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    // grunt.loadNpmTasks('grunt-svgstore');
    grunt.loadNpmTasks('grunt-autoprefixer');
    // grunt.registerTask('default', ['watch', 'svgstore']);
    grunt.registerTask('default', ['watch']);

};