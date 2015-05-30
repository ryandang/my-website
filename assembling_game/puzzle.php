<script>
function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
//alert(document.getElementById(data));
//alert($(ev.target).parent().attr("id"));
//var temp = document.getElementById(data);
//alert(temp);

//var temp = $("#"+data).attr("src");;
//alert(temp);
var temp = document.getElementById(data);

//alert($("#"+data).parent().attr("id"));
if($(ev.target).children().length > 0 || $(ev.target).is("img"))
{
	var parent_of_drag_id = $("#"+data).parent().attr("id");
	var parent_id = $(ev.target).parent().attr("id");
	var temp2 = document.getElementById(ev.target.id);
	//ev.target.appendChild(temp);
	$("#"+parent_id).html(temp);
	
	//alert(ev.target.id);
	//alert($(ev.target).html());
	//var data2=ev.target.dataTransfer.getData("Text");
	//alert(ev.target);
	
	$("#"+parent_of_drag_id).append(temp2);
	//
	//$("#"+parent_id).append(temp);
	
	//ev.dataTransfer.appendChild(document.getElementById(data2));
	//ev.target.appendChild(document.getElementById(data));
	
}
else if($(ev.target).is("div"))	
ev.target.appendChild(document.getElementById(data));


//check if complete	
	if($("#pieces").children().length == 0)
	{
		
		//alert("It is complete!");
		$x = 1;
		$complete =true;
		$("#complete").children().each(function()
		{
			$temp = "drag" + $x;
			if($(this).children().attr("id") != $temp)
				$complete = false;
			//alert($(this).children().attr("id"));
			$x++;
		});
		if($complete)
		{
			//alert("It is complete!");
			//$('#headerNote').removeClass("growtext");
			//$('#headerNote').css("font-size","24px");			
			//$('#headerNote').show();			
			//$('#headerNote').removeClass("growtext");			
			//$('#headerNote').html("Completed!");
			//$('#headerNote').delay(3000).addClass("growtext");
			//$('#headerNote').animate({fontSize: "70px"}, 500);
			//$('#headerNote').delay(5000).fadeOut(2500);
			$("#message").fadeIn();
		}		
	}
}




</script>

<a href='../games'><img id='back' src='../images/back2.png' width='60' height='60' style="position: absolute;" alt="back"/></a>
<?php
$result = mysql_query("SELECT * from puzzle");
$num = mysql_num_rows($result);
while($r = mysql_fetch_assoc($result))
{
	$num = $r["visit"];	
}
echo "<div class='viewcount'>  Played: ". $num . " times</div>";
//fopen('word.txt',"r");

$visit = $num  + rand(1,5);
mysql_query("UPDATE puzzle set visit=$visit where id=1");

?>
<h1> Puzzle Game </h1>

(Currently doesn't work on mobile devices because the drag and drop are not supported.)<br/><br/><br/>

Upload an image of your choice. The image will be broken to pieces. Your job is to put all the pieces back in order.
<br/><br/>
Please choose a level
<select id="level">
	<option value="5"> Beginer</option>
	<option value="10"> Intermediate</option>
	<option value="17"> Advanced</option>
	<option value="26"> Advanced +</option>
	<option value="37"> Expert</option>
	<option value="50"> Expert+</option>
</select>
<br/><br/>
Upload an image file (.jpeg, .png, .gif)
<form id='file'>
<input type="hidden" name="MAX_FILE_SIZE" value="100329600" />
<input type="file" id="uploadimage" name="uploadimage" />
<br/><br/>
<input type="button" value="Submit file" id="submit"/>
</form>

<script>
var imageheight = 0;
function load_new_containers(y)
{
				var styles = {
				width : width,
				height: height,								
				};	
				//alert(width);
				//alert(height);
				for(var i=1; i <y; i++)
				{
				
				$("#complete").append("<div id='div"+i+"' ondrop='drop(event)' ondragover='allowDrop(event)'></div>");
				$("#div"+i).css(styles);
				$("#div"+i).css('border', 'solid 1px #c3c3c3');
				$("#div"+i).css('float', 'left');
				}
}

$(function() {
//alert("ASD");
$("#submit").click(function(){
	//alert("AD");
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
			$("#floating_div").css("height",imageheight+"px");
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
		//alert(imgname);
		$("#pieces").append("<img style='margin: 2px' id='drag"+ar[i]+"' draggable='true' ondragstart='drag(event)'  src='image_processing.php?img1="+ imgname +"&lev="+$("#level").val()+"&order="+ ar[i] +"&img4=0' />");

		}
		//var str = imageheight + "px";
		//alert(imageheight);
		$("#floating_div").addClass("floating_div");		
		$("#floating_div").show();
		$(".closeX").show();
		
		$("#complete").show();
		$("#pieces").show();
		$("#instruction").show();
		
	  }
},	  
	 });
});

	$(".closeX").click(function(){
		//alert("Hello");
		$(this).parent().parent().hide();
	});	
		$("#close").click(function(){
		$("#message").fadeOut();
	});
});
</script>
<?php
	$title=urlencode('Ryan Dang Puzzle Game');
	$url=urlencode('http://www.ryandang.com/assembling_game');
	$summary=urlencode('I have solved a puzzle from the puzzle game.');
	
	$image=BASE_URL . "images/profile.jpg";
	//echo $image;
	$image = urlencode($image);
?>
<br/><br/><br/>
<div id="message"> 
You have successfully solved the puzzle!
<span class="button" id="close" style="position: absolute; top: 220px; left:30px">Close </span> 
<a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">
<span class="button" id="fb" style="width: 150px; position: absolute; top: 220px; right: 30px;">Share on Facebook </span></a>
</div>
<div id="floating_div">
<div id="Xdiv"><span class="closeX">X</span></div>
<br/><br/>
<span id="instruction" style="display: none;">Drag the pieces on the left side to the right side.</span><br/><br/>
<div id="pieces" style="width: 450px; height: 500px; float: left;display: none;">

</div>


<div id="complete" style="width: 420px; height: 500px; float: left; margin-left: 20px; display: none;">


</div>
</div>


<br/><br/>
Please let me know if there are any bugs or any image file you would like this game to support.
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1374567659445390";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://ryanprojects.zxq.net" data-colorscheme="dark" data-width="900"></div>
<br/><br/>




