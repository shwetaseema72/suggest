<!DOCTYPE HTML>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/Chart.js"></script>
 <script type="text/javascript" src="js/jquery.easing.js"></script>
 <script type="text/javascript" src="js/jquery.ulslide.js"></script>
<script type='text/javascript'>

$(document).ready(function(){

$("#search_results").slideUp();

$("#button_find").click(function(event){

event.preventDefault();

search_ajax_way();

});

$("#search_query").keyup(function(event){

event.preventDefault();

search_ajax_way();

});

});

function search_ajax_way(){

$("#search_results").show();

var search_this=$("#search_query").val();

$.post("search.php", {searchit : search_this}, function(data){

$("#display_results").html(data);

})

}

</script>
 <!----Calender -------->
  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
  <script src="js/underscore-min.js"></script>
  <script src= "js/moment-2.2.1.js"></script>
  <script src="js/clndr.js"></script>
  <script src="js/site.js"></script>
  <!----End Calender -------->
</head>
<body>		
	       
	    <div class="wrap">	 
	      <div class="header">
	      	  <div class="header_top">
					  <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
							<ul class="nav">
							
								<li><a href="#"><i><img src="images/settings.png" alt="" /></i>Logout</a></li>
								<li ><a href="home.php"><i><img src="images/user.png" alt="" /></i>Profile</a></li>
								<li ><a href="suggestion.php"><i><img src="images/mail.png" alt="" /></i>Suggestions </a></li>
							
							<div class="clear"></div>
						    </ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				        </div>	
					  <div class="profile_details">
				    		   <div id="loginContainer">
				               
				                    <div id="loginBox">                
				                      <form id="loginForm">
				                        <fieldset id="body">
				                            <div class="user-info">
							        		
							        			<ul>
							        				<li class="profile active"><a href="#">Profile </a></li>
							        				<li class="logout"><a href="#"> Logout</a></li>
							        				<div class="clear"></div>		
							        			</ul>
							        		</div>			                            
				                        </fieldset>
				                    </form>
				                </div>
				            </div>
				             	
				             <div class="clear"></div>		  	
					    </div>	
		 		      <div class="clear"></div>				 
				   </div>
			</div>	  					     
	</div>
	
	<?php
//connect to the database - either include a connection variable file or
//type the following lines:
$connect = mysql_connect("localhost", "antiqueme", "") or
die ("Hey loser, check your server connection.");
mysql_select_db ("suggestme");
$query = "SELECT DISTINCT picture, link FROM profile";
$results = mysql_query($query)
or die(mysql_error());
?>
	<div class="main">  
	    <div class="wrap"> 
	
              <div class="column_middle_grid1">
		         <div class="profile_picture">
				   <div class="profile_picture_name">
		            	<h2>FRIENDS YOU MAY KNOW</h2>
		            	<table class="show" width='500'>


<?php
// Show only Name, Price and Image
while ($row = mysql_fetch_array($results)) {
extract ($row);
echo "<tr>";
echo "<td>";
echo "<a href ='getImage.php?picid=" . $id ."'>";
echo "<img src=$picture width='200px' height='text' float='left'></a>";
//echo "<td>";
echo "<a href = 'getImage.php?picid=" . $id ."'>";
echo "<div style=\"width: 1000px; padding: 20px;\">";
echo $link;


echo "</td></a>";

//echo "</td></a></tr>";
}
?>
</table>
<div class="clear"></div>
</div>
</div>

</div>

<div class="clear"></div>
 	 </div>
   </div>
  		   
</body>
</html>