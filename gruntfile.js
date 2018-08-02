module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),
        sass: {
            site: {
                options: {
                    sourcemap: "inline",
                    style: "nested"
                },
                files: {
                    "css/main.css": "css/main.scss"
                }
            }
        },
        cssmin: {
            options: {
                sourceMap: false
            },
            minify_site_css: {
                files: [{
                    expand: true,
                    cwd: "css",
                    src: [
                        "*.css",
                        "!*.min.css"
                    ],
                    dest: "css",
                    ext: ".min.css"
                }]
            }
        },
        uglify: {
            default: {
                options: {
                    compress: true,
                    mangle: true,
                    sourceMap: true
                },
                files: {
                    "js/main.min.js": [
                        "js/main.js"
                    ]
                }
            }
        },
        watch: {
            options: {
                livereload: true
            },
            watch_scss_files: {
                files: [
                    "css/*.scss"
                ],
                tasks: [
                    "sass:site"
                ]
            },
            watch_css_files: {
                files: [
                    "css/main.css"
                ],
                tasks: [
                    "cssmin:minify_site_css"
                ]
            },
            watch_js_files: {
                files: [
                    "js/main.js"
                ],
                tasks: [
                    "uglify"
                ]
            }
        }
    });

    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-postcss");
    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks("grunt-contrib-copy");
    grunt.loadNpmTasks("grunt-contrib-watch");

    grunt.registerTask("clean-dist", [
        "cssmin:minify_site_css"
    ]);
    grunt.registerTask("build", [
        "sass",
        "cssmin",
        "uglify"
    ]);
    //grunt.registerTask("default", ["ts"]);
    grunt.registerTask("default", [
        "watch"
    ]);

};