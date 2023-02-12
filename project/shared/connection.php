<?php
$conn= new mysqli("localhost","root","","ritu");
if($conn->connect_error){
    echo "<h3>CONNECTION ERROR</h3>";
    die;
}


?>