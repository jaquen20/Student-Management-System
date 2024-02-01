<?php

	$conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));


	if(isset($_POST['submit']))
	{	
		
		$subject=$_POST['subject'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
		$ct_no = $_POST['ct_no'];
		$max_marks=$_POST['max_marks'];
		$date= date("d-m-Y");
			
			foreach($_POST['marks'] as $id => $marks) 
			{
				$student_name=$_POST['student_name'][$id];
				$student_uid=$_POST['student_uid'][$id];
				$staff_name=$_POST['staff_name'][$id];
				$staff_uid=$_POST['staff_uid'][$id];
	
				$ins_query = "INSERT INTO `ct_tbl` SET `student_name`='$student_name',`student_uid`='$student_uid',`staff_name`='$staff_name',`staff_uid`='$staff_uid',`branch`='$branch',`semester`='$semester',`subject_name`= '$subject',`ct_no`='$ct_no',`max_marks`='$max_marks',`marks`='$marks',`date`='$date'";

				$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn)); 
				
	   		
					

	   		}
				header('location:add_ct_marks.php?status=success');


			

		
		
		
		
	}

	
	
?>

