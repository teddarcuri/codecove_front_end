module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Javscript Concatenation
    uglify: {
      build: {
        src: 'javascripts/*.js',
        dest: 'javascripts/build/global.min.js'
      }
    },

    // Sass Processing
    sass: {
      dist: {
        options: {
          // Compressed output
          style: 'expanded',
          // Include Bourbon & Neat
          loadPath: require('node-neat').includePaths,
        },
        files: {
          'stylesheets/style.css' : 'stylesheets/sass/style.scss'
        }
      }
    },

    // Auto Reloading
    watch: {
      files: ['*'],
      options: {
        livereload: true,
      },
      scripts: {
        files: ['javascripts/*.js'],
        tasks: ['uglify'],
      },
      css: {
        files: '**/sass/**',
        tasks: ['sass'],
      },
    },

    imagemin: {                          // Task
      dynamic: {  
        options: {                       // Target options
          optimizationLevel: 3,
        }, 
        files: [{
          expand: true,                  // Enable dynamic expansion
          cwd: 'images/',                   // Src matches are relative to this path
          src: ['**/*.*'],   // Actual patterns to match
          dest: 'images/'                  // Destination path prefix
        }]
      }
    }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Sass Compiling
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Image Optimization
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Watch for changes
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'sass', 'watch', 'imagemin']);

};