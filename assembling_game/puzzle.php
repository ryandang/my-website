<script>
function allowDrop(ev) {
	ev.preventDefault();
}

function drag(ev) {
	ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev) {
	ev.preventDefault();

	var data=ev.dataTransfer.getData("Text");
	var temp = document.getElementById(data);

	if($(ev.target).children().length > 0 || $(ev.target).is("img"))
	{
		var parent_of_drag_id = $("#"+data).parent().attr("id");
		var parent_id = $(ev.target).parent().attr("id");
		var temp2 = document.getElementById(ev.target.id);

		$("#"+parent_id).html(temp);
		$("#"+parent_of_drag_id).append(temp2);

	}
	else if($(ev.target).is("div"))
		ev.target.appendChild(document.getElementById(data));


//check if complete
	if($("#pieces").children().length == 0)
	{
		$x = 1;
		$complete =true;
		$("#complete").children().each(function()
		{
			$temp = "drag" + $x;
			if($(this).children().attr("id") != $temp)
				$complete = false;
			$x++;
		});
		if($complete)
		{
			$("#message").fadeIn();
		}
	}
}
</script>
<?php
$result = mysql_query("SELECT * from puzzle");
$num = mysql_num_rows($result);
while($r = mysql_fetch_assoc($result))
{
	$num = $r["visit"];
}
echo "<div class='viewcount'>  Played: ". $num . " times</div>";

$visit = $num + 1;
mysql_query("UPDATE puzzle set visit=$visit where id=1");

?>
<div class="row">
	<div class="medium-24 columns">
		<a href='../games' style='float: left'><img id='back' src='../images/back2.png' width='60px' height='60px' alt='back'/></a><h1> Puzzle Game </h1>

		(Currently doesn't work on mobile devices because the drag and drop are not supported.)<br/><br/><br/>

		Upload an image of your choice. The image will be broken to pieces. Your job is to put all the pieces back in order.
		<br/><br/>
		<h4>Please choose a level</h4>
		<select id="level">
			<option value="5"> Beginer</option>
			<option value="10"> Intermediate</option>
			<option value="17"> Advanced</option>
			<option value="26"> Advanced +</option>
			<option value="37"> Expert</option>
			<option value="50"> Expert+</option>
		</select>
		<br/><br/>
		<h4>Upload an image file (.jpeg, .png, .gif)</h4>

		<form id='file'>
			<input type="hidden" name="MAX_FILE_SIZE" value="100329600" />
			<input type="file" id="uploadimage" name="uploadimage" />
			<br/><br/>
			<input type="button" class="button radius"  value="Submit file" id="submit"/>
		</form>

<script>
var imageheight = 0;
function load_new_containers(y)
{
				var styles = {
				width : width,
				height: height,
				};

				for(var i=1; i <y; i++)
				{
					$("#complete").append("<div id='div"+i+"' ondrop='drop(event)' ondragover='allowDrop(event)'></div>");
					$("#div"+i).css(styles);
					$("#div"+i).css('border', 'solid 1px white');
					$("#div"+i).css('float', 'left');
				}
}

$(function() {
	$("#submit").click(function(){
	var imgname = $("#uploadimage").val().replace(/^.*[\\\/]/, '');

		$('#file').ajaxSubmit({
	      type: 'POST',
	      url: './file_processing.php',
	      data: {
	        t: 'uploadfile',
	      },
		  success: function(r){
			if(r)
				alert(r);
			else
			{

			$.post(
			'get_info.php',
			{t : "height",
			img: imgname},
			function(response)
			{

				height = response * 1;
				imageheight = height + 300;
				$("#complete").html("");
				//do this for beginner level
				if($("#level").val() == 5)
				{
					width = 200;
					height = height/2;
					load_new_containers(5);
				}
				else if($("#level").val() == 10)
				{
					width = 400/3;
					height = height/3;
					load_new_containers(10);
				}
				else if($("#level").val() == 17)
				{
					width = 400/4;
					height = height/4;
					load_new_containers(17);
				}
				else if($("#level").val() == 26)
				{
					width = 400/5;
					height = height/5;
					load_new_containers(26);
				}
				else if($("#level").val() == 37)
				{
					width = 400/6;
					height = height/6;
					load_new_containers(37);
				}
				else if($("#level").val() == 50)
				{
					width = 400/7;
					height = height/7;
					load_new_containers(50);
				}
			}
			);

				for (var i = 1, ar = []; i < $("#level").val(); i++) {
					ar[i] = i;
				}
				  // randomize the array
				  ar.sort(function () {
					  return Math.random() - 0.5;
				  });

			$("#pieces").html("");

			for(var i=0; i < $("#level").val() -1; i++)
			{
				x = i+1;

				$("#pieces").append("<img style='margin: 2px' id='drag"+ar[i]+"' draggable='true' ondragstart='drag(event)'  src='image_processing.php?img1="+ imgname +"&lev="+$("#level").val()+"&order="+ ar[i] +"&img4=0' />");
			}

			$('#myModal').foundation('reveal', 'open');

		  }
			},
		 });
	});

	$(".closeX").click(function(){
		$(this).parent().parent().hide();
	});
		$("#close").click(function(){
		$("#message").fadeOut();
	});
});
</script>
<?php
	$title=urlencode('Ryan Dang Puzzle Game');
	$url=urlencode(BASE_URL . 'assembling_game');
	$summary=urlencode('I have solved a puzzle from the puzzle game.');

	$image=BASE_URL . "images/profile.jpg";

	$image = urlencode($image);
?>
<br/><br/><br/>

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle" style="color: white">Let's Play.</h2>
	<h4 id="instruction" style="color: white; margin-left: 30px">Drag the pieces on the left side to the right side.</h4>
	<div id="pieces" style="width: 450px; height: 500px; float: left;"></div>
	<div id="complete" style="width: 420px; height: 500px; float: left; margin-left: 20px;">
	</div>

	<div id="message">
		<h4 style="color: #ec8674">You Solved The Puzzle!</h4>
		Share this achievement on your Facebook!
		<span class="button" id="close" style="position: absolute; top: 220px; left:30px">Close </span>
		<a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">
		<span class="button" id="fb" style="width: 150px; position: absolute; top: 220px; right: 30px;">Share <i class="fa fa-facebook-square"></i></span></a>
	</div>
  <a class="close-reveal-modal" style="color: white;" aria-label="Close">&#215;</a>
</div>

<br/><br/>

	</div>
</div>


