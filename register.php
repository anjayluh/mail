<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['signup']))
{
 $name = mysql_real_escape_string($_POST['name']);
 $username = mysql_real_escape_string($_POST['username']);
 $email = mysql_real_escape_string($_POST['email']);
 $password = md5(mysql_real_escape_string($_POST['password']));
 
 if(mysql_query("INSERT INTO users(name,username,email,password) VALUES('name','$username','$email','$password')"))
 {
  ?>
        <script>alert('successfully registered\n Thanks for signing up with us ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Register</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div id="header">
<div id="left">
    <label>Gulu-Gulu</label>
	</div>
    <!--<div id="right">
     <!--<div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div></div>-->
    </div>
	<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="name" placeholder="Name" required /></td>
</tr>
<tr>
<td><input type="text" name="username" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="index.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
