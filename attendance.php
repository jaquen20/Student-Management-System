<?php
    
      $conn=mysqli_connect('localhost','root','','hrm_db') or die(mysqli_error($conn));  


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDMS GPKGH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src= "bootstrap/js/jquery.js"></script>
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->																	
  <script src="bootstrap/js/bootstrap.js"></script><!--  -->
  <link rel="stylesheet" type="text/css" href="css/manual.css">
</head>

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
  padding-top:40px;

 }
  .logout
 {
  
  text-align: center;

 }
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

<body style="background-image: url('img/animal-dawn.jpg'); ">

  <div class="container-fluid">
    <div class="row" style="background-color: white;">
      <div class="col-sm-3">

        <img class="navbar-brand image" src="img/kghlogo.jpg" style="height: 180px; width: 180px;">

      </div>
      <div class="col-sm-6 " style="text-align: center;"><h3 style="font-family:Bahnschrift SemiBold;"><p class="text-success">EMPLOYEE DATABASE MANAGEMENT SYSTEM</p></h3>
        <h5>Govt. Polytechnic Khairagarh</h5><hr>
        <div><h4><small><marquee>Welcome to Employee Database Management System</marquee></small></h4></div>
      </div>
      <div class="col-sm-3">
        
        <img class="navbar-brand image" src="img/csvtulogo.jpg" style="height: 180px; width: 180px; float: right; margin-right: -20px; ">

      </div>
    </div>

  </div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark menubar">
  <!-- Brand -->
  <!-- <img class="navbar-brand image" src="img/kghlogo.jpg"> -->

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="adminhome.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewstaff.php">View Staff</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="addstaff.php">Add staff</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="managesalary.php">Add salary</a>
    </li>
   
    
    <li class="nav-item active">
      <a class="nav-link" href="attendance.php">Manage attendance</a>
    </li>

      <li class="nav-item">
      <a class="nav-link" href="view_leave.php">Manage leave</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="view_notification.php">Notifications</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="change_admin_pass.php">Change Password</a>
    </li>

  </ul>
  <div>
      <a href="adminlogin.php"><input type="submit" value="Logout"></a>
  </div>

</nav>

<br>

  <div class="container">
    <!-- <div class="col-xs-12"> -->
          <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Name</th>
              <th>User ID</th>
              <th>Action</th>
        
            </tr></thead>
            <tbody>

              <?php
                $sel_query="SELECT * FROM staff_tbl ORDER BY sno ASC";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              <td><?= $i ?></td>
              <td><?= $row_data['name'] ?></td>
              <td><?= $row_data['user_id'] ?></td>
              
              <td>
          <a href="view_attendance.php?dataID=<?= $row_data['user_id'] ?>"><button class="btn btn-success" style="border:1px solid lightgray; color:black;">view all attendance</button></a></td></td>
            

            </tr> <?php $i++; } ?>
          </tbody>
          </table>
          </div>

    </div>
  </div>


<footer style="margin-top: 219px;">
  
  <p>@ARun...,Bharat,Preeti,Chandana</p>
</footer>

</body>
</html>
