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

     <?php 
     if ($test==0) 
      {
        echo'<br><br><br>
        <div class="container">
        <h2 align="center">No Data Available<br> <a href="view_attendance.php"><button class="btn btn-info">Back </button></a></h2>
        
        </div>';
      }
      else
      {
        ?>
        <div class="container">
      <!-- <div class="col-xs-12"> -->
      <form method="POST" action="attendance_list.php">
      <br> <h3 align="center">Select Subject & Date for View Attendance</h3><br>



      <div class="row">
          <div class="col-sm-3"></div>
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
              <div class="col-sm-3"><h5>Select Subject :</h5></div>
              <div class="col-sm-5">
                <h5><select name="subject" class="sel" required="">
                      <option selected="" disabled="">Choose</option>
                      <?php
                         while ($data= mysqli_fetch_array($query_res))
                          {  ?>
                     
                          <option value="<?= $data['subject_name'] ?>"><?= $data['subject_name'] ?></option>
                    <?php } ?>
                </select></h5>
              </div>

            </div>
             <div class="row rows">
              <div class="col-sm-3"><h5> Select Month/Year :</h5></div>
              <div class="col-sm-8">
                <h5>
                 <select  name="month" required="">
                   <option selected="" disabled="">Month</option>
                   <option value="01">January</option>
                   <option value="02">February</option>
                   <option value="03">March</option>
                   <option value="04">April</option>
                   <option value="05">May</option>
                   <option value="06">June</option>
                   <option value="07">July</option>
                   <option value="08">August</option>
                   <option value="09">September</option>
                   <option value="10">October</option>
                   <option value="11">November</option>
                   <option value="12">December</option>
                 </select>
                 <select name="year" required="">
                   <option selected="" disabled="">Year</option>
                <?php
                      for ($y=2020; $y < 2099 ; $y++) 
                      { ?>
                        <option value="<?= $y ?>"><?=$y; ?></option>
                        
                    <?php }?>

                <input type="hidden" name="branch" value="<?= $branch ?>">
                <input type="hidden" name="semester" value="<?= $semester ?>">
                   
                 </select>
                </h5>
              </div>
            </div>

            <br>
            <div class="row rows">
              <div class="col-sm-2"></div>
              <div class="col-sm-5">
                 <button id="button" class="btn btn-primary" name="submit">View</button>
            
              </div>
            </div>
          </div>
      
      <br>
    
                
          </div>
        </form>

    </div>
  </div>
    

     <?php  }   ?>
     






<style type="text/css">
  h5
  {
    padding: 10px;
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