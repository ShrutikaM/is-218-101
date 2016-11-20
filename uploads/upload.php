<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['.php']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES['fileToUpload']['.php']);
    if($check !== false) {
        echo "File is too large - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Your file is uploaded.";
        $uploadOk = 0;
    }
}
?>