<?php
/*
$path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
if(preg_match('~^$~',$path,$m))  
	$display_page = ("index");
echo $display_page;
*/
//echo $display_page;
//header('Location: aboutme');

//echo "HELLO WORLD";

//initialize
require_once 'functions/initialize.php';

mysql_query("INSERT into test values(null,'From cronscript2 start at 8 52 pm')");

//include 'http://dev.trafficduco.com/api/cronscript2.php';
?>








