<?php
$company=$_POST('copmany');
$cat=$_post('categoury');
$sn=$_POST('sn');

$servername = "localhost:3306";
$username = "hirad_admin15023";
$password = "2252734";
$dbname = "hirad-co_com_site";
$pic="a";
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

$conn->close();