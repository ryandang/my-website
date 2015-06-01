<?php
require_once 'functions/initialize.php';
date_default_timezone_set('EST');
$today = date("M j");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta property="fb:admins" content="1513364736"/>
	<meta name="description" content="Ryan Dang Website. A personal website that provides more information about Ryan Dang - Web developer. Please contact me for more information">

	<meta name="viewport" content="width=device-width">

	<meta name="keywords" content="Ryan Dang Web Developer proficient in PHP Ajax Jquery HTML5 HTML CSS MySql JavaScript JSON C C++ Java asp.net">
	<title>Ryan Dang Porfolio</title>

	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>foundation/css/foundation.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>font-awesome-4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/animate_nav.css" />

	<script type='text/javascript' src='<?php echo BASE_URL; ?>js/jquery-1.10.1.min.js'></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="<?php echo BASE_URL; ?>foundation/js/foundation.min.js" type="text/javascript"></script>

	<style>
		html {
			height: 100%;
			overflow: hidden;
			max-height: 1600px;
		}
		body {
			height: 100%;
			margin: 0px;
			overflow: hidden;
			max-height: 1600px;
			background: url('images/box-pikat.jpg');
		}

		h1 {
			color: #ec8674;
			font-size: 36px;
		}

		#footer
		{
		    width: 100%;
		    height: 80px;
		    background: #e73827;
		    position: fixed;
		    bottom: 0px;
		    color: white;
		}

		.innerdiv {
			width: 80%;
			height: 600px;
			min-width: 900px;
			position: relative;
			margin: auto;
			top: 50%;
		}
		.mycorner {
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
			top: -400px;
			overflow: hidden;
			-webkit-box-shadow: 17px 18px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 17px 18px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 17px 18px 5px 0px rgba(0,0,0,0.75);
			/*color: white;*/
		}

		.outterdiv {
			width: 100%;
			margin: auto;
			margin-top: auto;
			margin-bottom: auto;
			height:100%;
			max-height: 1600px;
			min-height: 600px;
			position: absolute;
		}

		#host,#host1,#host2,#host3, #host4, #host5, #profile {
			width: 314px;
			height: 600px;
			margin-top: 70px;
		}

		.ulcont ul {
			font-size: 24px;
			list-style-image: url('images/valid3.png');
			position: relative;
			top: -50px;
		}

		.ulcont li {
			margin-bottom: 10px;
			position: relative;
			display: none;
		}

		.ulcont {
			width: 500px;
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

		#profile-pic {
			width: 250px;
			height: 250px;
			margin-left: 50px;
			border-radius: 20px;
		}

		@media only screen and (max-width: 58.75em) {
			h1 {
				font-size: 16px;
			}

			#host,#host1,#host2,#host3, #host4, #host5, #profile {
				width: 100px;
				height: 250px;
				margin-top: 35px;
			}

			.mycorner {
				width: 450px;
				height: 300px;
				top: -250px;
			}

			.innerdiv {
				width: 80%;
				height: 300px;
				min-width: 450px;
			}

			.ulcont {
				width: 300px;
				height: 275px;
				position: relative;
				top: -300px;
				left: 175px;
				padding-right: 10px;
			}

			.ulcont ul {
				font-size: 12px;
				top: 30px;
				list-style-image:url('images/valid3-small.png');
				left: -40px;
			}

			.ulcont li {
				margin-bottom: 5px;
			}

			#profile-pic {
				width: 100px;
				height: 100px;
				margin-left: 10px;
				border-radius: 20px;
			}
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

	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name" style="text-align: center">
	      <h1 style="font-family: Brush Script MT,cursive; font-size: 36px">Ryan Dang</h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Left Nav Section -->
	    <ul class="left">
	      <li title="Home">
	      	<a href="<?php echo BASE_URL; ?>./">
	      		<i class="fa fa-home fa-3x"></i><i class="fa fa-home fa-3x icon-over active"></i>
	      		<span class="menu-text activeText">Home</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My Profile">
	      	<a href="<?php echo BASE_URL; ?>aboutme">
	      		<i class="fa fa-user fa-3x"></i><i class="fa fa-user fa-3x icon-over"></i>
	      		<span class="menu-text">My Profile</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My Projects">
	      	<a href="<?php echo BASE_URL; ?>works">
	      		<i class="fa fa-briefcase fa-3x"></i><i class="fa fa-briefcase fa-3x icon-over"></i>
	      		<span class="menu-text">My Projects</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My School Works">
	      	<a href="<?php echo BASE_URL; ?>school">
	      		<i class="fa fa-graduation-cap fa-3x"></i><i class="fa fa-graduation-cap fa-3x icon-over"></i>
	      		<span class="menu-text">My School Works</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My Games">
	      	<a href="<?php echo BASE_URL; ?>games">
	      		<i class="fa fa-gamepad fa-3x"></i><i class="fa fa-gamepad fa-3x icon-over"></i>
	      		<span class="menu-text">My Games</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>
	    </ul>
	    <!-- Right Nav Section -->
	    <ul class="right">
	      <li title="Connect">
	      	<a href="<?php echo BASE_URL; ?>connect">
	      		<i class="fa fa-users fa-3x"></i><i class="fa fa-users fa-3x icon-over"></i>
	      		<span class="menu-text">Connect With Me</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>
	      <li title="Contact">
	      	<a href="<?php echo BASE_URL; ?>contact">
	      		<i class="fa fa-envelope fa-3x"></i><i class="fa fa-envelope fa-3x icon-over"></i>
	      		<span class="menu-text">Contact Me</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>
	    </ul>
	  </section>
	  <span class="ribbon orange"><?php echo $today ?></span>
	</nav>

	<div class="row" id="movingbody" style="height: 100%; position: relative;">
		<div  class="outterdiv" style="z-index: 20;">
			<div class="innerdiv" >
				<div class="mycorner" >
					<div style="text-align: center"> <h1> About Me</h1> </div>
					<div id="profile">
					<br/>
					<img id="profile-pic" src="<?php echo BASE_URL; ?>images/linkin.png" alt="host" />
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

	<div id="footer">
		<div class="row">
			<div class="medium-14 medium-centered columns">
			<br/>
			<span >&copy; Ryan Dang 2015.<br/> All rights reserved.</span>
			</div>
		</div>
	</div>
<script>
 $(document).foundation();
</script>
</body>
</html>



