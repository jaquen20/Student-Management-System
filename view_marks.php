<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  $userprofile=$_SESSION['user_id'];
    if(isset($_POST['submit']))
	{	
		
		$semester=$_POST['sem'];
		$branch=$_POST['branch'];
		$subject=$_POST['subject'];
		$ct=$_POST['CT'];

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
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="staffhome.php">Home</a></li>
                        <li><a href="view_staff_profile.php">View Profile</a></li>
                         <li><a href="view_student.php">View Student</a></li>
                        
                        <li><a href="#">Attendance</a>
                            <ul class="dropdown">
                                <li><a href="add_attendance.php">Add Attendance</a></li>
                                <li><a href="view_attendance.php">View Attendance</a></li>
                              
                            </ul>
                        </li>
                        <li  class="active"><a href="#">C.T. Marks</a>
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
    <!-- Header End -->
    <div class="container" style="margin-top: 20px;">
        
        <div class="card" style="width: 100%;">
                    <h4 align="center" class="card-header">
                            Class Test Reports
                    </h4>
        <div class="list-group list-group-flush">
            <div class="list-group-item">
            	<table border="0" class="table table-striped table-bordered">
					<tr>
						<td>Branch :</td>
						<th><?= $branch ?></th>
						<td>Semester :</td>
						<th><?= $semester ?></th>
						<td>Subject :</td>
						<th><?= $subject ?></th>
						<td>CT No :</td>
						<th><?= $ct ?></th>
					</tr>	
				</table>
			</div>
		</div>
	</div><br>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Student Name</th>
              <th>UserID</th>
              <th>Maximum Marks</th>
              <th>Marks Obtain</th>
            
            </tr></thead>
            <tbody>

              <?php
                $sel_query="SELECT * FROM ct_tbl WHERE staff_uid='$userprofile' && branch='$branch' && semester = '$semester' && subject_name ='$subject' && ct_no = '$ct' ORDER BY sno ASC";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              <td><?= $i ?></td>
              
              <td><?= $row_data['student_name'] ?></td>
              <td><?= $row_data['student_uid'] ?></td>
              <td><?= $row_data['max_marks'] ?></td>
              <td><?= $row_data['marks'] ?></td>
          

            </tr> <?php $i++; } ?>
          </tbody>
          </table>
          </div>
       
           
    </div>

    <?php include("footer.php"); ?>
