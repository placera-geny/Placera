<?php include("includes/db_connect.php"); ?>

<?php session_start(); ?>

<?php ob_start(); ?>

<?php

echo $_SESSION['user_type'];

if (!isset($_SESSION['user_type'])) {

    header("Location: index.php");
    
}

else if($_SESSION['user_type'] === 'admin'){
    header("Location: admin/index.php");
}




 else if ($_SESSION['user_type'] === 'Candidate') {
        
        header("Location: candidate_profile.php");

    }

    else if ($_SESSION['user_type'] === 'company') {
        
        header("Location: index.php");

    }

    else if ($_SESSION['user_type'] === 'employer') {
        
        header("Location: index.php");

   }


?>

