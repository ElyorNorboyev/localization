<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('Upload.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label for="myFile">Upload</label>
<input type="file" name="myfile" id="myFile">
<input type="submit" value="upload">
</form>
</body>
</html>