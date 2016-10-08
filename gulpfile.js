var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    brwoserSync = require('browser-sync').create();

// Compile SASS Files to regualr css
gulp.task('sass', function() {
  gulp.src('styles/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(''));
});

gulp.task('serve', ['sass'], function() {
  brwoserSync.init({
    proxy: "http://localhost:8888/wordpress/"
  });

  gulp.watch('styles/*.sass', ['sass']);
})
