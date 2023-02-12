<?php
print_r($_FILES);
// $pid=$_GET['pid'];

$src_path= $_FILES['imname']['tmp_name'];
$imname= $_FILES['imname']['name'];

date_default_timezone_set("Asia/Kolkata");
$unique=date("YmdHis.").".jpg";
echo "UNIQUE=$unique";

$dest_path="../image/$unique";
$m=move_uploaded_file($src_path,$dest_path);


$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];

include_once "../shared/connection.php";

$cmd="update `product` set `name`='$name' ,`price`='$price' ,`details`='$details' ,`impath`='$dest_path' where `name`='$name'";

echo "<br>$cmd";
$checks_s = mysqli_query($conn,$cmd);
if($checks_s){
    header("location:view.php");
}
else{
    echo'showing error';
}

?>