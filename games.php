<?php
$x=0;
$animatetime = -700;

for ($y=0; $y<5; $y++)
{

$x++;
$animatetime +=1000;
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
HTML;
}

?>
	<h1> All Games </h1>
	<div id="project1" class="project_container">
	<div class="project_name" ><h2 style="font-size: 20px; color: #ec8674;"> Puzzle Game </h2></div>
	<div class='focus grow pic'>
		<a href="./assembling_game/puzzle"><img src="images/puzzle_game.jpg" alt=""></a>
	</div>
	</div>

	<div id="project2" class="project_container">
	<div class="project_name" ><h2 style="font-size: 20px; color: #ec8674;"> Hangman Game </h2></div>
	<div class='focus grow pic'>
		<a href="./hangman"><img src="images/hangman.png" alt="" width="500" height="500"></a>
	</div>
	</div>

	<div id="project3" class="project_container">
	<div class="project_name" ><h2 style="font-size: 20px; color: #ec8674;"> Deal or No Deal </h2></div>
	<div class='focus grow pic'>
		<a href="./dealornodeal"><img src="images/deal_or_no_deal.jpg" alt="" width="500" height="500"></a>
	</div>
	</div>

	<div id="project4" class="project_container">
	<div class="project_name" ><h2 style="font-size: 20px; color: #ec8674;"> Math Game </h2></div>
	<div class='focus grow pic'>
		<a href="./math"><img src="images/math.png" alt="" width="250" height="250"></a>
	</div>
	</div>

	<div id="project5" class="project_container">
	<div class="project_name" ><h2 style="font-size: 20px; color: #ec8674;"> Mr&Ms Ashbridges </h2></div>
	<div class='focus grow pic'>
		<a href="./volleyball"><img src="images/vball_icon.jpg" alt="" width="250" height="250"></a>
	</div>
	</div>