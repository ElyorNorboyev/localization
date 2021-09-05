<?php
$browser = "localhost";
$username = "root";
$password = "";
$databases = "olma";

$conf = mysqli_connect($browser, $username, $password, $databases);
if(!$conf){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "Update users set name = 'Oscar Barber' where id = 3";
if(mysqli_query($conf, $sql)){
    echo "Record updated successfuly";
}else{
    echo "Error updating record: " . mysqli_error($conf);
}
mysqli_close($conf);

?>