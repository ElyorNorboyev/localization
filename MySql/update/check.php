<?php
$link = mysqli_connect("localhost", "root", "", "blog");

$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);

$sql = "select * from users where email = '$email' and password = '$password';";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_row($result);
if(mysqli_num_rows($result) == 1){
    mysqli_close($link);
    session_start();
    $_SESSION['name'] = $row['1'];
    header("Location: index.php");
    exit();
}else{
    mysqli_close($link);
    header("Location: login.php");
     exit();
}

?>