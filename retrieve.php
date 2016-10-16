<?php
        $link = mysql_connect('localhost','antiqueme','');
        $db_selected = mysql_select_db('suggestme', $link);
 
        $result = mysql_query("SELECT * FROM status ORDER BY id DESC");
        $num=mysql_num_rows($result);
        while($row = mysql_fetch_array($result))
        {
            $temp = $row['str'];
            echo "<div id='myDiv' class='myDivClass'> <img src='webtuts.jpg' float=left  id='im'/> <f>webtuts:</f><br/><div id='g'>$temp</div> </div>";
 
        }
 
?>