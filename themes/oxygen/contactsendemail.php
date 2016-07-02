<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="CubaOutings is a tours company based in Cuba that mainly develops personalized sightseeing tours, round trips and excursions from Varadero to Havana and the rest of the Cuban historical or natural sites. It also provides services such as Tranfers Lodgings">
    <meta name="language" content="en"/>
    <meta name="author" content="">



	  <link href="css/main.css" rel="stylesheet">
  <!--  <script type="text/javascript">var layout = 1;</script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">-->
</head>
<!--/head-->

<body>
 <div  class="parallax" style="height: 100%;width: 100%;background-image:url(images/contact-bg.jpg);">
 <div style="height: 1024px">  </div>
 </div>

   <?php
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'cubaoutings@gmail.com';//replace with your email

	/**
	 * Declares the validation rules.
	 
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();
*/


						
$headers = "MIME-Version: 1.0". "\r\n";
$headers = "Content-type: text/plain; charset=iso-8859-1". "\r\n";
$headers = "From: {$name} <{$from}>". "\r\n";
$headers = "Reply-To: <{$from}>". "\r\n";
$headers = "Subject: {$subject}". "\r\n";
$headers = "X-Mailer: PHP/".phpversion();



/*if(mail($to, $subject, $message, $headers))
	echo "<a class='btn btn-success' href='javascript:window.history.back()'>Go Back</a>";
else

echo "<a class='btn btn-danger'  href='#'>Go Back</a>";*/

if(mail($to, $subject, $message, $headers)){
?>
<script type="text/javascript">
javascript:window.history.back()
alert("Sent email successfully")
</script>
<?php
}
else{
?>
<script type="text/javascript">
javascript:window.history.back()
alert("Email don't Sent")
</script>
<?php
}
	
die;

?>

</body>
</html>
