<?php 
include 'adminpanel/connection.php';

session_start();

$id = $_GET['id'];

$cart= array();

if(isset($_SESSION['cart'])){

  $cart = $_SESSION['cart'];
}

$query1 = "SELECT * FROM products WHERE product_id='$id'";

$result1 = mysqli_query($db_conn,$query1);

$db_conn->close();


foreach ($result1 as $key => $value) {
  if($value['product_id']==$id){
    $id1 = $value['product_id'];
    $name1 = $value['name'];
    $price1 = $value['price'];
    $img1 = $value['image'];
    $quantity = 1;
    
    $newarray = array("id2"=>$id1,"img2"=>$img1,"name2"=>$name1,"price2"=>$price1,"quantity2"=>$quantity);

    $_SESSION['cart']= $newarray;

    array_push($cart, $_SESSION['cart']);

    for($i=0;$i<=count($cart)-2;$i++) {
      if($cart[$i]["id2"]==$newarray["id2"])
      {
        $cart[$i]["quantity2"]=$cart[$i]["quantity2"]+1;
        array_pop($cart);
      }
    }
    
  }
}
$_SESSION['cart']=$cart;

header("Location:cart.php");
?>