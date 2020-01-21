module.exports = function(grunt) {

   // Project configuration.
   grunt.initConfig({
      sass:{
         dist: {
            files: {                     
               'style.css': './sass/style.scss',       // 'destination': 'source'
             }
          }
      },
      autoprefixer:{
         options: {
            browsers: ['> 0%'],
          },
         dist:{
            files:{
               './style.css':'./style.css',
            }
         }
      },
      watch:{
         scripts:{
            files:["./sass/*/*.scss"],
            tasks:["scss"]
         }
      }
   });
 
   grunt.loadNpmTasks('grunt-contrib-sass');
   grunt.loadNpmTasks('grunt-autoprefixer');
   grunt.loadNpmTasks('grunt-contrib-watch');

   grunt.registerTask('scss', ['sass','autoprefixer']);

 };