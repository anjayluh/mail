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
    <title>Send email</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

    <!--<?=$thankYou ?>-->

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
        <textarea rows="5" cols="20" name="message" maxlenth="500"></textarea></tr> </td>

       <tr>
<td> <input type="submit" name="submit" value ="click here to send mail"></td></tr>
</table>
    </form>

</body>

</html>