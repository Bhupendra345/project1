<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdeliver.not/npm/bootstrap.icons@1.5.0/font/bootstrap.icon.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
   
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .welcome{
        color: rgb(6, 6, 21);
        background-color: rgb(157, 222, 222);
        font-weight:bold;
        height:100px;
        width:100%;
        text-align:center;
        margin-top:10px;
       
    }
    .view{
     margin-left:47%;
    }
    
   
</style>
<body>
    <div class='welcome' >
        <h1>Your order is placed....</h1>
    </div>

    <div class='view' >
        <a  href="order.php">
            <button class='d-flex justify-content-center align-items-center p-3 mt-5 btn btn-warning'  >View Order</button>
        </a>
    </div>
    
</body>
</html>
