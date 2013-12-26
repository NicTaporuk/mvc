<?php
/**
 * Created by PhpStorm.
 * User: NickTaporuk
 * Date: 22.12.13
 * Time: 19:34
 */
require(LIBS.'Smarty/libs/Smarty.class.php');
require(LIBS.'ActiveRecord/ActiveRecord.php');
/*
 *
 * */
function _loader_controller($class)
{
    require(LIBS.$class.".class.php");
}
/*
 *
 * */
//function _loader_geoIp($class)
//{
    require(LIBS.'getIp/SxGeo.php');
//}
spl_autoload_extensions('.php');
spl_autoload_register('_loader_controller','_loader_geoIp');
//print_r(spl_autoload_functions());