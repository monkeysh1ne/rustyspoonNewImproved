var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	autoprefixer = require('gulp-autoprefixer'),
	sass = require('gulp-sass'),
	pug = require('gulp-pug'),
	reload = browserSync.reload;


/**
 * compile pug files into html
 */
 gulp.task('templates', function() {
 	
 	var YOUR_LOCALS = {};

 	return gulp.src('./app/*.pug')
 		.pipe(pug({
 			locals: YOUR_LOCALS
 		}))
 		.pipe(gulp.dest('./dist/'))
 });

 /**
  * Important!!
  * Separate task for the reaction to '.pug' files
  */
 gulp.task('pug-watch', ['templates'], reload);

 /**
  * Sass task for live injection into all browsers
  */
 gulp.task('sass', function(){
 	return gulp.src('./app/sass/*.sass')
 		.pipe(sass())
		.pipe(autoprefixer('last 2 version', 'safari 6', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
 		.pipe(gulp.dest('./dist/css'))
 		.pipe(reload({ stream: true }));
 });

gulp.task('pug', function() {
	return gulp.src('src/**/*.pug')
		.pipe(pug())
		.pipe(gulp.dest('builds/development'));
});

/**
 * Serve and watch the sass/pug files for changes
 */
 gulp.task('default', ['sass', 'templates'], function() {
 	browserSync({server: './dist'});

 	gulp.watch('./app/sass/*.sass', ['sass']);
 	gulp.watch('./app/*.pug', ['pug-watch']);
 });

