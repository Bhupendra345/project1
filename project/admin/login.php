<?php
include 'menu.php';
session_start();

$un=$_POST['username'];
$ps=$_POST['password'];

$conn= new mysqli("localhost","root","","ritu");

$sql_obj=mysqli_query($conn,"select * from account where password='$ps'");
$check=mysqli_fetch_array($sql_obj);
if($check){

    echo "<h1 style='color:red'> LOGIN SUCESSFULL</h1>";
    $_SESSION['login_status']=true;
    header('location:view.php');
    die;
    
}
else{
  echo "<a href='login.html'><h1>invalid detials</h1></a>";
  $_SESSION['login_status']=false;
  die;

}

?>