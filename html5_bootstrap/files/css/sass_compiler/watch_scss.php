<?php

require "./lib/php-sass.php";
$sass_watcher = new SassWatcher("./lib/scss.inc.php");
$sass_watcher->watch("../scss/", "../", 2, "scss_formatter_compressed");

?>