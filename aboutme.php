<?php
/*
$path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
if(preg_match('~^$~',$path,$m))
	$display_page = ("index");
echo $display_page;
*/
//echo $display_page;
//echo "</br>123";
//$path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

//$page = $display_page;
//echo $path;

//if(preg_match('~^([a-z\-_/]*)'. "my_own" .'([a-z\-_/]*)$~',$path,$m))
//echo $m[2];
?>



<script>

$(document).ready(function() {
	$(".modal").show();
$( window ).load(function() {
	$(".modal").hide();
var numberofitems = 3;
var leftitems = numberofitems;
var rightitems = 0;
var index = 10001;
        $("#rightfolder").flippy({
            color_target: "#e6c45c",
            direction: "right",
            duration: "550",
			onMidway: function(){
				$("#rightfolder").css("z-index", "100");
			},

			onFinish: function(){
				$("#rightfolder").html('<div id="rightfolder2" ></div>');
			},

         });

		$(".whitepaper").click(function(){
			//alert("ASD");
			if($(this).height() == 1200)
			return;
			$(this).css("z-index",index++);
			$("#goleft2").hide();
			$("#goright2").hide();
			$(this).animate({
			left: "-25px",
			top: "-130px",
			"font-size": "31px",
			height: "1200px",
			width:  "714px",
			padding: "45px"
			}, 500, function() {
			// Animation complete.
				$("#goleft").fadeIn();
				$("#goright").fadeIn();
				$(this).addClass("viewing");
				$("#lefthand").show();
				$("#righthand").show();
			});
		});


		$("#goleft").click(function(){
				$("#lefthand").hide();
				$("#righthand").hide();
			$(".viewing").animate({
			left: "0px",
			top: "0px",
			"font-size": "13px",
			height: "510px",
			width:  "300px",
			padding: "20px"
			}, 500, function() {
			// Animation complete.
				$("#goleft").fadeOut();
				$("#goright").fadeOut();
				$(this).removeClass("viewing");
				$("#goleft2").fadeIn();
				$("#goright2").fadeIn();
				//$(this).css("z-index","10001");
				$(this).next().addClass("topright");
				$(".topleft").removeClass("topleft");
				$(this).removeClass("topright");
				$(this).addClass("topleft");

			});



			});

		$("#goleft2").click(function(){
			$(".topright").css("z-index",index++);
			$(".topright").animate({
			left: "0px",
			top: "0px",
			"font-size": "13px",
			height: "510px",
			width:  "300px",
			padding: "20px"
			}, 500, function() {
			// Animation complete.
				//$(this).css("z-index","10001");
				$(this).next().addClass("topright");
				$(".topleft").removeClass("topleft");
				$(this).removeClass("topright");
				$(this).addClass("topleft");

			});

		});
		$("#goright").click(function(){
				$("#lefthand").hide();
				$("#righthand").hide();
			$(".viewing").animate({
			left: "420px",
			top: "0px",
			"font-size": "13px",
			height: "510px",
			width:  "300px",
			padding: "20px"
			}, 500, function() {
			// Animation complete.
				$("#goleft").fadeOut();
				$("#goright").fadeOut();
				$(this).removeClass("viewing");
				//$(this).css("display","none");
				//$("#rightfolder2").append('<div class="whitepaperR">'+ $(this).html() +'</div>');
				//$(this).removeClass("whitepaperL");
				//$(this).addClass("whitepaperR");
				$("#goleft2").fadeIn();
				$("#goright2").fadeIn();
				//$(this).css("z-index","10001");
				$(".topright").removeClass("topright");
				$(this).removeClass("topleft");
				$(this).addClass("topright");
				$(this).prev().addClass("topleft");

			});
			});
		$("#goright2").click(function(){
			//alert(2);
			$(".topleft").css("z-index",index++);
			$(".topleft").animate({
			left: "420px",
			top: "0px",
			"font-size": "13px",
			height: "510px",
			width:  "300px",
			padding: "20px"
			}, 500, function() {
			// Animation complete.
				//$(this).css("z-index","10001");
				$(".topright").removeClass("topright");
				$(this).removeClass("topleft");
				$(this).addClass("topright");
				$(this).prev().addClass("topleft");

			});
		});


		//$("#rightpannel").css("over-flow", "show");
		//$("#fbicontainer").css("width", "1600px");

		//$("#fbicontainer").css("height", "1600px");
});
});


</script>
<h1>Ryan Dang's FBI Files!</h1>
<br/><br/><br/>

<script>
/*
$(document).ready(function() {
	$("#desk").hide();
	$("#mac").hide();

		setTimeout(function(){
		$("#desk").fadeIn();
		$("#desk").animate({width: "400px"},1000);  //animate({fontSize: "70px"}, 500);
		},2000);
		setTimeout(function(){
		$("#mac").fadeIn();
		},4000);
});
*/
</script>


<!-- <div id="foldername" >
<span id="recordname">Ryan Dang </span>
</div>


<div id="leftfolder" >
<div class="whitepaper">
	<span class="folded-corner"></span>
	To be added
</div>
<div class="whitepaper">
	<span class="folded-corner"></span>
	-Ryan loves to sing. He always sings in the car!<br/> However he is a terrible singer!. <br/><br/>
</div>
<div class="whitepaper" style="background: #8f8f87">
<div class="note2">Ryan Dang's<br/> Top Secret<br/> Files! </div>
</div>


<div class="whitepaper">
<span class="folded-corner"></span>
	<div class="note">Reference Letter </div>
	<img src="images/ref.png" alt="reference" width="100%" height="60%"/>

</div>
<div class="whitepaper">
<span class="folded-corner"></span>
	<div class="note">Transcript </div>
	<img src="images/transcript.jpg" alt="diploma" width="100%" height="60%"/>

</div>
<div class="whitepaper">
<span class="folded-corner"></span>
	<div class="note">Certificate </div>
	<img src="images/diploma.jpg" alt="diploma" width="100%" height="60%"/>

</div>
<div class="whitepaper">
<span class="folded-corner"></span>
	<div class="note">Education(con't) </div>
<b>Humber College</b><br/>
Business Administration-Accounting Diploma<br/><br/>
2006 - 2010 <br/>
</div>
<div class="whitepaper">
<span class="folded-corner"></span>
	<div class="note">Education </div>

<b>Seneca College of Applied Arts and<br/> Technology</b><br/>
Bachelor Software Development<br/><br/>

2013 - 2015<br/><br/>

Grade: 3.6/4GPA<br/><br/>

- Awarded Renewable Scholarship - Bachelor of Technology year 2013<br/>
<br/><br/>

<b>Seneca College of Applied Arts and<br/> Technology</b><br/>
Computer Programing Diploma<br/><br/>

2011 - 2013<br/><br/>

Grade: 3.8/4GPA<br/><br/>

- Winner of The AMSDELL scholarship<br/>
- Graduated with honors in Computer Programmer<br/><br/><br/>
</div>
<div class="whitepaper">
<span class="folded-corner"></span>
	<div class="note">Works</div>
<b>Web Developer</b><br/>
Fivel Inc.<br/>
December 2014 - present <br/><br/>

<b>Web Developer</b><br/>
Traffic Duco Inc.<br/>
December 2012 - 2013 <br/><br/>


<b>Web Developer</b><br/>
Seneca College of Applied Arts and Technology<br/>
January 2012 - August 2012<br/><br/>


<b>Shift Manager</b><br/>
McDonald's Corporation<br/>
May 2008 - September 2009<br/><br/>


<b>Tax Preparer</b><br/>
Liberty Tax<br/>
February 2008 - April 2008
</div>
<div class="whitepaper">
	<span class="folded-corner"></span>
	<div class="note">Summary(con't) </div>
	- A great team player.
	<br/><br/>
	- Always take the initiative.
	<br/><br/>
	- Demonstrated solid knowledge in understanding modern
	user experiences in web world.
	<br/><br/>
	- Demonstrated technical excellence in software<br/> engineering throughout design, emplementation <br/>and testing.


</div>

<div class="whitepaper topleft">
	<div class="note">Summary </div>


	<span class="folded-corner"></span>
- An enthusiastic and self-motivated Web <br/>Developer with 3 years of experience in creating websites.<br/><br/>- Proficient in Node, Angular, MongoDB, Mongoose, PHP, JavaScript, jQuery, Ajax, JSON, HTML, <br/> CSS, Processing and MySQL.<br/><br/>
- Knowledgeable in ASP.NET, C++, C, C#,<br/> Java, Shell Scripting and Perl.
<br/><br/>

- Has always  been a hardworking employee.
<br/><br/>- Never cease to amaze his employers about <br/>what he can accomplish.

<br/><br/>
	- Has deep understanding in internet <br/>application architecture, design, data structures,<br/>algorithm design, problem solving, and <br/>complexity analsis.
<br/><br/>
	- Demonstrated the ability to communicate<br/> effectively in both technical and business<br/> environments.
<br/><br/>

</div>

</div>

<div id="middlefolder" >

</div>
<div id="rightfolder" >

</div>

<img id="goleft" alt="goleft" src="images/back.png" width="40" height="40" class="transform1 languageimage" style="position: relative; left: -447px; top: 200px; z-index: 20000;display: none; cursor: pointer"/>
<img id="goleft2" alt="goleft2" src="images/goleft.png" width="40" height="40" class="languageimage" style="position: absolute; left: 505px; top: 650px; z-index: 20000; cursor: pointer"/>
<img id="goright" alt="goright" src="images/right.png" width="40" height="40" class="transform2 languageimage" style="position: relative; left: 310px; top: 200px; z-index: 20000; display: none; cursor: pointer"/>
<img id="goright2" alt="goright2" src="images/goright.png" width="40" height="40" class="languageimage" style="position: absolute; left: 390px; top: 200px; z-index: 20000; cursor: pointer"/>
<img id="lefthand" alt="lefthand" src="images/lefthand.png" />
<img id="righthand" alt="righthand" src="images/righthand.png" /> -->



