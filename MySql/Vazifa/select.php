<?php
// Database configuration
$host  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shopping";  
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
$itemname = "matress's";
$description = "Belongs to Mumbai's mall";
 // escape variables 
$itemname = mysqli_real_escape_string($conn,$itemname);
$description = mysqli_real_escape_string($conn, $description);
  
// performs the insert query
$query = "INSERT INTO products (name, model_no) 
          VALUES ('$itemname','$description')";
  
if (!mysqli_query($conn,$query)) {
  die('Error: ' . mysqli_error($conn));
}
echo "One record added successfully";
  
mysqli_close($conn);
?>