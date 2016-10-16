<?php
    $link = mysql_connect('localhost','antiqueme','');
    $db_selected = mysql_select_db('suggestme', $link);
    $status=mysql_real_escape_string($_POST['status']);
    mysql_query("INSERT INTO status (str) VALUES ('$status')");
 
    echo "<div id='myDiv' class='myDivClass'> <img src='webtuts.jpg' float=left  id='im'/> <f>webtuts:</f><br/><div id='g'>$status</div> </div> ";
 
    //echo $status;
    //echo " <br/> ";
?>