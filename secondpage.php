<html>

<head>
<title>User login and Registration</title>
<link rel="stylesheet" type="text/css" href="happy1.css">
<link rel="stylesheet" type="text/css" href="">
</head>
<body>


<div class="container">
<div class="login-box">
<div class="row">

<div class="col-md-6 login-left">
<h2>Login Here</h2>
<form action="thirdpage.php" method="get" style="text-align: center;">

<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary"> get started</button>
</form>
</div>

<div class="col-md-6 register">
<div class="col-md-6 login-down">

<h2>Register Here</h2>

<form action="registration.php" method="get" style="text-align: center;">

<div class="form-group">
<label>Username</label>
<input type="text" name="use" class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="passwor" class="form-control" required>
</div>

<div class="form-group">
<label>Email</label>
<input type="text" name="emaili" class="form-control" required>
</div>

<div class="form-group">
<label>Phoneno</label>
<input type="text" name="phonen" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary"> get started</button>
</form>
</div>
<h2>Admin Login Here</h2>
<form  action="location.html" method="post" style="text-align: center;">

<!--<form action="register.php" method="get">-->

<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required><br>
<form>
<button type="submit" class="btn btn-primary" > get started</button>
</form>
</div>
</form>


</div>
</div>
</div>
</body>
</html>
<!-- action="validation.php" method="get"
<form action="register.php" method="get" style="text-align: center;">-->