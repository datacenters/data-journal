module.exports = function(grunt) {

  // load all grunt tasks
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  grunt.initConfig({
    compass: {
      dist: {
        options: {
          sassDir: 'assets/style/scss',
          cssDir: 'assets/style/css'
        }
      }
    },
    concat: {
      dist: {
        src:  ['assets/js/components/jquery.js', 'assets/js/components/**/*.js', 'assets/js/*.js', '!assets/js/global.min.js', 'assets/js/global.js'],
        dest: 'assets/js/concat/global.concat.js'
      }
    },
    uglify: {
      dist: {
        src:  'assets/js/concat/global.concat.js',
        dest: 'assets/js/global.min.js'
      }
    },
    cssmin: {
      dist: {
        src: 'assets/style/css/main.css',
        dest: 'assets/style/css/main.min.css'
      }
    },
    clean: ['assets/js/concat'],

    watch: {
      sass: {
        files: ['assets/style/scss/**/*.scss'],
        tasks: ['compass', 'cssmin'],
        options: {
          livereload: true,
        },
      },
      js: {
        files: ['assets/js/*.js', 'assets/js/components/**/*.js', '!assets/js/global.min.js'],
        tasks: ['concat', 'uglify', 'clean'],
        options: {
          livereload: true,
        },
      },
    }

  });

  grunt.registerTask('default', 'watch');

}
