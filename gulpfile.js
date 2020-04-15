var gulp = require('gulp');
var $ = require('gulp-load-plugins')();

var onError = function (err) {
    $.util.beep();
    console.log(err.toString());
    this.emit('end');
};

gulp.task('sass', function() {
    return gulp.src('assets/styles/scss/style.scss')
        .pipe($.plumber({errorHandler: onError}))
        .pipe($.sourcemaps.init())
        .pipe($.sass.sync({outputStyle: 'compressed', includePaths: require('bourbon').includePaths}))
        .pipe($.rename('bitStyles.min.css'))
        .pipe($.autoprefixer())
        .pipe($.sourcemaps.write('./'))
        .pipe(gulp.dest('assets/styles'))
        .pipe($.notify({message: 'SASS complied and minified successfully ♪♪ｖ(⌒ｏ⌒)ｖ♪♪ ', onLast: true}));
});

gulp.task('js', function() {
    return gulp.src('assets/js/partials/*.js')
        .pipe($.plumber({errorHandler: onError}))
        .pipe($.concat('scripts.js'))
        .pipe(gulp.dest('assets/js'))
        .pipe($.rename('bitScripts.min.js'))
        .pipe($.uglify())
        .pipe(gulp.dest('assets/js'))
        .pipe($.notify('JavaScript comped and minified successfully ♪♪ｖ(⌒ｏ⌒)ｖ♪♪ '));
}); 


gulp.task('watch',function() {
    gulp.watch('assets/styles/scss/**/*.*ss',gulp.series('sass'));
    gulp.watch('assets/js/partials/*.js',gulp.series('js'));
});
