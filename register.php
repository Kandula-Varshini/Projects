<?php
session_start();
header('location:secondpage.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'foodmanagement');


$user=$_POST['user'];
$password=$_POST['password'];
$emailid=$_POST['emailid'];
$phoneno=$_POST['phoneno'];


$s="select* from tablename where user='$user'";
$result=mysqli_num_rows($result);

if($num==1)
{
echo"username already registered";
}
else
{
$reg="insert into tablename(user,password,emailid,phoneno) values('$user','$password','$emailid','$phoneno')";
mysqli_query($con,$reg);
header('location:thirdpage.php');
}
?>
