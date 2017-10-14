<?php
$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$pic='http://hirad-co.com/wp-content/plugins/hirad_shoping/img/'.basename($_FILES["pic"]["name"]);
if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";

} else {
    echo 'Sorry, there was an error uploading your file.';

}
