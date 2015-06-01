<?php
//initialize
require_once 'functions/initialize.php';

session_start();

date_default_timezone_set('EST');

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
<title>Ryan Dang</title>

<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>foundation/css/foundation.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/nivo-slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/animate_nav.css" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/dealornodeal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/math.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>font-awesome-4.2.0/css/font-awesome.min.css">

<script src="<?php echo BASE_URL; ?>js/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery-css-transform.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery-animate-css-rotate-scale.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/jquery.pluginLoader.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>js/processing.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>roncioso-Flip/jquery.flippy.min.js" type="text/javascript"></script>
<script type='text/javascript' src='<?php echo BASE_URL; ?>jqzoom_ev-2.3/js/jquery.jqzoom-core.js'></script>
<script src="<?php echo BASE_URL; ?>js/jquery-form.js"></script>
<script src="<?php echo BASE_URL; ?>foundation/js/foundation.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>jqzoom_ev-2.3/css/jquery.jqzoom.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/custom-theme/jquery-ui-1.10.0.custom.css">

<script>

$(document).ready(function() {
	$(document).ajaxStart(function() {
	    $("body").addClass("loading");
	});

	$(document).ajaxStop(function() {
	    $("body").removeClass("loading");
	});
	});

</script>
</head>

<body>
<!-- <div  style="position: absolute; top:0px; width: 100%; overflow: hidden;"><canvas id="pCanvas" data-processing-sources="boat/boat.pde"></canvas></div>
</div> -->

<div style="position: fixed; width: 100%;">
	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1 style="font-family: Brush Script MT,cursive; font-size: 36px">Ryan Dang</h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Left Nav Section -->
	    <ul class="left">
	      <li title="Home" style="border-top: none;">
	      	<a href="<?php echo BASE_URL; ?>./">
	      		<i class="fa fa-home fa-3x"></i><i class="fa fa-home fa-3x icon-over"></i>
	      		<span class="menu-text">Home</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My Profile">
	      	<a href="<?php echo BASE_URL; ?>aboutme">
	      		<i class="fa fa-user fa-3x"></i><i class="fa fa-user fa-3x icon-over <?php if($page == 'aboutme.php') echo 'active' ?>"></i>
	      		<span class="menu-text <?php if($page == 'aboutme.php') echo 'activeText' ?>">My Profile</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My Projects">
	      	<a href="<?php echo BASE_URL; ?>works">
	      		<i class="fa fa-briefcase fa-3x"></i><i class="fa fa-briefcase fa-3x icon-over <?php if($page == "works.php") echo "active" ?>"></i>
	      		<span class="menu-text <?php if($page == "works.php") echo "activeText" ?>">My Projects</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My School Works">
	      	<a href="<?php echo BASE_URL; ?>school#">
	      		<i class="fa fa-graduation-cap fa-3x"></i><i class="fa fa-graduation-cap fa-3x icon-over <?php if($page == "school.php") echo "active" ?>"></i>
	      		<span class="menu-text <?php if($page == "school.php") echo "activeText" ?>">My School Works</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My Games">
	      	<a href="<?php echo BASE_URL; ?>games">
	      		<i class="fa fa-gamepad fa-3x"></i><i class="fa fa-gamepad fa-3x icon-over <?php if($page == "games.php" || $page == "assembling_game/puzzle.php") echo "active" ?>"></i>
	      		<span class="menu-text <?php if($page == "games.php" || $page == "assembling_game/puzzle.php") echo "activeText" ?>">My Games</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>
	    </ul>
	    <!-- Right Nav Section -->
	    <ul class="right">
	      <li title="Connect">
	      	<a href="<?php echo BASE_URL; ?>connect">
	      		<i class="fa fa-users fa-3x"></i><i class="fa fa-users fa-3x icon-over <?php if($page == "connect.php") echo "active" ?>"></i>
	      		<span class="menu-text <?php if($page == "connect.php") echo "activeText" ?>">Connect With Me</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>
	      <li title="Contact">
	      	<a href="<?php echo BASE_URL; ?>contact">
	      		<i class="fa fa-envelope fa-3x"></i><i class="fa fa-envelope fa-3x icon-over <?php if($page == "contact.php") echo "active" ?>"></i>
	      		<span class="menu-text <?php if($page == "contact.php") echo "activeText" ?>">Contact Me</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>
	    </ul>
	  </section>
	  <span class="ribbon orange"><?php echo $today ?></span>
	</nav>
</div>

<div class="row" id="wrap">
<br/><br/><br/><br/>
<!-- <div id="rightpannel" style="<?php if($page == "social_network.php") echo "background: white"; else if ($page == "dealornodeal/dealornodeal.php") echo "overflow: visible";?> "> -->
