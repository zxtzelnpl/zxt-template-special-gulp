'use strict';

const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const config = require('./gulp.config.js');

const plumber = require('gulp-plumber');
const htmlMin = require('gulp-htmlmin');
const sourceMaps = require('gulp-sourcemaps');
const less = require('gulp-less');
const autoprefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const fileInclude = require('gulp-file-include');


const {html,style,javascript,img,AUTOPREFIXER_BROWSERS} = config;

function dev() {

  /**
   * html
   */
  gulp.task('dev:html', () => {
    gulp.src(html.from)
      .pipe(plumber())
      .pipe(fileInclude({
        prefix: '@@',
        basepath: '@file'
      }))
      // .pipe(htmlMin({collapseWhitespace: true}))
      .pipe(gulp.dest(html.to))
      .pipe(browserSync.stream())
  })

  /**
   * style
   */
  gulp.task('dev:style', () => {
    return gulp.src(style.from)
      .pipe(plumber())
      .pipe(sourceMaps.init())
      .pipe(less())
      .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
      .pipe(sourceMaps.write('./'))
      .pipe(gulp.dest(style.to))
      .pipe(browserSync.stream())
  })

  /**
   * javascript
   */
  gulp.task('dev:javascript', () => {
    return gulp.src(javascript.from)
      .pipe(plumber())
      .pipe(sourceMaps.init())
      .pipe(uglify())
      .pipe(sourceMaps.write('.'))
      .pipe(gulp.dest(javascript.to))
      .pipe(browserSync.stream())
  })

  /**
   * javascript
   */
  gulp.task('dev:img', () => {
    return gulp.src(img.from)
      .pipe(plumber())
      .pipe(gulp.dest(img.to))
      .pipe(browserSync.stream())
  })

  /**
   * plugins
   */
  gulp.task('dev:plugins',()=>{
    return gulp.src(javascript.pluginsFrom)
      .pipe(plumber())
      .pipe(sourceMaps.init())
      .pipe(concat('plugins.js'))
      .pipe(uglify())
      .pipe(sourceMaps.write('.'))
      .pipe(gulp.dest(javascript.pluginsTo))
      .pipe(browserSync.stream())
  })

  /**
   * serve
   */
  gulp.task('dev', ['dev:style','dev:plugins','dev:javascript','dev:img','dev:html'], () => {
    browserSync.init({
      server: config.root,
      notify: false,
      directory: true
    })

    gulp.watch(style.from, ['dev:style']);
    gulp.watch([html.from,html.common],['dev:html']);
    gulp.watch(img.from,['dev:img']);
    gulp.watch([javascript.pluginsFrom],['dev:plugins']);
    gulp.watch(javascript.from,['dev:javascript']);
  })
}

module.exports = dev;
