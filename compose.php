<?php

include_once 'dbconnect.php';

if (isset($_POST["submit"])) {
	//Codes
    $address = mysql_real_escape_string($_POST['address']);
    $subject = mysql_real_escape_string($_POST['subject']);
    $message = mysql_real_escape_string($_POST['message']);
	$status = mysql_real_escape_string($_POST['status']);
	//post to db
if (mysql_query("INSERT INTO mail(address, subject, message, status, date) values('$address', '$subject', '$message', '$status',now())"))
{
  ?>
        <script>alert('successfully added message ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while adding message');</script>
        <?php
 }
}
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Compose email</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="header">
 <div id="left">
    <label>Posta!</label>
    </div>
    <div id="right">
     <div id="content">
        </div>
    </div>
	
	<div id="center">
	<a href="home.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	<a href="compose.php">Compose mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	<a href="sent.php">View Sent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	<a href="unsent.php">View Unsent</a>
	</div>
</div>
<center>
    <form method="post" action="compose.php">
	<table align="center" width="30%" border="0">
	<caption> Compose mail below</caption>
	<tr>
        <td><label>Mail to:</label>
        <input name="address"></td></tr>
<tr>
<td>
        <label>Subject:</label>
        <input name="subject">
		</td></tr>
<tr>

<td>
        <label>Message:</label>
        <textarea rows="5" cols="20" name="message" maxlength="500" size= ""></textarea></td></tr>
		<tr><td>
		Status
		<select name="status">
		<option>Select here</option>
		<option value ="1">Sent</option>
		<option value ="0">Not sent</option>
		</select></td></tr>
      
       <tr>
<td> <button type="submit" name="submit" >Click here to add</button>
</td></tr>
</table>
    </form>
</center>
</body>

</html>