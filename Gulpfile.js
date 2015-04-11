var gulp = require('gulp'),
	watch = require('gulp-watch'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin'),
	autoprefixer = require('gulp-autoprefixer'),
	sass = require('gulp-sass'),
	browserSync = require('browser-sync'),
	cssmin = require('gulp-minify-css'),
	svgSymbols = require('gulp-svg-symbols'),
    svgmin = require('gulp-svgmin'),
    evilIcons = require('gulp-evil-icons'),
	localURL = 'http://localhost/maws-recipes.com/';



gulp.task('sass', function (){
			return gulp.src('sass/**/*.scss')
			.pipe(sass())
			.pipe(autoprefixer('last 15 version'))
		    .pipe(gulp.dest('build/css'))
            .pipe(cssmin())
	  .pipe(browserSync.reload(
		  {stream:true}
	  ))
		.pipe(gulp.dest('./'));
});	

gulp.task('evil-icons', function(){
    return gulp.src('icons.svg')
    .pipe(evilIcons())
    .pipe(gulp.dest('build/svg'));
});


gulp.task('scripts', function(){
			return gulp.src('js/*.js')
			.pipe(concat('main.js'))
			.pipe(uglify())
			.pipe(gulp.dest('build/js'))
	.pipe(browserSync.reload(
		{stream: true}
	));
});



gulp.task('cssmin', function(){
	return gulp.src('**/*.css')
	.pipe(cssmin())
	.pipe(rename({
		suffix: '.min'
	}))
	.pipe(gulp.dest('./'));
});

gulp.task('svgSymbols', function(){
	return gulp.src('svg/*.svg')
	.pipe(svgSymbols({
		css: false,
		accessibility: function () {
			return {
				title: false
			}
		},
		className: '.icon-%f'
	}))
	.pipe(gulp.dest('build/svg'));
});


gulp.task('images', function(){
		return gulp.src('img/**/*')
		.pipe(imagemin({
				optimizationLevel: 3,
				progressive: true,
				interlaced: true
		}))
		.pipe(gulp.dest('build/img'));
});

gulp.task('browser-sync', function(){
  browserSync({
  	proxy: "localhost:8888" 
  });   
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});


gulp.task('build', ['scripts', 'sass', 'images']);


gulp.task('default', ['browser-sync'], function(){
		gulp.watch('sass/**/*.scss', ['sass']);
		gulp.watch('js/**/*.js', ['scripts']);
		gulp.watch('*.php', ['bs-reload']);
});














