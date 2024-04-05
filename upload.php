<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    else
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
          echo "The file " . $targetFile . " has been uploaded.";
        } 
        else {
          echo "Sorry, there was an error uploading your file.";
        }
    }
}
