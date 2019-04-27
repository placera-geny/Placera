<?php include("includes/db_connect.php"); ?>

<?php session_start(); ?>

<?php

        

	      $Email = $_POST['email'];
		  $Password = $_POST['pass'];


		  
		  $Password = $conn->real_escape_string($Password);

		  $hashFormat = "$2y$10$";
		  $salt = "Genyisatechnicalclub22";
		  $hashF_and_salt = $hashFormat . $salt;
		  $Password = crypt($Password, $hashF_and_salt);
		  

		  $sql = "SELECT * FROM users WHERE Email = '$Email'";
		  $fetch = $conn->query($sql);

		  if ($fetch->num_rows === 0) {
		  	die("email_not_found");
		  }

		  
		  	if ($fetch->num_rows > 0) {
		    while($row = $fetch->fetch_assoc()){

		    	  $db_username = $row["Name"];
		    	  $db_email = $row["Email"];
		    	  $db_mobile_num = $row["Mobile_num"];
		    	  $db_user_type = $row["user_type"];
                  $db_password = $row["Password"];

                  if ($Email === $db_email && $Password === $db_password) {

                  	$_SESSION['username'] = $db_username;
                  	$_SESSION['mobile_num'] = $db_mobile_num;
                  	$_SESSION['user_type'] = $db_user_type;
                  	$_SESSION['email'] = $db_email;
                  	


                  	die("success_entry");
                  }

                  else{
                  	die("wrong_password");
                  }
		    } 
		  


}


       
		  
		


?>