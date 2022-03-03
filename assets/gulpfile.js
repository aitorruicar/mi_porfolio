var gulp = require('gulp'); 
const sass = require('gulp-sass')(require('sass')); 
var sourcemaps = require('gulp-sourcemaps'); 
var browserSync = require('browser-sync').create(); 

gulp.task('sass', function () {
    return gulp.src('./sass/main.scss') 
    .pipe(sourcemaps.init()) 
    .pipe(sass({outputStyle :'compressed'}).on('error', sass.logError)) 
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./css/'))
    .pipe(browserSync.stream()) 
})

gulp.task('serve', function ()
{
    browserSync.init(
        {
            port: 80,
            proxy: "http://localhost:80/Mi_porfolio/"
            
        }
    );
    gulp.watch ('./sass/main.scss', gulp.series('sass')); 

})

gulp.task('default', gulp.series('sass', 'serve'), function() {} ); 