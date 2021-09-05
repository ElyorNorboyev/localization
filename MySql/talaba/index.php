<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Admin</title>
    <style>
    body{
     background-color:gold;
    }
    .container{
       width: 700px; 
       background-color: green;
    }
    label{
        color: white;
        font-size: 20px;
        padding:10px;
    }
    input{
        width: 470px;
        background-color: red;
        color: white;
        padding: 5px;
        margin-left: 20px;
    }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<div class = "container">
    <form action = "insert.php"  method="POST">
        <label for="ism" class="form-label">Ismi:<input type="text" class="form-control" id="ism" name = "ism" placeholder="Ism"></label>
        
        <label for="familiya" class="form-label">Familiyasi: <input type="text" class="form-control" name = "familiya" id="familiya" placeholder="Familiya"></label>
        
        <label for="yosh" class="form-label">Yoshi:<input type="number" class="form-control" name = "yosh" id="yosh" placeholder="Yosh"></label>
        
        <label for="yili" class="form-label">Tug'ilgan yili:<input type="number" class="form-control" name = "yil" id="yili" placeholder="Yili"></label>

        <label for="email" class="form-label">Email:<input type="email" class="form-control" name = "email" id="email" placeholder="Email"></label>

        <input type="submit" value="Jo'natish">    
    </form>
</div>
</body>
</html>
