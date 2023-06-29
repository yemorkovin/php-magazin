<?php
include '../connectDB.php';
$name = $_POST['name'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$message = $_POST['message'];

if(strlen($name) > 5 && strlen($sname) > 5 && strlen($email) > 5 && strlen($message) > 5){
	$conn->query("insert into reviews (name, sname, email, message) values ('$name', '$sname', '$email', '$message')");
	$conn->close();
	header('Location: ../index.php?suc=1');
}else{
	header('Location: ../index.php?suc=0');
}
exit();

?>