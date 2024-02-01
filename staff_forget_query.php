<?php

   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  
  


  if(isset($_REQUEST['sub-btn']))
  {			 
  			$uname=$_POST['uname'];
  			$question=$_POST['security'];
  			$answer=$_POST['answer'];
  			
  			$newpass=$_POST['txtnew'];
  			$confpass=$_POST['txtconf'];

		  $sel_query="SELECT * FROM `staff_tbl` WHERE `user_id`='$uname'&& `question` = '$question' && `answer`='$answer'";
		  $sel_query_res= mysqli_query($conn,$sel_query);
		  $total=mysqli_num_rows($sel_query_res);
		  echo $total;
		  if($total==1)
		   {
		   		
		   			if ($confpass==$newpass) 
		   			{
		   				$Update_query="UPDATE `staff_tbl` SET `password`='$confpass'";

       					 $Upd_query_res= mysqli_query($conn,$Update_query);
       					 header("location:stafflogin.php?status1= Successfull");

		   			}
		   			else
		   			{
		   				header("location:staff_forgot.php?status= Confirm password Not Match");
		   			}
		   		
		   	

		   }
		   else
		   {
		   		header("location:staff_forget.php?status2=uname&qustion");
		   }
		  
  }
?>
