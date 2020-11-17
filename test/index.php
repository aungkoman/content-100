<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

<form action="./upload/index.php" method="post" enctype="multipart/form-data">
    Name : <br>
  <input type="text" name="title" require placeholder="name"><br><br>
  
  Select image to upload:<br>
  <input type="file" name="fileToUpload" id="fileToUpload"> <br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>