<?php

include("functions/initialize.php");


//$display_page = "error.php";

$path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

//if(preg_match('~^$~',$path,$m))  $display_page = ("index");

if(SITE == "DEV")
{
 if(preg_match('~^([a-z\-_/]*)'. "livesite2" .'/([a-z\-_/]*)$~',$path,$m))
	$page = $m[2];
}
else
$page = $path;



//if(!$path)
//	$page = "index.php";
//else if(preg_match('~^([a-z\-_/]*)'. BASE_FOLDER .'/([a-z\-_/]*)$~',$path,$m))
	$page = $page . ".php";
	//$p = $page;

if(file_exists($page))		
$p= $page;
else
$p = "error.php";


$_SERVER['PHP_SELFZ'] = $p;
$access = "valid";
fb('header.php - start');
include('./header.php');
fb('header.php - end');
fb('page  - start');
include($p);
fb('page  - end');
fb('footer.php - start');
include('footer.php');
fb('footer.php - end');

//return $display_page = '404';

?>