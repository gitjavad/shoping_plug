<?php
$company=$_POST['copmany'];
$cat=$_POST['categoury'];
$sn=$_POST['sn'];
$pic=$_FILES['pic'];

print_r($pic);
if ($_FILES[$pic]["error"] > 0)
	echo "<script>console.log( 'Debug Objects: " .$_FILES[$pic]["error"]. "' );</script>";
    
  else               
  {                
    if (file_exists("/upload". $_FILES[$pic]["name"]))  
		echo "<script>console.log( 'Debug Objects: " .$_FILES[$pic]["name"]. "already exists );</script>";
    
                   
    else               
    {   
		echo "<script>console.log(" .$_FILES[$pic]["name"]. "has been uploaded.);</script>";
    
      move_uploaded_file($_FILES[$pic]["tmp_name"],
      "/upload" . $_FILES[$pic]["name"]);
      echo "<script>console.log(" .$_FILES[$pic]["name"]. "has been stor.);</script>";
    }                
  }
    

