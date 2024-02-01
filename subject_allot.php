<?php
    
      $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  





?>



<?php include 'header.php'; ?>
<style type="text/css">

.menubar
{
  box-shadow:0 14px 30px 0 rgba(0, 0, 0, 0.8);
 
}

footer
 {
  width: 100%;
  height: 90px;
   
  background-color: #343a40;
  color: white;
  text-align: center;
  padding-top: 40px;

 }
  .logout
 {
  
  text-align: center;

 }
.img
  {
    width: 50px;
    height: 50px;
  }
 table
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
                        <li ><a href="#">View Records</a>
                            <ul class="dropdown">
                                 <li><a href="viewstaff.php">View Staff</a></li>
                                 <li><a href="view_student_admin.php">View Student</a></li>
                                <li><a href="adminlist.php">View Admins</a></li>
                                <li><a href="notification_list.php">Notification List</a></li>
                                 <li><a href="Registration_list.php">Registerd Student List</a></li>
                                
                            </ul>
                        
                         <li  class="active"><a href="#">Subject Allotement</a>
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
      <h2 align="center">Select staff for subject allotement</h2><br>
          <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Profile</th>
              <th>Name</th>
              <th>Branch</th>
              <th>Action</th>
        
            </tr></thead>
            <tbody>

              <?php
                $sel_query="SELECT * FROM staff_tbl ORDER BY sno ASC";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              <td><?= $i ?></td>
              <td><img src="images/<?= $row_data['sno'].".".$row_data['image']?>" class="img"></td>
              <td><?= $row_data['name'] ?></td>
              <td><?= $row_data['branch'] ?></td>
               <td>
                <a href="add_subject.php?dataID=<?= $row_data['sno'] ?>"><button class="btn btn-primary">Allot</button></a>
               </td>
            

            </tr> <?php $i++; } ?>
          </tbody>
          </table>
          </div>

    </div>
  </div>


<?php include 'footer.php'; ?>


</body>
</html>
