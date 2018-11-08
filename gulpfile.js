'use strict';

const gulp           = require('gulp');
const stylus         = require('gulp-stylus');
const nib            = require('nib');
const debug          = require('gulp-debug');
const plumber        = require('gulp-plumber');
const rename         = require('gulp-rename');
const sourcemaps     = require('gulp-sourcemaps');
const newer          = require('gulp-newer');
const notify         = require('gulp-notify');
const concat         = require('gulp-concat');
const uglify         = require('gulp-uglify');
const gutil          = require('gulp-util' );
const ftp            = require('vinyl-ftp');

gulp.task('styles', function () {
    return gulp.src('app/styl/common.styl')
      .pipe(plumber({
        errorHandler: notify.onError(err => ({
          title: 'Styles',
          message: err.message
        }))
      }))
      .pipe(sourcemaps.init())
      .pipe(debug({title: 'src'}))
      .pipe(stylus({
        use:[nib()],
        'include css': true
      }))
      .pipe(debug({title: 'stylus'}))
      .pipe(rename('style.css'))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest('dist/active-theme'));
  });
  
  
  
  gulp.task('js', function () {
    return gulp.src('app/js/main.js')
      .pipe(plumber({
        errorHandler: notify.onError(err => ({
          title: 'JS',
          message: err.message
        }))
      }))
      .pipe(gulp.dest('dist/active-theme/js'));
  });
  
  
  gulp.task('libs', function () {
      return gulp.src([
      //все js библиотеки подключать сюда
      'app/libs/empty.js'
    ])
    .pipe(plumber({
      errorHandler: notify.onError(err => ({
        title: 'Libs',
        message: err.message
      }))
    }))
    .pipe(concat('libs.js'))
    .pipe(uglify())
    .pipe(rename({suffix: '.min', prefix : ''}))
    .pipe(gulp.dest('dist/active-theme/js'));
  });

gulp.task('watch', function() {
    gulp.watch('app/styl/**/*', gulp.series('styles'));
    gulp.watch('app/js/**/*.js', gulp.series('js'));
    gulp.watch('dist/active-theme/**/*.*', gulp.series('deploy'));
});

gulp.task('deploy', function() {
    var conn = ftp.create({
      host:      '',
      user:      '',
      password:  '',
      parallel:  10,
      log: gutil.log
    });
  
    var globs = 'dist/**';
  
    return gulp.src(globs, {since: gulp.lastRun('deploy')})
    .pipe(newer('/htdocs/new-test/wp-content/themes'))
    .pipe(conn.dest('/htdocs/new-test/wp-content/themes'));
  });

gulp.task('build',
  gulp.series(
  gulp.parallel('styles', 'js', 'libs'),
  'deploy')
);

gulp.task('default',
    gulp.series('build',
    gulp.parallel('watch'))
);