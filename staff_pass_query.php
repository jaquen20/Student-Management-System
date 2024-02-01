<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  
  
$userprofile=$_SESSION['user_id'];



  if(isset($_REQUEST['sub-btn']))
  {			 
  			
  			$question=$_POST['security'];
  			$answer=$_POST['answer'];
  			$oldpass=$_POST['txtold'];
  			$newpass=$_POST['txtnew'];
  			$confpass=$_POST['txtconf'];

		  $sel_query="SELECT * FROM `staff_tbl` WHERE `user_id`='$userprofile'&& password = '$oldpass'";
		  $sel_query_res= mysqli_query($conn,$sel_query);
		  $total=mysqli_num_rows($sel_query_res);
		  echo $total;
		  if($total==1)
		   {
		   		
		   			if ($confpass==$newpass) 
		   			{
		   				$Update_query="UPDATE `staff_tbl` SET `password`='$confpass',`question`='$question',`answer`='$answer' WHERE `user_id`='$userprofile' ";

       					 $Upd_query_res= mysqli_query($conn,$Update_query);
       					 header("location:change_staff_pass.php?status1= Successfull");

		   			}
		   			else
		   			{
		   				header("location:change_staff_pass.php?status= Confirm password Not Match");
		   			}
		   		
		   	

		   }
		   else
		   {
		   		header("location:change_staff_pass.php?status2= old password Not Match");
		   }
		  
  }
?>
