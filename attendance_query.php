<?php

	$conn=mysqli_connect('localhost','root','','hrm_db') or die(mysqli_error($conn));


	if(isset($_POST['sub-btn']))
	{

		$Name=$_POST['name'];
		$UserID=$_POST['UserID'];
		$Sel_attend=$_POST['attendance'];
		

		$ins_query = "INSERT INTO `attendance_tbl`SET `name`='$Name',`user_id`='$UserID',`attendance`='$Sel_attend'";

		$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn));
	
		header("location:add_attendance.php?status=success");
	}

	
	
?>

