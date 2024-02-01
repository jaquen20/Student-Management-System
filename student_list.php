<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms');  

  error_reporting(0);
  $userprofile=$_SESSION['user_id'];
  if(isset($_POST['submit']))
	{	
		
		$semester=$_POST['sem'];
		$branch=$_POST['branch'];
	}
?>


<?php include("header.php"); ?>

<style type="text/css">
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
                        <li ><a href="staffhome.php">Home</a></li>
                        <li><a href="view_staff_profile.php">View Profile</a></li>
                         <li class="active"><a href="view_student.php">View Student</a></li>
                        
                        <li><a href="#">Attendance</a>
                            <ul class="dropdown">
                                <li><a href="add_attendance.php">Add Attendance</a></li>
                                <li><a href="view_attendance.php">View Attendance</a></li>
                              
                            </ul>
                        </li>
                        <li><a href="#">C.T. Marks</a>
                            <ul class="dropdown">
                                 <li><a href="add_ct_marks.php">Add C.T. Marks</a></li>
                                <li><a href="adminlist.php">View C.T. Marks</a></li>
                               
                            </ul>
                        </li>
                       
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
        <h2 align="center">Student List</h2>
        <br>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Profile</th>
              <th>Name</th>
              <th>Branch</th>
              <th>Semester</th>
              <th>Action</th>
        
            </tr></thead>
            <tbody>

              <?php
                $sel_query="SELECT * FROM student WHERE branch='$branch' && sem = '$semester' ORDER BY sno ASC";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              <td><?= $i ?></td>
              <td><img src="image/<?= $row_data['sno'].".".$row_data['image']?>" class="img"></td>
              <td><?= $row_data['name'] ?></td>
              <td><?= $row_data['branch'] ?></td>
              <td><?= $row_data['sem'] ?></td>
             <td><a href="student_profile.php?dataID=<?= $row_data['sno'] ?>"><button class="btn btn-info">View</button></a></td>
            

            </tr> <?php $i++; } ?>
          </tbody>
          </table>
          </div>
       
           
    </div>

    <?php include("footer.php"); ?>





    









