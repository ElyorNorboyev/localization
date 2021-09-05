<?php
$browser = "localhost";
$username = "root";
$password = "";
$databases = "university";
$conf = mysqli_connect($browser, $username, $password, $databases);
$id=$_GET['id'];
if (!$conf) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM talaba WHERE id=$id";

if (mysqli_query($conf, $sql)) {
  echo "Bazadan malumot o'chirildi";
} else {
  echo "O'chirishda xatolik berdi: " . mysqli_error($conn);
}

mysqli_close($conf);
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
  <a href="select.php">Jo'natish</a>
</body>
</html>