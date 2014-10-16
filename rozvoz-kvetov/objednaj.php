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
	$to = "koxo_17@azet.sk";
	$subject = "Systém prijal novú objednávku";
	$msg = wordwrap($message,70, "\r\n");
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: Naomi - Kvety <naomi@kvety-naomi.sk>' . "\r\n";
	if(mail($to,$subject,$msg,$headers))
	{
		echo "Objednavka odoslana";
		if(mail($email1, "Vaša objednávka bola prijatá", $msg, $headers))
			{
				echo "Kopia odoslana";
				header ( "Location: Ok.php?id=$timestamp");
			}
			else {
				echo "chyba";
			}
	}
	else {
		echo "chyba";
		}
	
	
	
	
?>
</div>