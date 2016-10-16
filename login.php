<?php
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","antiqueme","");
mysql_select_db("suggestme",$conn);
$result = mysql_query("SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
echo "please <a href='login1.php'> login </a> again the information is wrong";
} else {
	include('home.php');
}
}
?>