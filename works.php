<?php
	if(isset($_REQUEST["pid"]))
		$pid = $_REQUEST["pid"];
	if(isset($pid) && $pid)
	{
		echo
<<<HTML
<script>
$(function(){
  $.post(
    'render_work.php',
    {
      pid: $pid
    }, function(response) { $('#rightpannel').html(response) }
  );
});
</script>
HTML;
	}
	
	if(isset($_REQUEST["language"]))
		{
		$tmp = $_REQUEST["language"];
		$language = " and project_language like '%$tmp%'";
		$title = "<h1>Projects using: " . $tmp . "</h1>";
		}
	else 
		{
		$language = "";
		$title ="<h1>All Projects</h1>";
		}
	
?>


<?php

$result = mysql_query("SELECT * from projects where project_id > 0 $language");
$num = mysql_num_rows($result);
$x=0;
$animatetime = -500;
echo $title;
if($num)
{
while($r = mysql_fetch_assoc($result))
{
	$x++;
	$animatetime +=1000;
	$p = new Project($r["project_id"]);
	$name = $p->name;	
	$thumbnail = $p->thumbnail;
	$pid = $p->id;

echo
<<<HTML
<script>
$(document).ready(function() {
				$("#project$x").css("left", "200px");
				$("#project$x").css("opacity", "0");
				setTimeout(function(){
					
				    $("#project$x").animate({opacity: "1", left: "0px"},1000);
				},$animatetime);	
});
</script>
	<div id="project$x" class="project_container">
	<div class="project_name" ><h2> $name </h2></div>
	<div class='focus grow pic'>
		<a href="works?pid=$pid"><img src='images/$thumbnail' alt=''  style="border: none"></a>
	</div>
	</div>
HTML;
}
}
else
echo "No projects found.";
?>