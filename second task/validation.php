<?php
spl_autoload_register();
$check = new validate();

$email="test@geemail.com";
$phone = +3800934474022;



//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//	$email = test_input($_POST["email"]);
//	$phone = test_input($_POST["phone"]);
//
//}
//
//function test_input($data) {
//	$data = trim($data);
//	$data = stripslashes($data);
//	$data = htmlspecialchars($data);
//	return $data;
//}








if ($check->isValidEmail($email))
{
	echo "1Hooray! Adress is correct. ";
}
else
{
	echo "1Sorry! No way. ";
}



if ($check->isValidPhone($phone))
{
	echo "2Hooray! Phone is correct ";
}
else
{
	echo "2Sorry! No way. ";
}
?>