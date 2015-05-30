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
<br/>
<script>
function loadzoom()
{
	$('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: true,
            alwaysOn:false,
            zoomWidth: 350,  
            zoomHeight: 250, 			
        });
}


function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    $active.addClass('last-active');
        
    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}
$(document).ready(function() {


	loadzoom();	
	setInterval( "slideSwitch()", 3000 );	

});


</script>


<div class="aboutmecont">
<div class="aboutme1">
Emigrated to Canada in October 2004. Did not know what to do at that time. Attended highschool for one and half year to learn the language and Canadian culture. Life was tough when you have to face the language barrier.
</div>
<img src="images/plane.jpg" width="180px" height="180px" style="position: relative; top: 10px; left: 20px; box-shadow: 5px 5px 5px #111;border-radius: 10px;"/>
</div>
<div class="aboutmecont">
<img src="images/humber.jpg" width="180px" height="180px" style="position: relative; top: 10px; left: 10px; box-shadow: -5px 5px 5px #111; float: left; border-radius: 10px;"/>
<div class="aboutme2">
Attended Humber College in 2006 for Accounting Diploma program. I completed the program in 2010 after taking a year off to work at McDonald's.  
</div>
</div>
<div class="aboutmecont">
<div class="aboutme1">
My first ever job in Canada is at McDonald's. I worked hard and quickly got promoted to a shift manager after three months. I worked there for almost two years. I've learned a lot about customer service there.
</div>
<img src="images/mcdonalds.png" width="180px" height="180px" style="position: relative; top: 10px; left: 20px; box-shadow: 5px 5px 5px #111;border-radius: 10px;"/>
</div>
<div class="aboutmecont">

        <a href="images/diploma.jpg" class="jqzoom" rel='gal1'  title="Diploma" style="position: relative; top: 10px; left: 10px;float: left; ">
            <img src="images/diploma.jpg" class="diploma" width="180px" height="180px" style="box-shadow: -5px 5px 5px #111; float: left; border-radius: 10px;"/>
        </a>


<div class="aboutme2">
Enrolled in the Computer Programing Diploma at Seneca College in 2010 and graduated with GPA of 3.8/4 in 2013. Hover your mouse over the image on the left to view my diploma
</div>
</div>
<div class="aboutmecont">
<div class="aboutme1">
Beside my passion for Web developing, I also love playing beach volleyball, basketball and snowboarding.
</div>
<div id="slideshow">
<img src="images/basketball.jpg" class="active" width="180px" height="180px" style="box-shadow: 5px 5px 5px #111;border-radius: 10px;"/>
<img src="images/volleyball.jpg" width="180px" height="180px" style= "box-shadow: 5px 5px 5px #111;border-radius: 10px;"/>
<img src="images/snowboard.jpg" width="180px" height="180px" style="box-shadow: 5px 5px 5px #111;border-radius: 10px;"/>
</div>
</div>


Ryan Dang has always been an amazing employee. He works hard
<br/>






