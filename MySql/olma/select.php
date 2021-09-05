<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Employee List</title>
</head>
<body>
	<div class="container mt-5">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Date</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$host  = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$dbname = "olma";

				$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

				$query = "SELECT * FROM users";
				  
				if ( $result = mysqli_query($conn, $query) )
				{  
					$i = 1;
					while ( $row = mysqli_fetch_row($result) )
					{
						echo "<tr>";
							echo "<td>$i</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
							echo "<td><a href='delete.php?id=$row[0]'>Delete</a></td>";
						echo "</tr>";
						$i++;
					}				  
					mysqli_free_result($result);
				}
				mysqli_close($conn);
				?>
							
			</tbody>
			</table>
	</div>	
</body>
</html>