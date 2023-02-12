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
        background-image:url('bg2.jpg');
    }
    .parent_menu
    {
        width:fit-content;
        
        padding:20px;
        background-color:white;
        padding-top:10px;
        display:inline-block;
        margin-left:4vh;
        margin-top:40px;
        border-radius:20px;
        box-shadow: -4px -5px 16px -4px rgba(0,0,0,1);
-webkit-box-shadow: -4px -5px 16px -4px rgba(0,0,0,1);
-moz-box-shadow: -4px -5px 16px -4px rgba(0,0,0,1);
    }
    .parent_menu img
    {
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
   
</style>
<body>
</body>
</html>

<?php
include 'menu.php';
include_once "../shared/connection.php";
$mysqli_obj=mysqli_query($conn,"select*from product");



while($row=mysqli_fetch_assoc($mysqli_obj))
{    
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];
    


     echo "<div class='parent_menu'>
         
         <img class='image' src='$impath'>
         <h3 class='name' >$name</h3>
         <h3 class='price' >$price <span class='currency'>/Rs/only</span></h3>
         <p class='details' >$details</P>
 
         <div class='text-end'>
         <input value='$pid'name='pid'hidden >
            <a href='edit.php?pid=$pid&name=$name&price=$price&details=$details&impath=$impath'>
            <button class='btn p-2 btn-warning'> <i class='bi-pencil'></i> </button>
            </a>
           
             <a href='delete_product.php?pid=$pid'>
             <button class='btn p1 btn-danger' > <i class='bi-trash'></i> </button>
             </a>
         </div>

    </div>";
}




?>