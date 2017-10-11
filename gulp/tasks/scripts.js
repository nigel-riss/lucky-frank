const gulp = require("gulp");
const webpack = require("webpack-stream");
const notify = require("gulp-notify");

const config = {
    entry: {
        menu: "./src/js/menu.js"
    },
    output: {
        filename: "[name].js"
    },
    module: {
        loaders: [{
            loader: "babel-loader",
            query: {
                presets: ["es2015"]
            },
            test: /\.js$/,
            exclude: /node_modules/
        }]
    }
};

gulp.task("scripts", function() {
    return gulp.src("./src/js/**/*.js")
        .pipe(webpack(config))
        .on("error", notify.onError(function(error) {
            return {
                title: "Scripts",
                message: error.message
            };
        }))
        .on("error", function(error) {
            console.log(error.toString());
            this.emit("end");
        })
        .pipe(gulp.dest("./dist/"));
});