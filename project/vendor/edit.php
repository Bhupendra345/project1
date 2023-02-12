<?php
include 'menu.php';

include_once "../shared/connection.php";

$pid=$_GET['pid'];
$name=$_GET['name'];
$price=$_GET['price'];
$details=$_GET['details'];
$impath=$_GET['impath'];

echo "Recieved pid=$pid<br>";
echo "Recieved image path=$impath";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .img1
        {
            height:100px;
            width: 100px;
        }
    </style>
   
</head>
<body>

<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="d-flex justify-content-center align-items-center mt-5 ">

        <form enctype="multipart/form-data" class="text-center w-25 p-3 bg-warning" method="GET" action="edit_server.php">
            
            <h3 class="text-center">Edit Product</h3>

            <input value="<?php echo "$name";?>" type="text" class="form-control mt-3" name="name" >
            <input value="<?php echo "$price";?>"type="text" class="form-control mt-3" name="price" >
            <textarea class="form-control mt-3" name="details" cols="60" rows="5"><?php echo "$details";?></textarea>
            <input accept=".jpg" class="form-control mt-3" type="file" name="imname" id="item_img"  hidden>
            <label for="item_img">
                <img class='img1' src="<?php echo "$impath";?>" alt="img">
            </label>
            <input type="submit" value="Update" class="mt-3 btn btn-success">
        </form>

    </div>
    
</body>
</html>
    
</body>
</html>

    `

   

    


   





