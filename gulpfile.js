'use strict';

const gulp = require('gulp');
const concat = require('gulp-concat');
const debug = require('gulp-debug');
const cleanCSS = require('gulp-clean-css');
const htmlmin = require('gulp-htmlmin');
const runSequence = require('run-sequence');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');
const newer = require('gulp-newer');
const del = require('del');

const fontsSrc = 'assets/fonts/**/*.*';
const fontsDest = 'public/assets/fonts';

const imgSrc = 'assets/images/**/*.*';
const imgDest = 'public/assets/images';

gulp.task('styles', function(){

	return gulp.src([
		'assets/css/bootstrap.min.css', 
		'assets/css/open-iconic-bootstrap.min.css',
		'assets/css/app.css'
		])
	.pipe(sourcemaps.init())
	.pipe(concat('app.css'))
	.pipe(cleanCSS())
	.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest('./public/assets/css'));

});

gulp.task('styles:prod', function(){

	return gulp.src([
		'assets/css/bootstrap.min.css', 
		'assets/css/open-iconic-bootstrap.min.css',
		'assets/css/app.css'
		])
	.pipe(concat('app.css'))
	.pipe(cleanCSS())
	.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest('./public/assets/css'));

});

gulp.task('scripts', function(){

	return gulp.src([
		'assets/js/bootstrap.min.css', 
		'assets/js/lang.js',
		'assets/js/app.js'
		])
	.pipe(concat('app.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./public/assets/js'));

});


gulp.task('compress:js', function(){
  gulp.src('./public/assets/js/app.js')
  .pipe(uglify())
  .pipe(gulp.dest('./public/assets/js/'))
});


gulp.task('minify:html', function() {
  return gulp.src('index.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('./public'));
});

gulp.task('images', () =>
	gulp.src(imgSrc)
		.pipe(newer(imgDest))
		.pipe(imagemin())
		.pipe(gulp.dest(imgDest))
);

gulp.task('fonts', () =>
	gulp.src(fontsSrc)
		.pipe(newer(fontsDest))
		.pipe(imagemin())
		.pipe(gulp.dest(fontsDest))
);

gulp.task('scripts:watch', function() {
  return runSequence(
    'scripts',
    'compress:js');
});

gulp.task('build', function() {
  return runSequence(
  	'styles',
    'scripts',
    'compress:js',
    'minify:html');
});

gulp.task('prod', function() {
  return runSequence(
  	'clean',
  	'fonts',
  	'styles:prod',
    'scripts',
    'compress:js',
    'minify:html',
    'images');
});

gulp.task('watch', function(){

	gulp.watch('assets/css/*.*', ['styles']);
	gulp.watch('assets/js/*.*', ['scripts:watch']);
	gulp.watch('index.html', ['minify:html']);

})

gulp.task('clean', function() {
  return del('public');
});
