<?php 

		 $conn= mysqli_connect('localhost','root','','sms');


    

		 
		 
		 	$id=$_REQUEST['dataID'];
		 	$sel_query="SELECT * FROM student WHERE sno= '".$id."' ";
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
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="student_home.php">Home</a></li>
                        <li class="active"><a href="my_student_profile.php">View Profile</a></li>
                         <li><a href="view_CT_student.php">View CT Marks</a></li>
                        
                        
                       <li><a href="change_student_pass.php">Change Password</a></li>
                        <a href="logout.php" ><button>Logout</button></a>
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
 
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
        <h2>Update Profile</h2>
       
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
        <div class="col-sm-3"><label>Semester:<label></div>
        <div class="col-sm-5">
          <select name="sem" value="<?= $files_data['sem'] ?>" class="sel">
                <option selected value="<?= $files_data['sem'] ?>"><?= $files_data['sem'] ?></option>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6thx">6th</option>
              </select>
        </div>
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
        <div class="col-sm-3">Parent's Contact No.</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Aadhar Number" name="pcontact" maxlength="12" class="box" value="<?= $files_data['p_contact'] ?>" required ></div>
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
          <div class="col-sm-5"><a href="studentprofile_admin.php?dataID=<?= $files_data['sno'] ?>"><button name="upd-btn" class="btn btn-success" style="border:1px solid lightgray; color:black;">Update</button></a></div>
        </div>
    </div>
    <div class="col-sm-2"></div>

  </div> 

</form>
</div>
<?php include'footer.php'; ?>
</body>
</html>