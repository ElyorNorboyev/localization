<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<form action="check.php" method = "post">
<div class = "container mt-5">
<nav class = "nav">
    <a class="nav-link active" href="registration.php">Home</a>
    <a class = "nav-link" href="login.php">Login</a>
    <a class = "nav-link" href="registration.php">Registration</a>
</nav>
<h1>Login</h1>

<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name = "email" class="form-control" id="email">
</div>

<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type = "password" name = "password" class="form-control" id="password">
</div>

<button type = "submit" class = "btn btn-primary">Login</button>

</form>
</div> 
</body>
</html>