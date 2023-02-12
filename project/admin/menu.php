<?php

session_start();
if(isset($_SESSION['cart']))
{
    $loacl_cart=$_SESSION['cart'];
    $total_count=count($loacl_cart);   
}
else{
    $total_count=0;
}



?>


<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<style>
    .d-flex{
        background: rgb(227,219,222);
background: radial-gradient(circle, rgba(227,219,222,1) 7%, rgba(39,126,213,1) 83%);
    }
.parent{
  display:flex;
  justify-content:start;
  gap:38px;
  
}
.parent div{
    padding:10px;
}
.parent a{
    color:inherit;
    text-decoration:none;
    padding:5px;
    font-size:20px;

}
.parent a:hover{
     color:black;
}
.cart-count-parent{
    position:relative;

}
img{
        width:60px;
        height:60px;
    
    }
.cart-count{
    height:26px;
    padding:3px;
    border-radius:50px;
    background-color:tomato;
    color:white;
    position: absolute;
    right:-8px;
    top:-10px;
    font-weight:bold;

    }
</style>

</head>
<body>
<div class='d-flex p-4  text-white w-100 justify-content-between'>
     <div class='parent '>
       <img src="pc.jpg" alt="image">
       <div>
        <a href="about.php">About</a>
       </div>
        <div class='m1-4'>
            <a href="view.php"> View Product</a>
        </div>
        <div>
            <a href="cart.php">View cart</a>
        </div>
        <div>
            <a href="order.php">View Order</a>
        </div>
        
        
    </div>

    <div class='d-flex'>
        <div class='cart-count-parent'>
          <button class='btn btn-warning'> <i class='bi-cart'></i> </button>
          <span class='cart-count'>
            <?php  echo "$total_count"      ?>
          </span>
       </div>
       <div class='ms-3'>

        <a href="logout.php"><button class='btn btn-danger'> <i class='bi bi-box-arrow-right'></i>Logout </button></a>
       </div>
    </div>
</div>
</body>
</html>