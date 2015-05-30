<a href='./volleyball'><img id='back' src='images/back2.png' width='60px' height='60px' style="position: absolute;" /></a>


<?php 
set_time_limit(100);
//$isAdmin = $_SESSION['logged-in'];

if(isset($_SESSION['logged-in']) && $_SESSION['logged-in'])
	$isAdmin = true;
else
	$isAdmin = false;
	
if(isset($_GET["id"]) && $_GET["id"])
{
	$id = $_GET["id"];
	$result = mysql_query("SELECT * from volleyball_games where id=$id");
	$r = mysql_fetch_assoc($result);
	$tname = $r["name"];
	$tgames = $r["games"];
	$nround = $tgames/2;
	$tplayers = $r["players"];
	$ngroup = $tplayers/4;
	$mplayers = json_decode($r["mplayers"]);
	$fplayers = json_decode($r["fplayers"]);
	$started = $r["started"];
	$schedule = $r["schedule"];
	$scores = $r["scores"];
	$mscoresRank = json_decode($r["mscores"], true);
	$fscoresRank = json_decode($r["fscores"], true);

	$mScoresString = $r["mscores"];
	$fScoresString = $r["fscores"];		
	$mwinsString = $r["mwin"];
	$fwinsString = $r["fwin"];	
	$mWinRank = json_decode($r["mwin"], true);
	$fWinRank = json_decode($r["fwin"], true);
	
	$scoresArray = json_decode($scores, true);
	$schedulearray = json_decode($schedule, true);
	
	arsort($mscoresRank);
	arsort($fscoresRank);
	arsort($mWinRank);
	arsort($fWinRank);	
	
	//print_r($mscores);
	//echo $fscores;
}

if(isset($_POST["log-out"]))
{
	unset($_SESSION['logged-in']);
	session_destroy();
	header("Location: tournament?id=$id");
}
if(isset($_POST["createFrom"]))
{
echo "ASDAS";

$tname = $_POST["tname"];
echo $_POST["byWhat"];
$newNumberPlayers = $_POST["newNumber"];
$tgames = $_POST["numberOfGames"];
$mpl = array();
$fpl = array();
if($_POST["byWhat"] == "Points")
{
	$newMPlayers = array_splice($mscoresRank,0,$newNumberPlayers);
	$newFPlayers = array_splice($fscoresRank,0,$newNumberPlayers);
	
	foreach($newMPlayers as $key=>$value)
	{
		array_push($mpl, $key);
	}	
	foreach($newFPlayers as $key=>$value)
	{
		array_push($fpl, $key);
	}
	$newMPlayers = json_encode($mpl);
	$newFPlayers = json_encode($fpl);
}
else
{
	$newMPlayers = array_splice($mWinRank,0,$newNumberPlayers);
	$newFPlayers = array_splice($fWinRank,0,$newNumberPlayers);
	foreach($newMPlayers as $key=>$value)
	{
		array_push($mpl, $key);
	}	
	foreach($newFPlayers as $key=>$value)
	{
		array_push($fpl, $key);
	}	
	$newMPlayers = json_encode($mpl);
	$newFPlayers = json_encode($fpl);
}
$newNumberPlayers = $newNumberPlayers*2;
mysql_query("INSERT INTO volleyball_games values(null, '$tname', $newNumberPlayers, $tgames, '$newMPlayers', '$newFPlayers', '[]', '[]', 0, '','','[]','[]')");
$newid =  mysql_insert_id();
header("Location: tournament?id=$newid");

}
if(isset($_POST["username"]))
{
	$username = $_POST["username"];
	$pwd = $_POST["pwd"];
	$result = mysql_query("SELECT * from users where username = '$username' and password = '$pwd'");
	$num = mysql_num_rows($result);	
	if($num)
		$_SESSION['logged-in'] = true;
	header("Location: tournament?id=$id");
}

if(isset($_POST["schedule"]))
{
	$suffix = array("a", "b", "c", "d", "e", "f", "g", "h", "k", "l", "m", "n");
	$data = array();
	$shuffledMPlayers = $mplayers;
	$shuffledFPlayers = $fplayers;
	
// an array that keep track of all group that were created	
	$groupRecord = array();

// loop through $nround to create the groups for each round	
	$count = 0;
	for($x = 1; $x <= $nround; $x++)
	{
		
		// shuffle players lists at the beginning of each round
		shuffle($shuffledMPlayers);
		shuffle($shuffledFPlayers);

		// initialize lists of remaining male and female players
		$remainingMPlayers = $shuffledMPlayers;
		$remainingFPlayers = $shuffledFPlayers;		
		
		$temp = array();
		
		// loop through $ngroup to add members to each group
		$y = -1;
		$counter = 0;
		while (count($remainingMPlayers) > 0)
		{	
			$y ++;
			$duplicate = false;
			$temp["group".$x.$suffix[$y]] = array($remainingMPlayers[0], $remainingMPlayers[1], $remainingFPlayers[0], $remainingFPlayers[1]);			
	
			
			if(count($mplayers) == 2 || count($mplayers) == 4 || count($mplayers) == 6 || ((count($mplayers) == 8 || count($mplayers) == 10)  && $nround > 3) || (count($mplayers) == 12 && $nround > 4) || (count($mplayers) == 16 && $nround > 5))			
			{
				// Remove the players from the remaining players list
				array_splice($remainingMPlayers, 0, 2);								
				array_splice($remainingFPlayers, 0, 2);				
			}
			else
			{
			// loop through $gorupRecord to check for duplicate
			foreach($groupRecord as $value)
			{
				$result = array_diff($temp["group".$x.$suffix[$y]], $value);
				if(count($result) < 3)
					$duplicate = true;
			}			
						
			if($duplicate)
			{
				// if $remainingMplayers length greater than 5 reset the remaining data
				if($counter < 100)
				{
					shuffle($remainingMPlayers);
					shuffle($remainingFPlayers);					
					$y--;	
					$counter ++;					
				}
				else
				{
					//reset the whole data
					shuffle($shuffledMPlayers);
					shuffle($shuffledFPlayers);
					$remainingMPlayers = $shuffledMPlayers;
					$remainingFPlayers = $shuffledFPlayers;	
					$y = - 1;		
					$counter = 0;					
				}
			}
			else
			{
				// Remove the players from the remaining players list
				array_splice($remainingMPlayers, 0, 2);								
				array_splice($remainingFPlayers, 0, 2);				
			}
			}
			
		}
		$data["round".$x] = $temp;
		
		// push to $groupRecord to keep track of arrays that were created.
		foreach($temp as $value)
		{
			array_push($groupRecord, $value);
		}
	}
	
	$schedule = json_encode($data);
	//echo $schedule;
	mysql_query("UPDATE volleyball_games SET started=1, schedule = '$schedule' where id=$id");
	header("Location: tournament?id=$id");

}
if(isset($_POST["saveTournament"])) {
	$mplayerArray = array();
	$fplayerArray = array();
	for($x = 1; $x <= $tplayers/2; $x++)
	{
		array_push($mplayerArray, $_POST["mplayer".$x]);
		array_push($fplayerArray, $_POST["fplayer".$x]);
	}
	
	if(count($mplayers) > 0)
	{
		foreach($mplayers as $key=>$value)
		{
			if($value != $mplayerArray[$key])
			{
				//search and replace for it
				$schedule = str_replace($value, $mplayerArray[$key], $schedule);
				$mwinsString = str_replace($value, $mplayerArray[$key], $mwinsString);
				$mScoresString = str_replace($value, $mplayerArray[$key], $mScoresString);
			}
		}
		foreach($fplayers as $key=>$value)
		{
			if($value != $fplayerArray[$key])
			{
				//search and replace for it
				$schedule = str_replace($value, $fplayerArray[$key], $schedule);
				$fwinsString = str_replace($value, $fplayerArray[$key], $fwinsString);
				$fScoresString = str_replace($value, $fplayerArray[$key], $fScoresString);
			}
		}	
	}
	
	
	$mplayerStr = json_encode($mplayerArray);
	$fplayerStr = json_encode($fplayerArray);
	
	mysql_query("UPDATE volleyball_games SET mplayers='$mplayerStr ', fplayers='$fplayerStr', schedule = '$schedule', mscores = '$mScoresString', fscores = '$fScoresString', mwin = '$mwinsString', fwin = '$fwinsString' where id=$id");
	
	header("Location: tournament?id=$id");
}

if(isset($_POST["saveScores"]))
{
	$scoreRecord = array();
	$mscores = array();
	$fscores = array();
	$mwins = array();
	$fwins = array();
	foreach($schedulearray as $round=>$value)
	{
		$scoreRecord[$round] = array();
		foreach($value as $group=>$v)
		{		
			//print_r($v);
			//echo "<br/>";
			$scoreRecord[$round][$group] = array();
			for($x = 1; $x< 5; $x++)
			{
			//echo $x . $group;
			//echo $_POST[$x . $group];
			//echo "<br/>";
			
			//if $x = 1 and 3, update score for 
			
			array_push($scoreRecord[$round][$group], $_POST[$x . $group]);
			}
			$m1score = $_POST["1" . $group] + $_POST["3" . $group];
			$m2score = $_POST["2" . $group] + $_POST["4" . $group];
			$f1score = $_POST["1" . $group] + $_POST["4" . $group];
			$f2score = $_POST["2" . $group] + $_POST["3" . $group];
			//for($i = 0; $i < 2; $i++)
			//{
			
			if($_POST["1" . $group] > $_POST["2" . $group])
			{
				if(isset($mwins[$v[0]]))	
					$mwins[$v[0]] += 1;
				else
					$mwins[$v[0]] = 1;
					
				if(isset($fwins[$v[2]]))	
					$fwins[$v[2]] += 1;
				else
					$fwins[$v[2]] = 1;
			}
			else if ($_POST["1" . $group] < $_POST["2" . $group])
			{
				if(isset($mwins[$v[1]]))
					$mwins[$v[1]] += 1;
				else
					$mwins[$v[1]] = 1;
					
				if(isset($fwins[$v[3]]))
					$fwins[$v[3]] += 1;		
				else
					$fwins[$v[3]] = 1;	
			}
			
			if($_POST["3" . $group] > $_POST["4" . $group])
			{
				if(isset($mwins[$v[0]]))	
					$mwins[$v[0]] += 1;
				else
					$mwins[$v[0]] = 1;
					
				if(isset($fwins[$v[3]]))	
					$fwins[$v[3]] += 1;
				else
					$fwins[$v[3]] = 1;
			}
			else if ($_POST["3" . $group] < $_POST["4" . $group])
			{
				if(isset($mwins[$v[1]]))
					$mwins[$v[1]] += 1;
				else
					$mwins[$v[1]] = 1;
					
				if(isset($fwins[$v[2]]))
					$fwins[$v[2]] += 1;		
				else
					$fwins[$v[2]] = 1;	
			}			
			
			
			
			
			if(isset($mscores[$v[0]]))
				$mscores[$v[0]] += $m1score;
			else
				$mscores[$v[0]] = $m1score;

			if(isset($mscores[$v[1]]))
				$mscores[$v[1]] += $m2score;
			else
				$mscores[$v[1]] = $m2score;				
				
			if(isset($fscores[$v[2]]))
				$fscores[$v[2]] += $f1score;
			else
				$fscores[$v[2]] = $f1score;

			if(isset($fscores[$v[3]]))
				$fscores[$v[3]] += $f2score;
			else
				$fscores[$v[3]] = $f2score;				
			//$mscores[$v[1]] = $m2score;
			//$fscores[$v[2]] += $f1score;
			//$fscores[$v[3]] += $f2score;
				//echo "<br/>";
			//}			
		}
		
	}
	
	$scores = json_encode($scoreRecord);
	$mscoresString = json_encode($mscores);
	$fscoresString = json_encode($fscores);
	
	$mWinsString = json_encode($mwins);
	$fWinsString = json_encode($fwins);	
	//echo $mWinsString;
	mysql_query("UPDATE volleyball_games SET scores = '$scores', mscores='$mscoresString', fscores='$fscoresString', mwin = '$mWinsString', fwin = '$fWinsString' where id=$id");
	header("Location: tournament?id=$id");
}

?>

<script>
$(document).ready(function() {
	$('#tabs').tabs();
	$('#tabs-men').tabs();
	$('#tabs-women').tabs();

});
$(document).ready(function() {

	// Dialog Link
	$('#login').click(function () {
		$('#dialog_simple').dialog('open');
		return false;
	});

	$('#addNew').click(function () {
		$('#newTournament').dialog('open');
		return false;
	});	
 
	// Dialog Simple
	$('#dialog_simple').dialog({
		autoOpen: false,
		width: 400,
		buttons: {
		"Log in": function () {
			$( "#login-form" ).submit();	
			$(this).dialog("close");
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
		}
	});

	// Dialog newTournament
	$('#newTournament').dialog({
		autoOpen: false,
		width: 400,
		buttons: {
		"Create": function () {
			$( "#addGames" ).submit();	
			$(this).dialog("close");
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
		}
	});
		
});
</script>
<style>
.longinput {
	width: 95%;
}
.shortinput {
	width: 10%;
}
input[type=submit] {
	cursor: pointer;
}

td
{
	text-align:center;
}

h2
{
	text-align: center;
}
</style>
<?php if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']) { ?>	
<form method="post" action="" name="logout" id="logout">
	<input type="submit" id="log-out" name="log-out" class="ui-button-primary" value="Log Out" style="position: absolute; right: 10px; top: 10px;" />
</form>	
<?php } else { ?>
<button id="login" class="ui-button-primary" style="position: absolute; right: 10px; top: 10px;">Log In</button>
<?php } ?>
<div id="dialog_simple" title="Log In">
	<form method="post" action="" name="login-form" id="login-form">
			<label for="username">User Name &nbsp;</label>
			<input type="text" name="username" id="username"/><br/><br/><br/>
			<label for="pwd">Password &nbsp;&nbsp;&nbsp;</label>
			<input type="password" id="pwd" name="pwd" />
	</form>	
</div>
<?php
	echo "<h1>$tname</h1>";
	echo "<div><b>Number of players:</b> $tplayers<br/><b>Number of games:</b> $tgames ($nround rounds)</div>";
	
?>

<div id="newTournament" title="Create New Tournament">
	<form method="post" action="" name="addGames" id="addGames">
			<label for="tname">Tournament Name &nbsp;</label>
			<input type="text" name="tname" id="tname"/><br/><br/><br/>
			<label for="players">Number of players &nbsp;</label>
			<input type="text" id="players" name="players" /><br/><br/><br/>
			<label for="games">Number of games &nbsp;&nbsp;</label>
			<input type="text" id="games" name="games" />
	</form>
</div>

<form method="post" action="" name="save" id="save">
<div id="tabs">
	<ul>
		<li><a href='#tabs-0'>Player List</a></li>
		<?php 
			if($started) {
				for($x = 1; $x <= $tgames/2; $x++)
				{
					echo "<li><a href='#tabs-$x'>Round $x</a></li>";
				}
			}
		?>
		<li><a href='#tabs-100'>Leader Board</a></li>
	</ul>
	<div id='tabs-0'>
		<h3>Player List</h3>

<div class="CSSTableGenerator" >		
		<table>
			<tr>
				<td style="width: 100px">Number</td>
				<td>Male</td>
				<td>Female</td>
			</tr>
		<?php 
			for($x = 1; $x <= $tplayers/2; $x++)
			{
					$mplayer = $mplayers[$x-1];
					$fplayer = $fplayers[$x-1];
				echo "<tr><td>$x</td>";
				if($isAdmin)
				{
				echo "<td><input  class='longinput' type='text' name='mplayer$x' id='mplayer$x' value='$mplayer' placeholder='Enter Male player name' /></td>";
				echo "<td><input  class='longinput'  type='text' name='fplayer$x' id='fplayer$x' value='$fplayer' placeholder='Enter Female player name' /></td></tr>";
				}
				else
				{
				echo "<td> $mplayer</td>";
				echo "<td> $fplayer</td>";
				}
			}
		?>
			
		</table>
</div>	
<br/><br/><br/>
<?php if($isAdmin) { ?>
	<div style="width: 80%">
	
		<?php  if($mplayer != "") {?>
		<span style="margin-left: 28%"><input type="submit" value="Save or Update player List" id="saveTournament" name="saveTournament" class="ui-button-primary" style="text-align: center"/> 
		<input style="margin-left: 30px;" type="submit" value="Generate new schedule" onclick="return confirm('Generating new schedule should only be used before the tournament starts. \n Do you want to continue?')" id="schedule" name="schedule" class="ui-button-primary"/></span>
		<?php } else { ?>
		<span style="margin-left: 48%"><input type="submit" value="Save or Update player List" id="saveTournament" name="saveTournament" class="ui-button-primary" style="text-align: center"/> 
		<?php } ?>
	</div>
<?php } ?>	
	</div>
		<?php 	
			if($started) {
				for($x = 1; $x <= $tgames/2; $x++)
				{
echo 
<<<HTML
<div id='tabs-$x'>
<div style="width: 100%; float: left; padding-right: 50px;">
<h2>Round $x </h2>
HTML;
$groupcounter = 1;
foreach ($schedulearray["round".$x] as $k => $value) {
	echo "<div style='background: #eeeeee; padding: 5px; border-radius: 10px; height: 200px'>";
	
	echo "<div style='width: 80%; float: left'><h3>Group $groupcounter</h3>";
	
	$score1 = $scoresArray["round".$x][$k][0];
	$score2 = $scoresArray["round".$x][$k][1];
	$score3 = $scoresArray["round".$x][$k][2];
	$score4 = $scoresArray["round".$x][$k][3];
	
	$showm1score = $scoresArray["round".$x][$k][0] + $scoresArray["round".$x][$k][2];
	$showm2score = $scoresArray["round".$x][$k][1] + $scoresArray["round".$x][$k][3];
	$showf1score = $scoresArray["round".$x][$k][0] + $scoresArray["round".$x][$k][3];
	$showf2score = $scoresArray["round".$x][$k][1] + $scoresArray["round".$x][$k][2];
	
echo
<<<HTML
	<table style="width: 95%">
		<tr>
			<td style="background: #d8755d; color: white; font-size:14px; padding: 5px; width: 300px;">$value[0] & $value[2]</td>
			<td> VS </td>
			<td style="background: #548fc9; color: white; font-size:14px; padding: 5px; width: 300px;">$value[1] & $value[3]</td>
		</tr>
		<tr>
HTML;
if($isAdmin)
{
echo
<<<HTML
			<td><input class="shortinput" name="1$k" type="text" value="$score1" /></td>
			<td></td>
			<td><input class="shortinput" name="2$k" type="text" value="$score2"/></td>
HTML;
}
else
{
echo
<<<HTML
			<td>$score1</td>
			<td></td>
			<td>$score2</td>

HTML;
}

echo
<<<HTML
		</tr>
		<tr>
			<td>------------</td>
			<td><hr/></td>
			<td>------------</td>
		</tr>		
		<tr>
			<td style="background: #d8755d; color: white; font-size:14px; padding: 5px;">$value[0] & $value[3]</td>
			<td> VS </td>
			<td style="background: #548fc9; color: white; font-size:14px; padding: 5px;">$value[1] & $value[2]</td>
		</tr>
		<tr>
HTML;
if($isAdmin) {
echo
<<<HTML
			<td><input class="shortinput" name="3$k" type="text" value="$score3"/></td>
			<td></td>
			<td><input class="shortinput" name="4$k" type="text" value="$score4" /></td>
HTML;
}
else
{
echo
<<<HTML
			<td>$score3</td>
			<td></td>
			<td>$score4</td>

HTML;
}
echo
<<<HTML
		</tr>
	</table>
HTML;

	echo "</div><div style='width: 20%; float: left'><h3>Total Points</h3>";
	echo $value[0] . ": " . " $showm1score<br/>";
	echo $value[1] . ": " . " $showm2score<br/>";
	echo $value[2] . ": " . " $showf1score<br/>";
	echo $value[3] . ": " . " $showf2score<br/>";
	echo "</div>";
	echo "</div><br/>";
	echo "<br/>";
	$groupcounter++;
}


//echo count($schedulearray["round".$x]);
if($isAdmin) {
echo
<<<HTML
<br/><br/>
<span style="margin-left: 38%"><input type="submit" value="Save Scores"  name="saveScores" class="ui-button-primary" style="text-align: center"/> 
HTML;
}
echo
<<<HTML
<br/><br/><br/>
</div>

</div>
HTML;
//}
				}
			}
		?>
<div id='tabs-100'>	
<div style="width: 45%; float: left;">
<h2> Men Leader Board </h2>

<div id="tabs-men">
	<ul>
		<li><a href='#tabs-points'>By Points</a></li>
		<li><a href='#tabs-win'>By Win</a></li>
	</ul>
	<div id='tabs-points'>
	


<div class="CSSTableGenerator" >		
		<table>
			<tr>
				<td>Number</td>
				<td>Name</td>
				<td>Win</td>
				<td>Points</td>
			</tr>
		
<?php
$rankcounter = 0;
	foreach($mscoresRank as $name=>$point)
	{
	$rankcounter ++;
	if(isset($mWinRank[$name]))
	$win = $mWinRank[$name];
	else
	$win = 0;
echo
<<<HTML
	<tr>
		<td>$rankcounter</td>
		<td>$name</td>
		<td>$win</td>
		<td>$point</td>
	</tr>
HTML;
	}

?>			
		
		</table>		
</div>
	</div>
<div id='tabs-win'>	
<div class="CSSTableGenerator" >		
		<table>
			<tr>
				<td>Number</td>
				<td>Name</td>
				<td>Points</td>
				<td>Win</td>
			</tr>
		
<?php
$rankcounter = 0;
	foreach($mWinRank as $name=>$win)
	{
	$rankcounter ++;
	if(isset($mscoresRank[$name]))
	$point = $mscoresRank[$name];
	else
	$point = 0;
echo
<<<HTML
	<tr>
		<td>$rankcounter</td>
		<td>$name</td>		
		<td>$point</td>
		<td>$win</td>
	</tr>
HTML;
	}

?>			
		
		</table>		
</div>	
	
</div>	
	</div>
</div>
<div style="width: 45%; float: left;">
<h2> Women Leader Board </h2>
<div id="tabs-women">
	<ul>
		<li><a href='#tabs-wpoints'>By Points</a></li>
		<li><a href='#tabs-wwin'>By Win</a></li>
	</ul>
	<div id='tabs-wpoints'>
	


<div class="CSSTableGenerator" >		
		<table>
			<tr>
				<td>Number</td>
				<td>Name</td>
				<td>Win</td>
				<td>Points</td>
			</tr>
		
<?php
$rankcounter = 0;
	foreach($fscoresRank as $name=>$point)
	{
	$rankcounter ++;
	if(isset($fWinRank[$name]))
	$win = $fWinRank[$name];
	else
	$win = 0;
echo
<<<HTML
	<tr>
		<td>$rankcounter</td>
		<td>$name</td>
		<td>$win</td>
		<td>$point</td>
	</tr>
HTML;
	}

?>			
		
		</table>		
</div>
	</div>
<div id='tabs-wwin'>	
<div class="CSSTableGenerator" >		
		<table>
			<tr>
				<td>Number</td>
				<td>Name</td>
				<td>Points</td>
				<td>Win</td>
			</tr>
		
<?php
$rankcounter = 0;
	foreach($fWinRank as $name=>$win)
	{
	$rankcounter ++;
	if(isset($fscoresRank[$name]))
	$point = $fscoresRank[$name];
	else
	$point = 0;
echo
<<<HTML
	<tr>
		<td>$rankcounter</td>
		<td>$name</td>		
		<td>$point</td>
		<td>$win</td>
	</tr>
HTML;
	}

?>			
		
		</table>		
</div>	
	
</div>	
	</div>
</div>
<?php 
				if($isAdmin)
				{
				?>
<div style="width: 100%; height: 50px; float: left" >
<br/><br/>
Create a new tournament
<input type="text" placeholder="Enter Tournament name" id="tname" name="tname" />
from top
<input type="text" id="newNumber" name="newNumber" style="width: 30px;" /> players by 
<select id="byWhat" name="byWhat">
	<option value="Points">Points</option>
	<option value="Win">Win</option>
</select>
with
<input type="text" name="numberOfGames" id="numberOfGames" style="width: 30px;" /> number of games
<br/><br/>
<input type="submit" id="createFrom" name="createFrom" class="ui-button-primary" value="Create a new tournament" />
</div>
<?php } ?>
</div>

</form>
</div>