<?php

	$conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));
	

  

	if(isset($_POST['sub-btn']))
	{
		
		

		$Fname=$_POST['filename'];
		$Description=$_POST['description'];
		$Name=$_POST['name'];
		$Uid=$_POST['user_id'];
		$file_ext = pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);  //FOR IMG
	

		$ins_query= "INSERT INTO `notification` SET `name`='$Name',`filename`='$Fname',`description`='$Description',`user_id`='$Uid',`date`='".date('Y-m-d')."',`notification` ='".$file_ext."'";

		$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn));


		//query for image upload

			$lastid = mysqli_insert_id($conn);
			$filename = $Fname.$lastid.".".$file_ext;


 		//function for file upload in folder

			if(move_uploaded_file($_FILES['file']['tmp_name'], "notifications/".$filename))
			{
				$fileVal = 1;
			}
			else
			{
				$fileVal = 0;	
			}
		
		header("location:add_notification.php?status=success");

	}

		
	if(isset($_POST['submit']))
	{
		
		


		$Description=$_POST['description'];
		$Name="Administrator";
		$Uid="Administrator";
		$file_ext = pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);  //FOR IMG


		$ins_query= "INSERT INTO `notification` SET `name`='$Name',`description`='$Description',`user_id`='$Uid',`date`='".date('Y-m-d')."',`notification` ='".$file_ext."'";

		$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn));


		//query for image upload

			$lastid = mysqli_insert_id($conn);
			$filename = $lastid.".".$file_ext;


 		//function for file upload in folder

			if(move_uploaded_file($_FILES['file']['tmp_name'], "notifications/".$filename))
			{
				$fileVal = 1;
			}
			else
			{
				$fileVal = 0;	
			}
		
		header("location:add_notification.php?status=success");

	}



	

?>






