<?php
session_start();
header('location:secondpage.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'railwaywebpage1');

$user=$_POST['use'];
$password=$_POST['passwor'];
$emailid=$_POST['emaili'];
$phoneno=$_POST['phonen'];
$res="insert into tablename(user,password,emailid,phoneno) values('$user','$password','$emailid','$phoneno')";
mysqli_query($con,$res);
header('location:thirdpage.php');
?>