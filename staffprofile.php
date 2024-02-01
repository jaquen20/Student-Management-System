<?php
    session_start();
      $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn)); 

      $userprofile=$_SESSION['user_id'];
      $status="staff";
      $status1="admin";
    if (!$_SESSION['user_id']) 
    {
       header("location:index.php");
    }
     if(isset($_GET['rowid']))
      {
        $data_id= $_GET['rowid'];
        $del_query="UPDATE `staff_tbl` SET `status`='$status' WHERE sno='$data_id'";
        $del_query_res= mysqli_query($conn,$del_query);
         if($del_query_res)
        {
          header("location:viewstaff.php");

        }
    }

    if(isset($_GET['rowid2']))
      {
        $data_id= $_GET['rowid2'];
        $del_query="UPDATE `staff_tbl` SET `status`='$status1' WHERE sno='$data_id'";
        $del_query_res= mysqli_query($conn,$del_query);
         if($del_query_res)
        {
          header("location:viewstaff.php");

        }
    }

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
                        <li class="active"><a href="#">View Records</a>
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
<body>

    <?php

              $id=$_REQUEST['dataID'];
                $sel_query="SELECT * FROM staff_tbl WHERE sno='".$id."'";
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
            
            <th><?= $row_data['name'] ?></th>
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
            <th>
             
            <!--   input for admin table -->
           

              <?php
                  
                  
           
              if ($status=="admin") 
              {
                ?>
                <a href="?rowid=<?=$row_data['sno']?>"><button class="btn btn-primary" style="border:1px solid lightgray;background-color:darkred; color:white;">Remove As Admin</button></a>

             <?php }
              else
              {?>
               <a href="?rowid2=<?=$row_data['sno']?>"><button class="btn btn-primary" >Make  Admin</button></a>

              <?php } ?>
              
            
              
              

            </th>
          </tr>
        

    </table>
</div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>
