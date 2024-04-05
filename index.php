<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your File</title>
</head>
<body>
    <h2>Upload Your File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <br></br>
        <form action="exists.php" method="post" enctype="multipart/form-data">
        Check out if your image have uploaded
        <input type="text" name="fileName" id="fileName">
        <input type="submit" value="Check if exists" name="submit">
    </form>
</body>
</html>
