// 必要なプラグインを読み込み
const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const browserSync = require("browser-sync").create();

// Sassのコンパイル
function compileSass() {
  return gulp
    .src("sass/style.scss") // sassフォルダ以下を対象に
    .pipe(
      sass({
        outputStyle: "expanded",
        includePaths: ["sass"] // ← ここが重要！
      }).on("error", sass.logError)
    )
    .pipe(gulp.dest("css")) // cssフォルダに出力
    .pipe(browserSync.stream()); // CSS変更を反映
}

// ブラウザ同期＆ファイル監視
function serve() {
  // ローカルサーバー起動
  browserSync.init({
    proxy: "http://localhost/tetote",
    open: "external",
    notify: false
  });

  // ファイルの監視
  gulp.watch("sass/**/*.scss", { usePolling: true }, compileSass);
  gulp.watch(["**/*.php", "!node_modules/**"], { usePolling: true }).on("change", browserSync.reload);
  gulp.watch("js/**/*.js", { usePolling: true }).on("change", browserSync.reload);
}

// デフォルトタスク
exports.default = gulp.series(compileSass, serve);

