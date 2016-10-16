<?php
$hostname="localhost"; //local server name default localhost
$username="antiqueme";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="suggestme";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>