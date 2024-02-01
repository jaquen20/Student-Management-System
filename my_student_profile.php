<?php
    session_start();
      $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn)); 

      $userprofile=$_SESSION['user_id'];
      


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
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="student_home.php">Home</a></li>
                        <li class="active"><a href="my_student_profile.php">View Profile</a></li>
                         <li><a href="view_CT_student.php">View CT Marks</a></li>
                        
                        
                       <li><a href="change_student_pass.php">Change Password</a></li>
                        <a href="logout.php" ><button>Logout</button></a>
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
<br>
<body>
   <?php
                    if(isset($_REQUEST['status'])==true)
                    {
                      echo '<script>swal("Successfully Updated", "Press ok button!", "success");</script>';
                    }
                ?>

    <?php

             
                $sel_query="SELECT * FROM student WHERE user_id='$userprofile'";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              
               ($row_data= mysqli_fetch_array($sel_query_res));
             
     ?>

<div class="container">
  <div class="container">
  
  <div class="table-responsive ">

    <table class="table table-bordered table-hover">
        
          
          <tr>
            <td>Profile Picture</td>
            <th><img src="image/<?= $row_data['sno'].".".$row_data['image']?>" class="img"></td>
          </tr>

          <tr>
            <td>Name</td>
            
            <th><?= $row_data['name'] ?>
            

            </th>
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

          <tr>
            <td>DOB</td>
            <th><?= $row_data['dob'] ?></th>
          </tr>
          <tr>
            <td>Branch</td>
            <th><?= $row_data['branch'] ?></th>
          </tr>
          <tr>
            <td>Semester</td>
            <th><?= $row_data['sem'] ?></th>
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
            <td>Parent's Contact No</td>
            <th><?= $row_data['p_contact'] ?></th>
          </tr>

          <tr>
            <td>Address</td>
            <th><?= $row_data['address'] ?></th>
          </tr>

          <tr>
            <td>UserID</td>
            <th><?= $row_data['user_id'] ?></th>
          </tr>

          <!-- <tr>
            <td>Password</td>
            <th><?= $row_data['password'] ?></th>
          </tr>
 -->

          <tr>

            <td>Submission Date</td>
            <th><?= $row_data['date'] ?></th>
          </tr>
         <tr>

            <td>Action</td>
            <th> <a href="edit_student_profile.php?dataID=<?php echo $row_data['sno'] ?>"><button class="btn btn-primary">Edit</button></a>
            </th>
          </tr>
        

    </table>
</div>
</div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>
