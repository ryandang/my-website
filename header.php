<?php
//initialize
require_once 'functions/initialize.php';

session_start();

if(isset($_SESSION["playedit"]))
$_SESSION["playedit"] = false;
else
$_SESSION["playedit"] = true;





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
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/nivo-slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/animate_nav.css" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/dealornodeal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/math.css" type="text/css" media="screen" />


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
//var mysketch = Processing.getInstanceById('pCanvas');
//mysketch.size($( window ).width(),230);


//playmusic();
$(document).ajaxStart(function() {
    $("body").addClass("loading");
	//$("body").css("overflow", "hidden");
});

$(document).ajaxStop(function() {
    $("body").removeClass("loading");
	//$("body").css("overflow", "auto");
});
$('#headerNote').removeClass("growtext");
$('#headerNote').css("font-size","24px");
$('#headerNote').addClass("growtext");
$('#headerNote').delay(2000).fadeOut(2500);

$("#header_profile_image").mouseenter(function(){
	//alert("YEA");
playmusic();
});
$("#header_profile_image").click(function(){
	//alert("YEA");
playmusic();
});


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
	//alert("ASDAS");
	$("#sidebar").animate({left: "-10px"});
	$("#overlaysidebar").animate({left: "-10px"});
	
});

$("#overlaysidebar").mouseleave(function(){
	//alert("ASDAS");
	$("#sidebar").animate({left: "-75px"});
	$("#overlaysidebar").animate({left: "-75px"});
	
});



//var mysketch = Processing.getInstanceById('pCanvas');
//mysketch.size($( window ).width(),230);
$( window ).resize(function() {
var mysketch = Processing.getInstanceById('pCanvas');
mysketch.size($( window ).width(),230);
//alert("ASDA");
});



/*
$( window ).resize(function() {

$('#pCanvas').css("width", $( window ).width());
$('#pCanvas').css("height", "230px");
});
//Resize Canvas
/*
var ProcessingInit = function() {
  function resizeWindow() {
    var pCanvas = Processing.getInstanceById('pCanvas');
    pCanvas.resize($(window).width(),$(window).height());
	alert("ASDA");
  }
  
  $(window).resize(resizeWindow);
  resizeWindow();
}
*/

/*
	$("#phone").hide();
	$("#desk").hide();
	$(".speech1").hide();
	$(".speech1").html("");
	$("#mac").hide();
	$("#lamp").hide();
	$("#lamp").css("left","50px");
	$("#lamp").css("opacity","0.1");
	$("#chair").hide();
	$("#chair").css("top","50px");
	$("#chair").css("opacity","0.1");
	$("#me").hide();
	$("#pen").hide();
	$("#pen").css("left","250px");
	$("#pen").css("opacity","0.1");	
	$("#me").css("opacity","0.1");		
	var animatetime = 500;
	var starttime =5000;
		setTimeout(function(){
		$("#desk").fadeIn();
		//$("#desk").animate({width: "400px"},1000);  //animate({fontSize: "70px"}, 500);
		},starttime += animatetime);	
		setTimeout(function(){
		$("#mac").fadeIn();
		},starttime += animatetime);
		setTimeout(function(){
		$("#phone").fadeIn();
		},starttime += animatetime);
		setTimeout(function(){
		$("#pen").show();
		$("#pen").animate({left: "220px",opacity : "1"},500);	
		},starttime += animatetime);
		setTimeout(function(){
		$("#lamp").show();
		$("#lamp").animate({left: "80px",opacity : "1"},500);	
		},starttime += animatetime);
		setTimeout(function(){
		$("#chair").show();	
		$("#chair").animate({top: "133px",opacity : "1"},1000);			
		},starttime += animatetime);
		setTimeout(function(){
		$("#me").show();
		$("#me").animate({opacity : "1"},1000);			
		},starttime += animatetime*3);

			  var waittime = 100;
			  

			 var message = "Check Out My Work...";
			  for (x=0; x<message.length; x++)
			  {
				setTimeout(function(){
				    $(".speech1").fadeIn();
					$(".speech1").append(message[globalcounter]);
					globalcounter++;
				},starttime + waittime*x);					
			  }

//let's move number 2 top:100px; left: 140px;

	$(".Three-Dee3").hide();
	$(".Three-Dee2").hide();
	$(".Three-Dee").hide();
	$(".Three-Dee4").hide();
	$(".Three-Dee").css("top","20px");
	$(".Three-Dee3").css("left","-50px");
	$(".Three-Dee3").css("opacity","0.1");
	$(".Three-Dee4").css("opacity","0.1");	
	$(".Three-Dee2").css("opacity","0.1");	
	$(".Three-Dee").css("opacity","0.1");	
	$(".Three-Dee4").css("font-size","1000px");
	$("#menu").hide();
	
	
		setTimeout(function(){
		$(".Three-Dee3").show();	
		$(".Three-Dee3").animate({left: "160px",opacity : "1"},0);			
		},500);	
								
		setTimeout(function(){
		$(".Three-Dee4").show();
		$(".Three-Dee4").animate({"font-size": "100px",opacity : "1"},0);
		},1500);
		
		setTimeout(function(){
		$(".Three-Dee2").show();
		$(".Three-Dee2").animate({opacity : "1"},0);
		},2500);
		
		setTimeout(function(){
		$(".Three-Dee").show();
		$(".Three-Dee").animate({top: "100px",opacity : "1"},0);
		},3500);	
		setTimeout(function(){
		$("#menu").fadeIn();
		},4500);
	
*/


/*
	$("#phone").hide();
	$("#desk").hide();
	$(".speech1").hide();
	$(".speech1").html("");
	$("#mac").hide();
	$("#lamp").hide();
	$("#lamp").css("left","50px");
	$("#lamp").css("opacity","0.1");
	$("#chair").hide();
	$("#chair").css("top","50px");
	$("#chair").css("opacity","0.1");
	$("#me").hide();
	$("#pen").hide();
	$("#pen").css("left","250px");
	$("#pen").css("opacity","0.1");	
	$("#me").css("opacity","0.1");		
	var animatetime = 500;
	var starttime =100;
		setTimeout(function(){
		$("#desk").fadeIn();
		//$("#desk").animate({width: "400px"},1000);  //animate({fontSize: "70px"}, 500);
		},starttime += animatetime);	
		setTimeout(function(){
		$("#mac").fadeIn();
		},starttime += animatetime);
		setTimeout(function(){
		$("#phone").fadeIn();
		},starttime += animatetime);
		setTimeout(function(){
		$("#pen").show();
		$("#pen").animate({left: "220px",opacity : "1"},500);	
		},starttime += animatetime);
		setTimeout(function(){
		$("#lamp").show();
		$("#lamp").animate({left: "80px",opacity : "1"},500);	
		},starttime += animatetime);
		setTimeout(function(){
		$("#chair").show();	
		$("#chair").animate({top: "133px",opacity : "1"},1000);			
		},starttime += animatetime);
		setTimeout(function(){
		$("#me").show();
		$("#me").animate({opacity : "1"},1000);			
		},starttime += animatetime*3);


			<?php if($page =="works.php"){?>
			var message = "Check Out My Games";
			<?php } else if($page =="aboutme.php"){ ?>
			var message = "Check Out My Work";
			<?php } else if($page =="games.php"){ ?>
			var message = "Check Out My Profile";
			<?php } else if($page =="contact.php"){ ?>
			var message = "Leave me a message";
			<?php } else {?>
			var message = "Check Out My Work";
			<?php }?>
			$(".speech1").html("");
			 var waittime = 100;			 
			 starttime += 500;
			  for (x=0; x<message.length; x++)
			  {
				setTimeout(function(){
				    $(".speech1").fadeIn();
					$(".speech1").append(message[globalcounter]);
					globalcounter++;
				},starttime+ waittime*x);					
			  }
			*/
			
			/*
			<?php if($page =="works.php"){?>
			var message = "Check Out My Games";
			<?php } else if($page =="aboutme.php"){ ?>
			var message = "Check Out My Work";
			<?php } else if($page =="games.php"){ ?>
			var message = "Check Out My Profile";
			<?php } else if($page =="contact.php"){ ?>
			var message = "Leave me a message";
			<?php } else {?>
			var message = "Check Out My Work";
			<?php }?>
			$(".speech1").html("");
			 var waittime = 100;			 
			  for (x=0; x<message.length; x++)
			  {
				setTimeout(function(){
				    $(".speech1").fadeIn();
					$(".speech1").append(message[globalcounter]);
					globalcounter++;
				},waittime*x);					
			  }
			*/
			  

	
});

function resizeCanvas()
{
var mysketch = Processing.getInstanceById('pCanvas');
mysketch.size($( window ).width(),230);
alert("ASDAS");
}

function playmusic()
{
	if(notplaying)
	{
		notplaying = false;
			for (var i = 0, ar = []; i < arraysongs.length; i++) {
				ar[i] = i;
			}		
			  // randomize the array
			  ar.sort(function () {
				  return Math.random() - 0.5;
			  });
			for (var i = 0, ar2 = []; i < 4; i++) {
				ar2[i] = i;
			}		
			  // randomize the array
			  ar2.sort(function () {
				  return Math.random() - 0.5;
			  });
			  /*

			  */
			  
			  
		
		
		var waittime = 2000;
		//alert(arraysongs[ar[0]][0]);

		/*
		setTimeout(function(){
			$(".speech1").html(arraysongs[ar[0]][0]);
		},waittime*1);			
			
		setTimeout(function(){
			$(".speech1").html(arraysongs[ar[0]][1]);
		},waittime*2);				
		*/
		
	
	$(".speech2").html(arraymusicnotes[ar2[0]] + " " +arraysongs[ar[0]][1]);
	$(".speech1").html(arraymusicnotes[ar2[1]] + " " +arraysongs[ar[0]][0]);
	$(".speech3").html(arraymusicnotes[ar2[2]] + " " +arraysongs[ar[0]][2]);
	$(".speech4").html(arraymusicnotes[ar2[3]] + " " +arraysongs[ar[0]][3]);	
	
	$(".speech1").fadeIn();	
	$('.speech1').delay(2000).fadeOut();
	$('.speech2').delay(3000).fadeIn();	
	$('.speech2').delay(2000).fadeOut();	
	$('.speech3').delay(6000).fadeIn();	
	$('.speech3').delay(2000).fadeOut();
	$('.speech4').delay(9000).fadeIn();	
	$('.speech4').delay(2000).fadeOut();
	
		setTimeout(function(){
		notplaying = true;
		},11000);
	}
}
</script>
</head>

<body >
<div id="wrap">
<div class="modal"></div>
<div id='headerNoteContainer'><div id='headerNote'><?php show_session_note() ?></div></div>
<div id='headerNoteContainer2'><div id='headerNote2'></div></div>
<div id='top_header' class="coolbackground2">

<div id="menucontainer" style="position: relative; top: -80px; width:900px; min-width: 900px; margin: auto; height: 300px;">
<div id="menuitems">
<!--
<p class="speech1" style="text-align: left; left: 850px; top: 70px;"> <?php if($page == "works.php"){ echo "Check Out My Game..."; }else echo "Check Out My Work..."; ?> </p>
-->
<p class="speech1"> </p>
<p class="speech2"> </p>
<p class="speech3"> </p>
<p class="speech4"> </p>
<!--
<span class="Three-Dee3" style="position: absolute; top:100px; left: 150px; z-index: -10;">2</span>
-->
<img id="header_profile_image" src="<?php echo BASE_URL; ?>images/<?php echo $imagearrys[0]; ?>" width="200" height="200" alt="Profile Image"/>
<!--
<span class="Three-Dee4" style="position: absolute; top:100px; left: 210px;z-index: -10;">0</span>
<span class="Three-Dee2" style="position: absolute; top:100px; left: 270px;z-index: -10;">1</span>
<span class="Three-Dee" style="position: absolute; top:100px; left:320px;z-index: -10;">4</span>

<a href="<?php echo BASE_URL; ?>works?language=PHP"><span class="php smalltext">PHP </span></a>
<a href="<?php echo BASE_URL; ?>works?language=jQuery"><span class="jQuery smalltext">jQuery </span> </a>
<a href="<?php echo BASE_URL; ?>works?language=Ajax"><span class="Ajax smalltext">Ajax </span> </a>
<a href="<?php echo BASE_URL; ?>works?language=Javascript"><span class="javascript smalltext">JavaScript </span> </a>
<a href="<?php echo BASE_URL; ?>works?language=CSS"><span class="css smalltext">CSS </span> </a>
<a href="<?php echo BASE_URL; ?>works?language=MySQL"><span class="mysql smalltext">MySQL </span> </a>
<a href="<?php echo BASE_URL; ?>works?language=HTML"><span class="html smalltext">HTML</span> </a>
<a href="<?php echo BASE_URL; ?>works?language=HTML5"><span class="html5 smalltext">HTML5 </span></a>
<a href="<?php echo BASE_URL; ?>works?language=Processing.js"><span class="processing smallertext">Processing.js </span> </a> 
-->
<ul id="menu" class="menu" style="width: 900px">
<li class="menu-1-portfolio <?php if($page == "aboutme.php") echo "active" ?>" style="margin-left: 35px;">
<a href="<?php echo BASE_URL; ?>aboutme">FBI</a>
</li>
<li class="menu-2-cv <?php if($page == "works.php") echo "active" ?>" style="margin-left: 35px;">
<a href="<?php echo BASE_URL; ?>works">Projects</a>
</li>
<!--
<li class="menu-3-articles <?php if($page == "social_network.php") echo "active" ?>">
<a href="<?php echo BASE_URL; ?>social_network">SocialNetwork</a>
</li>
-->
<li class="<?php if($page == "games.php" || $page == "assembling_game/puzzle.php") echo "active" ?>" style="margin-left: 265px;">
<a href="<?php echo BASE_URL; ?>games">Games</a>
</li>
<li class="<?php if($page == "contact.php") echo "active" ?>" style="margin-left: 35px;">
<a href="<?php echo BASE_URL; ?>contact">Contact</a>
</li>
</ul>


</div>

<!--
<div id="mycorner">
<img id="chair" src ="<?php echo BASE_URL; ?>images/chair.png" alt="chair"/>
<img id="me" src ="<?php echo BASE_URL; ?>images/me2.png" alt="Ryan"/>
<img id="desk" src ="<?php echo BASE_URL; ?>images/desk.png" alt="desk"/>
<img id="mac" src="<?php echo BASE_URL; ?>images/Mac.png" alt="mac" />
<img id="pen" src="<?php echo BASE_URL; ?>images/penholder.png" alt="pen" />
<img id="lamp" src="<?php echo BASE_URL; ?>images/lamp.png" alt="lamp" />
<img id="phone" src="<?php echo BASE_URL; ?>images/s4.png" alt="phone" />
</div>
-->
</div>
<div  style="position: absolute; top:0px; width: 100%; overflow: hidden;"><canvas id="pCanvas" data-processing-sources="boat/boat.pde"></canvas></div>
</div>
<div id="overlaysidebar">
<!--<a href="<?php echo BASE_URL; ?>aboutme"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/case.png" style="margin-top:20px;"/></a>-->
<!--<?php if($_SESSION["playedit"]) echo "true"; ?> -->
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
<!--<span class="infopopup" style="position: relative;" alt="YAY"><img class="sidebaricon" src= "<?php echo BASE_URL; ?>images/puzzle_game.jpg" /></span>-->
</div>
<div id="sidebar"> 
</div>
<div class="row">
<div id="rightpannel" style="<?php if($page == "social_network.php") echo "background: white"; else if ($page == "dealornodeal/dealornodeal.php") echo "overflow: visible";?> ">
