<?php
//initialize
require_once 'functions/initialize.php';

session_start();

if(isset($_SESSION["playedit"]))
$_SESSION["playedit"] = false;
else
$_SESSION["playedit"] = true;
$today = date("M j");




//$imagearrys = array("profile1.jpg","profile2.jpg");
$imagearrys = array("profile1.jpg");
//shuffle($imagearrys);
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


<?php if($imagearrys[0] == "profile1.jpg"){ ?>

var arraymusicnotes = ["&#9834;","&#9836;","&#9836;","&#9833;"];
var arraysongs = new Array();
arraysongs[0] = ["Treasure,", "that is what you are","Honey,","you're my golden star"];
arraysongs[1] = ["You know our love", "was meant to be", "The kind of love","that lasts forever"];
arraysongs[2] = ["'Cause if one day", "you wake up","and find that", "you're missing me"];
arraysongs[3] = ["What day is it?"," And in what month?","This clock","never seemed so alive"];
arraysongs[4] = ["But if I fall for you,","I'll never recover","If I fall for you,","I'll never be the same"];
arraysongs[5] = ["I really wanna", "love somebody","I really wanna", "dance the night away"];
arraysongs[6] = ["Tonight. Take me","to the other side","Sparks fly", "like the Fourth of July"];
arraysongs[7] = ["When I get older","I will be stronger","They'll call me freedom","Just like a wavin flag"];
arraysongs[8] = ["Out of the doubt", "that fills my mind", "I somehow find","You and I collide"];
arraysongs[9] = ["I don't want my love", "to go to waste","I want you and", "your beautiful soul"];
arraysongs[10] = ["Right from the start","You were a thief","You stole my heart","And I your willing victim"];
arraysongs[11] = ["'Cause I'm only a crack","in this castle of glass","Hardly anything there", "for you to see"];
arraysongs[12] = ["Share my life,", "take me for what","I am", "'Cause I'll never change"];
arraysongs[13] = ["I'm the one who wants", "to be with you","Deep inside I hope", "you'll feel it too"];
arraysongs[14] = ["I'll be your hope","I'll be your love","Be everything","that you need"];
arraysongs[15] = ["When I'm feeling blue,","all I have to do","Is take a look","at you"];
arraysongs[16] = ["Cause you had a","bad day","You're taking one down","You sing a sad song"];
arraysongs[17] = ["Hey, it's me again.","Plain, you see again.","Please, can I see you","ev'ry day?"];
arraysongs[18] = ["Hey Jude,","don't make it bad.","Take a sad song","and make it better."];
arraysongs[19] = ["You think I'd","leave your side baby","You know me","better than that"];
arraysongs[20] = ["You're so scared","to fall in love","Cuz you end in the dust","Everytime everytime..."];
arraysongs[21] = ["And when the daylight","comes I'll have to go","But tonight I'm gonna","hold you so close"];
arraysongs[22] = ["Shot me out of the sky","You're my kryptonite","Ya keep making me weak","frozen and can't breathe"];
arraysongs[23] = ["You don't know","you're beautiful,","That's what makes","you beautiful"];
arraysongs[24] = ["I just want you","to know who I am","I just want you","to know who I am"];
arraysongs[25] = ["Many nights"," we've prayed","With no proof","anyone could hear"];
arraysongs[26] = ["And I...","will always love you,","Will always love you","You"];

<?php
}
else if ($imagearrys[0]== "profile2.jpg")
{
?>
var arraymusicnotes = ["","","",""];
var arraysongs = new Array();
arraysongs[0] = ["&lt;?php ", "//My first php program", 'echo "Hello World!";',"?&gt;"];
arraysongs[1] = ["#mycssclass{", "width: 100%;", "min-height: 800px;","}"];
arraysongs[2] = ["&lt;script&gt;","function myFunction(){","alert('Hello World!');}","&lt;/script&gt;"];





<?php } ?>
var notplaying = true;
var hiddensidebar = true;
var globalcounter = 0;
var globalcounter2 = 0;
var globalcounter3 = 0;
var globalcounter4 = 0;
$(document).ready(function() {
$(document).ajaxStart(function() {
    $("body").addClass("loading");
});

$(document).ajaxStop(function() {
    $("body").removeClass("loading");
});
// $('#headerNote').removeClass("growtext");
// $('#headerNote').css("font-size","24px");
// $('#headerNote').addClass("growtext");
// $('#headerNote').delay(2000).fadeOut(2500);

// $("#header_profile_image").mouseenter(function(){
// playmusic();
// });
// $("#header_profile_image").click(function(){
// playmusic();
// });


$("#overlaysidebar").click(function(){
	if(hiddensidebar)
	{
	$("#sidebar").animate({left: "-10px"});
	$("#overlaysidebar").animate({left: "-10px"});
		hiddensidebar = false;
	}
	else
	{
	$("#sidebar").animate({left: "-75px"});
	$("#overlaysidebar").animate({left: "-75px"});
		hiddensidebar = true;
	}
});
$("#overlaysidebar").mouseenter(function(){
	$("#sidebar").animate({left: "-10px"});
	$("#overlaysidebar").animate({left: "-10px"});

});

$("#overlaysidebar").mouseleave(function(){
	$("#sidebar").animate({left: "-75px"});
	$("#overlaysidebar").animate({left: "-75px"});

});



// $( window ).resize(function() {
// var mysketch = Processing.getInstanceById('pCanvas');
// mysketch.size($( window ).width(),230);
// });


});

// function resizeCanvas()
// {
// var mysketch = Processing.getInstanceById('pCanvas');
// mysketch.size($( window ).width(),230);
// alert("ASDAS");
// }

// function playmusic()
// {
// 	if(notplaying)
// 	{
// 		notplaying = false;
// 			for (var i = 0, ar = []; i < arraysongs.length; i++) {
// 				ar[i] = i;
// 			}
// 			  // randomize the array
// 			  ar.sort(function () {
// 				  return Math.random() - 0.5;
// 			  });
// 			for (var i = 0, ar2 = []; i < 4; i++) {
// 				ar2[i] = i;
// 			}
// 			  // randomize the array
// 			  ar2.sort(function () {
// 				  return Math.random() - 0.5;
// 			  });

// 		var waittime = 2000;

// 	$(".speech2").html(arraymusicnotes[ar2[0]] + " " +arraysongs[ar[0]][1]);
// 	$(".speech1").html(arraymusicnotes[ar2[1]] + " " +arraysongs[ar[0]][0]);
// 	$(".speech3").html(arraymusicnotes[ar2[2]] + " " +arraysongs[ar[0]][2]);
// 	$(".speech4").html(arraymusicnotes[ar2[3]] + " " +arraysongs[ar[0]][3]);

// 	$(".speech1").fadeIn();
// 	$('.speech1').delay(2000).fadeOut();
// 	$('.speech2').delay(3000).fadeIn();
// 	$('.speech2').delay(2000).fadeOut();
// 	$('.speech3').delay(6000).fadeIn();
// 	$('.speech3').delay(2000).fadeOut();
// 	$('.speech4').delay(9000).fadeIn();
// 	$('.speech4').delay(2000).fadeOut();

// 		setTimeout(function(){
// 		notplaying = true;
// 		},11000);
// 	}
// }

</script>
</head>

<body>
<!-- 	<div id="wrap"> -->
	<!-- <div class="modal"></div> -->

	<!-- <div id='headerNoteContainer'><div id='headerNote'><?php show_session_note() ?></div></div> -->
	<!-- <div id='headerNoteContainer2'><div id='headerNote2'></div></div> -->
	<!-- <div id='top_header' class="coolbackground2"> -->

<!-- <div id="menucontainer" style="position: relative; top: -80px; width:900px; min-width: 900px; margin: auto; height: 300px;">
<div id="menuitems">
<p class="speech1"> </p>
<p class="speech2"> </p>
<p class="speech3"> </p>
<p class="speech4"> </p>
<img id="header_profile_image" src="<?php echo BASE_URL; ?>images/<?php echo $imagearrys[0]; ?>" width="200" height="200" alt="Profile Image"/>
<ul id="menu" style="width: 900px">
<li class="menu-1-portfolio <?php if($page == "aboutme.php") echo "active" ?>" style="margin-left: 35px;">
<a href="<?php echo BASE_URL; ?>aboutme">FBI</a>
</li>
<li class="menu-2-cv <?php if($page == "works.php") echo "active" ?>" style="margin-left: 35px;">
<a href="<?php echo BASE_URL; ?>works">Projects</a>
</li>
<li class="<?php if($page == "games.php" || $page == "assembling_game/puzzle.php") echo "active" ?>" style="margin-left: 265px;">
<a href="<?php echo BASE_URL; ?>games">Games</a>
</li>
<li class="<?php if($page == "contact.php") echo "active" ?>" style="margin-left: 35px;">
<a href="<?php echo BASE_URL; ?>contact">Contact</a>
</li>
</ul>


</div>

</div> -->
<!-- <div  style="position: absolute; top:0px; width: 100%; overflow: hidden;"><canvas id="pCanvas" data-processing-sources="boat/boat.pde"></canvas></div>
</div> -->

	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1 style="font-size: 30px">Ryan Dang</h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Left Nav Section -->
	    <ul class="left">
	      <li title="Home">
	      	<a href="<?php echo BASE_URL; ?>./">
	      		<i class="fa fa-home fa-3x"></i><i class="fa fa-home fa-3x icon-over"></i>
	      		<span class="menu-text">Home</span>
	      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      	</a>
	      </li>

	      <li title="My Profile">
	      	<a href="<?php echo BASE_URL; ?>aboutme">
	      		<i class="fa fa-user fa-3x"></i><i class="fa fa-user fa-3x icon-over <?php if($page == "aboutme.php") echo "active" ?>""></i>
	      		<span class="menu-text <?php if($page == "aboutme.php") echo "activeText" ?>">My Profile</span>
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
	      	<a href="<?php echo BASE_URL; ?>#">
	      		<i class="fa fa-graduation-cap fa-3x"></i><i class="fa fa-graduation-cap fa-3x icon-over"></i>
	      		<span class="menu-text">My School Works</span>
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
	      	<a href="<?php echo BASE_URL; ?>#">
	      		<i class="fa fa-users fa-3x"></i><i class="fa fa-users fa-3x icon-over"></i>
	      		<span class="menu-text">Connect With Me</span>
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






<!-- <div id="overlaysidebar">
<a href="<?php echo BASE_URL; ?>works"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/work.png" alt="work"/></a>
<a href="<?php echo BASE_URL; ?>contact"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/email.png" alt="contact"/></a>
<a href="<?php echo BASE_URL; ?>assembling_game/puzzle"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/puzzle.png" alt="puzzle"/></a>
<a href="<?php echo BASE_URL; ?>hangman"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/hangicon.png" alt="hang game"/></a>
<a href="<?php echo BASE_URL; ?>dealornodeal"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/nodeal.png" alt="nodeal"/></a>
<a href="<?php echo BASE_URL; ?>math"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/math.png" alt="math"/></a>
<a href="<?php echo BASE_URL; ?>works?language=PHP"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/php.png" alt="php"/></a>
<a href="<?php echo BASE_URL; ?>works?language=ajax"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/ajax.png" alt="ajax"/></a>
<a href="<?php echo BASE_URL; ?>works?language=html"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/html.png" alt="html"/></a>
<a href="<?php echo BASE_URL; ?>works?language=css"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/css.png" alt="css"/></a>
<a href="<?php echo BASE_URL; ?>works?language=javascript"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/javascript.png" alt="javascript"/></a>
<a href="<?php echo BASE_URL; ?>works?language=jquery"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/jquery.png" alt="jquery"/></a>
<a href="<?php echo BASE_URL; ?>works?language=mysql"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/mysql.png" alt="mysql"/></a>
</div> -->

<script>

 $(document).foundation();

</script>
<!-- <div id="sidebar"> -->
<!-- </div> -->


<!-- <div id="rightpannel" style="<?php if($page == "social_network.php") echo "background: white"; else if ($page == "dealornodeal/dealornodeal.php") echo "overflow: visible";?> "> -->
