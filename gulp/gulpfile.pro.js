'use strict';
const gulp = require('gulp');
const config = require('./gulp.config.js');

const htmlMin = require('gulp-htmlmin');
const less = require('gulp-less');
const autoprefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const del = require('del');
const rev = require('gulp-rev');
const revRewrite = require('gulp-rev-rewrite');
const revDelete = require('gulp-rev-delete-original');
const fileInclude = require('gulp-file-include');
const cleanCss = require('gulp-clean-css');

const {dist, html, style, javascript, AUTOPREFIXER_BROWSERS,UGLIFY_OPTION} = config;

//TODO 加上hash
function pro() {

  /**
   * del
   */
  gulp.task('pro:del', () => {
    del(`${dist}/*.*`)
  })

  /**
   * html
   */
  gulp.task('pro:html', () => {
    gulp.src(html.from)
      .pipe(fileInclude({
        prefix: '@@',
        basepath: '@file'
      }))
      .pipe(htmlMin({collapseWhitespace: true}))
      .pipe(gulp.dest(html.to))
  })

  /**
   * style
   */
  gulp.task('pro:style', () => {
    return gulp.src(style.from)
      .pipe(less())
      .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
      .pipe(cleanCss())
      .pipe(gulp.dest(style.to))
  })

  /**
   * javascript
   */
  gulp.task('pro:javascript', () => {
    return gulp.src(javascript.from)
      .pipe(uglify(UGLIFY_OPTION))
      .pipe(gulp.dest(javascript.to))
  })

  /**
   * plugins
   */
  gulp.task('pro:plugins',()=>{
    return gulp.src(javascript.pluginsFrom)
      .pipe(concat('plugins.js'))
      .pipe(uglify(UGLIFY_OPTION))
      .pipe(gulp.dest(javascript.pluginsTo))
  })

  gulp.task('pro:revision', ['pro:html', 'pro:style','pro:javascript','pro:plugins'], () => {
    return gulp.src(`${dist}/*.{css,js}`)
      .pipe(rev())
      .pipe(revDelete()) // Remove the unrevved files
      .pipe(gulp.dest(dist))
      .pipe(rev.manifest())
      .pipe(gulp.dest(dist));
  });

  gulp.task('pro:revRewrite', ['pro:del','pro:revision'], function() {
    const manifest = gulp.src(`${dist}/rev-manifest.json`);

    return gulp.src(`${dist}/*.html`)
      .pipe(revRewrite({ manifest }))
      .pipe(gulp.dest(dist));
  });


}

module.exports = pro;
