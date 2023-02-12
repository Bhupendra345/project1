<?php

include 'menu.php';

?>

<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="d-flex justify-content-center align-items-center vh-100 ">

        <form enctype="multipart/form-data" class="text-center w-25 p-3 bg-warning" method="post" action="upload_server.php">
            
            <h3 class="text-center">Upload Product</h3>

            <input placeholder="product name" type="text" class="form-control mt-3" name="name" required>
            <input placeholder="price" type="text" class="form-control mt-3" name="price" required>
            <textarea placeholder="description" class="form-control mt-3" name="details" cols="60" rows="5"></textarea>
            <input accept=".jpg" class="form-control mt-3" type="file" name="imname">
            <input type="submit" value="upload" class="mt-3 btn btn-success">
        </form>

    </div>
    
</body>
</html>