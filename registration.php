<?php

    require('connection.php');

    // If the values are posted, insert them into the database.

    if (isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];

        $email = $_POST['email'];

        $password = $_POST['password'];

         

        $query = "INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')";

        $result = mysql_query($query);

        if($result){

            include('login1.php');

        }

    }

    ?>
