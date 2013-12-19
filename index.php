<?php
error_reporting (E_ALL);

//??werkgb 
if (version_compare(phpversion(), '5.1.0', '<') == true) { die ('PHP5.1 Only'); }
require('config/path.php');

function __autoload($class)
{
    require(LIBS.$class.".class.php");
}
$app = new Bootstrap();
$app->init();

?>

