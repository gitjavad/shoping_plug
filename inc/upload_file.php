<?php
$company=$_POST['copmany'];
$cat=$_POST['categoury'];
$sn=$_POST['sn'];
;
$url="http://hirad-co.com/wp-content/plugins/hirad_shoping/upload/";
if ($_FILES["pic"]["error"] > 0)
	echo $_FILES["pic"]["error"];
    
  else               
  {                
    if (file_exists($url. $_FILES["pic"]["name"]))  
		echo $_FILES["pic"]["name"]. "already exists";
    
                   
    else               
    {   
    
      move_uploaded_file($_FILES["pic"]["tmp_name"], $url . $_FILES["pic"]["name"]);
      echo $_FILES["pic"]["name"]. "has been stor.";
    }                
  }
    

