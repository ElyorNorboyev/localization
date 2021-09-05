<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>Registration</title>
</head>
<body>
<div class = "container mt-5">
<nav class = "nav">
    <a class="nav-link active" href="index.php">Home</a>
    <a class = "nav-link" href="login.php">Login</a>
    <a class = "nav-link" href="registration.php">Registration</a>
</nav>
<h1>Registration</h1>

<form action="store.php" method = "post">
<div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" name = "name" class="form-control" id="name" placeholder="John">
</div>

<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name = "email" class="form-control" id="email" placeholder="">
</div>

<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type = "password" name = "password" class="form-control" id="password">
</div>

<button type = "submit" class = "btn btn-primary">Registration</button>
</form>
</div>

</body>
</html>