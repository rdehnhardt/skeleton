var gulp = require('gulp');
var chug = require('gulp-chug');

gulp.task('default', function () {
    var modules = [
        './app/Back/resources/gulpfile.js'
    ];

    gulp.src(modules).pipe(chug());
});

