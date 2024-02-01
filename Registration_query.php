<?php

	$conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));


	if(isset($_POST['sub-btn']))
	{

		$Name=$_POST['name'];
		$UserID=$_POST['uid'];
		$Branch=$_POST['branch'];
		$Password=$_POST['password'];
		$Session=$_POST['session'];
		$date=date('d-m-Y');
		
		
		$sel_query ="SELECT * FROM `registration` WHERE user_id='$UserID'";
		$sel_query_res= mysqli_query($conn,$sel_query) or die(mysqli_error($conn));

		($row_data= mysqli_fetch_array($sel_query_res));
        
                      $uid= $row_data['user_id'];
                      echo $uid;
                      echo $UserID;
                      
        if ($uid==$UserID) 
        {
        	header("location:student_registration.php?status1=Already_Registerd");
        }
        else
        {

			$ins_query = "INSERT INTO `registration`SET `name`='$Name',`user_id`='$UserID',`branch`='$Branch',`password`='$Password',`Session`='$Session',`date`='$date'";

			$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn));
		
			header("location:student_registration.php?status=success");
		}
	}

	
	
?>

