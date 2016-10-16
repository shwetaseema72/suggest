<?php
$connect = mysql_connect("localhost", "root", "") or
die ("Hey loser, check your server connection.");
mysql_select_db ("suggestme");
$query = "SELECT * FROM users";
$id='id';
$results = mysql_query($query)
or die(mysql_error());


 if ($id == 1){
		 
	header("location: shweta.php");
	 }
	 elseif ($id == 12)
	 {
		//
		 
	 }
	 else{
		 
		 //
		}

?>