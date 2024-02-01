<?php
	session_start();
  	 $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  
  	$userprofile=$_SESSION['user_id'];

	$branch = $_POST['datapost'];
	
	$query_sem="SELECT DISTINCT semester FROM subject_tbl WHERE user_id='$userprofile' && branch='$branch' ORDER BY semester ASC";
      $query_sem= mysqli_query($conn,$query_sem) OR die(mysqli_error($conn));
   

	while ($rows = mysqli_fetch_array($query_sem)) 
	{ ?>
		<option><?= $rows['semester']; ?></option>
	<?php }

?> 