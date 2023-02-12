<?php

$usname=$_POST['username'];
$paword=$_POST['password1'];
$mo=$_POST['mobile'];

$conn= new mysqli("localhost","root","","ritu");



$sql_obj=mysqli_query($conn ,"select*from account where username='$usname'");
$check=mysqli_fetch_array($sql_obj);
if($check){

   echo "<h1> USER ALREADY EXIST..TRY AGAIN</h1>";
   echo "<br>";
   echo "<a href='register.html'>Try agin</a>";
   echo "<br>";

}
else{
   

$cmd="insert into account(username,password,mobile) values('$usname','$paword','$mo')";
$sql_result=mysqli_query($conn,$cmd);
echo "$cmd<br>";

}
if($sql_result){
   echo "<h1>Registrtion Sucess</h1>";
   echo "<hr>";
   echo "<h1>Visit the Site.....</h1>";
   echo "<a href='login.html'> CLICK THE LINK FOR LOGIN</a>";
}
else{
   echo "Reistraion Failed";
}



?>