var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function(){
	return gulp.src('scss/**/*.scss')
	    .pipe(sourcemaps.init())
		.pipe(sass({ includePaths: ['../'] }).on('error', sass.logError))
    	.pipe(sourcemaps.write())
		.pipe(gulp.dest('../'))
});

gulp.task('watch', ['sass'], function(){
  
  gulp.watch('scss/**/*.scss', ['sass']);
});