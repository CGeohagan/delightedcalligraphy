var gulp      = require('gulp'),
    sass     = require('gulp-sass'),
    cache = require('gulp-cache'),
    autoprefixer = require('gulp-autoprefixer'),
    cleancss    = require('gulp-clean-css'),
    image = require('gulp-image'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify');

gulp.task('styles', function(){
    return gulp.src('scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cleancss())
        .pipe(sourcemaps.write(''))
        .pipe(gulp.dest(''));
});

gulp.task('image', function() {
    return gulp.src('assets/development/images/**/*')
        .pipe(cache(image({
          pngquant: true,
          optipng: false,
          zopflipng: true,
          jpegRecompress: true,
          jpegoptim: false,
          mozjpeg: false,
          gifsicle: true,
          svgo: false,
          concurrent: 10
        })))
        .pipe(gulp.dest('assets/images'))
});

gulp.task('uglify', function(){
    gulp.src('assets/development/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('assets/js'))

});

gulp.task('default',['styles', 'image', 'uglify']);

gulp.task('watch', function() {
    
    // Watch .scss files
    gulp.watch('scss/*.scss', ['styles']);
    gulp.watch('scss/**/*.scss', ['styles']);
 
});