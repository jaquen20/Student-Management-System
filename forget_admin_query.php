<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  




  if(isset($_REQUEST['sub-btn']))
  {			 
  	
  			$uname=$_POST['uname'];
  			$question=$_POST['security'];
  			$answer=$_POST['answer'];
  			
  			$newpass=$_POST['txtnew'];
  			$confpass=$_POST['txtconf'];


		  $sel_query="SELECT * FROM `admin` WHERE `user_id`='$uname' && question = '$question' && answer='$answer'";
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
			   				$Update_query="UPDATE `admin` SET `password`='$confpass' WHERE `user_id`='$uname' ";

	       					 $Upd_query_res= mysqli_query($conn,$Update_query);

	       					 header("location:adminlogin.php?status4= Successfull");

			   			}
			   			else
			   			{
			   				header("location:forget_admin.php?status= Confirm password Not Match");
			   			}
			   		
			   	

			   }
			   else
			   {
			   		header("location:forget_admin.php?status2= wrong_uname");
			   	
			   }
		  
		  }
		  else
		  {
		  	$sel_query="SELECT * FROM `staff_tbl` WHERE `user_id`='$uname' && question = '$question' && answer='$answer'";
			  $sel_query_res= mysqli_query($conn,$sel_query);
			  $total=mysqli_num_rows($sel_query_res);


			  if($total==1)
			   {
			   		
			   			if ($confpass==$newpass) 
			   			{
			   				$Update_query="UPDATE `staff_tbl` SET `password`='$confpass' WHERE `user_id`='$uname' ";

	       					 $Upd_query_res= mysqli_query($conn,$Update_query);

	       					 header("location:adminlogin.php?status4= Successfull");

			   			}
			   			else
			   			{
			   				header("location:forget_admin.php?status= Confirm password Not Match");
			   			}
			   		
			   	

			   }
			   else
			   {
			   		header("location:forget_admin.php?status2= wrong_uname");
			   }
		  
		  }
  }
?>
