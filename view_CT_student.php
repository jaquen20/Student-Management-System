<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  $userprofile=$_SESSION['user_id'];
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
                        <li><a href="student_home.php">Home</a></li>
                        <li><a href="my_student_profile.php">View Profile</a></li>
                         <li class="active"><a href="view_CT_student.php">View CT Marks</a></li>
                        
                        
                       <li><a href="change_student_pass.php">Change Password</a></li>
                        <a href="logout.php" ><button>Logout</button></a>
                        
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
       
  
       </div><br>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Year</th>
              <th>Subject</th>
              <th>C.T. No</th>
              <th>Maximum Marks</th>
              <th>Marks Obtain</th>
              <th>Submission Date</th>
            </tr></thead>
            <tbody>

              <?php
                $sel_query="SELECT * FROM ct_tbl WHERE student_uid='$userprofile' ORDER BY semester DESC , subject_name ASC";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              <td><?= $i ?></td>
              
              <td><?= $row_data['semester'] ?></td>
              <td><?= $row_data['subject_name'] ?></td>
              <td><?= $row_data['ct_no'] ?></td>
              <td><?= $row_data['max_marks'] ?></td>
              <td><?= $row_data['marks'] ?></td>
              <td><?= $row_data['date'] ?></td>

            </tr> <?php $i++; } ?>
          </tbody>
          </table>
          </div>
       
           
    </div>

    <?php include("footer.php"); ?>
