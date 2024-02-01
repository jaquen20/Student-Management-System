<?php 

		 $conn= mysqli_connect('localhost','root','','sms');


     if(isset($_POST['upd-btn']))
      { 
        $id=$id= $_GET['dataID'];
        

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
        // $UserID=$_POST['userID'];
        // $Password=$_POST['txtpass'];

        $file_ext = pathinfo($_FILES["textImg"]["name"],PATHINFO_EXTENSION);
        if($file_ext==null||$file_ext=="")
        {
          $file="";
        }
        else
        {
          $file=',`image`="'.$file_ext.'"';
        }

        $Update_query="UPDATE `staff_tbl` SET `name`='$Name',`f_name`='$Fname',`gender`='$Gender',`dob`='$DOB',`doj`='$DOJ',`designation`='$Designation',`branch`='$Branch',`contact`='$Contact',`email`='$Email',`aadhar_no`='$Aadhar',`address`='$Address' WHERE `sno`='$id' ";

        $Upd_query_res= mysqli_query($conn,$Update_query);

        // updation of image

        $imgname=$id.".".$file_ext;
        move_uploaded_file($_FILES['textImg']['tmp_name'], "image/".$imgname);

        mysqli_query($conn, $Update_query );
        

        header('location:viewstaff.php') ;
      }

		 
		 
		 	$id=$_REQUEST['dataID'];
		 	$sel_query="SELECT * FROM staff_tbl WHERE sno= '".$id."' ";
			$sel_query_res= mysqli_query($conn, $sel_query) or die(mysqli_error($conn));

			if($files_data = mysqli_fetch_assoc($sel_query_res))
      {

			 $gender=$files_data['gender'];
       $branch=$files_data['branch'];
			}
		
 ?>

 <?php include'header.php'; ?>
<style type="text/css">

.sel
{
  width: 100%;
}
  .rows{
    padding: 5px;
  }
 .box{
  width: 100%;
 }


 

</style>
<div class="nav-item">
            <div class="container-fluid">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="adminhome.php">Home</a></li>
                        <li><a href="#">Add Records</a>
                            <ul class="dropdown">
                                <li><a href="addstaff.php">Add staff</a></li>
                                <li><a href="add_notification.php">Add Notification</a></li>
                              
                            </ul>
                        </li>
                        <li  class="active"><a href="#">View Records</a>
                            <ul class="dropdown">
                                 <li><a href="viewstaff.php">View Staff</a></li>
                                 <li><a href="view_student_admin.php">View Student</a></li>
                                <li><a href="adminlist.php">View Admins</a></li>
                                <li><a href="notification_list.php">Notification List</a></li>
                                 <li><a href="Registration_list.php">Registerd Student List</a></li>
                                
                            </ul>
                        
                         <li ><a href="#">Subject Allotement</a>
                            <ul class="dropdown">
                                <li><a href="subject_allot.php">Allot Subject</a></li>
                                <li><a href="view_subject.php">View Subject</a></li>
                              
                            </ul>
                        </li>
                       
                        <li><a href="student_registration.php">Student Registration</a></li>
                       
                        
                        <li><a href="change_admin_pass.php">Change Password</a></li>
                        <a href="logout.php"><button>Logout</button></a>
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
<br>
<body>
<?php

    if(isset($_REQUEST['status'])==true)
    {
      echo'<div class="print">Successfull</div>';
    }
?>

<form method="post" enctype="multipart/form-data">

    <div class="container">
       <br>
        <div class="row">
        <div class="col-sm-2"></div>
        <h2>Update Staff</h2>
       
        </div>
        <br>
      <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="row rows">
        <div class="col-sm-3"><label>Name:</label></div>

        
        <div class="col-sm-5"><input type="text" placeholder="Enter First name" name="txtname" class="box" value="<?= $files_data['name'] ?>" required></div>
      </div>
      <div class="row rows">
        <div class="col-sm-3"><label>Fathers name:<label></div>
        <div class="col-sm-5"><input type="text" placeholder=" Enter Fathers name" name="txtfname" class="box" value="<?= $files_data['f_name'] ?>" required></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Gender:<label></div>
        <div class="col-sm-5"><input type="radio"  name="gender" value="1" <?php if($gender == 1){
        echo "checked";
      } ?> >Male
        <input type="radio"  name="gender" value="2" <?php if($gender == 2){
        echo "checked";
      } ?>>Female
      <input type="radio"  name="gender" value="3" <?php if($gender == 3){
        echo "checked";
      } ?> >Transgender</div>
       
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Date of Birth:</label></div>
        <div class="col-sm-5"><input type="date" name="DOB" class="box" value="<?= $files_data['dob'] ?>" required></div>
      </div> 
      <div class="row rows">
        <div class="col-sm-3"><label>Date of Joining:</label></div>
        <div class="col-sm-5"><input type="date" name="DOJ" class="box" value="<?= $files_data['doj'] ?>" required></div>
      </div> 
      <div class="row rows">
        <div class="col-sm-3"><label>Designation:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Designation" name="txtdesign" class="box" value="<?= $files_data['designation'] ?>" required></div>
      </div>
          <div class="row rows">
        <div class="col-sm-3"><label>Department:<label></div>
        <div class="col-sm-5">
          <select name="branch" value="<?= $files_data['branch'] ?>" class="sel">
                <option value="<?= $branch ?>"><?= $branch ?></option>
                <option value="CSE">CSE</option>
                <option value="ET&T">ET&T</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Metlergy">Metlergy</option>
                <option value="Electrical">Electrical</option>

              </select></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Email:</label></div>
        <div class="col-sm-5"><input type="email" placeholder="Enter Email" name="txtemail" class="box" value="<?= $files_data['email'] ?>" required></div>
      </div>

       <div class="row rows">
        <div class="col-sm-3"><label>Contact No:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Contact Number" maxlength="10" name="conno" class="box" value="<?= $files_data['contact'] ?>" required></div>
      </div>

        <div class="row rows">
        <div class="col-sm-3">Aadhar No.</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Aadhar Number" name="aadharno" maxlength="12" class="box" value="<?= $files_data['aadhar_no'] ?>" required ></div>
      </div>
       

       <div class="row rows">
        <div class="col-sm-3"><label>Address:</label></div>
        <div class="col-sm-5"><textarea name="address" class="box" value="<?= $files_data['address'] ?>" required><?= $files_data['address'] ?></textarea></div>
      </div>

     

       
      <!--  <div class="row rows">
        <div class="col-sm-3"><label>User ID:</label></div>
        <div class="col-sm-5"><input type="text" name="userID" placeholder="Enter User Id"  class="box" value="<?= $files_data['user_id'] ?>" required></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Password:</label></div>
        <div class="col-sm-5"><input type="password" placeholder="Enter Password" name="txtpass" class="box" value="<?= $files_data['password'] ?>" required></div>
       </div> -->
     
       <div class="row rows">
          <div class="col-sm-3">Upload Image</div>
          <div class="col-sm-5"><input type="file" name="textImg" accept="gif,jpeg,png,jpeg">
           <!--  <img src="image/<?= $files_data['image']; ?>"/> -->
          </div>
        </div>
        <div class="row rows">
          <div class="col-sm-3"></div>
          <div class="col-sm-5"><button name="upd-btn" class="btn btn-success" style="border:1px solid lightgray; color:black;">Update</button></div>
        </div>
    </div>
    <div class="col-sm-2"></div>

  </div>

</form>
</div>
<?php include'footer.php'; ?>
</body>
</html>