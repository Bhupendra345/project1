<?php


    $sname=$_POST['sname'];
    $dname=$_POST['dname'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
   
    $landmark=$_POST["landmark"];
    echo "$pincode";
//    echo "aaja";
$conn= new mysqli("localhost","root","","ritu");
if($conn->connect_error){
    echo "<h3>CONNECTION ERROR</h3>";
    die;
}
$cmd="insert into `order`(`sname`,`dname`,`pincode`,`cityname`,`landmark`) values('$sname','$dname','$pincode','$city','$landmark')";
$check=mysqli_query($conn,$cmd);
if($check){
    header("location:done.php");
}





?>