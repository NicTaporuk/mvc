<?php
error_reporting (E_ALL);
//======================================
$i=8;
$factor=2;
$minimum_limit=0;
do {
    if ($i < 5) {
        echo "i еще недостаточно велико";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
    echo "значение i уже подходит";

    /* обработка i */

} while (0);
//======================================

if (version_compare(phpversion(), '5.1.0', '<') == true) { die ('PHP5.1 Only'); }
require('config/path.php');

function __autoload($class)
{
    require(LIBS.$class.".class.php");
}
$app = new Bootstrap();
$app->init();

?>

