<?php
require_once 'functions/initialize.php';
$pid = $_REQUEST["pid"];

$p = new Project($pid);
$languagearray = json_decode($p->language);
echo "<a href='works'><img id='back' src='images/back2.png' width='60px' height='60px' alt='back'/></a><h2 style='text-align: center; color: #EC8574'>" . $p->name . "</h2>";;
?>

<div id="wrapper">
        <div class="slider-wrapper theme-dark">
            <div id="slider" class="nivoSlider">
			<?php 
				
				foreach (glob(dirname(__FILE__) . "/images/". $p->slides ."/*") as $filename) 
				{
					$filename_array = (explode("images",$filename));
					$filename = "images". $filename_array[1];
					if(!strpos($filename,"thumbnail"))
					echo "<img src='$filename' data-thumb='$filename' alt='Removed' />";
				}
				
			?>	
			<!--
                <img src="images/toystory.jpg" data-thumb="images/toystory.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="images/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />	
			-->
            </div>
            <div id="htmlcaption" class="nivo-html-caption">        
            </div>
        </div>
</div>

<div style="position: relative; z-index: 100000"> 
<span style="color: #EC8574; font-size: 20px;">Languages and Tools used: </span> <br/>
&nbsp;&nbsp;&nbsp;
<?php
foreach($languagearray as $x)
{
	$x = strtolower($x);
	$link = "<a style='color: #EC8574; text-decoration: none' href='/works?language=$x'><img class='languageimage' src='images/$x.png' width='50' height='50' alt='$x'/> </a>";
	echo $link;
	echo " ";
}

?>
</div><br/>
<div>
<span style="color: #EC8574; font-size: 20px;">Description: </span> <br/>
<div style="padding: 10px;">
<?php echo $p->description; ?>
</div>
</div>
	<script type="text/javascript">
   	$(document).ready(function(){
        $('#slider').nivoSlider();
    });
    </script>