<?php
$to = 'drmatt@comcast.net , info@dayspringlaserdentistry.com , digdev.test@gmail.com';

if($_POST['website'] != '' || $_POST["name"] == ''){
    echo "<!-- SKIPPED -->";
}
else{


// subject
$subject = 'Online Appointment Request';

// message
$message = '<html><head><title>Online Appointment Request</title></head>
<body>
<p>Name: ' . $_POST["name"] . '</p>
<p>Email: ' . $_POST["email"] . '</p>
<p>Phone: ' . $_POST["phone"] . '</p>
<p>Month: ' . $_POST["month"] . '</p>
<p>Date: ' . $_POST["date"] . '</p>
<p>Day: ' . $_POST["day"] . '</p>
<p>Time: ' . $_POST["time"] . '</p>
<p>Description of Problem: ' . $_POST["desc"] . '</p>
</body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Dayspring Laser Dentistry <info@dayspringlaserdentistry.com>' . "\r\n";
$headers .= 'From: Dayspring Laser Dentistry <info@dayspringlaserdentistry.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
}
?>

<? 
	$page_title = 'Thank You for Contacting Dayspring Laser Dentistry';
?>

<?php include '_header.php'; ?>

	<div id="info_sub">
	<div class="row" id="content">
		<div><h2>Thank you for contacting Dayspring Laser Dentistry with your appointment request.</br>We will do our best to respond to you within 24-48 hours.</h2>
			
		</div>
	</div>
	</div>
		
<?php include '_footer.php'; ?>		


