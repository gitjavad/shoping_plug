<?php
$cat = $_POST['categoury'];
$company=$_POST['company'];
$total = count($_FILES['pic']['name']);
$target_dir = "../img/";

// Loop through each file
for($i=0; $i<$total; $i++) {
    //Get the temp file path
    $tmpFilePath = $_FILES['pic']['tmp_name'][$i];

    //Make sure we have a filepath
    if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath =$target_dir . $_FILES['pic']['name'][$i];

        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {

            $servername = "localhost";
            $username = "hirad_admin15023";
            $password = "9133647736!@#";
            $dbname = "hirad-co_com_site";
            $sn=basename($_FILES["pic"]["name"][$i]);
            $pic=$newFilePath;
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                echo '{ "message": "'.die($conn->connect_error).' "}';
            }

            $sql = "INSERT INTO wp_hirad_shoping (company, cat, sn, pic)
VALUES ($company, $cat, $sn, $pic)";

            if ($conn->query($sql) === TRUE) {
                echo '{ "message": "New record created successfully" }';
            } else {

                echo '{ "message": "' . $sql . '"<br>"' . $conn->error .'"}';
            }

            $conn->close();

        }else{
            echo '{ "message": "no file upload" }';
        }
    }
}


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