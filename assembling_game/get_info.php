<?php
$t = $_REQUEST["t"];
$array = explode(".",$_REQUEST["img"]);
$img1 = $array[0] . ".jpg";
$img = "images/" . $img1;


$data = getimagesize($img);

echo $data[1];

?>