<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  
  $userprofile=$_SESSION['user_id'];

    if (!$_SESSION['user_id']) 
    {
       header("location:index.php");
    }


?>

<?php include("header.php"); ?>
<style type="text/css">
    
@media only screen and (min-width: 1200px) and (max-width: 1920px) {
   
    .nav-item .nav-menu li a {
        padding: 16px 35px 15px;
    }
}

 .name
    {
        font-size: 50px;
    }
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
    <!-- Header End -->

    <div class="container" style="margin-top: 40px;">
        <h3 align="center">Select Branch and Semester for View Student List</h3>
        <br>
        <form method="post" action="view_student_list_admin.php">
  
        <div class="row">
          <div class="col-sm-3"></div>
           <div class="col-sm-8">
            <div class="row rows">
              <div class="col-sm-3"><label>Select Branch:</label></div>
              <div class="col-sm-5">
                <select name="branch" class="sel">
                
                <option value="BCA">BCA</option>
                <option value="BSc&T">BSc</option>
                <option value="BA">BA</option>
                <option value="MCA">MCA</option>
                <option value="MSc">MSc</option>
              </select>
              </div>
            </div>
          
            <div class="row rows">
              <div class="col-sm-3"><label>Select year:</label></div>
              <div class="col-sm-5">
                <select name="semester" class="sel">
                
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                
              </select>
              </div>
            </div>
            <div class="row rows">
                <div class="col-sm-3"></div>
                <div class="col-sm-2"><button class="btn btn-primary" style="border:1px solid lightgray; color:black; width: 100%;" name="submit">View</button></div>
            </div>
              <?php
                    if(isset($_REQUEST['status'])==true)
                    {
                       echo '<script>swal("Attendance Successfully Added", "Press ok button!", "success");</script>';
                    
                    }
                    if(isset($_REQUEST['status1'])==true)
                    {
                       echo '<script>swal("Attendance Already Inserted ", "Press ok button!", "info");</script>';
                    }
                ?>
          </div>
        </div>
           
    </div>
   

    <?php include("footer.php"); ?>





    









    