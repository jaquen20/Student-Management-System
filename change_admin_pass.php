<?php 


include 'header.php'; ?>


<style type="text/css">


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
            <div class="container-fluid">
                
                <nav class="nav-menu mobile-menu">
                   <ul>
                        <li><a href="adminhome.php">Home</a></li>
                        <li><a href="#">Add Records</a>
                            <ul class="dropdown">
                                <li><a href="addstaff.php">Add staff</a></li>
                                <li><a href="add_notification.php">Add Notification</a></li>
                              
                            </ul>
                        </li>
                        <li ><a href="#">View Records</a>
                            <ul class="dropdown">
                                 <li><a href="viewstaff.php">View Staff</a></li>
                                 <li><a href="view_student_admin.php">View Student</a></li>
                                <li><a href="adminlist.php">View Admins</a></li>
                                <li><a href="notification_list.php">Notification List</a></li>
                                 <li><a href="Registration_list.php">Registerd Student List</a></li>
                                
                            </ul>
                        
                         <li ><a href="#">Subject Allotement</a>
                            <ul class="dropdown">
                                <li><a href="subject_allot.php">Allot Subject</a></li>
                                <li><a href="view_subject.php">View Subject</a></li>
                              
                            </ul>
                        </li>
                       
                        <li><a href="student_registration.php">Student Registration</a></li>
                       
                        
                        <li  class="active"><a href="change_admin_pass.php">Change Password</a></li>
                        <a href="logout.php"><button>Logout</button></a>
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
<br>
        <?php
if(isset($_REQUEST['status'])==true)
{
  echo'<div class="print">Confirm password Not Match...</div>';
}
?>

<?php

    if(isset($_REQUEST['status2'])==true)
    {
      echo'<div class="print">Old password is wrong...</div>';
    }
?>
<div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <?php
                    if(isset($_REQUEST['status1'])==true)
                    {
                      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">Password Successfully Changed.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                         </div>';
                    }
                ?>
            </div>
        
        </div>

<form action="admin_pass_query.php" method="post" autocomplete="off" >

    <div class="container">
      <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="row rows">
        <div class="col-sm-3"><label>Old password:</label></div>
        <div class="col-sm-5"><input type="password"  name="txtold" class="box" minlength="4" maxlength="16" required></div>
      </div>
      <div class="row rows">
        <div class="col-sm-3"><label>New password:<label></div>
        <div class="col-sm-5"><input type="password"  name="txtnew" class="box" minlength="4" maxlength="16" required></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Confirm password:<label></div>
        <div class="col-sm-5"><input type="password"  name="txtconf" class="box" minlength="4" maxlength="16" required></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Security Question:<label></div>
        <div class="col-sm-5">  
          <select name="security" class="sel">
                <option value="A">What was your childhood nickname?</option>
                <option value="B">What is the name of your favorite childhood friend?</option>
                <option value="C">What was the last name of your third grade teacher?</option>
                <option value="D">What is the name of your favorite childhood teacher?</option>
                <option value="E">What was your dream job as a child?</option>

              </select></div>
      </div>
      <div class="row rows">
        <div class="col-sm-3"><label>Answer:<label></div>
        <div class="col-sm-5"><input type="text"  name="answer" class="box" minlength="4" maxlength="16" required></div>
      </div>
        <div class="row rows">
          <div class="col-sm-3"></div>
          <div class="col-sm-5"><button class="btn btn-success" style="border:1px solid lightgray; color:black;" name="sub-btn">Submit</button></div>
        </div>
    </div>
    <div class="col-sm-2"></div>

  </div>

</form>
</div>
<?php include 'footer.php'; ?>