<?php
/*
$path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
if(preg_match('~^$~',$path,$m))  
	$display_page = ("index");
echo $display_page;
*/
//echo $display_page;

require_once 'functions/initialize.php';
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

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />


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
background: url("images/bg.jpg");
height: 100%; 
margin: 0px;
overflow: hidden;
max-height: 1600px;
}

h1
{
font-family: Arial, sans-serif;
line-height: 1em;
color: #ec8674;
font-weight:bold;
font-size: 57px;
text-shadow:0px 0px 0 rgb(212,110,92),-1px 0px 0 rgb(197,95,77),-2px 0px 0 rgb(183,81,63),-3px 0px 0 rgb(168,66,48),-4px 0px 0 rgb(154,52,34),-5px 0px 0 rgb(139,37,19), -6px 0px 0 rgb(125,23,5),-7px 0px 6px rgba(0,0,0,0.6),-7px 0px 1px rgba(0,0,0,0.5),0px 0px 6px rgba(0,0,0,.2);
  -webkit-transition: all 0.2s ease;
     -moz-transition: all 0.2s ease;
       -o-transition: all 0.2s ease;
      -ms-transition: all 0.2s ease;
          transition: all 0.2s ease;
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

}

.mycorner2
{
background: white; 
border-radius: 500px;
border: 10px solid #EC8574;
padding-right: 40px;
top: -300px;
overflow: hidden;
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

#board
{
position: absolute;
top: -80px;
width: 500px;
height: 500px;
left: 250px;
opacity: 0;
}
#marker
{
position: absolute;
width: 70px;
height:70px;
left: 290px;
top:40px;
opacity: 0;
}
#boardtext
{
position: absolute;
font-size: 33px;
left: 280px;
top:20px;
width: 520px;
}
#chair
{
position: absolute;
top: 160px;
left: 360px;
width: 380px;
height: 400px;
opacity: 0;
}
#me
{
position: absolute;
width: 500px;
height: 500px;
top: 30px;
left: 340px;
opacity: 0;
}
#desk
{
position: absolute;
top: -100px;
left:100px;
opacity: 0;
width: 700px;
height: 700px;
}
#mac
{
position: absolute;
width: 150px;
height: 150px;
top: 160px;
left: 340px;
opacity: 0;
}
#pen
{
position: absolute;
width: 45px;
height: 90px;
top: 225px;
left: 605px;
opacity: 0;
}
#lamp
{
position: absolute;
width: 150px;
height: 150px;
top: 140px;
left: 200px;
opacity: 0;
}
#phone
{
position: absolute;
width: 60px;
height: 60px;
top: 250px;
left: 550px;
opacity: 0;
}


#host,#host1,#host2,#host3,#host4,#host56
{
width: 314px;
height: 600px;
}
#host2
{
width: 314px;
height: 600px;
}
p.speech1
{
	position: absolute;
	width: 75px;
	font-size: 14px;
	height: 50px;
	line-height: 25px;
	text-align: center;
	vertical-align: middle;
	border: 1px solid #d9e0da;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 4px 4px 1px #888;
	-moz-box-shadow: 4px 4px 1px #888;
	box-shadow: 4px 4px 1px #888;
	left: 420px;
	top:40px;
	z-index: 1000;
background-image: linear-gradient(bottom, rgb(217,224,218) 6%, rgb(242,250,244) 53%);
background-image: -o-linear-gradient(bottom, rgb(217,224,218) 6%, rgb(242,250,244) 53%);
background-image: -moz-linear-gradient(bottom, rgb(217,224,218) 6%, rgb(242,250,244) 53%);
background-image: -webkit-linear-gradient(bottom, rgb(217,224,218) 6%, rgb(242,250,244) 53%);
background-image: -ms-linear-gradient(bottom, rgb(217,224,218) 6%, rgb(242,250,244) 53%);

background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0.06, rgb(217,224,218)),
	color-stop(0.53, rgb(242,250,244))
);
padding: 5px;
display: none;
}

p.speech1:before
{
	content: ' ';
	position: absolute;
	width: 0px;
	height: 0px;
	left: 47px;
	top: 61px;
	border: 21px solid;
	
border-width: 0 21px 21px 0;
border-color: transparent #666 transparent transparent;
opacity: 0.6;
}

p.speech1:after
{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
	left: 48px;
	top: 60px;
	border: 7px solid;
	
border-width: 0 17px 17px 0;
border-color: transparent #d9e0da transparent transparent;	

}

#goto
{
	position: fixed;
	right: 100px;
	bottom: 10px;
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
#progressbar .ui-progressbar-value {
background-color: red;

}
.ui-progressbar-value
{
	background: red;
}
.progress-label {
position: absolute;
left: 50%;
top: 4px;
font-weight: bold;
text-shadow: 1px 1px 0 #fff;
}
#progressbar
{
	position: relative;
	
	width: 900px;
	margin: auto;
/*	
	transform: rotate(-90deg);
	left: -600px;
*/



}
.goto{
position: absolute;
top: 500px;
left: -100px;
text-align: center;
font-family: Arial, sans-serif;
line-height: 1em;
color: #ec8674;
font-weight:bold;
font-size: 57px;
text-shadow:0px 0px 0 rgb(212,110,92),1px 0px 0 rgb(197,95,77),2px 0px 0 rgb(183,81,63),3px 0px 0 rgb(168,66,48),4px 0px 0 rgb(154,52,34),5px 0px 0 rgb(139,37,19), 6px 0px 0 rgb(125,23,5),7px 0px 6px rgba(0,0,0,0.6),7px 0px 1px rgba(0,0,0,0.5),0px 0px 6px rgba(0,0,0,.2);}

.goto:hover
{

color: #f2705c;
}

.button {
	-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c62d1f) );
	background:-moz-linear-gradient( center top, #f24537 5%, #c62d1f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c62d1f');
	background-color:#f24537;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
	text-indent:0;
	border:1px solid #d02718;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:50px;
	line-height:50px;
	width:200px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #810e05;
	position: absolute;
	top: 365px;
}
.button:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24537) );
	background:-moz-linear-gradient( center top, #c62d1f 5%, #f24537 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24537');
	background-color:#c62d1f;
}.button:active {
	position:absolute;
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
	function move()
	{
		//alert("ADA");
		$("#movingbody").animate({top: "-100%", left: "100%"},1000);
		//$("#progressbar").animate({top: "-=100%", left: "+=100%"},1000);
	}
	function move2()
	{
		//alert("ADA");
		$("#movingbody").animate({top: "-250%"},1000);
		
	}
	function move3()
	{
		//alert("ADA");
		$("#movingbody").animate({top: "-350%",left: "0"},1000);
		
	}
	function move4()
	{
		//alert("ADA");
		$("#movingbody").animate({left: "-100%", top: "-250%"},1000);
		
	}
	function move5()
	{
		//alert("ADA");
		$("#movingbody").animate({top: "-100%"},1000);
		
	}
	function move6()
	{
		//alert("ADA");
		$("#movingbody").animate({top: "0", left: "0"},1000);
		
	}
	
	function animateli(ulid, accumulatedtime){
	var counter = 0;
	var animatetime = 500;
	var waittime = 2000;
	$("#"+ulid +" li").each(function(){		
		//alert(globalcounter);
		var id = $(this).attr("id");
		counter ++;
		if(counter%4 ==2 )
		{
		setTimeout(function(){
			$("#"+id).css("left", "400px");
			$("#"+id).show();
			$("#"+id).animate({left: "0px"},animatetime);
			
		},accumulatedtime += waittime);
		}
		else if(counter%4 ==0 )
		{
		setTimeout(function(){
			$("#"+id).css("top", "400px");
			$("#"+id).show();
			$("#"+id).animate({top: "0px"},animatetime);
			
		},accumulatedtime += waittime);				
		}
		else if(counter%4 ==1 )
		{
		setTimeout(function(){
			$("#"+id).css("top", "-400px");
			$("#"+id).show();
			$("#"+id).animate({top: "0px"},animatetime);
			
		},accumulatedtime += waittime);				
		}
		else{
		setTimeout(function(){
			$("#"+id).fadeIn();
		},accumulatedtime += waittime);	
		}
	});	
	return accumulatedtime + 2000;
	}
	
var globalcounter = 0;	
$(document).ready(function() {
	//setTimeout(function(){
	//move();
	//},2000);	
	
	//run animation after window finished loading all images
$( window ).load(function() {

	$(".modal").hide();
	//move();
	//move2();
	var accumulatedtime = 0;
	var animatedTime = 500;
	
	$("#desk").animate({opacity: "1"},animatedTime);
	accumulatedtime += animatedTime;
	
	setTimeout(function(){
		$("#lamp").css("left", "-=200px");
		$("#lamp").animate({left: "+=200px", opacity: "1"},animatedTime);
		
	},accumulatedtime);	
	accumulatedtime += animatedTime;
	
	setTimeout(function(){
		$("#pen").css("left", "+=200px");
		$("#pen").animate({left: "-=200px", opacity: "1"},animatedTime);
		
	},accumulatedtime);	
	accumulatedtime += animatedTime;	
	
	setTimeout(function(){

		$("#phone").animate({opacity: "1"},animatedTime);
		
	},accumulatedtime);	
	accumulatedtime += animatedTime;		
	setTimeout(function(){

		$("#mac").animate({opacity: "1"},animatedTime);
		
	},accumulatedtime);	
	accumulatedtime += animatedTime;	

	setTimeout(function(){
		$("#chair").css("top", "-=200px");
		$("#chair").css("left", "+=200px");
		$("#chair").animate({top: "+=200px", left: "-=200px", opacity: "1"},animatedTime);
		
	},accumulatedtime);	
	accumulatedtime += animatedTime;	

	setTimeout(function(){
		$("#board").css("top", "-=200px");
		$("#board").css("left", "+=200px");
		$("#board").animate({top: "+=200px", left: "-=200px", opacity: "1"},animatedTime);
		
	},accumulatedtime);	
	accumulatedtime += animatedTime;		
	
	var message = "Welcome To My Website :)";
			$("#boardtext").html("");
			 var waittime = 150;			 
			 
			  for (x=0; x<message.length; x++)
			  {
				setTimeout(function(){
				   // $("#boardtext").animate({opacity: "1"},100);
					$("#marker").animate({opacity: "1"},100);
					
					$("#marker").animate({left: "+=14px"},10);
					if(globalcounter%2)
					$("#marker").animate({top: "+=20px"},10);
					else
					$("#marker").animate({top: "-=20px"},10);
					$("#boardtext").append(message[globalcounter]);
					
					globalcounter++;
				},accumulatedtime + waittime*x);					
			  }
				setTimeout(function(){
					$("#marker").fadeOut();
				},accumulatedtime + waittime*x);
			 // $("#marker").animate({left: "990px"},2000);

				setTimeout(function(){
					$("#me").animate({opacity: "1"},animatedTime);
				},accumulatedtime + waittime*x + animatedTime);	
				setTimeout(function(){
					$(".speech1").fadeIn();
					$("#desk2").css("opacity", "1");
					$("#chair2").css("opacity", "1");
					$("#me2").css("opacity", "1");
					$("#pen2").css("opacity", "1");
				},accumulatedtime + waittime*x + animatedTime*2);

/*				
				setTimeout(function(){
					$("#desk").animate({width: "0px"},4000);
					
					
					//move();
				},accumulatedtime + waittime*x + animatedTime*2);	
				setTimeout(function(){
					$("#pen").animate({width: "0px"},1000);
					//move();
				},accumulatedtime + waittime*x + animatedTime*2 +850);
*/				
				/*
				setTimeout(function(){
					//$("#pen").animate({width: "0px"},500);
					$("#me").animate({width: "0px"},1500);
					$("#chair").animate({width: "0px"},2000);
					//move();
				},accumulatedtime + waittime*x + animatedTime*2 +850);				
				accumulatedtime +=waittime*x;
				accumulatedtime += 6000;
				*/
				accumulatedtime +=waittime*x + 1500;
				setTimeout(function(){
					move();
				},accumulatedtime);
/*				
				setTimeout(function(){
					$("#host").fadeIn();
				},accumulatedtime+=1500);		
*/	
	accumulatedtime = animateli("php", accumulatedtime);

	
	setTimeout(function(){
		move2();
	},accumulatedtime+=2000);		

	accumulatedtime = animateli("js", accumulatedtime);
	

	setTimeout(function(){
		move3();
	},accumulatedtime+=2000);	
	accumulatedtime = animateli("html", accumulatedtime);

	
	setTimeout(function(){
		move4();
	},accumulatedtime+=2000);	
	accumulatedtime = animateli("ios", accumulatedtime);

	
	setTimeout(function(){
		move5();
	},accumulatedtime+=2000);	
	accumulatedtime = animateli("game", accumulatedtime);	

	/*
	setTimeout(function(){
		move6();
	},accumulatedtime+=2000);	
	*/
/*
var progressbar = $( "#progressbar" ),
progressLabel = $( ".progress-label" );
progressbar.progressbar({
value: false,
change: function() {
progressLabel.text( progressbar.progressbar( "value" ) + "%" );
},
complete: function() {
//progressLabel.text( "Complete!" );
}
});

function progress() {
var val = progressbar.progressbar( "value" ) || 0;
progressbar.progressbar( "value", val + 1 );
if ( val < 99 ) {
setTimeout(progress, 200);
}
}
progressbar.progressbar( "option", "value", false );

progress();
*/

});			 
});



</script>
</head>

<!--
<body style="height: 100%; margin: 0px; overflow: hidden;">
-->
<body >
<div class="modal"></div>
<div id="movingbody" style="height: 100%; position: relative;">
<!--<div id="progressbar"> <div class="progress-label">Loading...</div></div>-->

<!--
<div id="progress" style="text-align: center; height: 40px; width: 100%; position: fixed;left:0px; top: 900px; z-index: 100000"> 
<div id="progressbar"> <div class="progress-label">Loading...</div></div>
</div>
-->

<div  class="outterdiv" style="z-index: 20000;">
<div class="innerdiv" >
<div class="mycorner mycorner2" >
<img id="board" src ="<?php echo BASE_URL; ?>images/board1.png" alt="board"/>
<img id="chair" src ="<?php echo BASE_URL; ?>images/chair.png" alt="chair"/>
<img id="me" src ="<?php echo BASE_URL; ?>images/me2.png" alt="chair"/>

<img id="desk" src ="<?php echo BASE_URL; ?>images/desk2.png" alt="desk"/>
<img id="pen" src ="<?php echo BASE_URL; ?>images/penholder.png" alt="pen"/>


<img id="mac" src="<?php echo BASE_URL; ?>images/Mac.png" alt="mac" />
<img id="lamp" src="<?php echo BASE_URL; ?>images/lamp.png" alt="lamp" />
<img id="phone" src="<?php echo BASE_URL; ?>images/s4.png" alt="phone" />
<p class="speech1"> Hello </p>
<span id="boardtext"></span>
<img id="marker" src ="<?php echo BASE_URL; ?>images/marker.png" alt="marker"/>
</div>
</div>
</div>
<div  class="outterdiv" style="left:-100%; top:100%;">
<div class="innerdiv">
<div class="mycorner mycorner2"  >
<div style="text-align: center"> <h1> PHP</h1> </div>
<img id="host" src="<?php echo BASE_URL; ?>images/php2.png" alt="host" />
<div class="ulcont"> 
<ul id="php">
<li id="php5">Excellent PHP programming skills </li>
<li id="php1" > 2 years of experience in developing websites backend using PHP</li>
<li id="php2" >Experience with popular frame work such as CakePHP, Codeigniter, and Yii</li>
<li id="php3"> Experience with Drupal CMS framework </li>

</ul>
<a href="works?language=PHP"><span class="button" > Check My Work </span></a>
</div>
</div>
</div>
</div>
<div class="outterdiv" style="left:-100%; top: 250%;">
<div class="innerdiv">
<div class="mycorner mycorner2" >

<div style="text-align: center"> <h1> Javascript and jQuery</h1> </div>
<img id="host2" src="<?php echo BASE_URL; ?>images/javascript_logo.png" alt="host" />
<div class="ulcont"> 

<ul id="js">
<li id="js1">Excellent Javascript skills </li>
<li id="js2">3 years of experience in develop website front end using javascript and jQuery </li>


</ul>
<a href="works?language=javascript"><span class="button" > Check My Work </span></a>
</div>
</div>
</div>
</div>
<div class="outterdiv" style="top: 350%;">
<div class="innerdiv">
<div class="mycorner mycorner2" style="background: white;" >
<div style="text-align: center"> <h1> HTML and CSS</h1> </div>
<img id="host3" src="<?php echo BASE_URL; ?>images/html5.png" alt="host" />
<div class="ulcont"> 
<ul id="html">
<li id="html1">3 years experience in developing front end website using HTML and CSS </li>
<li id="html2">Have great understanding about User Interface </li>
<li id="html3">Always put the users first when develop website  </li>



</ul>
<a href="works?language=HTML"><span class="button" > Check My Work </span></a>
</div>
</div>
</div>
</div>
<div class="outterdiv" style="left: 100%; top: 250%;">
<div class="innerdiv">
<div class="mycorner mycorner2" style="background: white;" >
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
<div class="mycorner mycorner2" >
<div style="text-align: center"> <h1> Mini Games</h1> </div>
<img id="host5" src="<?php echo BASE_URL; ?>images/ilovework.png" alt="host" />
<div class="ulcont"> 
<ul id="game">
<li id="game1">Work on mini games on my spare time </li>
<li id="game2">Games I've developed are Puzzle, HangMan, Deal or no Deal, Math game </li>
<li id="game3">Always looking for new game idea </li>



</ul>
<a href="games"><span class="button" > Check My Games </span></a>
</div>
</div>
</div>
</div>

</div>
</div>
</body>
</html>



