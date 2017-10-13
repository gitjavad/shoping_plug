<?php
$company=$_POST['copmany'];
$cat=$_POST['categoury'];
$sn=$_POST['sn'];
$pic=$_FILES['pic'];
if ($_FILES[$pic]["error"] > 0)
	echo $_FILES[$pic]["error"];
    
  else               
  {                
    if (file_exists("/upload". $_FILES[$pic]["name"]))  
		echo $_FILES[$pic]["name"]. "already exists";
    
                   
    else               
    {   
		echo $_FILES[$pic]["name"]."has been uploaded.";
    
      move_uploaded_file($_FILES[$pic]["tmp_name"],
      "/upload" . $_FILES[$pic]["name"]);
      echo $_FILES[$pic]["name"]. "has been stor.";
    }                
  }
    

