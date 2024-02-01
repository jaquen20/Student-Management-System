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


		  $sel_query="SELECT * FROM `admin` WHERE `user_id`='$userprofile'&& password = '$oldpass'";
		  $sel_query_res= mysqli_query($conn,$sel_query);
		  $total=mysqli_num_rows($sel_query_res);

		   ($row_data= mysqli_fetch_array($sel_query_res));
                $status=$row_data['name'];
                echo $status;
              
		  
		  if ($status=="Administartor") 
		  {
		  	if($total==1)
			   {
			   		
			   			if ($confpass==$newpass) 
			   			{
			   				$Update_query="UPDATE `admin` SET `password`='$confpass',`question`='$question',`answer`='$answer' WHERE `user_id`='$userprofile' ";

	       					 $Upd_query_res= mysqli_query($conn,$Update_query);

	       					 header("location:change_admin_pass.php?status1= Successfull");

			   			}
			   			else
			   			{
			   				header("location:change_admin_pass.php?status= Confirm password Not Match");
			   			}
			   		
			   	

			   }
			   else
			   {
			   		header("location:change_admin_pass.php?status2= old password Not Match");
			   }
		  
		  }
		  else
		  {
		  	$sel_query="SELECT * FROM `staff_tbl` WHERE `user_id`='$userprofile'&& password = '$oldpass'";
			  $sel_query_res= mysqli_query($conn,$sel_query);
			  $total=mysqli_num_rows($sel_query_res);


			  if($total==1)
			   {
			   		
			   			if ($confpass==$newpass) 
			   			{
			   				$Update_query="UPDATE `staff_tbl` SET `password`='$confpass',`question`='$question',`answer`='$answer' WHERE `user_id`='$userprofile' ";

	       					 $Upd_query_res= mysqli_query($conn,$Update_query);

	       					 header("location:change_admin_pass.php?status1= Successfull");

			   			}
			   			else
			   			{
			   				header("location:change_admin_pass.php?status= Confirm password Not Match");
			   			}
			   		
			   	

			   }
			   else
			   {
			   		header("location:change_admin_pass.php?status2= old password Not Match");
			   }
		  
		  }
  }
?>
