<?php 

 $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

 if (!empty($_GET['dataID'])) 
 {	
 	
 	$filename = basename($_GET['dataID']);
 	$filepath = 'notifications/'.$filename;
 	if(!empty($filename) && file_exists($filepath))
 	{
 		header("Cache-Control: public");
 		header("Content-Description: File Transfer");
 		header("Content-Disposition: aattachment; filename=$filename");
 		header("Content-Type: application/zip");
 		header("Content-Transfer-Emcoding: binary");

 		readfile($filepath);
 		exit;

 	}
 	else
 	{
 		echo "This File Does Not exist";
 	}
 }

 ?>