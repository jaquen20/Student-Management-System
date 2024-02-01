<?php

	$conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));


	if(isset($_POST['sub-btn']))
	{
		$status=$_POST['status'];
		$Name=$_POST['txtname'];
		$Fname=$_POST['txtfname'];
		$Gender=$_POST['gender'];
		$DOB=$_POST['DOB'];
		$DOJ=$_POST['DOJ'];
		$Designation=$_POST['txtdesign'];
		$Branch=$_POST['branch'];
		$Contact=$_POST['conno'];
		$Email=$_POST['txtemail'];
		$Aadhar=$_POST['aadharno'];
		$Address=$_POST['address'];
		$UserID=$_POST['userID'];
		$Password=$_POST['txtpass'];
		$file_ext = pathinfo($_FILES["textImg"]["name"],PATHINFO_EXTENSION);  //FOR IMG



	$sel_query ="SELECT * FROM `staff_tbl` WHERE user_id='$UserID'";
		$sel_query_res= mysqli_query($conn,$sel_query) or die(mysqli_error($conn));

		($row_data= mysqli_fetch_array($sel_query_res));
        
                      $uid= $row_data['user_id'];
                      echo $uid;
                      echo $UserID;
                      
        if ($uid==$UserID) 
        {
        	header("location:addstaff.php?status1=Already_Registerd");
        }
        else
        {
			$ins_query= "INSERT INTO `staff_tbl` SET `name`='$Name',`f_name`='$Fname',`gender`='$Gender',`dob`='$DOB',`doj`='$DOJ',`designation`='$Designation',`branch`='$Branch',`contact`='$Contact',`email`='$Email',`aadhar_no`='$Aadhar',`address`='$Address',`user_id`='$UserID',`password`='$Password',`status`='$status',`date`='".date('Y-m-d')."',`image` ='".$file_ext."'";

			$ins_query_result= mysqli_query($conn,$ins_query)  or die(mysqli_error($conn));


			//query for image upload

				$lastid = mysqli_insert_id($conn);
				$imgname = $lastid.".".$file_ext;


	 		//function for file upload

				if(move_uploaded_file($_FILES['textImg']['tmp_name'], "images/".$imgname))
				{
					$fileVal = 1;
				}
				else
				{
					$fileVal = 0;	
				}
			
			header("location:addstaff.php?status=success");
		}
	}

		



if(isset($_POST['upd-btn']))
	{

		$Name=$_POST['txtname'];
		$Fname=$_POST['txtfname'];
		$Gender=$_POST['gender'];
		$DOB=$_POST['DOB'];
		$DOJ=$_POST['DOJ'];
		$Designation=$_POST['txtdesign'];
		$Contact=$_POST['conno'];
		$Email=$_POST['txtemail'];
		$Aadhar=$_POST['aadharno'];
		$Address=$_POST['address'];
		$UserID=$_POST['userID'];
		$Password=$_POST['txtpass'];
		$file_ext = pathinfo($_FILES["textImg"]["name"],PATHINFO_EXTENSION);  //FOR IMG


		$upd_query= "UPDATE `staff_tbl` SET `name`='$Name',`f_name`='$Fname',`gender`='$Gender',`dob`='$DOB',`doj`='$DOJ',`designation`='$Designation',`contact`='$Contact',`email`='$Email',`aadhar_no`='$Aadhar',`address`='$Address',`user_id`='$UserID',`password`='$Password',`date`='".date('Y-m-d')."',`image` ='".$file_ext."' WHERE sno = '$dataID'";

		$upd_query_result= mysqli_query($conn,$upd_query)  or die(mysqli_error($conn));


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
		
		header("location:addstaff.php?status=success");

	}

		

?>






