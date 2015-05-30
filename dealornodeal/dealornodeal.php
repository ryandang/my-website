<?php
/*
$path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
if(preg_match('~^$~',$path,$m))  
	$display_page = ("index");
echo $display_page;
*/
//echo $display_page;

?>
<script>
var chosencase = 0;
var round = 0;
var readyToChoose = false;
var caseleft = 26;
var choosingcase = false;
var level =1; // level 1: pick case; level 2 choose 6 cases; levl 3: get offer; level 4 pick 5 cases
var gamenotend = true;
var level2cases = 0;// choose 6 cases
var level3cases = 0; // choose 5 cases
var level4cases = 0; // choose 4 cases
var level5cases = 0; // choose 3 cases
var level6cases = 0; // choose 2 cases
var level7cases = 0;
var level8cases = 0;
var level9cases = 0;
var level10cases = 0;
var level11cases = 0;
var prevoffer =0;

//var arrayofPrizes = ["0.01","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",];
var arrayofPrizes =[0.01,1,5,10,25,50,75,100,200,300,400,500,750,1000,5000,10000,25000,50000,75000,100000,200000,300000,400000,500000,750000,1000000];

var arrayofCases = new Array(); // We will store the prizes here after randomize arrayofPrizes

$(document).ready(function() {
//Let put the Prizes in each case

	//$("#audio1").play();
	//document.getElementById('audio1').play();
	//document.getElementById('phonecall').play();
	$(".modal").show();
$( window ).load(function() {
$(".modal").hide();	
	for (var i = 0, ar = []; i < 26; i++) 
	{
		ar[i] = i;
	}		
	// randomize the array
	ar.sort(function () 
	{
		return Math.random() - 0.5;
	});
	for (var i = 0;i < 26; i++) 
	{
		arrayofCases[i] = arrayofPrizes[ar[i]];  //loop through each case and randomly put in the prize
	}
	
	//arrayofCases[0] = 123;
	//alert(arrayofCases[0]);
//alert(Math.max.apply( Math, arrayofPrizes )); //get the highest value still remain in the array :)





//initial speech
animatebankerspeech();
	$(".hostspeech1").fadeIn();	
	$('.hostspeech1').delay(2000).fadeOut();
	$('.hostspeech2').delay(3000).fadeIn();	
	waitforhost(3000);


	$("#stage .casecover").click(function(){
	
		if(choosingcase){
		//alert(arrayofCases[$(this).attr("alt")]);
			if(level ==1)
			{
			document.getElementById('audio1').pause();
			level ++;
			$(this).fadeOut();
			chosencase = $(this).attr("alt");
			$('.hostspeech2').fadeOut();
			$("#yourcase").append($(this).html());
			$("#yourcase").fadeIn();	

			$(this).removeAttr('id');
			$(".hostspeech1").html("Number "+ $(this).attr("alt") +" is one of my lucky number!");
			$(".hostspeech1").fadeIn();	
			$(".hostspeech2").html("Good Luck with your choice :)");
			$('.hostspeech1').delay(2000).fadeOut();
			$('.hostspeech2').delay(3000).fadeIn();	
			$('.hostspeech2').delay(2000).fadeOut();
			$('.hostspeech3').delay(6000).fadeIn();	
			waitforhost(6000)
			}
			else if(level == 2 && level2cases < 6)
			{
				level2cases++;
				opencase($(this).attr("alt"));
				//if(level2cases == 6)
					//level++;
			}
			else if(level == 3 && level3cases < 5)
			{
				level3cases++;
				opencase($(this).attr("alt"));
				//if(level3cases == 5)
					//level++;
			}
			else if(level == 4 && level4cases < 4)
			{
				level4cases++;
				opencase($(this).attr("alt"));
			}	
			else if(level == 5 && level5cases < 3)
			{
				level5cases++;
				opencase($(this).attr("alt"));
			}	
			else if(level == 6 && level6cases < 2)
			{
				level6cases++;
				opencase($(this).attr("alt"));
			}
			else if(level == 7 && level7cases < 1)
			{
				level7cases++;
				opencase($(this).attr("alt"));
			}			
			else if(level == 8 && level8cases < 1)
			{
				level8cases++;
				opencase($(this).attr("alt"));
			}	
			else if(level == 9 && level9cases < 1)
			{
				level9cases++;
				opencase($(this).attr("alt"));
			}	
			else if(level == 10 && level10cases < 1)
			{
				level10cases++;
				opencase($(this).attr("alt"));
			}				
		}
	});

// onclick deal button;
	$("#dealbutton").click(function(){
		gamenotend = false;
		$("#modmessage").html("you have won $"+ getoffer() +" from the Deal or No Deal game!");
		$("#message").fadeIn();
						$(".closeglass").show();
						$(".glassbox").hide();	
		$(".hostspeech1").html("DEAL!!!!");
		document.getElementById('thinking').pause();	
		document.getElementById('deal').play();					
		
	});
	$("#close").click(function(){
		$("#message").fadeOut();
	});
// close glass box
	$(".dealbutton .glassbox").click(function(){
						$(".closeglass").show();
						$(".glassbox").hide();		
		$(".hostspeech1").html("NO DEAL!!!!");
		document.getElementById('thinking').pause();		
		if(level != 10)		
		document.getElementById('nodeal').play();
		else
		document.getElementById('deal').play();	
		
		if(level == 2)
		$(".hostspeech2").html("Please choose your next 5 cases.");
		else if(level == 3)
		$(".hostspeech2").html("Please choose your next 4 cases.");
		else if(level == 4)
		$(".hostspeech2").html("Please choose your next 3 cases.");
		else if(level == 5)
		$(".hostspeech2").html("Please choose your next 2 cases.");	
		else if(level == 10)
		{
		$(".hostspeech2").html("Please Open your cases!.");	
		//opencase(chosencase);
				//$("#case"+chosencase).css("background-image", "url('images/opencase.png')");
				//$("#case"+chosencase).css("color", "white");
				//$("#case"+chosencase).css("font-size", "18px");
				//$("#case"+chosencase).html("$"+arrayofCases[chosencase-1]);	
/*				
<span id="case10" class="briefcase">10 </span>
<img class="floorstand" src="../images/floorstand2.png">	
*/				
				$("#yourcase").html("");
				$("#yourcase").append('<span class="letter4">Your case </span><br/><br/><br/>');
				$("#yourcase").append('<span class="briefcase" style= "color: white; font-size: 18px; background-image: url('+"'images/opencase.png'"+')"> $'+ arrayofCases[chosencase-1] +'</span><img class="floorstand" src="../images/floorstand2.png">');
				
		$("#modmessage").html("you have won $"+ arrayofCases[chosencase-1] +" from the Deal or No Deal game!");
		$("#message").fadeIn();				
		}
		else
		$(".hostspeech2").html("Please choose another cases.");
		
		$('.hostspeech1').delay(2000).fadeOut();
		
		$('.hostspeech2').delay(3000).fadeIn();			
		setTimeout(function(){
		level++;
		},4000);
		
	});
	
	
});
});
function waitforhost(n)
{
		choosingcase = false;
		setTimeout(function(){
		choosingcase = true;
		},n);
}

function opencase(n)
{
				document.getElementById('nodeal').pause();
				$(".hostspeech1").hide();
				$(".hostspeech2").hide();
				$(".hostspeech3").hide();
				waitforhost(3500);
				var highest = Math.max.apply( Math, arrayofCases );
				var amount = arrayofCases[n-1];
				
				//alert(arrayofCases[n-1]);
				if(amount < 200000 && amount != highest)
					{
					if(amount == 0.01 || amount == 1 || amount == 5 || amount == 10 || amount == 25 || amount == 50 || amount == 75 || amount ==100 || amount == 200 || amount == 300 || amount == 400 || amount == 500 || amount == 750 || amount == 1000)
					{
					$(".hostspeech1").html("It's a GREAT choice! $"+amount+" is such a small amount!");
					document.getElementById('smallamount').play();
					}
					else
						{
						$(".hostspeech1").html("It's good! $"+highest+" is still in play!");
						document.getElementById('smallamount').play();
						}						
					}
				else
				{
					$(".hostspeech1").html("Oh no. $" + amount + " is a huge amount");
					document.getElementById('bigamount').play();
				}
				
				if(level == 2 && level2cases <6)	
					$('.hostspeech2').html("Please choose one more case");
				else if(level == 2 && level2cases ==6)
				{
					offer();		
				}	
				else if(level == 3 && level3cases <5)	
					$('.hostspeech2').html("Please choose one more case");
				else if(level == 3 && level3cases ==5)
					offer();
				else if(level == 4 && level4cases <4)	
					$('.hostspeech2').html("Please choose one more case");
				else if(level == 4 && level4cases ==4)
					offer();				
				else if(level == 5 && level5cases <3)	
					$('.hostspeech2').html("Please choose one more case");
				else if(level == 5 && level5cases ==3)
					offer();				
				else if(level == 6 && level6cases <2)	
					$('.hostspeech2').html("Please choose one more case");
				else if(level == 6 && level6cases ==2)
					offer();
				else
					offer();
					

					$(".hostspeech1").fadeIn();					
				$('.hostspeech1').delay(2000).fadeOut();
				$('.hostspeech2').delay(3000).fadeIn();	
				
				$("#case"+n).parent().delay(2000).fadeOut();
				
				$("#case"+n).css("background-image", "url('images/opencase.png')");
				$("#case"+n).css("color", "white");
				$("#case"+n).css("font-size", "18px");
				$("#case"+n).html("$"+amount);
				arrayofCases[n-1] = 0;
				if(amount == 0.01)
					amount = 0;
				$(".pricelistbg"+amount).css("background", "grey");
				//alert(getoffer());
				caseleft --;
}


function offer()
{

					setTimeout(function(){
					document.getElementById('phonecall').play();
					},3000);
					
					$('.hostspeech2').html("Please wait for the banker offer");
					$("#banker").delay(3000).fadeIn();	
					animatebankerspeech();
					//$('.hostspeech2').delay(10000).fadeOut();
					$("#banker").delay(7000).fadeOut();
					
					
					
					setTimeout(function(){
					//level ++;
					var offer = getoffer();
					$(".offerbg").removeClass('offerbg');
					
					if(offer > 80000 && offer > prevoffer)
						document.getElementById('largeoffer').play();
					else
						document.getElementById('smalloffer').play();

					
					$("#youroffer").append('<span class="offer offerbg"> $'+ offer +'</span><br/>');
					$('.hostspeech2').hide();
					$(".hostspeech1").html("The banker offer you: $" + offer);
					$(".hostspeech1").fadeIn();
					$('.hostspeech1').delay(2000).fadeOut();
					prevoffer = offer;
					},11000);
					
					setTimeout(function(){
						$('.hostspeech1').html("DEAL or NO DEAL?");
						$(".hostspeech1").fadeIn();
						$(".closeglass").hide();
						$(".glassbox").show();
						document.getElementById('dealorno').play();	
					},14000);
					setTimeout(function(){
					document.getElementById('thinking').play();	
					},16000);
}


function getoffer()
{
	//alert(caseleft);
	var sum = 0;
	var factor = 1;
	if(caseleft > 19 )
		factor = 1.5;
	for(x=0; x < arrayofCases.length; x++)
	{
		sum += arrayofCases[x];
	}
	return Math.round((sum/caseleft)/factor); 
}

function animatebankerspeech()
{
	$(".hostspeech4").html("");
	for(x=0; x<9000; x+=100)
	{
			if(x == 1000 || x == 2000 || x== 3000 || x== 4000 || x==5000 || x==6000 || x==7000 || x == 8000)
			{
			
			setTimeout(function(){		
				$(".hostspeech4").html("");
			},x);
			}
		setTimeout(function(){		
			$(".hostspeech4").append(".");
		},x);	
	}
}




</script>
<?php
$result = mysql_query("SELECT * from deal");
$num = mysql_num_rows($result);
while($r = mysql_fetch_assoc($result))
{
	$num = $r["visit"];	
}
echo "<div class='viewcount'>  Played: ". $num . " times</div>";
//fopen('word.txt',"r");

$visit = $num  + 1;
mysql_query("UPDATE deal set visit=$visit where id=1");

	$title=urlencode('Ryan Dang Deal or No Deal Game');
	$url=urlencode('http://www.ryandang.com/dealornodeal');
	$summary=urlencode('I have won money from the Deal or No Deal game.');
	
	$image=BASE_URL . "images/deal_or_no_deal.jpg";
	//echo $image;
	$image = urlencode($image);
?>
<h1> Deal or No Deal </h1>
<div id="message"> 
Congratulation: <br/>
<span id="modmessage">You won some money from the deal or no deal game! </span>
<span class="button" id="close" style="position: absolute; top: 220px; left:30px">Close </span> 
<span id="modbutton"><a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">
<span class="button" id="fb" style="width: 150px; position: absolute; top: 220px; right: 30px;">Share on Facebook </span></a></span>
</div>
<div id="stage">
<br/><br/><br/><br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="casecover" alt="21"><span id="case21" class="briefcase">21 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="22"><span id="case22" class="briefcase">22 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="23"><span id="case23" class="briefcase">23 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="24"><span id="case24" class="briefcase">24 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="25"><span id="case25" class="briefcase">25 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="26"><span id="case26" class="briefcase">26 </span><img src="../images/floorstand2.png" class="floorstand"/></span>

<br/><br/>
<span class="casecover" alt="14"><span id="case14" class="briefcase">14 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="15"><span id="case15" class="briefcase">15 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="16"><span id="case16" class="briefcase">16 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="17"><span id="case17" class="briefcase">17 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="18"><span id="case18" class="briefcase">18 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="19"><span id="case19" class="briefcase">19 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="20"><span id="case20" class="briefcase">20 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<br/><br/>

<span class="casecover" alt="7"><span id="case7" class="briefcase">7 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="8"><span id="case8" class="briefcase">8 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="9"><span id="case9" class="briefcase">9 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="10"><span id="case10" class="briefcase">10 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="11"><span id="case11" class="briefcase">11 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="12"><span id="case12" class="briefcase">12 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="13"><span id="case13" class="briefcase">13 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="casecover" alt="1"><div id="case1" class="briefcase">1 </div><img src="../images/floorstand2.png" class="floorstand"/></div>
<span class="casecover" alt="2"><span id="case2" class="briefcase">2 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="3"><span id="case3" class="briefcase">3 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="4"><span id="case4" class="briefcase">4 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="5"><span id="case5" class="briefcase">5 </span><img src="../images/floorstand2.png" class="floorstand"/></span>
<span class="casecover" alt="6"><span id="case6" class="briefcase">6</span><img src="../images/floorstand2.png" class="floorstand"/></span>
</div>


<div>
<img src="../images/audience.png" width="900px" height="700px" style="position: absolute; top: 500px"/>
</div>

<div class="dealbutton">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="dealbutton"> </div><div class="glassbox"> </div><div class="closeglass"> </div>
<!--
<img src="../images/openbox2.png" class="openbox" width="250" height="125" />
<img src="../images/glassbox1.png" width="250" height="250" />
-->
</div>



<div style="position: fixed; width: 200px; height: 300px; bottom: 0px; left: 15px; z-index: 100">
 <span id="hostimage"><img src="images/host.png" /></span>
 <p class="hostspeech1">Hello. Welcome to my Deal or No Deal show!</p>
 <p class="hostspeech2">Please choose a case</p>
  <p class="hostspeech3">Please choose 6 cases</p>
  
</div>
<div id="youroffer">
	<span class="letter4" style="width: 200px; top: 20px; left: 0px; font-size: 30px">Banker's offer </span>
	
	<!--<span class="offer"> $12 </span><br/><span class="offer"> $12 </span>-->
</div>
<div id="yourcase">
	<span class="letter4">Your case </span><br/>
	
</div>
<div id="banker">
<p class="hostspeech4" style="display: block; top: 70px; left:200px; width: 80px; text-align: left; padding-left: 20px;">..............</p>
<img src="../images/banker.jpg" width="400px" height="300px"/>
</div>
<div id="prizelist"> 
<span class="pricelistbg0">$ <span class="prizelist"> 0.01</span></span> <span class="pricelistbg1000 rightsideprize">$ <span class="prizelist"> 1000</span></span> 
<span class="pricelistbg1">$ <span class="prizelist"> 1</span></span> <span class="pricelistbg5000 rightsideprize">$ <span class="prizelist"> 5,000</span></span> 
<span class="pricelistbg5">$ <span class="prizelist"> 5</span></span> <span class="pricelistbg10000 rightsideprize">$ <span class="prizelist"> 10,000</span></span> 
<span class="pricelistbg10">$ <span class="prizelist"> 10</span></span> <span class="pricelistbg25000 rightsideprize">$ <span class="prizelist"> 25,000</span></span> 
<span class="pricelistbg25">$ <span class="prizelist"> 25</span></span> <span class="pricelistbg50000 rightsideprize">$ <span class="prizelist"> 50,000</span></span> 
<span class="pricelistbg50">$ <span class="prizelist"> 50</span></span> <span class="pricelistbg75000 rightsideprize">$ <span class="prizelist"> 75,000</span></span> 
<span class="pricelistbg75">$ <span class="prizelist"> 75</span></span> <span class="pricelistbg100000 rightsideprize">$ <span class="prizelist"> 100,000</span></span> 
<span class="pricelistbg100">$ <span class="prizelist"> 100</span></span> <span class="pricelistbg200000 rightsideprize">$ <span class="prizelist"> 200,000</span></span> 
<span class="pricelistbg200">$ <span class="prizelist"> 200</span></span> <span class="pricelistbg300000 rightsideprize">$ <span class="prizelist"> 300,000</span></span> 
<span class="pricelistbg300">$ <span class="prizelist"> 300</span></span> <span class="pricelistbg400000 rightsideprize">$ <span class="prizelist"> 400,000</span></span> 
<span class="pricelistbg400">$ <span class="prizelist"> 400</span></span> <span class="pricelistbg500000 rightsideprize">$ <span class="prizelist"> 500,000</span></span> 
<span class="pricelistbg500">$ <span class="prizelist"> 500</span></span> <span class="pricelistbg750000 rightsideprize">$ <span class="prizelist"> 750,000</span></span> 
<span class="pricelistbg750">$ <span class="prizelist"> 750</span></span> <span class="pricelistbg1000000 rightsideprize">$ <span class="prizelist"> 1,000,000</span></span> 
</div>

<audio id="audio1" controls autoplay preload="auto">

  <source  src="audio/song.mp3" type="audio/mpeg">

</audio> 
<audio id="phonecall" controls preload="auto">
  <source  src="audio/phone.mp3" type="audio/mpeg">
</audio> 
<audio id="bigamount" controls preload="auto">

  <source  src="audio/Big amount gone.mp3" type="audio/mpeg">

</audio> 
<audio id="smallamount" controls preload="auto">

  <source  src="audio/Small case opened.mp3" type="audio/mpeg">

</audio> 
<audio id="deal" controls preload="auto">

  <source  src="audio/deal.mp3" type="audio/mpeg">

</audio> 
<audio id="nodeal" controls preload="auto">

  <source  src="audio/nodeal.mp3" type="audio/mpeg">

</audio> 
<audio id="largeoffer" controls preload="auto">

  <source  src="audio/largeoffer.mp3" type="audio/mpeg">

</audio> 
<audio id="smalloffer" controls preload="auto">

  <source  src="audio/smalloffer.mp3" type="audio/mpeg">

</audio> 
<audio id="thinking" controls  preload="auto">

  <source  src="audio/thinking.mp3" type="audio/mpeg">

</audio> 
<audio id="dealorno" controls preload="auto">

  <source  src="audio/dealorno.mp3" type="audio/mpeg">

</audio> 

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/>
Please let me know if there are any bugs. Or tell me some funny messages you would like to see.
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1374567659445390";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://ryanprojects.zxq.net" data-colorscheme="dark" data-width="900"></div>

<script>
$(document).ready(function() {
//Let put the Prizes in each case
	//document.getElementById('audio1').play();
});	
</script>