var gulp = require('gulp');
var chug = require('gulp-chug');

gulp.task('default', function () {
    gulp.src([
        './app/Auth/gulpfile.js',
        './app/Back/gulpfile.js',
        './app/Guest/gulpfile.js',
    ]).pipe(chug())
});
