<?php

namespace Remoji;

require_once(__DIR__ . "/../include/init.php");

use ScssPhp\ScssPhp\Compiler;

$compiler = new Compiler();
$compiler->addImportPath(__DIR__ . "/../styles");
$css = $compiler->compileString('@import "styles.scss";')->getCss();

header("Content-Type: text/css");
header("Cache-Control: no-store");

die($css);
