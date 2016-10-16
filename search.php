<?php

$connection = mysql_connect('localhost', 'antiqueme', '');

$db = mysql_select_db('suggestme', $connection);

$term = strip_tags(substr($_POST['searchit'],0, 100));

$term = mysql_escape_string($term); // Attack Prevention
$id = 'id';

if($term=="")
echo "Enter Something to search";

else{
$query = mysql_query("select * from users where username like '{$term}%'", $connection);

$string = '';
 

if (mysql_num_rows($query)){

while($row = mysql_fetch_assoc($query)){
	
	 $id=$row['id'];
	 
	 
	 if ($id == 1){
		 
	
	echo  "<li>" . "<a href='shweta.php'" .$row['username']."</a></li>\n"; 

 $string .= "<b>".$row['username']."</b> - ";

$string .= $row['email']."</a>";

	 $string .= "<br/>\n";
	 }
	 elseif ($id == 12)
	 {
		echo  "<li>" . "<a href='rupinder.php'" .$row['username']."</a></li>\n"; 

 $string .= "<b>".$row['username']."</b> - ";

$string .= $row['email']."</a>";

	 $string .= "<br/>\n"; 
		 
	 }
	 else{
		 echo  "<li>" . "<a href='ripudaman.php'" .$row['username']."</a></li>\n"; 

 $string .= "<b>".$row['username']."</b> - ";

$string .= $row['email']."</a>";

	 $string .= "<br/>\n";
		 
	 }
	 





}

}else{

$string = "No matches found!";

}
 

echo $string;

}

?>
	



