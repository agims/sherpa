var gulp = require('gulp');
var compass = require('gulp-compass');

gulp.task('default', function() {
  // place code for your default task here
});

gulp.task('compass', function() {
	gulp.src('./src/*.scss')
		.pipe(compass({
			config_file: './config.rb',
			css: 'css',
			sass: 'scss',
			sourcemap: true
		})
	)
	.pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
	gulp.watch('./scss/**/*.scss',['compass']);
	gulp.watch('./scss/**/*.sass',['compass']);
});