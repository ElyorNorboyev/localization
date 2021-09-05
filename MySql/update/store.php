<?php
$link = mysqli_connect("localhost", "root", "", "blog");
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$sql = "insert into users(name, email, password) values('$name', '$email', '$password');";
mysqli_query($link, $sql);
// echo mysqli_error($link);
mysqli_close($link);
header("Location: index.php");
// exit();
?>