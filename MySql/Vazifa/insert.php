<?php
// Database configuration
$host  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shopping";
  
// Create database connection
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
   
// performs the insert query
mysqli_query($conn,"INSERT INTO products (id, name, model_no, brand, price) 
                    VALUES ('', 'Daewoo', 'TV-8233Lk', 'Samsung', 700)");
  
// echo "Inserted successfully";
mysqli_close($conn);
?>