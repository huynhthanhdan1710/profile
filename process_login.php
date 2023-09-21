<?php
require'connect.php';
$username = $_POST['username'];
$password =$_POST['pass'];
$sql ="select * from    
where username ='$username' and password ='$password'";
$result = mysqli_query($connection,$sql);
$number_row = mysqli_num_rows($result);
$each = mysqli_fetch_array($result);
if($number_row==1)
{
    session_start();
    $_SESSION['id'] = $each['accountID'];
    header("location:index.php");
    exit;  
}
else
{
    header("location:pages_login.html");
    exit;  
}