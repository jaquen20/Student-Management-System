<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  if (!$_SESSION['user_id']) 
    {
       header("location:index.php");
    }
  $userprofile=$_SESSION['user_id'];
  if(isset($_GET['rowid']))
  {
    $data_id= $_GET['rowid'];
    $del_query="DELETE FROM `registration` WHERE sno='$data_id'";
    $del_query_res= mysqli_query($conn,$del_query);

    if($del_query_res)
    {
      header("location:Registration_list.php");

    }
    else
    {
      echo (mysqli_error($conn))."data not delete...<a href='viewstaff.php'>bact to list</a>";
    }

    }


 


?>

<?php include("header.php"); ?>
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
    <!-- Header End -->

    <br>
<div class="container">
    <!-- <div class="col-xs-12"> -->
      <h2 align="center">Registered Student List</h2><br>
          <div class="table-responsive">
          <table class="table table-bordered table-hover tbl">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Name</th>
              <th>UserID</th>
              <th>Password</th>
              <th>Session</th>
              <th>Registration Date</th>
            <th>Action</th>
            </tr></thead>
            <tbody>

              <?php
                $sel_query="SELECT * FROM registration ";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              <td><?= $i ?></td>
              
              <td><?= $row_data['Name'] ?></td>
              <td><?= $row_data['user_id'] ?></td>
              <td><?= $row_data['password'] ?></td>
              <td><?= $row_data['Session'] ?></td>
              <td><?= $row_data['date'] ?></td>
              <td><a href="?rowid=<?=$row_data['sno']?>"><button class="btn btn-primary" style="border:1px solid lightgray;background-color:darkred; color:white;">delete</button></a><a href="edit_student.php?dataID=<?php echo $row_data['sno'] ?>"><button class="btn btn-info" style="border:1px solid lightgray; color:black;">Edit</button></a></td></td>
              
            </tr> <?php $i++; } ?>
          </tbody>
          </table>
          </div>

    </div>
  </div>





<?php  include 'footer.php'; ?>