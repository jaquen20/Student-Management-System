
<?php 
       $conn= mysqli_connect('localhost','root','','sms');

   
     if(isset($_POST['upd-btn']))
      { 
        $id=$id= $_GET['dataID'];
        

        $Name=$_POST['name'];
        $UserID=$_POST['uid'];
        $Branch=$_POST['branch'];
        $Password=$_POST['password'];
        $Session=$_POST['session'];


        $Update_query="UPDATE `registration` SET `name`='$Name',`user_id`='$UserID',`branch`='$Branch',`password`='$Password',`Session`='$Session' WHERE `sno`='$id'";

        $Upd_query_res= mysqli_query($conn,$Update_query);

          header('location:Registration_list.php') ;
          
      }

     

    $id=$_REQUEST['dataID'];
      $sel_query="SELECT * FROM registration WHERE sno= '".$id."' ";
      $sel_query_res= mysqli_query($conn, $sel_query) or die(mysqli_error($conn));

      if($files_data = mysqli_fetch_assoc($sel_query_res))
      {

       
       $branch=$files_data['branch'];
      }

include("header.php"); 
?>

<style type="text/css">

 
  .rows{
    padding: 5px;
  }
 .box{
  width: 100%;
 }
 .sel
 {
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

<form method="post" autocomplete="off">

    <div class="container">
       <br>
        <div class="row">
        <div class="col-sm-2"></div>
        <h2>Update Registered Student</h2>
       
        </div>
        <br>
       <div class="row">
          <div class="col-sm-2"></div>
           <?php
            if(isset($_REQUEST['status'])==true)
            {
              echo'<div class="alert alert-success alert-dismissible fade show" role="alert">Successfully Registerd.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
            }
            if(isset($_REQUEST['status1'])==true)
            {
              echo'<div class="alert alert-danger alert-dismissible fade show" role="alert"> User ID is already Registerd.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
            }
         ?>
        </div>
        
      <div class="row">
    <div class="col-sm-2"></div>
     <div class="col-sm-8">
      <div class="row rows">
        <div class="col-sm-3"><label>Name:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Student name" name="name" value="<?= $files_data['Name']; ?>" class="box" required oninput="this.value = this.value.replace(/[^A-z a-z/.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></div>
      </div>
    
      <div class="row rows">
        <div class="col-sm-3"><label>Branch:</label></div>
        <div class="col-sm-5">
        <select name="branch" class="sel">
                <option selected disabled value="<?= $branch ?>"><?= $branch ?></option>
                <option value="BCA">BCA</option>
                <option value="BSc">BSc&T</option>
                <option value="BA">BA</option>
                <option value="MSc">MSc</option>
                <option value="MCA">MCA</option>

              </select></div>
      </div>

      <div class="row rows">
          <div class="col-sm-3">User ID:</div>
          <div class="col-sm-5"><input type="text"  placeholder="Enter User ID" name="uid" required class="box" value="<?= $files_data['user_id']; ?>"></div>
        </div>
        <div class="row rows">
          <div class="col-sm-3">Password:</div>
          <div class="col-sm-5"><input type="text"  placeholder="Enter Password" name="password" required class="box" value="<?= $files_data['password']; ?>"></div>
        </div>
        <div class="row rows">
          <div class="col-sm-3">Session:</div>
          <div class="col-sm-5"><input type="text"  placeholder="Enter Session Year" name="session" required class="box" value="<?= $files_data['Session']; ?>" oninput="this.value = this.value.replace(/[^0-9-/.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></div>
        </div>
        <div class="row rows">
          <div class="col-sm-3"></div>
          <div class="col-sm-5">
            <button class="btn btn-success" style="border:1px solid lightgray; color:black;" name="upd-btn">UPDATE</button></div>
        </div>
    </div>
    <div class="col-sm-2"></div>

  </div>

</form>


<?php include("footer.php"); ?>