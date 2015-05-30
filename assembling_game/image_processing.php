<?php
//$src = imagecreatefrompng('world.png');
$img1 = $_GET["img1"];

$array = explode(".",$img1);
$img1 = $array[0] . ".jpg";
//$img1 = "4efd7c3af0a32.jpg";
$numofpieces = $_GET["lev"];
$piecenumber = $_GET["order"];

if($numofpieces ==5)
$denominator = 2;
else if($numofpieces ==10)
$denominator = 3;
else if($numofpieces ==17)
$denominator = 4;
else if($numofpieces ==26)
$denominator = 5;
else if($numofpieces ==37)
$denominator = 6;
else if($numofpieces ==50)
$denominator = 7;
$img1= "images/" . $img1;

$data = getimagesize($img1);
$width = round($data[0]/$denominator);
$height = round($data[1]/$denominator);


$dest = imagecreatetruecolor($width, $height);

$src = imagecreatefromjpeg($img1);
//bool imagecopy      ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )

//logic to break down image
$src_w = $width;
$src_h = $height;
$src_x = 0;
$src_y = 0;
$counter = 0;
	for($y = 1; $y < $numofpieces; $y++)
	{
		$counter ++;
		if($piecenumber == $y)
		{
		imagecopy($dest, $src, 0, 0, $src_x, $src_y, $src_w, $src_h);
		}		
		$src_w += $width;
		$src_x += $width;

		if($counter == $denominator)
		{
			$counter = 0;
			$src_w = $width;
			$src_x = 0;
			$src_h += $height;
			$src_y += $height;
		}
	}
//imagealphablending($dest, false);
//imagesavealpha($dest, true);

//bool imagecopymerge ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h , int $pct )
//bool imagecopy      ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )
//imagecopymerge($dest, $src, 0, 0, 0, 0, 200, 200, 100);

header('Content-Type: image/jpeg');
imagejpeg($dest);
//header('Content-Type: image/png');
//imagepng($dest);

imagedestroy($src);
imagedestroy($dest);
//imagedestroy($src);
?>

