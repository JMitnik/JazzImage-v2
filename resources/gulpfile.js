'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglifycss = require('gulp-uglifycss');

gulp.task('styles', function () {
 return gulp.src('./assets/styles/main.scss')
   .pipe(sass().on('error', sass.logError))
   .pipe(autoprefixer())
   .pipe(uglifycss())
   .pipe(gulp.dest('../public/wp-content/themes/jazzimage/styles/'));
});

gulp.task('images', function () {
  return gulp.src('./assets/images/*')
    .pipe(gulp.dest('../public/wp-content/themes/jazzimage/images/'));
})

gulp.task('fonts',  function() {
  return gulp.src('./node_modules/font-awesome/fonts/**.*')
  .pipe(gulp.dest('../public/wp-content/themes/jazzimage/fonts/'));
})

gulp.task('watch', function () {
  gulp.watch('./assets/styles/*.scss', ['styles']);
  gulp.watch('./assets/images/*',['images']);
});

