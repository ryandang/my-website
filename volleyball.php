<?php
//echo $_POST["username"];
if(isset($_POST["log-out"]))
{
	unset($_SESSION['logged-in']);
	session_destroy();
	header("Location: volleyball");
}

if(isset($_POST["username"]))
{
	$username = $_POST["username"];
	$pwd = $_POST["pwd"];
	$result = mysql_query("SELECT * from users where username = '$username' and password = '$pwd'");
	$num = mysql_num_rows($result);	
	if($num)
		$_SESSION['logged-in'] = true;
	
	header("Location: volleyball");
}

if(isset($_POST["tname"]) && ($_POST["tname"])!="")
{
	$tname = $_POST["tname"];
	$tplayers = $_POST["players"];
	$tgames = $_POST["games"];
	mysql_query("INSERT INTO volleyball_games values(null, '$tname', $tplayers, $tgames, '', '', '[]', '[]', 0, '','','[]','[]')");
	header("Location: volleyball");
}


	$gamesResult = mysql_query("SELECT * from volleyball_games ORDER BY id desc");
	$numGames = mysql_num_rows($gamesResult);
	
?>
<script>
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

function viewTournament(x) {
	window.location.href="./tournament?id=" + x;
	
}
</script>
<style>
.CSSTableGenerator tr:hover td{
	cursor: pointer;
	background-color: #75a6d6;
}

.nicebackground {
	height: 100%;
	width: 100%;
   
	position: absolute;
	top: 0px;
	opacity: 0.5;
	z-index: 0;
}

button, input[type=submit]
{
cursor: pointer;
}

.back-ground{
    color: #fff;
    padding:20px;
	position: absolute;
	top: 0px;
}
 
.tiles-container{
    width:auto;
    height:auto;     
}
 
.rowTile{
    width:auto;
    padding:5px;
    height:auto;
    display:table;    
	
}
.tile{
    height:200px;   
    width:200px;  
    float:left;
    margin:0 5px 0 0;
    padding:2px;
	opacity: 0.3;
}
 
.tileLong{
    width:410px;
}


.tileHigh {
    height:410px;
}

.amarelo{
    background:#DAA520;
}
 
.vermelho{
    background:#CD0000;  
}
 
.azul{
    background:#4682B4;
}
 
.verde{
    background-color: #2E8B57;
}

</style>
<div style="z-index: 10; position: relative;">
<h1> Mr&Ms Ashbridges </h1>

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

<div id="newTournament" title="Create New Tournament">
	<form method="post" action="" name="addGames" id="addGames">
			<label for="tname">Tournament Name &nbsp;</label>
			<input type="text" name="tname" id="tname"/><br/><br/><br/>
			<label for="players">Number of players &nbsp;</label>
			<select id="players" name="players">
				<option>4</option>
				<option>8</option>
				<option>12</option>
				<option>16</option>
				<option>20</option>
				<option>24</option>
				<option>28</option>
				<option>32</option>
				<option>36</option>
				<option>40</option>
				<option>44</option>
				<option>48</option>
				<option>52</option>
				<option>56</option>
				<option>60</option>
			</select>
			<br/><br/><br/>
			<label for="games">Number of games &nbsp;&nbsp;</label>
			<select id="games" name="games">
				<option>2</option>
				<option>4</option>
				<option>6</option>
				<option>8</option>
				<option>10</option>
				<option>12</option>
				<option>14</option>
				<option>16</option>
			</select>
	</form>
</div>

<div style="margin-left: 5%;">
<?php
	if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']) {
		echo "<br/><br/><button id='addNew' class='ui-button-primary'>Create new tournament</button><br/>";
	}
?>	
<h2 style="text-align: center"> Tournament List </h2>
<div class="CSSTableGenerator" >
	<table>
		<tr>
			<td>Name</td>
			<td>Number of Players</td>
			<td>Number of Games</td>
		</tr>
<?php
	while($r = mysql_fetch_assoc($gamesResult))
	{	
		$tourneyname = $r["name"];
		$tourneyid = $r["id"];
		$players = $r["players"];
		$games = $r["games"];
		echo "<tr onclick='viewTournament($tourneyid)'><td>$tourneyname</td><td>$players</td><td>$games</td> </tr>";
	}		
?>
	</table>
</div>
	<br/>
</div>
</div>
<div class="back-ground">

<?php

$numbers = range(1, 20);
shuffle($numbers);

function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
$lImages = array();
$smImages = array();
$hImages = rand(0,5);
$vblArray = UniqueRandomNumbersWithinRange(0,11,6);
$vbsArray = UniqueRandomNumbersWithinRange(0,9,6);

foreach($vblArray as $value)
{
	array_push($lImages, $value);
}

foreach($vbsArray as $value)
{
	array_push($smImages, $value);
}
?>

<div class="tiles-container">
    <div class="rowTile">          
        <div class="tile">
			<img src="images/vbs<?php echo $smImages[0]; ?>.jpg" />
        </div>
        <div class="tile">
			<img src="images/vbs<?php echo $smImages[1]; ?>.jpg" />
        </div>
        <div class="tile tileLong">
			<img src="images/vbl<?php echo $lImages[0]; ?>.jpg" />
        </div>
    </div>
    <div class="rowTile">          
        <div class="tile tileLong">
			<img src="images/vbl<?php echo $lImages[1]; ?>.jpg" />
        </div>
        <div class="tile">
			<img src="images/vbs<?php echo $smImages[2]; ?>.jpg" />
        </div>           
        <div class="tile">
			<img src="images/vbs<?php echo $smImages[3]; ?>.jpg" />
        </div>
    </div>   
    <div class="rowTile">  
        <div class="tile tileHigh">
		<img src="images/vbh<?php echo $hImages; ?>.jpg" />
        </div>           
        <div class="tile tileLong">
			<img src="images/vbl<?php echo $lImages[2]; ?>.jpg" />
        </div>
        <div class="tile">
			<img src="images/vbs<?php echo $smImages[4]; ?>.jpg" />
        </div>	
        <div class="tile" style="margin-top: 5px;">
			<img src="images/vbs<?php echo $smImages[5]; ?>.jpg" />
        </div>
        <div class="tile tileLong" style="margin-top: 5px;">
			<img src="images/vbl<?php echo $lImages[3]; ?>.jpg" />
        </div>		
    </div>   
    <div class="rowTile">             
        <div class="tile tileLong">
			<img src="images/vbl<?php echo $lImages[4]; ?>.jpg" />
        </div>
        <div class="tile tileLong">
			<img src="images/vbl<?php echo $lImages[5]; ?>.jpg" />
        </div>		
    </div>     	
</div>

</div>


		