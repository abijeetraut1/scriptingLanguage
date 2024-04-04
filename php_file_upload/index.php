<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="file" multiple accept="image/png, image/jpeg">
        <input type="submit" value="Upload Image" name="submit">
    </form>

</body>

</html>
