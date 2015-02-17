<?php

require "./lib/php-sass.php";
$sass_watcher = new SassWatcher("./lib/scss.inc.php");
$sass_watcher->compile_scss("../scss/", "../", 1, "scss_formatter_compressed");

?>