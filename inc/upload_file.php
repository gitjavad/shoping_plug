<?php
$company=$_POST['copmany'];
$cat=$_POST['categoury'];
$sn=$_POST['sn'];
$pic=$_POST['pic'];
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES[$pic]["name"]);
 echo "<script>console.log( 'Debug Objects: " . $target_file. "' );</script>";

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


    move_uploaded_file($_FILES[$pic]["tmp_name"], $target_file);
    

