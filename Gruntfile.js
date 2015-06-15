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
          'css/font-awesome/fonts':'font-awesome/fonts'
        }
      },
      libsBootStrap:{
        options:{ destPrefix:'js/lib'},
        files:{
          '':'bootstrap/dist/js/*min*.js'
        }
      },
      libsJQuery:{
        options:{ destPrefix:'js/lib'},
        files:{
          '':'jquery/dist/*min*.js'
        }
      },
      libsJQueryCSV:{
        options:{ destPrefix:'js/lib'},
        files:{
          '':'jquery-csv/src/*min*.js'
        }
      },
      libsD3:{
        options:{ destPrefix:'js/lib'},
        files:{
          '':'d3/*min*.js'
        }
      }
    },
    copy:{
      dist:{
        files:[
          {expand:true, src:['./*.html'],dest:'./dist'},
          {expand:true, src:['./*.csv'],dest:'./dist'},
          {expand:true, src:['./*.json'],dest:'./dist'},
          {expand:true, src:['./js/**'],dest:'./dist'},
          {expand:true, src:['./css/**'],dest:'./dist'},
          {expand:true, src:['./img/**'],dest:'./dist'},
          {expand:true, src:['./video/**'],dest:'./dist'},
          {expand:true, src:['./audio/**'],dest:'./dist'}
        ]
      }
    },
    clean:{
      dist:['./dist/*.html','./dist/css','./dist/js','./dist/img']
    }
  });

   grunt.registerTask("default", ["jasmine_node","bowercopy:dev",
     "bowercopy:libsBootStrap",
     "bowercopy:libsJQuery",
     "bowercopy:libsJQueryCSV",
     "bowercopy:libsD3","watch"]);
   grunt.registerTask("dist",["jshint","clean:dist","copy:dist"]);
}
  