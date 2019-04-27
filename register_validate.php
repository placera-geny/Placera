<?php include("includes/db_connect.php"); ?>

<?php

          $Name = $_POST['name'];
		  $Email = $_POST['email'];
		  $Mobile_Num = $_POST['mobile_num'];
		  $User_Type = $_POST['user_type'];
		  $Password = $_POST['new_pass'];


		  $Name = $conn->real_escape_string($Name);
		  $Password = $conn->real_escape_string($Password);

		  $hashFormat = "$2y$10$";
		  $salt = "Genyisatechnicalclub22";
		  $hashF_and_salt = $hashFormat . $salt;
		  $Password = crypt($Password, $hashF_and_salt);
		  
		  echo $User_Type;


		  date_default_timezone_set('Asia/Kolkata');
		  $date = date("Y-m-d H:m:s");

		  
		  $var =1;

		$sql = "INSERT INTO users(Name, Email, Mobile_num, user_type, Password, reg_date)
		VALUES ('$Name','$Email','$Mobile_Num','$User_Type','$Password','$date')";

		    $fetch = "SELECT Email FROM users";
		    $result = $conn->query($fetch);

		    if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		    	if ($Email == $row["Email"]) {
		    		die("email_already_exist");
		    	}

		    	else if ($conn->query($sql) === TRUE) {
		            die("success_entry");
		          }

		    	else{
		    		echo $conn->error;
		    	}

		
     	    }
		  }
		





?>