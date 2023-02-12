<?php

print_r($_FILES);

$src_path= $_FILES['imname']['tmp_name'];
$imname= $_FILES['imname']['name'];

date_default_timezone_set("Asia/Kolkata");
$unique=date("YmdHis.").".jpg";
echo "UNIQUE=$unique";

$dest_path="../image/$unique";
$m=move_uploaded_file($src_path,$dest_path);
echo "$dest_path";
echo "$src_path";

$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];

include_once "../shared/connection.php";

$cmd="insert into `product`(`name`,`price`,`details`,`impath`) values('$name','$price','$details','$dest_path')";

echo "<br>$cmd";
$checks_st = mysqli_query($conn,$cmd);

?>