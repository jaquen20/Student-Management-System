<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  
 $userprofile=$_SESSION['user_id'];

if (!$_SESSION['user_id']) 
    {
       header("location:index.php");
    }
  
  $sel_query="SELECT * FROM staff_tbl WHERE user_id='$userprofile'";
  $sel_query_res= mysqli_query($conn,$sel_query);
   ($row_data= mysqli_fetch_array($sel_query_res))
	



?>

<?php include'header.php' ?>

<style type="text/css">


 
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
                        <li  class="active"><a href="#">Add Records</a>
                            <ul class="dropdown">
                                <li><a href="addstaff.php">Add staff</a></li>
                                <li><a href="add_notification.php">Add Notification</a></li>
                              
                            </ul>
                        </li>
                        <li><a href="#">View Records</a>
                            <ul class="dropdown">
                                 <li><a href="viewstaff.php">View Staff</a></li>
                                 <li><a href="view_student_admin.php">View Students</a></li>
                                <li><a href="adminlist.php">View Admins</a></li>
                                <li><a href="notification_list.php">Notification List</a></li>
                                 <li><a href="Registration_list.php">Registerd Student List</a></li>
                                
                            </ul>
                        
                         <li><a href="#">Subject Allotement</a>
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
    <!-- Header End -->
    <br>

<form action="notification_query.php" method="post" autocomplete="off" enctype="multipart/form-data">

    <div class="container">
       <br>
        <div class="row">
        <div class="col-sm-2"></div>
        <h2>Add Notification</h2>
       
        </div>
        <br>
       <div class="row">
          <div class="col-sm-2"></div>
           <?php
            if(isset($_REQUEST['status'])==true)
            {
              echo'<div class="alert alert-success alert-dismissible fade show" role="alert">Successfully Added.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
            }
         ?>
        </div>
        <input type="hidden" name="name" value="<?= $row_data['name'] ?>">
        <input type="hidden" name="user_id" value="<?= $row_data['user_id'] ?>">
      <div class="row">
    <div class="col-sm-2"></div>
     <div class="col-sm-8">
      <div class="row rows">
        <div class="col-sm-3"><label>File Name:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter File name" name="filename" class="box" required></div>
      </div>
    
      <div class="row rows">
        <div class="col-sm-3"><label>Description:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Description" name="description" class="box" required></div>
      </div>

      <div class="row rows">
          <div class="col-sm-3">Upload File:</div>
          <div class="col-sm-5"><input type="file" name="file" accept="all" required></div>
        </div>
        <div class="row rows">
          <div class="col-sm-3"></div>
          <div class="col-sm-5">

          	<?php 
          		if ($userprofile=="administrator@admin.com") 
          		{
          	?>		<button class="btn btn-primary" style="border:1px solid lightgray; color:black;" name="submit">Submit</button></div>
          		<?php }
          		else
          		{

          	 ?>
          	<button class="btn btn-success" style="border:1px solid lightgray; color:black;" name="sub-btn">Submit</button></div><?php }?>
        </div>
    </div>
    <div class="col-sm-2"></div>

  </div>

</form>


<?php include'footer.php' ?>