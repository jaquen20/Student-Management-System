<?php
    session_start();
      $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn)); 

      $userprofile=$_SESSION['user_id'];
      $status="staff";
      $status1="admin";


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
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }

 

</style>
<div class="nav-item">
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="staffhome.php">Home</a></li>
                        <li class="active"><a href="view_staff_profile.php">View Profile</a></li>
                         <li><a href="view_student.php">View Student</a></li>
                        
                        <li><a href="#">Attendance</a>
                            <ul class="dropdown">
                                <li><a href="add_attendance.php">Add Attendance</a></li>
                                <li><a href="view_attendance.php">View Attendance</a></li>
                              
                            </ul>
                        </li>
                        <li><a href="#">C.T. Marks</a>
                            <ul class="dropdown">
                                 <li><a href="add_ct_marks.php">Add C.T. Marks</a></li>
                                <li><a href="view_ct_marks.php">View C.T. Marks</a></li>
                               
                            </ul>
                        </li>
                       
                       <li><a href="change_staff_pass.php">Change Password</a></li>
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

             
                $sel_query="SELECT * FROM staff_tbl WHERE user_id='$userprofile'";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              
               ($row_data= mysqli_fetch_array($sel_query_res));
                $status=$row_data['status'];
              
     ?>

<div class="container">
  
  <div class="table-responsive ">

    <table class="table table-bordered table-hover">
        
          
          <tr>
            <td>Profile Picture</td>
            <th><img src="images/<?= $row_data['sno'].".".$row_data['image']?>" class="img"></td>
          </tr>

          <tr>
            <td>Name</td>
            
            <th><?= $row_data['name'] ?>
              <?php
                  
                if ($status=="admin") 
                {
                  echo '(<b style="color:green;">ADMIN</b>)';
                 }
              ?> 

            </th>
          </tr>

          <tr>
            <td>Fathers name</td>
            <th><?= $row_data['f_name'] ?></th>
          </tr>

          <tr>
            <td>Gender</td>
            <th><?php
            if($row_data['gender'] == 1)
            {
             
              echo "Male";
            }
            else
            {
              if($row_data['gender'] == 2)
              {
                echo "Female";
              }
               else
              {
                echo "Transgender";
              }
            }
              
            
           
           ?></th>
          </tr>

         <!--  <tr>
            <td>DOB</td>
            <th><?= $row_data['dob'] ?></th>
          </tr> -->

          <tr>
            <td>DOJ</td>
            <th><?= $row_data['doj'] ?></th>
          </tr>

          <tr>
            <td>Designation</td>
            <th><?= $row_data['designation'] ?></th>
          </tr>

          <tr>
            <td>Contact No</td>
            <th><?= $row_data['contact'] ?></th>
          </tr>

          <tr>
            <td>Email</td>
            <th><?= $row_data['email'] ?></th>
          </tr>

          <tr>
            <td>Aadhar No</td>
            <th><?= $row_data['aadhar_no'] ?></th>
          </tr>

          <tr>
            <td>Address</td>
            <th><?= $row_data['address'] ?></th>
          </tr>

          <tr>
            <td>UserID</td>
            <th><?= $row_data['user_id'] ?></th>
          </tr>

          <tr>
            <td>Password</td>
            <th><?= $row_data['password'] ?></th>
          </tr>


          <tr>

            <td>Submission Date</td>
            <th><?= $row_data['date'] ?></th>
          </tr>
         <tr>

            <td>Action</td>
            <th> <a href="edit_staff.php?dataID=<?php echo $row_data['sno'] ?>"><button class="btn btn-primary">Edit</button></a>
            </th>
          </tr>
        

    </table>
</div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>
