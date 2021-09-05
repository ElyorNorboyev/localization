<?php
$host  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "olma";

// Create database connection
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

// set parameters 
$id = $_GET['id'];

$sql = "DELETE FROM talaba WHERE id = $id;";
mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location: select.php");
exit();
?> 