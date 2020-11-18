<?php
	define ("DB_SERVER", "localhost");
	define ("DB_USER", "webphp_user");
	define ("DB_PASS", "tulgu2020");
	define ("DB_NAME", "webphp");
    
  // 1. Create a database connection
    
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  
  // Test if connection unsucceeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>