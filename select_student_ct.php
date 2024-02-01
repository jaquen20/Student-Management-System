<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  
  $userprofile=$_SESSION['user_id'];

    if(isset($_REQUEST['submit']))
  { 

      $branch =$_REQUEST['branch'];
      $semester =$_REQUEST['sem'];
      
      
  }
      
        
    
     $sel_query="SELECT * FROM staff_tbl WHERE user_id='$userprofile'";
     $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
     $row_data= mysqli_fetch_array($sel_query_res);
     
      $query="SELECT * FROM subject_tbl WHERE user_id='$userprofile' && branch='$branch' && semester='$semester'";
      $query_res= mysqli_query($conn,$query) OR die(mysqli_error($conn));
      
    $test= mysqli_num_rows($query_res);
      include("header.php"); ?>

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

     <?php 
     if ($test==0) 
      {
        echo'<br><br><br>
        <div class="container">
        <h2 align="center">Data Not found<br> <a href="add_attendance.php"><button class="btn btn-info">Back </button></a></h2>
        
        </div>';
      }
      else
      {
        ?>
        <div class="container">
    <!-- <div class="col-xs-12"> -->
      <form method="POST" action="add_ct_marks_query.php" autocomplete="off">
     <br> <h2 align="center">Add CT Marks</h2><br>


      <div class="row">
          <div class="col-sm-0"></div>
           <div class="col-sm-8">
            <div class="row rows">
              <div class="col-sm-3"><h5> Branch :</h5></div>
              <div class="col-sm-5">
                <h5><b><?= $branch; ?></b></h5>
              </select>
              </div>
            </div>
          
            <div class="row rows">
              <div class="col-sm-3"><h5> Semester :</h5></div>
              <div class="col-sm-5">
                <h5><b><?= $semester; ?></b></h5>
              </div>
            </div>
            <div class="row rows">
              <div class="col-sm-3"><h5> Select CT :</h5></div>
              <div class="col-sm-5">
                <select name="ct_no" class="sel">
                  
                  <option value="1">CT-1</option>
                  <option value="2">CT-2</option>
                </select>
              </div>
            </div>
            <div class="row rows">
              <div class="col-sm-3"><h5>Maximum Marks :</h5></div>
              <div class="col-sm-5">
                <h5><input  class="sel" type="text" name="max_marks" maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required=""></h5>
              </div>
            </div>
            <div class="row rows">
              <div class="col-sm-3"><h5>Select Subject :</h5></div>
              <div class="col-sm-5">
                <select name="subject" class="sel">
                      <?php
                         while ($data= mysqli_fetch_array($query_res))
                          {  ?>
                     
                          <option value="<?= $data['subject_name'] ?>"><?= $data['subject_name'] ?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
          </div>
      
      <br>
        
          <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Name</th>
              <th>User ID</th>
              <th>Add CT Marks</th>
        
            </tr></thead>
            <tbody>

              <?php
                $sql="SELECT * FROM student WHERE branch='$branch' && sem='$semester'";
          $result= mysqli_query($conn,$sql) OR die(mysqli_error($conn));
            $total=mysqli_num_rows($result);
            if ($total==0) 
            {
              echo '<tr><td colspan="4"><h3 align="center">No data Available </h3></td></tr>';
            }
              $i=1;
              $counter=0;
              while ($row = mysqli_fetch_array($result))
             {
                
              ?>

              <tr>
              <td><?= $i ?></td>
              <td><?= $row['name'] ?></td>
              
              <td><?= $row['user_id'] ?></td>
               
              <td>
                <!-- for student -->
                <input type="hidden" name="student_name[]" value="<?= $row['name'] ?>">
                <input type="hidden" name="student_uid[]" value="<?= $row['user_id'] ?>">
                 <input type="hidden" name="branch" value="<?= $branch ?>">
                <input type="hidden" name="semester" value="<?= $semester ?>">
                <!-- end -->

                <!-- for staff -->
                 <input type="hidden" name="staff_name[]" value="<?= $row_data['name'] ?>">
                <input type="hidden" name="staff_uid[]" value="<?= $row_data['user_id'] ?>">
                <!-- end -->

                <input  class="sel" type="text" maxlength="2" name="marks[<?php echo $counter; ?>]" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  requierd>
               
              </td>
            

            </tr> <?php $i++; $counter++; } ?>
          
            
          </tbody>
          </table>
                 <div class="button" ><button id="button" class="btn btn-primary" name="submit">Submit</button></div><br>
          
          </div>
        </form>

    </div>
  </div>
     <?php   
      }



?>


<style type="text/css">
  th
  {
    text-align: center;
  }
   td
  {
    text-align: center;
  }
  h5
  {
    padding: 6px;
  }
  .sel
  {
    width: 100px;
  }
  .button
  {
    text-align: center;
  }
  #button
  {
    width: 133px;
  }
  @media only screen and (min-width: 1200px) and (max-width: 1920px) {
   
    .nav-item .nav-menu li a {
        padding: 16px 35px 15px;
    }
</style>
  



<?php include("footer.php"); ?>