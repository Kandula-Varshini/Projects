<?php
session_start();
header("Location: thirdpage1.html");
?>
<html>
<head>
<title>Process success</title>
</head>
<body>

<div class="container">
<a href="logout.php">LOGOUT</a>
<h1>Process success</h1>
<h1>Process Completed<? php echo $_SESSION['username']; ?></h1>
</div>

</body>
</html>
<!--(!isset($_SESSION['username']){
header("Location: thirdpage.php");
}-->

