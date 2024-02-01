<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));

	if(isset($_REQUEST['submit']))
{	

	$User_Id =$_REQUEST['uname'];
	$Password =$_REQUEST['psw'];
	
	$sel_query ="SELECT * FROM `admin` WHERE user_id='$User_Id'";
	$sel_query_res= mysqli_query($conn,$sel_query) or die(mysqli_error($conn));

		($row_admin= mysqli_fetch_array($sel_query_res));
        
                       $admin=$row_admin['name'];
                       $pass=$row_admin['password'];

                       
          

	if($admin=="Administartor") 
	{

		 if(mysqli_num_rows($sel_query_res)==0)
		 {
		 	header("location:adminlogin.php?status=wrong email");
		 }
		 else
		 {
		 	
		 	
		 	if($pass==$Password)
		 	{	
		 		
		 		$_SESSION['user_id']=$User_Id;
		 		header("location:adminhome.php?status4=success");
		 	}
		 	else
		 	{
		 		header("location:adminlogin.php?status1=wrong password");
		 	}
		 }
	}
	else
	{
		$sel_query ="SELECT * FROM `staff_tbl` WHERE user_id='$User_Id'";
		$sel_query_res= mysqli_query($conn,$sel_query) or die(mysqli_error($conn));
		while($row_staff= mysqli_fetch_array($sel_query_res))
		{
			$status=$row_staff['status'];
			$pass1=$row_staff['password'];


		}
		if(mysqli_num_rows($sel_query_res)==0) 
		{
			header("location:adminlogin.php?status=wrong email");
		}
		else
		{
			if($status=="admin") 
			{
				 if(mysqli_num_rows($sel_query_res)==0)
				 {
				 	header("location:adminlogin.php?status=wrong email");
				 }
				 else
				 {
				 	
				 	
				 	if($pass1==$Password)
				 	{	
				 		
				 		$_SESSION['user_id']=$User_Id;
				 		header("location:adminhome.php?status4=success");
				 	}
				 	else
				 	{
				 		header("location:adminlogin.php?status1=wrong password");
				 	}
				 }
			}
			else
			{
				header("location:adminlogin.php?status1=wrong uesrname password");
			}
		}
        

	}
	

}


?>