<h1>404 Error </h1>

<h1> The page doesn't exist </h1>

<?php
echo $path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

 if(preg_match('~^([a-z\-_/]*)'. "livesite2" .'/([a-z\-_/]*)$~',$path,$m))
	$page = $m[2] . ".php";	
echo $page;
?>