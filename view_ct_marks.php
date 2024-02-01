<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  
  $userprofile=$_SESSION['user_id'];

    if (!$_SESSION['user_id']) 
    {
       header("location:index.php");
    }


?>

<?php include("header.php"); ?>

<style type="text/css">
   
    .name
    {
        font-size: 50px;
    }
    .rows{
            padding: 5px;
          }
         .box{
          width: 100%;
         }

         .sel
         {
          width: 100%;
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
     <div class="container" style="margin-top: 40px;">
        <h3 align="center">Select Branch and year for Add CT Marks</h3>
        <br>
        <form method="post" action="view_marks.php">
  
        <div class="row">
          <div class="col-sm-3"></div>
           <div class="col-sm-8">
            <div class="row rows">
              <div class="col-sm-3"><label>Select Branch:</label></div>
              <div class="col-sm-5">
                <select name="branch" class="sel" id="branch" onchange="myfun(this.value)">
                    <option selected="" disabled="">Choose</option>
                      <?php

                      $query="SELECT DISTINCT branch FROM subject_tbl WHERE user_id='$userprofile' ORDER BY branch ASC";
                      $query_res= mysqli_query($conn,$query) OR die(mysqli_error($conn));
        
                         while ($data= mysqli_fetch_array($query_res))
                          {  ?>
                     
                          <option value="<?= $data['branch'] ?>"><?= $data['branch'] ?></option>
                    <?php } ?>
                
              </select>
              </div>
            </div>
          
            <div class="row rows">
              <div class="col-sm-3"><label>Select year:</label></div>
              <div class="col-sm-5">
                <select name="sem" class="sel" id="dataget"  onchange="myfun2(this.value)">
                
                <option>Choose</option>
                
              </select>
              </div>
            </div>
            <div class="row rows">
              <div class="col-sm-3"><label>Select Subject:</label></div>
              <div class="col-sm-5">
                <select name="subject" class="sel" id="getsubject" onchange="myfun3(this.value)">
                
                <option>Choose</option>
                
              </select>
              </div>
            </div>
            <div class="row rows">
              <div class="col-sm-3"><label>Select CT No:</label></div>
              <div class="col-sm-5">
                <select name="CT" class="sel" id="ct">
                
                <option>Choose</option>
                <option value="1">CT-1</option>
                <option value="2">CT-2</option>
                
              </select>
              </div>
            </div>
            <div class="row rows">
                <div class="col-sm-3"></div>
                <div class="col-sm-2"><button class="btn btn-success" style="border:1px solid lightgray; color:black; width: 100%;" name="submit">View</button></div>
            </div>
              
          </div>
        </div>
           
    </div>
<script type="text/javascript">
      function myfun(datavalue) 
      {
        $.ajax({
          url: 'class_test.php',
          type: 'POST',
          data:{ datapost : datavalue},
          success:function(result){
            $('#dataget').html(result);
          }

        });
      }
      function myfun2(datavalue) 
      { 
        var branch = $('#branch').val();
        $.ajax({
          url: 'class_test.php',
          type: 'POST',
          data:{ datasubject : datavalue , databranch : branch },
          success:function(result){
            $('#getsubject').html(result);
          }

        });
      }
    
    </script>
     <?php include("footer.php"); ?>

