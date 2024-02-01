<?php
    
      $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  
      
?>

<?php include 'header.php'; ?>
<style type="text/css">
	.tbl
	{
		text-align: center;
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
<br>
<div class="container">
    <!-- <div class="col-xs-12"> -->
      <h2 align="center">Admin List</h2><br>
          <div class="table-responsive">
          <table class="table table-bordered table-hover tbl">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Name</th>
              <th>UserID</th>
              <th>Action</th>
        
            </tr></thead>
            <tbody>

              <?php
                $sel_query="SELECT * FROM staff_tbl WHERE status='admin' ORDER BY  sno ASC";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              <td><?= $i ?></td>
              
              <td><?= $row_data['name'] ?></td>
              <td><?= $row_data['user_id'] ?></td>
              <td>   <a href="for_admin.php?dataID=<?php echo $row_data['sno'] ?>"><button class="btn btn-danger" style="border:1px solid lightgray; color:white;" name="upd-btn">Remove As Admin</button></a></td></td>
            </td>
              
            </tr> <?php $i++; } ?>
          </tbody>
          </table>
          </div>

    </div>
  </div>


<?php include 'footer.php'; ?>


