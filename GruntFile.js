module.exports = function(grunt){
    "use strict";
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        cssmin: {
            build: {
                src: 'css/compiled/site-cp-core.css',
                dest: 'css/compiled/site-cp-core.min.css'
            }
        },
        sass: {
            build: {
                files: {
                    'css/compiled/site-cp-core.css': 'css/pages/site-cp-core.scss'
                }
            }
        },
        watch: {
            css: {
                files: ['css/pages/site-astralink.scss'],
                tasks: ['buildcss']
            }
        }
    });

    grunt.registerTask('buildcss',  ['sass', 'cssmin']);
};