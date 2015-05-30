<?php
/**
 * initialize.php
 * This file will load all the config, classes, functions, CSS, and JS files.
 */
ob_start();
require_once 'FirePHPCore/fb.php';
foreach (glob(dirname(__FILE__) . "/../conf/*.php") as $item) include_once $item;
foreach (glob(dirname(__FILE__) . "/../functions/*.php") as $item) include_once $item;
foreach (glob(dirname(__FILE__) . "/../classes/*.php") as $item) include_once $item;
//if(SITE != "DEV")
//session_start();

connect_db();
?>