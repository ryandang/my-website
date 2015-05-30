<?php
if(isset($_GET["moneygame"]) && $_GET["moneygame"] ==1)
	{
	$playformoney = true;
	$winningarray = array(100,101,103,105,107,108,109,111,112,113,115,116,117,119,121,123,124,125,127,
	129,131,132,133,135,137,139,140,141,143,144,145,147,148,149,151,153,155,156,
	157,159,161,163,164,165,167,169,171,172,173,175,176,177,179,180,181,183,185,
	187,188,189,191,192,193,195,196,197,199,201,203,204,205,207,208,209,211,212,
	213,215,217,219,220,221,223,225,227,228,229,231,233,235,236,237,239,240,241,
	243,244,245,247,249,251,252,253,255,256,257,259,260,261,263,265,267,268,269,
	271,272,273,275,276,277,279,281,283,284,285,287,289,291,292,293,295,297,299,
	300,301,303,304,305,307,308,309,311,313,315,316,317,319,320,321,323,324,325,
	327,329,331,332,333,335,336,337,339,340,341,343,345,347,348,349,351,353,355,
	356,357,359,361,363,364,365,367,368,369,371,372,373,375,377,379,380,381,383,
	385,387,388,389,391,393,395,396,397,399,400,401,403,404,405,407,409,411,412,
	413,415,417,419,420,421,423,425,427,428,429,431,432,433,435,436,437,439,441,
	443,444,445,447,448,449,451,452,453,455,457,459,460,461,463,464,465,467,468,
	469,471,473,475,476,477,479,481,483,484,485,487,489,491,492,493,495,496,497,
	499,500,501,503,505,507,508,509,511,513,515,516,517,519,521,523,524,525,527,
	528,529,531,532,533,535,537,539,540,541,543,545,547,548,549,551,553,555,556,
	557,559,560,561,563,564,565,567,569,571,572,573,575,576,577,579,580,581,583,
	585,587,588,589,591,592,593,595,596,597,599,601,603,604,605,607,609,611,612,
	613,615,617,619,620,621,623,624,625,627,628,629,631,633,635,636,637,639,641,
	643,644,645,647,649,651,652,653,655,656,657,659,660,661,663,665,667,668,669,
	671,673,675,676,677,679,681,683,684,685,687,688,689,691,692,693,695,697,699,
	700,701,703,704,705,707,708,709,711,713,715,716,717,719,720,721,723,724,725,
	727,729,731,732,733,735,737,739,740,741,743,745,747,748,749,751,752,753,755,
	756,757,759,761,763,764,765,767,768,769,771,772,773,775,777,779,780,781,783,
	784,785,787,788,789,791,793,795,796,797,799,801,803,804,805,807,809,811,812,
	813,815,816,817,819,820,821,823,825,827,828,829,831,832,833,835,836,837,839,
	841,843,844,845,847,848,849,851,852,853,855,857,859,860,861,863,865,867,868,
	869,871,873,875,876,877,879,880,881,883,884,885,887,889,891,892,893,895,897,
	899,900,901,903,905,907,908,909,911,912,913,915,916,917,919,921,923,924,925,
	927,929,931,932,933,935,937,939,940,941,943,944,945,947,948,949,951,953,955,
	956,957,959,960,961,963,964,965,967,969,971,972,973,975,976,977,979,980,981,
	983,985,987,988,989,991,993,995,996,997,999,


	);
	
	$losingarray = array(102,104,106,110,114,118,120,122,
	126,128,130,134,136,138,142,146,150,152,154,158,160,162,166,168,170,174,178,
	182,184,186,190,194,198,200,202,206,210,214,216,218,222,224,226,230,232,234,
	238,242,246,248,250,254,258,262,264,266,270,274,278,280,282,286,288,290,294,
	296,298,302,306,310,312,314,318,322,326,328,330,334,338,342,344,346,350,352,
	354,358,360,362,366,370,374,376,378,382,384,386,390,392,394,398,402,406,408,
	410,414,416,418,422,424,426,430,434,438,440,442,446,450,454,456,458,462,466,
	470,472,474,478,480,482,486,488,490,494,498,502,504,506,510,512,514,518,520,
	522,526,530,534,536,538,542,544,546,550,552,554,558,562,566,568,570,574,578,
	582,584,586,590,594,598,600,602,606,608,610,614,616,618,622,626,630,632,634,
	638,640,642,646,648,650,654,658,662,664,666,670,672,674,678,680,682,686,690,
	694,696,698,702,706,710,712,714,718,722,726,728,730,734,736,738,742,744,746,
	750,754,758,760,762,766,770,774,776,778,782,786,790,792,794,798,800,802,806,
	808,810,814,818,822,824,826,830,834,838,840,842,846,850,854,856,858,862,864,
	866,870,872,874,878,882,886,888,890,894,896,898,902,904,906,910,914,918,920,
	922,926,928,930,934,936,938,942,946,950,952,954,958,962,966,968,970,974,978,
	982,984,986,990,992,994,998
	);	
	
	shuffle($winningarray);
	$winningarray20 = array_slice($winningarray, 0, 10);
	
	shuffle($losingarray);
	$losingarray10 = array_slice($losingarray, 0, 10);
	}
else
	$playformoney = false;

	$title=urlencode('Ryan Dang Math Game');
	$url=urlencode('http://www.ryandang.com/math');
	$summary=urlencode("I have won in a Math game.");
	
	$image=BASE_URL . "images/math.png";
	//echo $image;
	$image = urlencode($image);

$result = mysql_query("SELECT * from math");
$num = mysql_num_rows($result);
while($r = mysql_fetch_assoc($result))
{
	$num = $r["visit"];	
}
echo "<div class='viewcount'>  Played: ". $num . " times</div>";
//fopen('word.txt',"r");

$visit = $num  + 1;
mysql_query("UPDATE math set visit=$visit where id=1");	
	
?>

<script>
<?php
if($playformoney)
{
$js_array = json_encode($winningarray20);
$js_array2 = json_encode($losingarray10);
echo "var javascript_array = ". $js_array . ";\n";
echo "var javascript_array2 = ". $js_array2 . ";\n";
}
?>
var gofirst = true;
var result = 0;
var gamestarted = false;
<?php if(!$playformoney) { ?>
var playforprize = false;
<?php }
else
{ ?>
var playforprize = true;
<?php }?>
var move = 0;


function letsplay()
{
<?php if(!$playformoney) { ?>
	result = $("#usernum").val();
<?php } ?>
	
	if($("#firstturn .selectedfirstturn").attr("alt") == 1)
		gofirst = true;
	else
		gofirst = false;
	if(result >1)
	{
	$("#mathkeyboard").hide();
	$("#mathcover").fadeIn();

	
	if(!gofirst)
	{
		
		$("#meinmath").append("<div> I started with: " + result + "</div>");
		$("#youinmath").append("<div> &nbsp;</div>");
		mymove(result);
	}
	else
	{
		$("#youinmath").append("<div>You started with: " + result + "</div>");
		$("#meinmath").append("<div> &nbsp;</div>");
		$("#yournumber").html(result);
		
	}
	
	}
	else
	alert("Please enter a valid number");
}

$.fn.numberOnly = function () {
  $(this).keydown(function(e){
    var k = (e.which) ? e.which : e.keyCode;
    if (e.altKey || e.ctrlKey || e.shiftKey) return false;
    else if ((k >= 48 && k <= 57) || // 0~9
      (k >= 96 && k <= 105) ||  // numpad 0~9
      k == 8 || k == 9 ||       // bksp, tab
      k == 37 || k == 39 ||     // left, right
      k == 45 || k == 46 ||     // insert, delete
      k == 144 ||               // num lock
      k == 190                  // period
    ) return true;
    else return false;
  })
}

function win(n)
{
	if(n==1)
		return true;
	else if (!win(n-1) || !win(Math.floor(n/2)))
		return true;
	else 
		return false;
		
}


function mymove(n)
{
	move++;	
	var x = move%4;
	

	
	if(playforprize || n < 15)
	{
		if(!win(Math.floor(n/2)))
		{
			result = Math.floor(n/2);
			$("#youinmath").append("<div class='movebackground"+ x +"' > I divide the number by 2 now you have: " + result + "</div>");
			$("#yournumber").html(result);
		}
		else 
		{
			result = n - 1;
			$("#youinmath").append("<div class='movebackground"+ x +"' > I substract the number by 1 now you have: " + result + "</div>");
			$("#yournumber").html(result);		
			if(result ==1)
			{
				//alert("You win!");
				$("#message").fadeIn();
				document.getElementById('tada').play();	
			}
		}
	}
	else
	{
		result = Math.floor(n/2); // just do this for big number :)
			$("#youinmath").append("<div class='movebackground"+ x +"' > I divide the number by 2 now you have: " + result + "</div>");
			$("#yournumber").html(result);
	}
}


function pressbutton(ev)
{
	result = $(ev).attr("alt");
	$("#randomnumbers .letter3").removeClass("selectednumber");
	$(ev).addClass("selectednumber");
}

$(document).ready(function() {
	$("#usernum").numberOnly();

	$("#randomnumbers .letter3").click(function(){
		result = $(this).attr("alt");
		$("#randomnumbers .letter3").removeClass("selectednumber");
		$(this).addClass("selectednumber");
		
	});
	$("#mathkeyboard .letter2").click(function(){
	//alert($(this).attr("alt"));
		//$("#usernum").append($(this).attr("alt"));
		$("#usernum").val($("#usernum").val() + $(this).attr("alt"));
	});
	
	$("#firstturn .button2").click(function(){
	result = 0;
	//alert($(this).attr("alt"));
	$(".button2").removeClass("selectedfirstturn");
	$(this).addClass("selectedfirstturn");
		$("#randomnumbers").html("");
		
		
		if($(this).attr("alt") ==2)
		{
			for(x=0; x< javascript_array.length; x++)			
			{
				$("#randomnumbers").append("<span onclick='pressbutton(this)' class='letter3' alt='"+javascript_array[x]+"'>"+ javascript_array[x] +"</span>");
			}	
		}
		else
		{
			for(x=0; x< javascript_array2.length; x++)			
			{
				$("#randomnumbers").append("<span onclick='pressbutton(this)' class='letter3' alt='"+javascript_array2[x]+"'>"+ javascript_array2[x] +"</span>");
			}		
		}
		
	
	});
	
	$("#substract").click(function(){
		if(result >1)
		{
		move++;
		result = result - 1;
		
		var x = move%4;
		
		$("#meinmath").append("<div class='movebackground"+ x +"' > You substract the number by 1 now I have: " + result + "</div>");
		if(result ==1)
		{
			$("#yournumber").html("Sorry. You lost.");
			$("#youinmath").append("<div> &nbsp;</div>");
			
			document.getElementById('over').play();	
			alert("I win!!");
		}
		mymove(result);
		$("#mathgamecover").css("height", "+=20");
		}
	});
	
	$("#divide").click(function(){
		if(result >1)
		{
		move ++;
		var x = move%4;
		result = Math.floor(result/2);
		$("#meinmath").append("<div class='movebackground"+ x +"' > You divide the number by 2 now I have: " + result + "</div>");
		if(result ==1)
		{
			$("#yournumber").html("Sorry. You lost.");	
			$("#youinmath").append("<div> &nbsp;</div>");			
			
			document.getElementById('over').play();	
			alert("I win!!");
		}
		mymove(result);
		$("#mathgamecover").css("height", "+=20");
		}
	});	
	$("#close").click(function(){
		$("#message").fadeOut();
	});
});

</script>

<a href='../games'><img id='back' src='../images/back2.png' width='60px' height='60px' style="position: absolute;" /></a>
<h1>Math Game </h1>
<div id="message"> 
You Won!: <br/> 
<span class="button" id="close" style="position: absolute; top: 220px; left:30px">Close </span> 
<a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">
<span class="button" id="fb" style="width: 150px; position: absolute; top: 220px; right: 30px;">Share on Facebook </span></a>
</div>
<div style="width: 100%; height: 50px;">
<a href="math"><div class="<?php if(!$playformoney) echo "selectedtab"; else echo "tab"; ?>">Play For Fun</div></a>
<a href="math?moneygame=1"><div class="<?php if($playformoney) echo "selectedtab"; else echo "tab"; ?>">Play For Prize </div></a>
</div>

<div id="mathgamecover" style="border: solid 1px green; height: 800px;">
<br/>
<?php if(!$playformoney) { ?>
<div style="padding: 10px;">
<b>The rule:</b>
<br/>
The rule is very simple. Pick any number. A player can either substract the number by one or divide the number by 2 and round it down. The other player will have to use the result from the previous user as his or her number. 
Take turn to do this until a player reach number 1. The player end up with number one will win.
</div>
<?php
}
else
{
?>
<div style="padding: 10px;">
I guess you are ready to win a prize? The first 20 people to beat this game will get $5 prize from me. 
Only I know what the winning message is and how it suppose to look like. 
Please take the screen shot of the winning message and send it to me. Only 1 winning prize per person. The number of winner will be updated automatically as soon as someone beat the game.<br/> As of <?php echo date("Y/m/d"); ?>, there are <span style="font-size: 20px; background:yellow;">0/20 winners</span><br/>
You can contact me through <a href="<?php echo BASE_URL; ?>contact">Contact</a> or any of my social media network<br/>
The rule is still the same. However, this time, I will randomly pick a list of 10 numbers for you. You can pick any number from those 10 numbers to play with. <br/>
</div>
<?php
}
?>
<br/><br/>
<div id="mathcover">
<div style="border: solid 2px green;">
<div style="text-align: center"><h2> Move history </h2> </div>
	<div id="meinmath"> 
		<div style="text-align: center"><h3> Me </h3> </div>
	</div>
	<div id="youinmath"> 
		<div style="text-align: center"><h3> You </h3> </div>
	</div>
</div>

<div id="substract"> <span class='letter3' style="margin-left:40px;" >-1</span></div>
<div id="divide"> <span class='letter3' style="margin-left:40px;">&divide;2</span></div>
<div id="yournumbertitle"><b>Your Current Number: </b> </div>
<div id="yournumber"> Waiting </div>

<button class="button" style="position: relative; left: 400px; top:-200px;" onclick="window.location.reload()"> Play Again</button>

</div>
<br/><br/>
<div id="mathkeyboard">

<br/><br/>
<div id="firstturn">
<div class="button2 selectedfirstturn" alt="1"> Go First</div> <div class="button2" alt="2"> Go Second </div>
</div>
<?php if(!$playformoney) { ?>
<br/><br/>Please enter a number: <input type="text" id="usernum" /><br/><br/>
<?php
	$word = "1234567890";
	$length = strlen($word);
	for($x=0; $x< $length; $x++)
	{
		$l = substr($word,$x,1);
		echo "<span class='letter2' alt='$l'> $l </span>";
	}
}
else
{
?>
Please choose a number:<br/>
<div id="randomnumbers">
<?php


	foreach($losingarray10 as $x)
	{
		echo "<span class='letter3' alt='$x'> $x </span>";
	}
echo "</div>";
}
?>


<audio id="tada" controls >

  <source  src="audio/tada.mp3" type="audio/mpeg">

</audio> 
<audio id="over" controls >

  <source  src="audio/over.mp3" type="audio/mpeg">

</audio> 


<button class="button" style="position: absolute;top: 320px; left: 380px;" onclick="letsplay()"> Play</button>
</div>

</div>
<br/><br/><br/><br/>
Please let me know if there are any bugs.
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1374567659445390";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://ryanprojects.zxq.net" data-colorscheme="dark" data-width="900"></div>