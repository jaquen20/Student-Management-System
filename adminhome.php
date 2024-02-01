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


          <div class="nav-item">
            <div class="container-fluid">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="adminhome.php">Home</a></li>
                        <li><a href="#">Add Records</a>
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
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <?php
                    if(isset($_REQUEST['status4'])==true)
                    {
                      echo '<script>swal("Login Successfull", "Press ok button!", "success");</script>';
                    }
                ?>
            </div>
             
        
        </div>

       <center><h2>Welcome</h2>
        <h3>to</h3>
        <h1>Admin Panel</h1>

        <br>
        <br>
        <?php
                $sel_query="SELECT * FROM admin ORDER BY sno DESC limit 1";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
                ($row_data= mysqli_fetch_array($sel_query_res))
         ?>
              

        </center> 
        
    </div>

    <?php include("footer.php"); ?>





    









    