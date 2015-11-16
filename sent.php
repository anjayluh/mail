<html>
<head>
    <meta charset="utf-8">
    <title>Sent mail</title>
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

</body>

</html>
<?php
include_once 'dbconnect.php';
$result = mysql_query("SELECT * FROM mail WHERE status IN (1)"); 
echo "<center>";

echo "<table border='1'>
 <tr>
 
 <th>Address</th>
 <th>Subject</th>
 <th>Message</th>
 <th>Date</th>
 </tr>";


while($row = mysql_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>" . $row['address'] . "</td>";

	
  echo "<td>" . $row['subject'] . "</td>";	
   echo "<td>" . $row['message'] . "</td>";
   echo "<td>" . $row['date'] . "</td>";
   echo "</tr>";
echo <<<"buttons"
  <td>
     <input class="button_normal" type="button" value="Send via gmail" onclick="window.open('https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1')"/>; 
     <input class="button_normal" type="button" value="Send via Yahoo" onclick="window.open('https://www.yahoo.co.uk')"/>
  </td>    
buttons;
   }
 echo "</table>";
 ?>
 