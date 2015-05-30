<?php
include("initialize.php");


function set_session_note($text){$_SESSION['note']=$text;}
function show_session_note($text=NULL){
  if(!$text&&isset($_SESSION['note'])){
    $text=$_SESSION['note'];
    unset($_SESSION['note']);
  echo
<<<HTML
<script>
$(function(){
$("#headerNote").css("padding","15px");
});
</script>
HTML;
  }
  echo htmlentities($text);
}
function fadeaway_session_note($text=NULL){ //display session note when the page is not reload
  if(!$text&&isset($_SESSION['note'])){
    $text=$_SESSION['note'];
    unset($_SESSION['note']);
  echo
<<<HTML
<script>
$(function(){
$("#headerNote2").css("padding","15px");
$("#headerNote2").delay(5000).fadeOut(2500);
});
</script>
HTML;
  }
  echo htmlentities($text);
}

function test()
{
	echo "IT CONNECTED";
}

?>