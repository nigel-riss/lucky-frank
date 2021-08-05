

import path         from 'path';
import gulp         from 'gulp';
import pug          from 'gulp-pug';
import embedSVG     from 'gulp-embed-svg';
import syncServer   from 'browser-sync';
import dartSass     from 'sass';
import gulpSass     from 'gulp-sass';
import webpack      from 'webpack-stream';


const sass = gulpSass( dartSass );
const __dirname = path.dirname(new URL(import.meta.url).pathname);

// Path
const dirs = {
  pugMain:          `./src/pug/*.pug`,
  pugAll:           `./src/pug/**/*.pug`,
  svg:              `./src/img/**/*.svg`,

  scssMain:         `./src/scss/styles.scss`,
  scssAll:          `./src/scss/**/*.scss`,
  jsSrc:            `./src/js/**/*.js`,

  images:           `./src/img/**/*`,
  fonts:            `./src/fonts/**/*`,

  public:           `./public`,
  // html:           `./public/*.html`,
};


// Webpack Config
const webpackConfig = {
  entry: {
    index: `./src/js/index.js`,
  },
  output: {
    filename: `[name].js`,
    path: path.resolve(__dirname, `public/scripts`),
  },
  mode: `development`,
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: `babel-loader`,
      },
    ],
  },
  devtool: `source-map`,
};


// Start BrowserSync Server
const startServer = () => {
  syncServer.init({
    ui: false,
    notify: false,
    server: {
      baseDir: dirs.public,
    },
    port: 3000,
    ghostMode: {
      clicks: false,
      forms: false,
      location: false,
      scroll: false,
    },
  });
};


// Render html from pug
const renderPug = (cb) => {
  gulp
    .src(dirs.pugMain)
    .pipe(pug({
      pretty: true,
      data: {},
    }))
    .on(`error`, (err) => {
      console.log("\x1b[31m", err.message, "\x1b[0m");
    })
    .pipe(embedSVG({
      root: `./src/`,
    }))
    .on(`error`, (err) => {
      console.log("\x1b[31m", err.message, "\x1b[0m");
    })
    .pipe(gulp.dest(dirs.public))
    .pipe(syncServer.stream());

  cb();
};


// Compile style.css
const compileStyles = (cb) => {
  gulp
    .src(dirs.scssMain)
    .pipe(sass().on(`error`, sass.logError))
    .pipe(gulp.dest(dirs.public))
    .pipe(syncServer.stream());

  cb();
};


// Compile js code
const compileScripts = (cb) => {
  gulp.src(dirs.jsSrc)
    .pipe(webpack(webpackConfig))
    .on(`error`, (error) => {
      console.log("\x1b[31m", error.message, "\x1b[0m");
    })
    .pipe(gulp.dest(dirs.public + `/scripts`))
    .pipe(syncServer.stream());

  cb();
};


// Copy fonts and images
const copyAssets = (cb) => {
  gulp.src([
      dirs.fonts,
      dirs.images,
    ], {
      base: `src`,
    })
    .pipe(gulp.dest(dirs.public))
    .pipe(syncServer.stream({
      once: true,
    }));

  cb();
};


export const watch = () => {
  gulp.watch(dirs.pugAll, renderPug);
  gulp.watch(dirs.svg, renderPug);
  gulp.watch(dirs.scssAll, compileStyles);
  gulp.watch(dirs.jsSrc, compileScripts);
  gulp.watch([
    dirs.fonts,
    dirs.images,
  ], copyAssets);
};


export default gulp.series(
  gulp.parallel(
    renderPug,
    compileStyles,
    compileScripts,
    copyAssets,
  ),
  gulp.parallel(
    watch,
    startServer,
  )
);
