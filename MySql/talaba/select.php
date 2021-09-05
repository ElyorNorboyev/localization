<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>talaba</title>
    <style> 
    .container{
       width: 1000px;
       background-color: gold; 
    }
    table, th{
        color: black;
        font-size: 25px;
        background-color: green;
    } 
    </style>
</head>
<body>
<?php
$browser = "localhost";
$username = "root";
$password = "";
$databases = "university";
$conf = mysqli_connect($browser, $username, $password, $databases);
$efect = "select id, name, last_name, age, years, email from talaba";
?>
<div class = "container">
<table class = "table table-succcess  table-lg table-bordered table-striped">
<thead>
<?php
echo "
<tr>
 <th>Id</th>
 <th>Ismi</th>
 <th>Familiyasi</th>
 <th>Yoshi</th>
 <th>Tug'ilgan yili</th>
 <th>Email</th>
 <th>Delete</th>
</tr>"
?>
</thead>
<tbody>
<?php
if($result = mysqli_query($conf,$efect)){
    $i = 1;
					while ( $row = mysqli_fetch_row($result) )
					{
						echo "<tr>";
							echo "<td>$i</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
							echo "<td><a href='delete.php?id=$row[0]'>Delete</a></td>";
						echo "</tr>";
						$i++;
					}
}
     
?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>