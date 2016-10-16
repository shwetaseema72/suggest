
<?php

$conn= mysqli_connect("localhost", "antiqueme", "", "suggestme");

if(mysqli_connect_error()){
	
	echo mysqli_connect_error();
	
}else{
$query= "Select * from profile ";
$query_insert= "Insert into profile (picture, link) values ('images/shweta.jpg', 'shweta')";
$exec_query= mysqli_query($conn, $query);
mysqli_query($conn, $query_insert);
}
?>
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
								<li class="active"><a href="#"><i><img src="images/user.png" alt="" /></i>Profile</a></li>
								<li><a href="suggestion.php"><i><img src="images/mail.png" alt="" /></i>Suggestions </a></li>
								
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
							        		
							        			
							        		</div>			                            
				                        </fieldset>
				                    </form>
				                </div>
				            </div>
				             <div class="profile_img">	
				             	<a href="#"><img src="images/shweta1.jpg" alt="" />	</a>
				             </div>		
				             <div class="clear"></div>		  	
					    </div>	
		 		      <div class="clear"></div>				 
				   </div>
			</div>	  					     
	</div>
	  <div class="main">  
	    <div class="wrap">  		 
	       <div class="column_left">	          
	    		 <div class="menu_box">
	    		 	 <h3>Personal Information</h3>
	    		 	   <div class="menu_box_list">
	    		 	   	<font color="white">
				      	
   	<table>
	<tr>
	
	<center><th>Name</th>
	<td>Shweta</td>
	</tr></center>
	&nbsp;&nbsp;
 	<tr>
 		&nbsp;&nbsp;
	<td>Gender</td>
	&nbsp;&nbsp;
	<td>Female</td>
	</tr>
	
	<tr>
	<td>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>25-June-1995</td>
	</tr>  </font-color>
	</table>
				      </div>
	    		 </div>
	    		 &nbsp;&nbsp;&nbsp;&nbsp;
	    		 <div class="menu_box">
	    		 	 <h3>Contact Information</h3>
	    		 	   <div class="menu_box_list">
				      	<table>
	<tr>
	<th>Phone</th></br>
	<td>983031202</td>
	</tr>
 	<tr>
	<td>Address</td>
	<td>#911/A Army area, Patiala</td>
	</tr>
	<tr>
	<td>Email&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>shwetaseema72@gmail.com</td>
	</tr>
	</table>
				      </div>
	    		 </div>
	    		 
	    		 
	    		 
		             
	    		 
	    		 
	    		 <div class="chart">
		               <h3>Profile completed Stats</h3>
		                <div class="diagram">
		                  <canvas id="canvas" height="220" width="220"> </canvas>
		                  <h4><span>June</span><br />2013</h4>   
		                 </div>
		                     
		               <!----		              
						<span><img src="images/chart.png" alt="" /></span>
						----->					
						<div class="chart_list">
			           	  <ul>
			           	  	<li><a href="#" class="red">Personal information<p class="percentage">21<em>%</em></p></a></li>
			           	  	<li><a href="#" class="purple">Contact information<p class="percentage">48<em>%</em></p></a></li>
			           	  	<li><a href="#" class="yellow">Educational information<p class="percentage">9<em>%</em></p></a></li>
			           	  	<li><a href="#" class="blue">skills<p class="percentage">32<em>%</em></p></a></li>
			           	  	<div class="clear"></div>	
			           	  </ul>
			           </div>
			           <script>
						var doughnutData = [
								{
									value: 21,
									color:"#E64C65"
								},
								{
									value : 48,
									color : "#11A8AB"
								},							
								{
									value : 32,
									color : "#4FC4F6"
								},	
								{
									value : 9,
									color : "#FCB150"
								},							
							
							];				
							var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);					
					</script>
		          </div>
		                
		            
		          

	  		</div> 
	  		
            <div class="column_middle">
              <div class="column_middle_grid1">
		         <div class="profile_picture">
		        	<a href=""><img src="images/shweta.jpg" alt="" />	</a>		         
		            <div class="profile_picture_name">
		            	<h2>shweta</h2>
		            	<p> </p>
		            </div>
		             <span><a href="#"> <img src="images/follow_user.png" alt="" /> </a></span>
		          </div>
		           
		       </div>
		         <div class="video_palyer">
								<iframe src="//player.vimeo.com/video/24363983" width="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe> 
		                </div>  	           
		         
		          <div class="social_networks">
				      		<ul>
				      			<li><a href="https://www.facebook.com/" class="facebook"><i><img src="images/facebook_icon.png" alt="" /></i> <span>Share to Facebook</span><div class="clear"></div></a></li>
				      			<li><a href="https://www.twitter.com/" class="twitter"><i><img src="images/tweets.png" alt="" /></i> <span>Share to Twitter</span><div class="clear"></div></a></li>
				      			<li><a href="https://www.facebook.com/" class="googleplus"><i><img src="images/google+.png" alt="" /></i> <span>Share to Google+</span><div class="clear"></div></a></li>
				    		</ul>
		          </div>	           
		       
    	    </div>
    	    
            <div class="column_right">
        		<div class="menu_box">
	    		 	 <h3>Education Information</h3>
	    		 	   <div class="menu_box_list">
				      	<table>
	<tr>
	<th>College</th>
	<td>Guru Nanak Dev Engineering College</td>
	</tr>
 	<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;Course</td>
	<td>B.tech</td>
	</tr>
	<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;Duration&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>4 Years</td>
	</tr>
	</table>
				      </div>
	    		 </div>
	    		 &nbsp;&nbsp;&nbsp;&nbsp;
				   <div class="menu_box">
	    		 	 <h3>Interest</h3>
	    		 	   <div class="menu_box_list">
				      	<table>
	<tr><ul>
	<th><b>Music</b></th>
	<td><li>
		One Direction
	</li>
	<li>
		Taylor Swift
	</li>
	<li>
		Arijit Singh
	</li></td> </ul>
	</tr>
 	<tr>
	<td>Freetime :</td></br>
	<td> Sleeping</td>
	</tr>
	
	</table>
				      </div>
	    		 </div>
        		
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	<div class="column_right_grid">
                 <div class="newsletter">
				   <h3>Search your friends</h3>

					     <form  method="post"  id="searchform"> 

					    	<span>

					 	     <i><img src="images/mail.png" alt="" /></i>

					 	     <input type="text" value="Enter Name" name="search_query" id="search_query" size="50"/>

					 	    </span>			 	    

					 		

                                   <input  type="submit" name="submit" id="button_find" value="Search"/> 

					 	</form>

				<div id="display_results"></div>

				   </div>
					
			   </div>
			   &nbsp;&nbsp;&nbsp;&nbsp;
		  		 				  <div class="column_right_grid calender">
                      <div class="cal1"> </div>
				   </div>
             </div>
    	<div class="clear"></div>
 	 </div>
   </div>
  		   
</body>
</html>

