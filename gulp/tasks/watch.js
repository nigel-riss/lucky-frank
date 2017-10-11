const gulp = require("gulp");
const watch = require("gulp-watch");
const browserSync = require("browser-sync").create();

gulp.task("watch", () => {
    browserSync.init({
        server: {
            baseDir: "dist"
        },
        notify: {
            styles: {
                top: "auto",
                bottom: "0"
            }
        }
    });

    // pug
    watch("./src/**/*.pug", () => {
        gulp.start("pugChanged");
    });

    // css
    watch("./src/sass/**/*.scss", () => {
        gulp.start("cssInject");
    });

    // js
    watch("./src/js/**/*.js", () => {
        gulp.start("jsChanged");
    });

    // wordpress
});

gulp.task("pugChanged", ["pugRender"], () => {
    browserSync.reload();
});

gulp.task("cssInject", ["styles"], () => {
    gulp.src("./dist/styles.css")
        .pipe(browserSync.stream());
});

gulp.task("jsChanged", ["scripts"], () => {
    browserSync.reload();
});