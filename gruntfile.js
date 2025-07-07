module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
          options:{
              style: 'compressed'
          },
          files: {
            'wp-content/themes/TestAssociates/assets/css/style.css' : ['assets/sass/style.scss']
          }
      }
  },

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      dist: {
        files: {
          'wp-content/themes/TestAssociates/assets/js/main.js' : ['assets/js/libraries/*.js']
        }
      }
    },

    watch: {
      css : {
        files: [
          'wp-content/themes/TestAssociates/assets/css/style.css' , 'assets/sass/**/*.scss'],
          tasks: ['sass']
        },

      js : {
        // files: 'wp-content/themes/TestAssociates/assets/js/libraries/*.js',
        files: 'assets/js/libraries/*.js',
        tasks: ['uglify']
      },
      options: {
        livereload: true,
      },
    },
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  // grunt.loadNpmTasks('grunt-contrib-jshint');
  // grunt.loadNpmTasks('grunt-contrib-qunit');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.registerTask('default',['watch']);
};