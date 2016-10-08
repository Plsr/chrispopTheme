var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    browserSync = require('browser-sync').create();

// Compile SASS Files to regualr css
gulp.task('sass', function() {
  gulp.src('styles/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(''))
    .pipe(browserSync.stream());
});

gulp.task('serve', ['sass'], function() {
  browserSync.init({
    proxy: "http://localhost:8888/wordpress/"
  });

  gulp.watch('styles/**/*.scss', ['sass']);
})
