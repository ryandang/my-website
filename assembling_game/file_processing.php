<?php
include("../functions/initialize.php");
	
	$target_path = "images";
	//chmod($target_path, 0755);
    if (isset($_FILES['uploadimage']) ) {
	
	$path = $_FILES['uploadimage']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	if($ext == "jpg" || $ext == "png" || $ext=="gif" || $ext=="jpeg")
	{
	    $fileName = mysql_real_escape_string($_FILES['uploadimage']['name']);
	
	    $fileTemp = $_FILES['uploadimage']['tmp_name'];
		$size = $_FILES['uploadimage']['size'];	
		
		if($fileName){
        if (!($fileName && $fileTemp && $size < 100000000  && move_uploaded_file($fileTemp, "$target_path/$fileName"))) {
            echo "Error on uploading file $fileName. ";
        }
		}
        //$images = $_FILES["userfile"]["tmp_name"];
		
        $new_images = $_FILES["uploadimage"]["name"];		
        $size=getimagesize("images/".$fileName);
$array = explode(".",$fileName);


$width=IMG_WIDTH;		
$height=round($width*$size[1]/$size[0]);		
		//process for images		
		
		if($ext == "png")
		$images_orig = imagecreatefrompng("images/".$fileName);
		else if($ext == "gif")
		$images_orig = imagecreatefromgif("images/".$fileName);
		else
        $images_orig = imagecreatefromjpeg("images/".$fileName);
		
        $photoX = ImagesX($images_orig);
        $photoY = ImagesY($images_orig);
        $images_fin = ImageCreateTrueColor($width, $height);		
		
		$bg = imagecolorallocate($images_fin, 255, 255, 255);
		imagefill($images_fin, 0, 0, $bg);
		
		
		//imagecopy($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1);
        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		
        ImageJPEG($images_fin,"images/".$array[0].".jpg");
        ImageDestroy($images_orig);
        ImageDestroy($images_fin);	
	}
	else
	{
		echo "Invalid File";
	}
    }

?>