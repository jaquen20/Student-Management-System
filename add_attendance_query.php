<?php

	$conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));


	if(isset($_POST['submit']))
	{	

		$subject=$_POST['subject'];
		$date=date("Y-m");
		$day=date("d");
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];

		$query="SELECT * FROM subject_tbl WHERE subject_name='$subject'";
      	$query_res= mysqli_query($conn,$query) OR die(mysqli_error($conn));
      	($row_data= mysqli_fetch_array($query_res));
		$scode= $row_data['subject_code'];
               
        $sel_query="SELECT * FROM attendance_tbl WHERE subject='$subject' && submission_date='$date' && day=$day";
         $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
         $row= mysqli_fetch_array($sel_query_res);
		
		if(mysqli_num_rows($sel_query_res)==0)
		{
			foreach ($_POST['attendance'] as $id => $attendance_status) 
			{
				$student_name=$_POST['student_name'][$id];
				$student_uid=$_POST['student_uid'][$id];
				$staff_name=$_POST['staff_name'][$id];
				$staff_uid=$_POST['staff_uid'][$id];
				$Parent_Co=$_POST['p_phone'][$id];
				

				

				$ins_query = "INSERT INTO `attendance_tbl` SET `student_name`='$student_name',`student_uid`='$student_uid',`branch`='$branch',`semester`='$semester',`staff_name`='$staff_name',`staff_uid`='$staff_uid',`subject`='$subject',`subject_code`='$scode',`attendance_status`='$attendance_status',day='$day',`submission_date`='".date('Y-m')."'";

				$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn)); 
				$msg= $student_name." is Absent today in this class..";
				
	   			if ($attendance_status=="A") 
	   			{
	   				

					$api_key = '35E79E750EB131';
					$contacts = $Parent_Co;
					$from = 'GPKGH';
					$sms_text = urlencode($msg);

					//Submit to server

					$ch = curl_init();
					curl_setopt($ch,CURLOPT_URL, "https://sms.hitechsms.com/app/smsapi/index.php");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&campaign=0&routeid=13&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text);
					$response = curl_exec($ch);
					curl_close($ch);
					echo $response;
				}
					

	   		}
				header('location:add_attendance.php?status=success');


			

		}
		else
		{
			header('location:add_attendance.php?status1=already');
	   
		}
		
		
	}

	
	
?>

