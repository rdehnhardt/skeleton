var gulp = require('gulp');
var chug = require('gulp-chug');

gulp.task('default', function () {
    gulp.src([
        './app/Back/gulpfile.js',
    ]).pipe(chug())
});

