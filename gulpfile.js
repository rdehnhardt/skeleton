var gulp = require('gulp');
var chug = require('gulp-chug');

gulp.task('default', function () {
    gulp.src([
        './app/Back/resources/gulpfile.js',
    ]).pipe(chug())
});

