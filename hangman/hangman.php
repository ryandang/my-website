<?php

$result = mysql_query("SELECT * from hangman");
$num = mysql_num_rows($result);
while($r = mysql_fetch_assoc($result))
{
	$num = $r["visit"];	
}
echo "<div class='viewcount'>  Played: ". $num . " times</div>";
//fopen('word.txt',"r");

$visit = $num  + 1;
mysql_query("UPDATE hangman set visit=$visit where id=1");

$wordsArray = file(BASE_URL . 'hangman/word.txt');

$random = rand(0,count($wordsArray)-1);


	$word = trim(strtoupper($wordsArray[$random]));
	$originalword = $word;
	//echo $word;
	$alph = "QWERTYUIOPASDFGHJKLZXCVBNM";
	
	$numberofletter = 0;
	for ($x = 0; $x < strlen($alph); $x++)
	{
		$l = substr($alph,$x,1);
		$count = substr_count($word, $l);
		if($count)
			$numberofletter += 1;
	}
	
	$title=urlencode('Ryan Dang Hangman Game');
	$url=urlencode('http://www.ryandang.com/hangman');
	$summary=urlencode('I have guess the word '. $originalword . " in the Hangman game.");
	
	$image=BASE_URL . "images/hangicon.png";
	//echo $image;
	$image = urlencode($image);
?>
<canvas id="myCanvas" width="500" height="500"></canvas>

<script>
// requestAnimationFrame Shim
(function() {
  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
                              window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  window.requestAnimationFrame = requestAnimationFrame;
})();
 

var canvas = document.getElementById('myCanvas');
 var context = canvas.getContext('2d');
 var x = canvas.width / 2;
 var y = canvas.height / 8;
 var radius = 55;
 var endPercent = 110;
 var curPerc = 0;
 var counterClockwise = false;
 var circ = Math.PI * 2;
 var quart = Math.PI / 2;
 var guesswrong = 0;
 var correctedguess = "";		
 var word = "<?php echo $word; ?>";
 context.lineWidth = 10;
 context.strokeStyle = '#ad2323';
 var numberofletter = <?php echo $numberofletter; ?>;
 var badguess = ["Nooooo!","I'm dying here!","Seriously??","My life is on the line","Worst guess ever!"];
 var goodguess = ["Good Job!", "YAY!", "You're the best", "AWESOME!", "Nice one!"];
 
// context.shadowOffsetX = 0;
// context.shadowOffsetY = 0;
// context.shadowBlur = 10;
// context.shadowColor = '#656565';


 function animate(current) {
	
     context.clearRect(0, 0, canvas.width, canvas.height);
     context.beginPath();
     context.arc(250, y, radius, -(quart), ((circ) * current) - quart, false);
     context.stroke();
     curPerc+= 5;
     if (curPerc < endPercent) {
         requestAnimationFrame(function () {
             animate(curPerc / 100)
         });
     }
	 else
	 {
		drawlefteye(0);
	 }
 }
 
 
 function drawlefteye(y)
 {
	//context.clearRect(0, 0, canvas.width, canvas.height);
	  context.beginPath();
	  x = y;
      context.moveTo(213, 50);
      context.lineTo(213+x, 50);
      context.stroke();	
	  y++;
	  
	  
	  if(y<20)
	  {
         requestAnimationFrame(function () {
             drawlefteye(y)
         });	  
	  }
	  else
	  drawrighteye(0);
	  
 }
 
  function drawrighteye(y)
 {
	//context.clearRect(0, 0, canvas.width, canvas.height);
	  context.beginPath();
	  x = y;
      context.moveTo(268, 50);
      context.lineTo(268+x, 50);
      context.stroke();	
	  y++;
	  
	  
	  if(y<20)
	  {
         requestAnimationFrame(function () {
             drawrighteye(y)
         });	  
	  } 
	  else
	  {
		drawnose(0)
	  }
	  
 }
 
 function drawmouth(y)
 {
	  context.beginPath();
	  x = y;
      context.moveTo(240, 100);
      context.lineTo(240+x, 100);
      context.stroke();	
	  y++;
	  
	  
	  if(y<20)
	  {
         requestAnimationFrame(function () {
             drawmouth(y)
         });	  
	  }  
 }
 
 function drawnose(y)
 {
	  context.beginPath();
	  x = 60;
	  x = 60+y;
      context.moveTo(250, 60);
      context.lineTo(250, x);
      context.stroke();	
	  y++;
	  if(y<20)
	  {
         requestAnimationFrame(function () {
             drawnose(y)
         });	  
	  }
	   else
	   {
			drawmouth(0);
	   }
 }
 
 
 function drawbody(y)
 {
	//context.clearRect(0, 0, canvas.width, canvas.height);
	  context.beginPath();
	  x = y +115;
      context.moveTo(250, x);
      context.lineTo(250, 115);
      context.stroke();	
	  y+=3;
	  if(y<150)
	  {
         requestAnimationFrame(function () {
             drawbody(y)
         });	  
	  }
 }
 
 function drawlefthand(y)
 {
	
	context.beginPath();
	context.moveTo(250, 120);
    context.lineTo(250-y, 120+y);
    context.stroke();	
	y+=3;
	if(y<100)
	{
         requestAnimationFrame(function () {
             drawlefthand(y)
         });
	}
	
 }
 
 function drawleftleg(y)
 {
	
	context.beginPath();
	context.moveTo(250, 260);
    context.lineTo(250-y, 260+y);
    context.stroke();	
	y+=3;
	if(y<100)
	{
         requestAnimationFrame(function () {
             drawleftleg(y)
         });
	}
	
 } 
 
 function drawrighthand(y)
 {
	
	context.beginPath();
	context.moveTo(250, 120);
    context.lineTo(250+y, 120+y);
    context.stroke();	
	y+=3;
	if(y<100)
	{
         requestAnimationFrame(function () {
             drawrighthand(y)
         });
	}
	
 } 
  function drawrightleg(y)
 {
	
	context.beginPath();
	context.moveTo(250, 260);
    context.lineTo(250+y, 260+y);
    context.stroke();	
	y+=3;
	if(y<100)
	{
         requestAnimationFrame(function () {
             drawrightleg(y)
         });
	}
	
 }
 function draw(x)
 {
	//animate();
	if(x==1)
		animate();
	else if(x==2)
		drawbody(0);
	else if(x==3)
		drawlefthand(0);
	else if(x==4)
		drawrighthand(0);
	else if(x==5)
		drawleftleg(0);
	else if(x==6)
		drawrightleg(0);

 }
 	

$(document).ready(function() {
	//alert(x);

	$("#keyboard .letter2").click(function(){
		$(this).addClass("chose");
		$(this).removeClass("letter2");
		//alert(word.indexOf($(this).attr("alt")));
		if(word.indexOf($(this).attr("alt")) === -1 && numberofletter >0)
		{
		  if(guesswrong == 0){
		  guesswrong++;
		  document.getElementById('wrong3').play();	
		  draw(guesswrong);
		  }
		  else if(guesswrong >0 && curPerc == endPercent && guesswrong < 6){
		  guesswrong++;
		  
		  draw(guesswrong);
			for (var i = 0, ar = []; i < 5; i++) {
				ar[i] = i;
			}		
			  // randomize the array
			  ar.sort(function () {
				  return Math.random() - 0.5;
			  });
		  $(".speech").html(badguess[ar[2]]);
		  $(".speech").fadeIn();
		  if(guesswrong!=6)
		  $(".speech").delay(1000).fadeOut();
		  document.getElementById('wrong4').play();	
		  }
		  if(guesswrong==6){
		  		  $(".speech").fadeIn();
				  $(".speech").html("I can't breath!");
				  $(".boardcover").fadeOut();
				  document.getElementById('over').play();	
				  }
		}
		else if(numberofletter >0)
		{
			$("."+$(this).attr("alt")).animate({opacity: "0.1"});
			//if(guesswrong == 0)	
			//	numberofletter--;				
			if(correctedguess.indexOf($(this).attr("alt")) === -1){ //  && !correctedguess.indexOf($(this).attr("alt")) === -1	
			numberofletter--;			
			}
			if(guesswrong && correctedguess.indexOf($(this).attr("alt")) === -1)
			{
			for (var i = 0, ar = []; i < 5; i++) {
				ar[i] = i;
			}		
			  // randomize the array
			  ar.sort(function () {
				  return Math.random() - 0.5;
			  });
			$(".bubble").html(goodguess[ar[2]]);			
			$(".bubble").fadeIn();
			$(".bubble").delay(1000).fadeOut();			
			}
			correctedguess +=$(this).attr("alt");
			if(!numberofletter)
			{
				$(".speech").html("You saved my life!");
				$(".speech").fadeIn();	
				$("#message").fadeIn();	
				document.getElementById('tada').play();	
			}
			else
			{
				document.getElementById('correct').play();	
			}
		}
	});	
	$("#close").click(function(){
		$("#message").fadeOut();
	});
}); 
</script>

<a href='../games'><img id='back' src='../images/back2.png' width='60' height='60' style="position: absolute;" alt="back"/></a>
<h1> HangMan Game </h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you have what it takes to guess at least one of the most common used words in English?
<div id="message"> 
You have successfully guessed the word: <br/> <span class="letter" style="font-size: 30px; background: none; border: none; width: 100%"><?php echo $originalword;?></span>
<span class="button" id="close" style="position: absolute; top: 220px; left:30px">Close </span> 
<a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">
<span class="button" id="fb" style="width: 150px; position: absolute; top: 220px; right: 30px;">Share on Facebook </span></a>
</div>
<div id="words">
<div class="board">
<?php
	$length = strlen($word);

		
	for($x=0; $x< $length; $x++)
	{
		$l = substr($word,$x,1);
		echo "<span class='letter'> $l </span>";
	}
?>
</div>
<div class="boardcover">
<?php
		for($x=0; $x< $length; $x++)
	{
		$l = substr($word,$x,1);
		echo "<span class='lcover $l' >  </span>";
	}
?>
</div>
<br/><br/><br/><br/><br/><br/>
<!--
Guess a letter: <input type="text" id="letter" /> <button onclick="guessletter()">Guess </button>-->
Please pick any letter<br/><br/>
<div id="keyboard" >
<?php
	$word = "QWERTYUIOP";
	$word2 ="ASDFGHJKL";
	$word3 = "ZXCVBNM";
	$length = strlen($word);
	$length2 = strlen($word2);
	$length3 = strlen($word3);	
	for($x=0; $x< $length; $x++)
	{
		$l = substr($word,$x,1);
		echo "<span class='letter2' alt='$l'> $l </span>";
	}
		echo "</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	for($x=0; $x< $length2; $x++)
	{
		$l = substr($word2,$x,1);
		echo "<span class='letter2' alt='$l'> $l </span>";
	}	
	echo "</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	for($x=0; $x< $length3; $x++)
	{
		$l = substr($word3,$x,1);
		echo "<span class='letter2' alt='$l'> $l </span>";
	}
?>
</div>
</div>
<br/><br/><br/><br/><br/><br/>
<div id="hangbar"> </div>
<div id="pole"> </div>
<div id="string"> </div>

<p class="speech">Noooooo!</p>
<br/><br/><br/>
<p class="bubble thought">YAY!! </p>
<button class="button" style="position: absolute;top: 920px; left: 400px;" onclick="window.location.reload()"> Play Again</button>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/>
 
<audio id="correct" controls >

  <source  src="audio/correct.mp3" type="audio/mpeg">

</audio> 
<audio id="wrong3" controls >

  <source  src="audio/wrong3.mp3" type="audio/mpeg">

</audio> 
<audio id="wrong4" controls >

  <source  src="audio/wrong4.mp3" type="audio/mpeg">

</audio> 
<audio id="tada" controls >

  <source  src="audio/tada.mp3" type="audio/mpeg">

</audio> 
<audio id="over" controls >

  <source  src="audio/over.mp3" type="audio/mpeg">

</audio> 
<!--<a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">Insert text or an image here.</a>
-->
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
Please let me know if there are any bugs. Or tell me some funny messages you would like to see when you make a guess.
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1374567659445390";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://ryanprojects.zxq.net" data-colorscheme="dark" data-width="900"></div>