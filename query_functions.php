<?php include("includes/db_connect.php"); ?>


<?php

function insert_candidate_data(){
        global $conn;
		$sql = "SELECT * FROM candidates";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		echo $count;

		$errors = array();
		$resume = $_FILES['resume'];
		$resume_name = $resume['name'];
		$resume_type = $resume ['type'];
		$resume_size = $resume ['size'];
		$resume_tmp = $resume ['tmp_name'];
		$resume_ext = strtolower(pathinfo($resume_name,PATHINFO_EXTENSION));


		$image = $_FILES['image'];
		$image_name = $image ['name'];
		$image_type = $image ['type'];
		$image_size = $image ['size'];
		$image_tmp = $image ['tmp_name'];
		$image_ext = strtolower(pathinfo($image_name,PATHINFO_EXTENSION));


		$ext_resume = array("pdf");
		$ext_image = array("jpg","jpeg","png");

		      
		      if(in_array($resume_ext,$ext_resume)=== false){
		         $errors[]="extension not allowed, please choose a PDF file.";
		         die('err2_extension'); 
		      }

		       if(in_array($image_ext,$ext_image)=== false){
		         $errors[]="extension not allowed, please choose a JPG, JPEG or PNG file. ";
		         die('err3_extension');
		      }
		      
		      if(($resume_size || $image_size) > 2097152) {
		         $errors[]='File size must be excately 2 MB';
		         die('err4_size');
		      }

		      $count++;
		      $image_name_db = 'User_'. $count.'_Image';
		      $resume_name_db = 'User_'. $count.'_Resume';
		      

		      if(empty($errors)==true) {
		         move_uploaded_file($resume_tmp,"uploads/".$resume_name_db);
		         move_uploaded_file($image_tmp,"uploads/".$image_name_db);
		      }
		      else{
		      	die("err5_file_upload_fail");
		      }


  
		  $Name = $_POST['name'];
		  $Email = $_POST['email'];
		  $Mobile_Num = $_POST['mobile_num'];
		  $linkedin = $_POST['linkedin'];
		  $github = $_POST['github'];
		  $facebook = $_POST['facebook'];
		  $twitter = $_POST['twitter'];
		  $Degree = $_POST['degree'];
		  $Experience = $_POST['experience'];
		  $Specialization = $_POST['specialization'];
		  $Resume = $resume_name_db;
		  $Image = $image_name_db;


		  $Name = $conn->real_escape_string($Name);
		 


		  date_default_timezone_set('Asia/Kolkata');
		  $date = date("Y-m-d H:m:s");

		  
		  $var =1;

		$sql = "INSERT INTO candidates(Name, Email, Mobile_num, LinkedIn, Github, Facebook, Twitter, Degree, Specialization, Experience, Resume, Image, Post_date)
		VALUES ('$Name','$Email','$Mobile_Num','$linkedin','$github','$facebook','$twitter','$Degree','$Specialization','$Experience', '$Resume','$Image','$date')";

		if ($conn->query($sql) === TRUE) {
		    die("success_entry");
		}

		 else {
		 	echo 'error'.$conn->error; 
		    $fetch = "SELECT Email FROM candidates";
		    $result = $conn->query($fetch);

		    if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		    	if ($Email == $row["Email"]) {
		    		die("email_already_exist");
		    	}
		    }
		  }
		}

  
}




function insert_company_data(){
      
        global $conn;
		$sql = "SELECT * FROM jobs";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		echo $count;

		$errors = array();



		$image = $_FILES['image_logo'];
		$image_name = $image ['name'];
		$image_type = $image ['type'];
		$image_size = $image ['size'];
		$image_tmp = $image ['tmp_name'];
		$image_ext = strtolower(pathinfo($image_name,PATHINFO_EXTENSION));



		$ext_image = array("jpg","jpeg","png");

		      
		     

		       if(in_array($image_ext,$ext_image)=== false){
		         $errors[]="extension not allowed, please choose a JPG, JPEG or PNG file. ";
		         die('err3_extension');
		      }
		      
		      if(($image_size) > 2097152) {
		         $errors[]='File size must be excately 2 MB';
		         die('err4_size');
		      }

		      $count++;
		      $image_logo_db = 'Company_'. $count.'_Image';
		    
		      

		      if(empty($errors)==true) {
		         move_uploaded_file($image_tmp,"uploads/".$image_logo_db);
		      }
		      else{
		      	die("err5_file_upload_fail");
		      }
		   



		 $comp_name = $_POST['comp_name'];
		  $comp_email = $_POST['comp_email'];
		  $comp_qualification = $_POST['comp_qualification'];
		  $comp_experience = $_POST['comp_experience'];
		  $comp_specialization = $_POST['comp_specialization'];
		  $comp_sal = $_POST['comp_sal'];
		  $comp_skill1 = $_POST['skill1'];
		  $comp_skill2 = $_POST['skill2'];
		  $comp_skill3 = $_POST['skill3'];
		  $comp_skill4 = $_POST['skill4'];
		  $comp_desc = $_POST['comp_desc'];
		  $comp_logo = $image_logo_db;



		  date_default_timezone_set('Asia/Kolkata');
		  $date = date("Y-m-d H:m:s");

		  
		  $var =1;

		$sql = "INSERT INTO jobs(comp_name, comp_email, comp_qualification, comp_specialization, comp_experience, comp_salary, comp_skill1, comp_skill2, comp_skill3, comp_skill4, comp_desc, comp_logo, Post_date)
		VALUES ('$comp_name','$comp_email','$comp_qualification','$comp_specialization','$comp_experience','$comp_sal','$comp_skill1','$comp_skill2','$comp_skill3','$comp_skill4', '$comp_desc','$comp_logo','$date')";
		

		if ($conn->query($sql) === TRUE) {
		    die("success_entry");

		}
		 else {
		 	echo "Error: " . $sql . "<br>" . $conn->error;
		    $fetch = "SELECT comp_email FROM jobs";
		    $result = $conn->query($fetch);

		    if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		    	if ($comp_email == $row["comp_email"]) {
		    		die("email_already_exist");
		    	}
		    }
		}

		}

}


      ?>