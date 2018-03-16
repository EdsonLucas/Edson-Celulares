var gulp = require('gulp'),
	imagemin = require('gulp-imagemin'),
	clean = require('gulp-clean'),
	concat = require('gulp-concat'),
	htmlReplace = require('gulp-html-replace'),
	compress = require('gulp-uglify'),
	usemin = require('gulp-usemin'),
	rename = require('gulp-rename');
	cssmin = require('gulp-cssmin'),
	browserSync = require('browser-sync'),
	jshint = require('gulp-jshint'),
	csslint = require('gulp-csslint');


gulp.task('default', ['copy'], function() {

	gulp.start('build-img', 'usemin');

	// gulp.start('build-img', 'css-min', 'concat-js', 'replace-html-js');

});


gulp.task('copy', ['clean'], function() {

	return gulp.src('app/**/*')
				.pipe(gulp.dest('build'));

});

gulp.task('clean', function() {

	return gulp.src('build')
				.pipe(clean());

});

gulp.task('build-img', function() {

	gulp.src('build/assets/images/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('build/assets/images/'));

});

gulp.task('usemin', function() {

	gulp.src('app/views/template.php')
		.pipe(usemin( {
			'js': [compress, clean({force: true})],
			'css': [cssmin, clean({force: true})]
		}))
		.pipe(gulp.dest('build'));

});

gulp.task('server', function() {

	browserSync.init({

		server: {
			baseDir: 'app'
		}

	});

	gulp.watch('app/assets/js/*.js').on('change', function(event) {

		gulp.src(event.path)
			.pipe(jshint())
			.pipe(jshint.reporter());

	});

	gulp.watch('app/assets/css/*.css').on('change', function(event) {

		gulp.src(event.path)
			.pipe(csslint())
			.pipe(csslint.formatter());

	});

	gulp.watch('app/**/*').on('change', browserSync.reload);

});

gulp.task('css-min', function () {
    gulp.src('app/assets/css/**/*.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('build/assets/css/'));
});

gulp.task('concat-js', function() {

	gulp.src('app/assets/js/**/*.js')
		.pipe(concat('lib.js'))
		.pipe(compress())
		.pipe(gulp.dest('build/assets/js'));

});

gulp.task('js-min', function() {

	gulp.src('app/assets/js/**/*.js')
		.pipe(compress())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('build/assets/js/'));
});

gulp.task('replace-html-js', function() {

	gulp.src('app/views/template.php')
		.pipe(htmlReplace({
			js: 'assets/js/lib.js'
		}))
		.pipe(gulp.dest('build/views/'));

});
