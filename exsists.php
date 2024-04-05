<?php
$fileName = $_POST["fileName"];

if (empty($fileName)) {
    echo "Please provide a file name.";
} else {
    $filePath = $fileName;
    if (file_exists($filePath)) {
        echo "The file '$fileName' exists.";
    } else {
        echo "The file '$fileName' does not exist.";
    }
}
?>
