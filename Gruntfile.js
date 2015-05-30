module.exports = function(grunt){
	"use strict";
  grunt.loadNpmTasks("grunt-jasmine-node");
  grunt.loadNpmTasks("grunt-contrib-jshint");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-bowercopy");
  grunt.loadNpmTasks("grunt-contrib-copy");
  grunt.loadNpmTasks("grunt-contrib-clean");
  grunt.initConfig({
  	pkg:grunt.file.readJSON("package.json"),
  	/**
  	*Jasmine configuration
  	*/
    jasmine_node: {
      options: {
        forceExit: true,
        match: '.',
        matchall: false,
        extensions: 'js',
        specNameMatcher: 'spec'
      },
       all: ['test/']
    },
    /**
      * jshint
      * Static analysis of JavaScript source files
      */
    jshint: {
      options: { jshintrc: ".jshintrc" },
      all: {
        src: [
          "/js/*.js","!Grunt*.js","!*spec.js"
        ]
      }
    },
    /**
    * Watch this files
    **/
    watch:{
    	js:{files:["js/*.js","!Grunt*.js","test/*spec.js"],tasks:["jshint", "jasmine_node"]}
    },

    /**
     * bower Copy for distribution
     */
    bowercopy:{
      dev:{
        files:{
          'css/bootstrap/css':'bootstrap/dist/css',
          'css/font-awesome/css':'font-awesome/css',
          'css/bootstrap/fonts':'bootstrap/dist/fonts',
          'css/font-awesome/fonts':'font-awesome/fonts',
          'js/bootstrap':'bootstrap/dist/js',
          'js/jquery':'jquery/dist'
        }
      }
    },
    copy:{
      dist:{
        files:[
          {expand:true, src:['./*.html'],dest:'./dist'},
          {expand:true, src:['./js/*.js'],dest:'./dist'},
          {expand:true, src:['./css/**'],dest:'./dist'},
          {expand:true, src:['./fonts/**'],dest:'./dist'}
        ]
      }
    },
    clean:{
      dist:['./dist/*.html','./dist/css','./dist/js']
    }
  });

   grunt.registerTask("default", ["jasmine_node","bowercopy:dev","watch"]);
   grunt.registerTask("dist",["jshint","clean:dist","copy:dist"]);
}
  