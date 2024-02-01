<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  
  
  $userprofile=$_SESSION['user_id'];

    if(isset($_POST['submit']))
	{	
		
		$branch= $_POST['branch'];
		$sem= $_POST['semester'];
		$subject= $_POST['subject'];
		$month= $_POST['month'];
		$year= $_POST['year'];
		$date= $year."-".$month;
		$show_date= $month."-".$year;
		
	}
	$total_day= cal_days_in_month(CAL_GREGORIAN,$month,$year);
	
?>
<!-- <?php include 'header.php'; ?> -->
<style type="text/css">
	.attend
	{
		font-size: 13px;

	}
	

</style>	

<div class="nav-item">
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="staffhome.php">Home</a></li>
                        <li><a href="view_staff_profile.php">View Profile</a></li>
                         <li><a href="view_student.php">View Student</a></li>
                        
                        <li  class="active"><a href="#">Attendance</a>
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
    <!-- Header End -->

<div class="container">
	<br>
	<div class="card" style="width: 100%;">
                    <h4 align="center" class="card-header">
                            Monthly Attendance Reports
                    </h4>
        <div class="list-group list-group-flush">
            <div class="list-group-item">
            	<table border="0" class="table table-striped table-bordered">
					<tr>
						<td>Branch :</td>
						<th><?= $branch ?></th>
						<td>Semester :</td>
						<th><?= $sem ?></th>
						<td>Subject :</td>
						<th><?= $subject ?></th>
						<td>Month-Year :</td>
						<th><?= $show_date ?></th>
					</tr>	
				</table>
			</div>
		</div>
	</div>
	
	
</div><br>
<div class="container-fluid ">
<div class="table-responsive">
	<table border="1" class="table table-striped table-bordered attend">
		<tr>
			<th>Student Name</th>
			<th>User_ID</th>
			<?php for ($i=1; $i <= $total_day ; $i++) 
			{ ?>
				<th><?= $i ?></th>
			<?php } ?>
			<th>T.P.</th>
			<th>T.A.</th>
			
		</tr>
		<?php
			$student="SELECT distinct student_uid,student_name FROM attendance_tbl  WHERE branch='$branch'&& semester = '$sem' && subject = '$subject' && submission_date = '$date' ORDER BY student_name ASC ";
			$st_id = mysqli_query($conn,$student) OR die(mysqli_error($conn));
			while ($r= mysqli_fetch_array($st_id)) 
			{
				$id= $r['student_uid'];
				$name= $r['student_name'];
				echo "<tr><td>".$name."</td><td>".$id."</td>";

				
				for ($i=1; $i <= $total_day ; $i++) 
				{ 
					$day = str_pad($i, 2,"0",STR_PAD_LEFT);
					
					$query = "SELECT *  FROM attendance_tbl WHERE branch='$branch'&& semester = '$sem' && subject = '$subject' && submission_date = '$date'&& student_uid='$id'&& day='$day'";
					$result = mysqli_query($conn,$query) OR die(mysqli_error($conn));
					echo "<td>";
					while ($row=mysqli_fetch_array($result)) 
					{
						echo $row['attendance_status'];

					}
					if(mysqli_num_rows($result)==0) 
					{
						echo ".";
					}
					echo "</td>";
					
					
					
				}
				$total_present = "SELECT * FROM attendance_tbl WHERE attendance_status='p'&& branch='$branch'&& semester = '$sem' && subject = '$subject' && submission_date = '$date'&& student_uid='$id'";
					$T_P = mysqli_query($conn,$total_present) OR die(mysqli_error($conn));
					$P=mysqli_num_rows($T_P);

					$total_absent = "SELECT * FROM attendance_tbl WHERE attendance_status='A'&& branch='$branch'&& semester = '$sem' && subject = '$subject' && submission_date = '$date'&& student_uid='$id'";
					$T_A = mysqli_query($conn,$total_absent) OR die(mysqli_error($conn));
					$A=mysqli_num_rows($T_A);
             	echo "<td>".$P."</td>";
             	echo "<td>".$A."</td>";
             ?>
		
			<?php 
		 } 
		 ?>	
		
	</table>

</div>
</div>
 

<?php include 'footer.php'; ?> 