<?php
$host  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "olma";

// Create database connection
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

// set parameters 
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
mysqli_query($conn, $sql);

echo mysqli_error($conn);

mysqli_close($conn);

header("Location: select.php");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="select.php">Yuborish</a>
</body>
</html>