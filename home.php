<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

?>
<?php
$result = mysql_query("SELECT * FROM mail");
echo "<table border='1'>
<tr><th>Pno</th>
<th>Patientname</th>
</tr>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>Posta!</label>
    </div>
	<div id="center">
	<a href="home.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	<a href="compose.php">Compose mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	<a href="sent.php">View Sent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	<a href="unsent.php">View Unsent</a>
	</div>
    <div id="right">
     <div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>

    </div>
	
</div>
</body>
</html>
