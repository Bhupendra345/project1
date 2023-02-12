
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdeliver.not/npm/bootstrap.icons@1.5.0/font/bootstrap.icon.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
    /* .parent:hover{
        zoom:1.1;
    } */
    body{
        background-image:url(bg2.jpg);
    }
    .pp{
        display:inline;
        margin-left:50px;
        margin-top:20px;
    
    }
    .parent_menu{
        width:fit-content;
        padding:20px;
        background-color:white;
        padding-top:10px;
        display:inline-block;
        margin-left:7%;
        margin-top:40px;
        border-radius:20px;
        box-shadow: -4px -5px 16px -4px rgba(0,0,0,1);
-webkit-box-shadow: -4px -5px 16px -4px rgba(0,0,0,1);
-moz-box-shadow: -4px -5px 16px -4px rgba(0,0,0,1);

    }
    .parent_menu img{
        width:200px;
        height: 150px;
    }
    .price{
        color:red;
        font-size:4vh;
    }
    .currency{
        font-size:12px;
    }
    .name{
      
        color:black;
        margin:0;
    }
    .total{
        margin-top:20px;
        font-weight:bold;
        margin-left:40px;
    }
    .place{
        background-color: rgb(156, 205, 205);
        color:red;
    }
    .just button{
        margin-left:45%;
    }
</style>

<body>
</body>
</html>

<?php

include 'menu.php';
include_once "../shared/connection.php";

if(!isset($_SESSION['cart']))
{
    echo "<h1>CART is Empty </h1>";
    die;
}
$local_cart=$_SESSION['cart'];

$pids=implode(",",$local_cart);//join array a string


$cmd="select * from product where pid in($pids)";

$sqli_obje=mysqli_query($conn,$cmd);
$total_count=0;
echo "<h1 class='place'>Placed order..</h1>";

while($row=mysqli_fetch_assoc($sqli_obje))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];

    $impath=$row['impath'];


    $total_count+=$price;

    echo "<div class='pp'>   
    <div class='parent_menu'>
         <img class='image' src='$impath'>
         <h3 class='name' >$name</h3>
         <h3 class='price' >$price <span class='currency'>Rs</span></h3>   
    </div>
</div>";

}
echo "<h3 class='total' >Paid Payment=$total_count rs</h3>";
