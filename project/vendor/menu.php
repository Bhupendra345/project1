<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<style>
.parent{
  display:flex;
  justify-content:start;
  gap:38px;
  background: rgb(227,219,222);
background: radial-gradient(circle, rgba(227,219,222,1) 7%, rgba(39,126,213,1) 83%);
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
img{
        width:60px;
        height:60px;
    
    }
</style>

</head>
<body>
    <div class='parent  p-4 m-0 text-white w-100'>
       <img  class='' src="pc.jpg" alt="no image">
       <div>
        <a href="about.php">About</a>
       </div>
       <div class='m1-4'>
        <a href="upload.php"> Upload Product</a>
       </div>
       <div>
        <a href="view.php">View Product</a>
       </div>
       <div>
        <a href="order.php">View Order</a>
       </div>

    </div>
</body>
</html>