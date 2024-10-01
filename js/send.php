<?php 
$type = $_REQUEST['type'];

if($type=="memberForm"){
	$name = $_REQUEST['Name'];
	$contact = $_REQUEST['Contact'];
	$email = $_REQUEST['EmailId'];
	$address = $_REQUEST['Address'];
	$date = date("Y-m-d H:i:s");

	$file = fopen("./rt-be-a-member.csv","a");
	fputcsv($file,array($name,$contact,$email,$address,$date));
	fclose($file);
	
	//$to = "darshan@digitallatte.in";
	$to = "enquiries@revestravels.com";
	$subject = "Be a member";

	$message = "
	<html>
	<head>
		<title>Be A Member Form</title>
	</head>
	<body>
		<p>Be A Member Form</p>
	<table>
		<tr><th>Name</th><th>Contact</th><th>Email ID</th><th>Address</th></tr>
		<tr><td>$name</td><td>$contact</td><td>$email</td><td>$address</td></tr>
	</table>
	</body>
	</html>
	";
}

if($type=="contactForm"){
	$name = $_REQUEST['Name'];
	$destination = $_REQUEST['Destination'];
	$phone = $_REQUEST['Contact'];
	$email = $_REQUEST['EmailId'];
	$city = $_REQUEST['City'];
	$date = date("Y-m-d H:i:s");

	$file = fopen("./rt-contact-us.csv","a");
	fputcsv($file,array($name,$destination,$phone,$email,$city,$date));
	fclose($file);
	
	//$to = "darshan@digitallatte.in";
	$to = "enquiries@revestravels.com";
	$subject = "Contact form";

	$message = "
	<html>
	<head>
		<title>Contact Form</title>
	</head>
	<body>
		<p>Contact Form</p>
	<table>
		<tr><th>Name</th><th>Destination</th><th>Phone</th><th>Email ID</th><th>City</th></tr>
		<tr><td>$name</td><td>$destination</td><td>$phone</td><td>$email</td><td>$city</td></tr>
	</table>
	</body>
	</html>
	";
}

if($type=="homeForm"){
	$name = $_REQUEST['Name'];
	$email = $_REQUEST['EmailId'];
	$msg = $_REQUEST['Message'];
	$date = date("Y-m-d H:i:s");
	
	$file = fopen("./rt-home-form.csv","a");
	fputcsv($file,array($name,$email,$msg,$date));
	fclose($file);
	
	//$to = "darshan@digitallatte.in";
	$to = "enquiries@revestravels.com";
	//$to = "sanket.mehta7@gmail.com";
	$subject = "Home Contact Form";

	$message = "
	<html>
	<head>
		<title>Home Contact Form</title>
	</head>
	<body>
		<p>BHome Contact Form</p>
	<table>
		<tr><th>Name</th><th>Email ID</th><th>Message</th></tr>
		<tr><td>$name</td><td>$email</td><td>$msg</td></tr>
	</table>
	</body>
	</html>
	";
}


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <webmaster@revestravels.in>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
if(mail($to,$subject,$message,$headers)){
	$res = array("response"=>"1","message"=>"Thanks, we will consider your feedback.");
        echo json_encode($res);
        exit;
}

?>