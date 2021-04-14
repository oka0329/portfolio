// ------------------------------------------------------------ //
// パッケージ格納
// ------------------------------------------------------------ //

const gulp = require('gulp');
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const pug = require('gulp-pug');
const typescript = require('gulp-typescript');

// ------------------------------------------------------------ //
// ディレクトリパス格納
// ------------------------------------------------------------ //

// ----------すべてのファイル----------//

const allPug = '/**/*.pug';
const allHtml = '/**/*.html';
const allPhp = '/**/*.php';
const allScss = '/**/*.scss';
const allCss = '/**/*.css';
const allJs = '/**/*.js';
const allTs = '/**/*.ts';

// ----------納品用(dest)ディレクトリ内----------//

const destPass = './';  //納品用フォルダパス
const destCssPass = './assets/css';  //納品用cssフォルダパス
const destJsPass = './assets/js';  //納品用jsフォルダパス
const checkDest = [
  destPass + allHtml,  //納品用.htmlすべて
  destCssPass + allCss,  //納品用.cssすべて
  destJsPass + allJs  //納品用.jsすべて
];

// ----------開発用(dev)ディレクトリ内----------//

const devPass = './dev';  //開発用フォルダパス
const devPugPass = './dev/pug';  //開発用pugフォルダパス
const devSassPass = './sass';  //開発用sassファイルパス
const devTsPass = './dev/typescript';  //開発用tsファイルパス
const checkDev = [
  devPugPass + allPug,  //開発用.pugすべて
  devSassPass + allScss,  //開発用.scssすべて
  devTsPass + allTs  //開発用.tsすべて
]

// ------------------------------------------------------------ //
// タスク設定
// ------------------------------------------------------------ //

//---------- sassコンパイル、ベンダープレフィックス付与 ----------//

gulp.task('sass', function(done) {
  const options = {
      browsers: ['last 3 version', 'ie >= 6', 'Android 4.0'],
      cascade: false
  };
    gulp.src(checkDev[1])　//元ファイルのパス
        .pipe(plumber({
          errorHandler: notify.onError("Error: <%= error.message %>")
        }))
        .pipe(sassGlob())
        .pipe(sass({outputStyle: 'expanded'}))
        .pipe(autoprefixer(options))
        .pipe(gulp.dest(destCssPass)); //出力先のパス
        done();
});
gulp.task('watch-sass',(done) => {
  gulp.watch(checkDev[1],gulp.task('sass'));
  done();
});

//---------- pugコンパイル ----------//

gulp.task('pug',function(done){
  gulp.src(checkDev[0])
  .pipe(plumber({
    errorHandler: notify.onError("Error: <%= error.message %>")
  }))
  .pipe(pug({
      pretty: true
    }))
  .pipe(gulp.dest(destPass));
  done();
});

//---------- typescriptコンパイル ----------//

gulp.task('ts',function(done){
  gulp.src(checkDev[2])
  .pipe(plumber({
    errorHandler: notify.onError("Error: <%= error.message %>")
  }))
  .pipe(typescript(options))
  .pipe(gulp.dest(destJsPass));
  done();
});

//---------- ブラウザ表示 ----------//

gulp.task('browser-sync',function(done){
  browserSync({
    server:{
      baseDir: './',　//表示させるパス
    },
    port:3000
  });
  done();
});

//---------- ブラウザリロード ----------//

gulp.task('browser-reload',function(done){
  browserSync.reload();
  done();
});

//---------- 監視 ----------//

gulp.task('watch-files',(done) => {
  gulp.watch(checkDest,gulp.task('browser-reload'));
  gulp.watch(checkDev[0],gulp.task('pug'));
  gulp.watch(checkDev[1],gulp.task('sass'));
  gulp.watch(checkDev[2],gulp.task('ts'));
  done();
});

// ------------------------------------------------------------ //
// タスク処理実行
// ------------------------------------------------------------ //

gulp.task('default',gulp.series(gulp.parallel(
  'browser-sync',
  'watch-files'
  )),(done) => {
  done();
});
