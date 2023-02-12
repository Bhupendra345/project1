<?php

include_once "../shared/connection.php";
$pid=$_GET['pid'];
session_start();

$loacl_cart=$_SESSION['cart'];
$index=array_search($pid,$loacl_cart);
array_splice($loacl_cart,$index,1);
$_SESSION['cart']=$loacl_cart;
header("location:cart.php");





?>