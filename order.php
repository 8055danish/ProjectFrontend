<?php
session_start();
include 'adminpanel/connection.php';

$total_price_item = '';
$total_quantity_item = '';
foreach($_SESSION['cart'] as $key => $value) {
	
	$name = $value['name2'];
	$total_price_item = $value['price2']*$value['quantity2'];
	$total_quantity_item = $value['quantity2'];

	$query1 = "INSERT INTO orders(product_name,product_price,product_quantity) VALUES('$name','$total_price_item','$total_quantity_item')";
	mysqli_query($db_conn,$query1);
}
$db_conn->close();
header("location:adminpanel/order.php")
?>