<?php

	$conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));

	 
        $id=$id= $_GET['dataID'];
        
		
		$status="staff";
		$ins_query="UPDATE `staff_tbl` SET `status`='$status' WHERE sno=$id";
		$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn));

		header("location:adminlist.php?status=success");

	
	
?>