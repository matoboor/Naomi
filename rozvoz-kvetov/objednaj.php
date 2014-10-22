<div>
<?php
    $name1 = $_POST["firstname"];
	$surname1 = $_POST["lastname"];
	$phone1 = $_POST["phone"];
	$address1 = $_POST["address"];
	$email1 = $_POST["mail"];
	$order = $_POST["order"];
	
	$name2 = $_POST["firstname2"];
	$surname2 = $_POST["lastname2"];
	$phone2 = $_POST["phone2"];
	$address2 = $_POST["address2"];
	$date = $_POST["date2"];
	$time = $_POST["time2"];
	$wish = $_POST["wish"];
	
	$customer = "$name1 $surname1";
	$receiver = "$name2 $surname2";
	date_default_timezone_set('Europe/Bratislava');
	$timestamp = date('d/m/Y h:i:s');
	//mail message
	$message = "
				<html>
				<head>
				  <title>Nová objednávka</title>
				</head>
				<body>
				<h2> Objednávka - $timestamp</h2>
				<hr />
				  <p>Zákazník</p>
				  <table>				  
				    <tr>
				      <td>Meno</td>
				      <td>$customer</td>				      
				    </tr>
				    <tr>
				      <td>Telefón</td>
				      <td>$phone1</td>
				    </tr>
				    <tr>
				      <td>Email</td>
				      <td><a href=\"mailto:$email1\">$email1</a></td>
				    </tr>
				    <tr>
				      <td>Adresa</td>
				      <td>$address1</td>
				    </tr>
				    <tr>
				      <td>Objednávka</td>
				      <td>$order</td>
				    </tr>
				  </table>
				  <hr />
				  <p>Adresát</p>
				  <table>
				  	<tr>
				      <td>Meno</td>
				      <td>$receiver</td>
				    </tr>
				    <tr>
				      <td>Telefón</td>
				      <td>$phone2</td>
				    </tr>
				    <tr>
				      <td>Adresa doručenia</td>
				      <td>$address2</td>
				    </tr>
				    <tr>
				      <td>Dátum doručenia</td>
				      <td>$date</td>
				    </tr>
				    <tr>
				      <td>Čas doručenia</td>
				      <td>$time</td>
				    </tr>
				    <tr>
				      <td>Špecialne prianie</td>
				      <td>$wish</td>
				    </tr>
				  </table>
				</body>
				</html>
				";		
	
	function SaveRecord()
	{
		include '../../include/cred.php';
		$connection = mysqli_connect('localhost', $username, $password, $dbname);
		if (mysqli_connect_errno())
		{
			return false;
		}
		$name1=mysqli_real_escape_string($connection, $GLOBALS['name1']);
		$surname1=mysqli_real_escape_string($connection, $GLOBALS['surname1']);
		$phone1=mysqli_real_escape_string($connection, $GLOBALS['phone1']);
		$address1=mysqli_real_escape_string($connection, $GLOBALS['address1']);
		$email1=mysqli_real_escape_string($connection, $GLOBALS['email1']);
		$order=mysqli_real_escape_string($connection, $GLOBALS['order']);
		$name2=mysqli_real_escape_string($connection, $GLOBALS['name2']);
		$surname2=mysqli_real_escape_string($connection, $GLOBALS['surname2']);
		$phone2=mysqli_real_escape_string($connection, $GLOBALS['phone2']);
		$address2=mysqli_real_escape_string($connection, $GLOBALS['address2']);
		$deliverydate=mysqli_real_escape_string($connection, $GLOBALS['date']);
		$deliverytime=mysqli_real_escape_string($connection, $GLOBALS['time']);
		$wish=mysqli_real_escape_string($connection, $GLOBALS['wish']);
		$date=mysqli_real_escape_string($connection, date("Y-m-d H:i:s"));
		
		$sql1 = "INSERT INTO `orders`(`name1`, `surname1`, `phone1`, `address1`, `email1`, `order`, `name2`, `surname2`, `phone2`, `address2`, `deliverydate`, `deliverytime`, `wish`, `time`) 
		VALUES ('$name1','$surname1','$phone1','$address1','$email1','$order','$name2','$surname2','$phone2','$address2','$deliverydate','$deliverytime' ,'$wish','$date')";
		if(!mysqli_query($connection,$sql1))
		{
		return false;
		}
		else 
		{
		return true;
		}
	}
	
				
	//shop mail values
	$to = "koxo_17@azet.sk";
	$subject = "Systém prijal novú objednávku";
	$msg = wordwrap($message,70, "\r\n");
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: Naomi - Kvety <naomi@kvety-naomi.sk>' . "\r\n";
	if(mail($to,$subject,$msg,$headers) && mail($email1, "Vaša objednávka bola prijatá", $msg, $headers) && SaveRecord())
	{
				
				// db connect, save record, disconnect, maybe create function whitch returns bool and put it in the if above.		
				header ( "Location: Ok.php?id=$timestamp");			
	}
	else {
		echo "chyba ";
		}
	
	
	
	
?>
</div>