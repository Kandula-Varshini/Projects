<?php
session_start();
header('location:thirdpage.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'foodmanagement');

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$cofm=$_POST['cofm'];
$from=$_POST['froma'];
$to=$_POST['toa'];
$date=$_POST['date'];

$_SESSION['username']='$fname';
$reg="insert into tablename1(fname,mname,lname,cofm,froma,toa,date) value('$fname','$mname','$lname','$cofm','$from','$to','$date')";
mysqli_query($con,$reg);
header('location:fourthpage.php');
?>