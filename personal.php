<html>
    <body>
<h2>Contact Form</h2>
	
	<form class="form"action="index.php" method="POST">
		
		<p class="name">
			<input type="text" name="name" id="name" placeholder="John Doe" />
			<label for="name">Name</label>
		</p>
		
		<p class="gender">
			<input type="text" name="email" id="email" placeholder="mail@example.com" />
			<label for="gender">Gender</label>
		</p>
	
		
			
<p class="web">
			<input type="text" name="dob" id="web" placeholder="dd-mm-yyyy" />
			<label for="web">Date Of Birth</label>
		</p>	

		
		<p class="submit">
			<input type="submit" value="Send" name="submit" />
		</p>
	</form>

 <?php
         if(isset($_POST['submit'])) {
            $dbhost = 'localhost';
            $dbuser = 'antiqueme';
            $dbpass = '';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $id = $_POST['id'];
            $name = $_POST['name'];
            
            $sql = "UPDATE personal ". "SET name = $name ". 
               "WHERE id = $id" ;
            mysql_select_db('suggestme');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
         }
            ?>

</body>
</html>