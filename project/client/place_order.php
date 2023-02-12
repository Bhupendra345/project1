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
     body{
            background-image:url(bgimg.jpg);
        }
    .payment{
        background-color:tomato;
    }
    .text-center{
        font-weight:bold;
    }
    .para{
        font-weight:bold;
    }
   
</style>
<body>
    
<div class="d-flex justify-content-center align-item-center  ">

        <form  class=" w-50 p-3 bg-warning" method="post" action="placeorder_server.php">
            
            <h2 class="text-center">Address</h2>
            <hr>
            <h3>State</h3>
            <input placeholder="State name" type="text" class="form-control mt-3" name="sname" required>
            <h3>District</h3>
            <input placeholder="District" type="text" class="form-control mt-3" name="dname" required>
            <h3>Pincode</h3>
            <input placeholder="Pin code" class="form-control mt-3" name="pincode" required>
            <h3>City</h3>
            <input placeholder="city name" class="form-control mt-3" name="city" required>
            <h3>landmark</h3>
            <input placeholder="land mark" class="form-control mt-3" name=" landmark" required>
            
           
            <div class='pay' >
            <h2 class="text-center mt-2">Proceed to pay</h2>
            <hr>
            <p class='para'>This site only support for pay on delivery method...</p>
            <input class='check' type="checkbox" required>
            <p>I agree that all the above details filled by me is coorect. I take all the responsibilty regarding to this order. I accept all the <a href="#">privicy policy</a> of this site.</p>
            <input class='form-control mt-5 btn btn-success text-black ' type="submit" value="Order">
            </div>
            
       
           
      
        </form>
        
        
        

</div>
</body>
</html>