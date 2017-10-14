<?php

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
    /*echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";*/
    echo $json = array('success'=>'true');
} else {
    echo $json = array('error'=>'Sorry, there was an error uploading your file.');

}
echo json_encode($json);