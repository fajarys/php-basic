<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
</head>

<body>
    <form action="./UploadImage.php" method="post" enctype="multipart/form-data">
        <label for="upload">Upload Image :</label>
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>