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
</style>


          <div class="nav-item">
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="student_home.php">Home</a></li>
                        <li><a href="my_student_profile.php">View Profile</a></li>
                         <li><a href="view_CT_student.php">View CT Marks</a></li>
                        
                        
                       <li><a href="change_student_pass.php">Change Password</a></li>
                        <a href="logout.php" ><button>Logout</button></a>
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <?php
                    if(isset($_REQUEST['status1'])==true)
                    {
                      
                    }
                ?>
            </div>
        
        </div>
         <?php
                $sel_query="SELECT * FROM student WHERE user_id='$userprofile'";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
                ($row_data= mysqli_fetch_array($sel_query_res))
         ?>
       <center><h2>Welcome</h2>
        
        <b class="name"><?= $row_data['name'] ?></b>

        <br>
        <br>
       
              

        </center> 
        
    </div>

    <?php include("footer.php"); ?>

    