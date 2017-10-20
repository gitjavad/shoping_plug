<?php
$company = $_POST("company");
$cat = $_POST("categoury");
$sn = $_POST("sn");

echo 'hi';
/*$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$pic='http://hirad-co.com/wp-content/plugins/hirad_shoping/img/'.basename($_FILES["pic"]["name"]);
if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";

} else {
    echo 'Sorry, there was an error uploading your file.';

}
$servername = "localhost";
$username = "hirad_admin15023";
$password = "9133647736!@#";
$dbname = "hirad-co_com_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO wp_hirad_shoping (company, cat, sn, pic)
VALUES ($company, $cat, $sn, $pic)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/