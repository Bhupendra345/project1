<?php

$pid=$_GET['pid'];


session_start();

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array();
}
$loacl_cart=$_SESSION['cart'];

$status=in_array($pid,$loacl_cart);
if($status){
    echo 'item already exist in cart';
}
else{
    array_push($loacl_cart,$pid);
    $_SESSION['cart']=$loacl_cart;
    
    // print_r($loacl_cart);
    header('location:view.php');
}






?>
