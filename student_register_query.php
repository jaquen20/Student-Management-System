<?php

	$conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));


	if(isset($_POST['sub-btn']))
	{
		$UserID=$_POST['userID'];
		$Password=$_POST['txtpass'];
		$Name=$_POST['txtname'];
		$Fname=$_POST['txtfname'];
		$Gender=$_POST['gender'];
		$DOB=$_POST['DOB'];
		$branch=$_POST['branch'];
		$sem=$_POST['sem'];
		$Contact=$_POST['conno'];
		$P_Contact=$_POST['pconno'];
		$Email=$_POST['txtemail'];
		$Address=$_POST['address'];
		$file_ext = pathinfo($_FILES["textImg"]["name"],PATHINFO_EXTENSION);  //FOR IMG
	print_r($_POST);
		$sel_query ="SELECT * FROM `student` WHERE user_id='$UserID'";
		$sel_query_res= mysqli_query($conn,$sel_query) or die(mysqli_error($conn));

		($row_data= mysqli_fetch_array($sel_query_res));
        
                      $uid= $row_data['user_id'];
                      echo $uid;
                      


        $sel_query1 ="SELECT * FROM `registration` WHERE user_id='$UserID' && password='$Password'";
		$sel_query_res1= mysqli_query($conn,$sel_query1) or die(mysqli_error($conn));

		($row_data1= mysqli_fetch_array($sel_query_res1));
					$uid1= $row_data1['user_id'];
					$pass=$row_data1['password'];
		$row=mysqli_num_rows($sel_query_res1);
		echo $row;
		
	
        if(mysqli_num_rows($sel_query_res1)==0) 
		{
			header("location:student_register.php?status2=wrong email");
		}
         else
         {        
		        if ($uid==$UserID) 
		        {	
		        	 	
		        	header("location:student_register.php?status1=Already_Registerd");
		        }
		        else
		        {	
		        	
		        
						$ins_query= "INSERT INTO `student` SET `name`='$Name',`f_name`='$Fname',`gender`='$Gender',`dob`='$DOB',`branch`='$branch',`sem`='$sem',`contact`='$Contact',`p_contact`='$P_Contact',`email`='$Email',`address`='$Address',`user_id`='$UserID',`password`='$Password',`date`='".date('Y-m-d')."',`image` ='".$file_ext."'";

						$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn));


						//query for image upload

							$lastid = mysqli_insert_id($conn);
							$imgname = $lastid.".".$file_ext;


				 		//function for file upload

							if(move_uploaded_file($_FILES['textImg']['tmp_name'], "image/".$imgname))
							{
								$fileVal = 1;
							}
							else
							{
								$fileVal = 0;	
							}
						
						header("location:student_register.php?status=success");
				}	
			}

	}

?>