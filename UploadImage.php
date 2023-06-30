<?php
$targetdir = "uploads/";
$targetFile = $targetdir . basename($_FILES['fileToUpload']['name']);
$uploadOk = true;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
// check upload image success or failed
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check !== false) {
        echo "File is an image - " . $check['mime'] . ".";
        $uploadOk = true;
    } else {
        echo "File is not iamge";
        $uploadOk = false;
    }
}
