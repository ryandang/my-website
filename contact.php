<h1> Send Message </h1>
<?php


if(isset($_REQUEST["email"]) && filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL))
{	
	set_session_note("Message is sent.");	

	//
	$to      = 'ryandang.cga@gmail.com';
	$subject = 'Contact Request';
	$message = $_REQUEST["content"];
	$headers = 'From: '. $_REQUEST["email"] . "\r\n" .
		'Reply-To:' . $_REQUEST["email"] . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);	
	header("Location: ./contact");
	
}
else if(isset($_REQUEST["email"]))
{
	set_session_note("Invalid Info.");	
	header("Location: ./contact");
}
?>


<div style="width: 500px; height: 500px;margin:auto">
<form action="contact" method="post">
<input style="width: 300px;" type="text" placeholder="Your Email Address" name="email" /><br/><br/>
<textarea   name="content"  placeholder="Message" cols="65" rows="15"></textarea>
<br/>
<input style="margin-left:270px;"  type="submit" value="Send" />


</form>

</div>

