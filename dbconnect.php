<?php
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("web-sys2"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>
