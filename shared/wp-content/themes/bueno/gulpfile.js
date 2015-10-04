var gulp        = require('gulp');
var less        = require('gulp-less');
var map         = require('map-stream');
var rename      = require('gulp-rename');
var concat      = require('gulp-concat');
var browserSync = require('browser-sync').create();
var postcss     = require('gulp-postcss');

var serverUrl   = 'greenplatespecial.dev';
var lessGlob    = 'less/**/*.less';
var templGlob   = '**/*.php';


gulp.task('default', function() {
    gulp.src('less/root.less')
        .pipe(less())
        .pipe( postcss([ require('autoprefixer')]) )
        .pipe(rename('root.css'))
        .pipe(gulp.dest('css'));
});

gulp.task('watch',function(){
    gulp.watch(lessGlob,['default']);
});

gulp.task('reload', function() {
    browserSync.reload();
});

gulp.task('server',['default'],function(){
    browserSync.init({
        proxy: serverUrl
    });
    gulp.watch(lessGlob,['default','reload']);
    gulp.watch(templGlob,['reload']);
});