<?php

session_start();
$dest=$_SESSION["email_id"];

    $pos=$_FILES['myFile3']['name'];
    $data=$_FILES['myFile3']['tmp_name'];
    
    move_uploaded_file($data,"Projects/".$dest."/".$_SESSION['project_name']."/contents/".$pos);
	echo '0';

?>