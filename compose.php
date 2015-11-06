<?php

if (isset($_POST["submit"])) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
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
    <label>Gulu-Gulu</label>
	</div>
    <!--<div id="right">
     <!--<div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div></div>-->
    </div>
    <!--<?=$thankYou ?>-->
<center>
    <form method="post" action="contact.php">
	<table align="center" width="30%" border="0">
	<caption> Compose mail below</caption>
	<tr>
        <td><label>Mail to:</label>
        <input name="address"></td></tr>
<tr>
<td>
        <label>Subject:</label>
        <input name="subject"></tr>
		</td>
<tr>

<td>
        <label>Message:</label>
        <textarea rows="5" cols="20" name="message" maxlength="500" size= ""></textarea></tr> </td>

       <tr>
<td> <button type="submit" name="submit" >Click here to send</button>
</td></tr>
</table>
    </form>
</center>
</body>

</html>