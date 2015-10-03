var gulp        = require('gulp');
var less        = require('gulp-less');
var map         = require('map-stream');
var rename      = require('gulp-rename');
var concat      = require('gulp-concat');
var browserSync = require('browser-sync').create();

var sourceGlob  = 'source/**/*.+(md|apib|json)';
var rootGlob    = 'root.apib';
var outputName  = 'apiary.apib';
var outputDir   = ''; // Empty string means gulp root dir
var serverUrl   = 'localhost:8080';
var lessGlob    = 'library/less/**/*.less';

function compile(reload)
{
    reload = typeof reload == 'undefined' ? false : reload;

    return gulp.src(rootGlob)
        .pipe(map(function (file, cb) {
            console.log('transcluding');
            var contents    = file.contents.toString();
            hercule.transcludeString(contents,function(output){
                //console.log(output);
                file.contents = new Buffer(output);
                cb(null, file);
            });
        }))
        .pipe(rename(outputName))
        .pipe(gulp.dest(outputDir));
}



gulp.task('default', function() {
    gulp.src('library/less/root.less')
        .pipe(less())
        .pipe(rename('root.css'))
        .pipe(gulp.dest('library/css'));
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
    gulp.watch(lessGlob,['default']);
});