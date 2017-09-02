const gulp = require("gulp");
const sass = require("gulp-sass");
const sassImporter = require("sass-module-importer");
const notify = require("gulp-notify");
const autoprefixer = require("gulp-autoprefixer");

gulp.task("styles", () => {
    return gulp.src("./src/sass/**/*.scss")
    .pipe(sass({ importer: sassImporter() }))
    .on("error", notify.onError(function(error) {
        return {
            title: "Styles",
            message: error.message
        };
    }))
    .pipe(autoprefixer({
        browsers: "last 2 versions"
    }))
    .pipe(gulp.dest("./dist"));
});