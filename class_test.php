<?php
	session_start();
  	 $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  
  	$userprofile=$_SESSION['user_id'];

  	//delete records
	if (isset($_POST['datapost'])) 
	{
		$branch = $_POST['datapost'];
		
		$query_sem="SELECT DISTINCT semester FROM subject_tbl WHERE user_id='$userprofile' && branch='$branch' ORDER BY semester ASC";
	      $query_sem= mysqli_query($conn,$query_sem) OR die(mysqli_error($conn));
	   
	      echo "<option>Select Semester</option>";
		while ($rows = mysqli_fetch_array($query_sem)) 
		{ ?>

			<option value="<?= $rows['semester']; ?>"><?= $rows['semester']; ?></option>
		<?php }
	}
	if (isset($_POST['datasubject'])) 
	{
		$sem = $_POST['datasubject'];
		$branch = $_POST['databranch'];
		
		$query_sem="SELECT DISTINCT subject_name FROM subject_tbl WHERE user_id='$userprofile' && branch='$branch' && semester='$sem' ORDER BY semester ASC";
	      $query_sem= mysqli_query($conn,$query_sem) OR die(mysqli_error($conn));
	   

		while ($rows = mysqli_fetch_array($query_sem)) 
		{ ?>
			<option value="<?= $rows['subject_name']; ?>"><?= $rows['subject_name']; ?></option>
		<?php }
	}
	

?> 