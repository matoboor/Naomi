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
	$wish = $_POST["wish"];
	
	$customer = "$name1 $surname1";
	echo "_________Objednavka_________<br />";
	$message = "customer: $customer \r\n phone: $phone1 \r\n email: $email1 \r\n address: $address1 \r\n\r\n order: $order ";
	echo $message;
	
	$to = "koxo_17@azet.sk";
	$subject = "New order";
	$msg = $message;
	$headers = 'From: matoboor@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	if(mail($to,$subject,$msg,$headers))
	{
		echo "mail was sended";
	}
	else {
		echo "picu";
	}
?>
</div>