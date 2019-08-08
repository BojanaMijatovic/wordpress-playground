const { src, dest, watch, series, parallel, task } = require('gulp');
const sourcemaps = require('gulp-sourcemaps')
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano')
const autoprefixer = require('autoprefixer');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const replace = require('gulp-replace');
const browserSync = require('browser-sync').create();
var notify = require('gulp-notify');
var livereload = require('gulp-livereload');

const files = {
  scssPath: 'src/scss/**/*.scss',
  jsPath: 'src/js/**/*js',
  phpFile: './**/*.php'
}

function scss() {
  return src(files.scssPath)
      .pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(postcss([ autoprefixer(), cssnano()]))
      .pipe(sourcemaps.write('.'))
      .pipe(notify({ title: 'Scss', message: 'Scss task completed'}))
      .pipe(dest('.', {sourcemaps: true}))
      .pipe(browserSync.reload({ stream: true}));
}


function js(){
    return src([
        files.jsPath
        //,'!' + 'includes/js/jquery.min.js', // to exclude any specific files
        ])
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(dest('js'))
        .pipe(browserSync.reload({ stream: true}));
}


// Cachebust
var cbString = new Date().getTime();
function cacheBuster(){
    return src(['index.php'])
        .pipe(replace(/cb=\d+/g, 'cb=' + cbString))
        .pipe(dest('.'));
}

// Watch task: watch SCSS and JS files for changes
// If any change, run scss and js tasks simultaneously


function watcher(){
    watch([files.scssPath, files.jsPath, files.phpFile],
        parallel(scss, js));
}

// function browser() {
//   browserSync.init({
//       proxy: 'http://playground.loc/',
//       files: [
//         "./**/*.php",
//         "/css/style.css",
//         './js/**/*.js'
//       ]
//   });
// }




// Export the default Gulp task so it can be run
// Runs the scss and js tasks simultaneously
// then runs cacheBust, then watch task
exports.default = task('default', series(
    parallel(scss, js),
    cacheBuster,
    // browser,
    watcher
));
