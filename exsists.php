<?php
$fileName = $_POST["fileName"];
if (strlen($fileName)>=1000){
    echo "Badhacker!!!";
    die();
}
if (preg_match("/php:/i", $fileName) || preg_match("/file:/i", $fileName) || preg_match("/zip:/i", $fileName)) {
    echo "Badhacker!!!";
    die();
} 
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
