var gulp   = require('gulp'),
    sass   = require('gulp-sass'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');

// Compile SASS Files to regualr css
gulp.task('sass', function() {
  return gulp.src('styles/*.scss')
    .pipe(sass())
    .pipe(gulp.dest(''));
});

// Minify CSS files
gulp.task('minify-css', function() {
  return gulp.src('styles/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest(''));
});

// Minify JS Files
gulp.task('minify-js', function() {
  return gulp.src(['js/*.js', '!js/*.min.js'])
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('js'));
});

// Minify files for production
// TODO: Include autoprefixer
gulp.task('production', ['minify-js', 'minify-css'], function() {

});

// Watch task for development
// TODO: Error logs
gulp.task('watch', function() {
  gulp.watch('styles/*.scss', ['sass']);
});
