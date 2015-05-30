<?php
require_once 'functions/initialize.php';
$today = date("M j");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta property="fb:admins" content="1513364736"/>
	<meta name="description" content="Ryan Dang Website. A personal website that provides more information about Ryan Dang - Web developer. Please contact me for more information">
	<!--
	<meta name="viewport" content="width=device-width">
	-->
	<meta name="keywords" content="Ryan Dang Web Developer proficient in PHP Ajax Jquery HTML5 HTML CSS MySql JavaScript JSON C C++ Java asp.net">
	<title>Ryan Dang Porfolio</title>

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>font-awesome-4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/animate_nav.css" />

	<script type='text/javascript' src='<?php echo BASE_URL; ?>js/jquery-1.10.1.min.js'></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<style>
		html
		{
			height: 100%;
			overflow: hidden;
			max-height: 1600px;
		}
		body
		{
			height: 100%;
			margin: 0px;
			overflow: hidden;
			max-height: 1600px;
			background: url('images/box-pikat.jpg');
		}

		h1
		{
			color: #ec8674;
			font-size: 46px;
		}

		.innerdiv
		{
			width: 80%;
			height: 600px;
			min-width: 900px;
			position: relative;
			margin: auto;
			top: 50%;
		}
		.mycorner
		{
			width: 900px;
			height: 600px;
			margin: auto;
			position: relative;
			left: -25px;
			background: white;
			/*background: url("images/php.jpg");*/
			border-radius: 500px;
			border: 2px solid #EC8574;
			padding-right: 40px;
			top: -300px;
			overflow: hidden;
			-webkit-box-shadow: 17px 18px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 17px 18px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 17px 18px 5px 0px rgba(0,0,0,0.75);
			/*color: white;*/
		}

		.outterdiv
		{
			width: 100%;
			margin: auto;
			margin-top: auto;
			margin-bottom: auto;
			height:100%;
			max-height: 1600px;
			min-height: 600px;
			position: absolute;
		}

		#host,#host1,#host2,#host3, #host4, #host5, #profile
		{
			width: 314px;
			height: 600px;
		}

		ul
		{
			font-size:30px;
			list-style-image:url('images/valid3.png');
			position: relative;
			top: -50px;
		}

		li
		{
			margin-bottom: 10px;
			position: relative;
			display: none;
		}
		.ulcont
		{
			width: 530px;
			height: 550px;
			position: relative;
			top: -600px;
			left: 350px;
			padding-right: 20px;
		}

		.modal {
		    position:   fixed;
		    z-index:    10000000000;
		    top:        0;
		    left:       0;
		    height:     100%;
		    width:      100%;
		    background: rgba( 255, 255, 255, .8 )
		                url('images/ajax-loader.gif')
		                50% 50%
		                no-repeat;
		}


	</style>
	<script>
		function moveTo(position, accumulatedtime)
		{
			setTimeout(function(){
				$("#movingbody").animate(position,1000);
			},accumulatedtime);

			return accumulatedtime;
		}

		function move(position)
		{
			$("#movingbody").animate(position,1000);
		}

		function animateli(ulid, accumulatedtime){
			var counter = 0;
			var animatetime = 500;
			var waittime = 2000;

			$("#"+ulid +" li").each(function(){

				var id = $(this).attr("id");
				counter ++;
				if(counter%4 ==2 )
				{
				setTimeout(function(){

					$("#" + id).css("left", "400px");
					$("#" + id).css("display", "list-item");
					$("#"+id).animate({left: "0px"},animatetime);


				},accumulatedtime += waittime);
				}
				else if(counter%4 ==0 )
				{
				setTimeout(function(){
					$("#"+id).css("top", "400px");
					$("#" + id).css("display", "list-item");
					$("#"+id).animate({top: "0px"},animatetime);
				},accumulatedtime += waittime);
				}
				else if(counter%4 ==1 )
				{
				setTimeout(function(){
					$("#"+id).css("top", "-400px");
					$("#" + id).css("display", "list-item");
					$("#"+id).animate({top: "0px"},animatetime);

				},accumulatedtime += waittime);
				}
				else{
				setTimeout(function(){
					$("#" + id).css("display", "list-item");
				},accumulatedtime += waittime);
				}
			});
			return accumulatedtime + 2000;
		}

		var globalcounter = 0;

		$(document).ready(function() {
			//run animation after window finished loading all images
			$( window ).load(function() {

				$(".modal").hide();
				var accumulatedtime = -1000;

				accumulatedtime = animateli("aboutMe", accumulatedtime);
				accumulatedtime = moveTo({
					top: "-100%",
					left: "100%"
				}, accumulatedtime);


				accumulatedtime = animateli("php", accumulatedtime);

				accumulatedtime = moveTo({ top: "-250%" }, accumulatedtime);

				accumulatedtime = animateli("js", accumulatedtime);

				accumulatedtime = moveTo({
					top: "-350%",
					left: "0"
				}, accumulatedtime);

				accumulatedtime = animateli("html", accumulatedtime);

				accumulatedtime = moveTo({
					left: "-100%",
					top: "-250%"
				}, accumulatedtime);

				accumulatedtime = animateli("ios", accumulatedtime);

				accumulatedtime = moveTo({ top: "-100%" }, accumulatedtime);

				accumulatedtime = animateli("game", accumulatedtime);

				moveTo({
					top: "0",
					left: "0"
				}, accumulatedtime);
			});
		});
	</script>
</head>
<body >
	<div class="modal"></div>

	<div class="top-header">
		<span class="ribbon orange"><?php echo $today ?></span>
	</div>

	<div class="right-panel">
		<div class="icon-container">
			<a href="./"><i class="fa fa-home fa-3x"></i></a>
			<a class="icon-over" href="./"><i class="fa fa-home fa-3x"></i></a>
		</div>
		<div class="icon-container" >
			<a href="aboutme"><i class="fa fa-user fa-3x"></i></a>
			<a class="icon-over" href="aboutme"><i class="fa fa-user fa-3x"></i></a>
		</div>
		<div class="icon-container">
			<a href="works"><i class="fa fa-briefcase fa-3x"></i></a>
			<a class="icon-over" href="works"><i class="fa fa-briefcase fa-3x"></i></a>
		</div>
		<div class="icon-container">
			<a href="school"><i class="fa fa-graduation-cap fa-3x"></i></a>
			<a class="icon-over" href="school"><i class="fa fa-graduation-cap fa-3x"></i></a>
		</div>
		<div class="icon-container">
			<a href="games"><i class="fa fa-gamepad fa-3x"></i></a>
			<a class="icon-over" href="games"><i class="fa fa-gamepad fa-3x"></i></a>
		</div>
		<div class="icon-container">
			<a href="aboutme"><i class="fa fa-users fa-3x"></i></a>
			<a class="icon-over" href="aboutme"><i class="fa fa-users fa-3x"></i></a>
		</div>

		<div class="icon-container">
			<a href="contact"><i class="fa fa-envelope fa-3x"></i></a>
			<a class="icon-over" href="contact"><i class="fa fa-envelope fa-3x"></i></a>
		</div>
	</div>

	<div id="movingbody" style="height: 100%; position: relative;">
		<div  class="outterdiv" style="z-index: 20;">
			<div class="innerdiv" >
				<div class="mycorner" >
					<div style="text-align: center"> <h1> About Me</h1> </div>
					<div id="profile">
					<br/>
					<img src="<?php echo BASE_URL; ?>images/linkin.png" alt="host" width="250px" height="250px" style="margin-left: 50px; border-radius: 20px;"/>
					</div>
					<div class="ulcont">
						<ul id="aboutMe">
							<li id="aboutMe5">Excellent aboutMe programming skills </li>
							<li id="aboutMe1" > 2 years of experience in developing websites backend using aboutMe</li>
							<li id="aboutMe2" >Experience with popular frame work such as CakeaboutMe, Codeigniter, and Yii</li>
							<li id="aboutMe3"> Experience with Drupal CMS framework </li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div  class="outterdiv" style="left:-100%; top:100%;">
			<div class="innerdiv">
				<div class="mycorner"  >
					<div style="text-align: center"> <h1> PHP</h1> </div>
					<img id="host" src="<?php echo BASE_URL; ?>images/php2.png" alt="host" />
					<div class="ulcont">
						<ul id="php">
							<li id="php5">Excellent PHP programming skills </li>
							<li id="php1" > 2 years of experience in developing websites backend using PHP</li>
							<li id="php2" >Experience with popular frame work such as CakePHP, Codeigniter, and Yii</li>
							<li id="php3"> Experience with Drupal CMS framework </li>
						</ul>
						<!-- <a href="works?language=PHP"><span class="button" > Check My Work </span></a> -->
					</div>
				</div>
			</div>
		</div>

		<div class="outterdiv" style="left:-100%; top: 250%;">
			<div class="innerdiv">
				<div class="mycorner" >
					<div style="text-align: center"> <h1> Javascript and jQuery</h1> </div>
					<img id="host2" src="<?php echo BASE_URL; ?>images/javascript_logo.png" alt="host" />
					<div class="ulcont">
						<ul id="js">
							<li id="js1">Excellent Javascript skills </li>
							<li id="js2">2 years of experience in develop website front end using javascript and jQuery </li>
						</ul>
						<!-- <a href="works?language=javascript"><span class="button" > Check My Work </span></a> -->
					</div>
				</div>
			</div>
		</div>

		<div class="outterdiv" style="top: 350%;">
			<div class="innerdiv">
				<div class="mycorner">
					<div style="text-align: center"> <h1> HTML and CSS</h1> </div>
					<img id="host3" src="<?php echo BASE_URL; ?>images/html5.png" alt="host" />
					<div class="ulcont">
						<ul id="html">
							<li id="html1">2 years experience in developing front end website using HTML and CSS </li>
							<li id="html2">Have great understanding about User Interface </li>
							<li id="html3">Always put the users first when develop website  </li>
						</ul>
						<!-- <a href="works?language=HTML"><span class="button" > Check My Work </span></a> -->
					</div>
				</div>
			</div>
		</div>

		<div class="outterdiv" style="left: 100%; top: 250%;">
			<div class="innerdiv">
				<div class="mycorner">
					<div style="text-align: center"> <h1> iOS Apps</h1> </div>
					<img id="host4" src="<?php echo BASE_URL; ?>images/iphone.png" alt="host" />
					<div class="ulcont">
						<ul id="ios">
							<li id="ios1">Recently learn how to develop iPhone Apps and love it </li>
							<li id="ios2">Trying to get more familiar with Xcode. </li>
							<li id="ios3">Made some basic Apps for school projects</li>
							<li id="ios4">Looking for opportunity to develop more apps </li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="outterdiv" style="left: 100%; top: 100%;">
			<div class="innerdiv">
				<div class="mycorner" >
					<div style="text-align: center"> <h1> Mini Games</h1> </div>
					<img id="host5" src="<?php echo BASE_URL; ?>images/ilovework.png" alt="host" />
					<div class="ulcont">
						<ul id="game">
							<li id="game1">Work on mini games on my spare time </li>
							<li id="game2">Games I've developed are Puzzle, HangMan, Deal or no Deal, Math game </li>
							<li id="game3">Always looking for new game idea </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



