<?php
//echo '<br>'.__DIR__;
//echo '<br>'.__FILE__;
$arr = explode('\\',__DIR__);
//$arr = explode('/',__DIR__);
//print('<pre>');
//print_r($arr);
//print('</pre>');
define('URL','http://'.$_SERVER['HTTP_HOST'].'/'.$arr[count($arr)-2].'/');
define('LIBS','lib/');
//define('LIBS','/home/u849057097/public_html/smart_mvc/lib/');