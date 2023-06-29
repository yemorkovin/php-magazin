<?php 
session_start();
$id = $_POST['id'];
if(isset($_SESSION['id'])){

	$_SESSION['id'] = $_SESSION['id'].','.$id;

}else{
	$_SESSION['id'] = $id;
}

header("Location: ../index.php")
?>