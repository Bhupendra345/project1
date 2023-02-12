<?php
 session_start();

 if(isset($_SESSION['login_status'])){
    if($_SESSION['login_status']==false){
        echo "<h2>Unauthorized login</h2>";
        die;
    }
    
 }
 else{
    echo "Illigal Attempt";
    die;
 }
?>

<html lang="en">
<head>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotoron bg-primary h-10vh">

     <h1 class="jumbtron-text text-white" >Iam a home page</h1>
    </div>
</body>
</html>