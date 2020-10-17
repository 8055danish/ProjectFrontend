<?php
if(isset($_GET)){
	$id = $_GET['id'];
}
session_start();
unset($_SESSION['cart'][$id]);
header("Location:cart.php");

?>