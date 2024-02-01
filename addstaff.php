  <?php 
 

  include("header.php"); ?>


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
                        <li  class="active"><a href="#">Add Records</a>
                            <ul class="dropdown">
                                <li><a href="addstaff.php">Add staff</a></li>
                                <li><a href="add_notification.php">Add Notification</a></li>
                              
                            </ul>
                        </li>
                        <li><a href="#">View Records</a>
                            <ul class="dropdown">
                                 <li><a href="viewstaff.php">View Staff</a></li>
                                 <li><a href="view_student_admin.php">View Students</a></li>
                                <li><a href="adminlist.php">View Admins</a></li>
                                <li><a href="notification_list.php">Notification List</a></li>
                                 <li><a href="Registration_list.php">Registerd Student List</a></li>
                                
                            </ul>
                        
                         <li><a href="#">Subject Allotement</a>
                            <ul class="dropdown">
                                <li><a href="subject_allot.php">Allot Subject</a></li>
                                <li><a href="view_subject.php">View Subject</a></li>
                              
                            </ul>
                        </li>
                       
                        <li><a href="student_registration.php">Student Registration</a></li>
                       
                        
                        <li><a href="change_admin_pass.php">Change Password</a></li>
                        <a href="logout.php"><button>Logout</button></a>
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

<br>

<form action="addstaff_query.php" method="post" autocomplete="off" enctype="multipart/form-data">

    <div class="container">
       <br>
        <div class="row">
        <div class="col-sm-2"></div>
        <h2>Add Staff</h2>
       
        </div>
        <br>
       <div class="row">
          <div class="col-sm-2"></div>
           <?php
            if(isset($_REQUEST['status'])==true)
            {
              echo'<div class="alert alert-success alert-dismissible fade show" role="alert">Successfully Added.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
            }
            if(isset($_REQUEST['status1'])==true)
            {
              echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">User ID is already Registerd.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
            }
         ?>
        </div>
        <input type="hidden" name="status" value="staff">
      <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="row rows">
        <div class="col-sm-3"><label>Name:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter First name" name="txtname" class="box" required></div>
      </div>
      <div class="row rows">
        <div class="col-sm-3"><label>Fathers name:<label></div>
        <div class="col-sm-5"><input type="text" placeholder=" Enter Fathers name" name="txtfname" class="box" required></div>
      </div>
      
       <div class="row rows">
        <div class="col-sm-3"><label>Gender:<label></div>
        <div class="col-sm-5"><input type="radio"  name="gender" value="1" required>Male
        <input type="radio"  name="gender" value="2" required>Female
        <input type="radio"  name="gender" value="3" required>Transgender
      </div>
       
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Date of Birth:</label></div>
        <div class="col-sm-5"><input type="date" name="DOB" class="box" required></div>
      </div> 
      <div class="row rows">
        <div class="col-sm-3"><label>Date of Joining:</label></div>
        <div class="col-sm-5"><input type="date" name="DOJ" class="box" required></div>
      </div> 
      <div class="row rows">
        <div class="col-sm-3"><label>Designation:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Designation" name="txtdesign" maxlength="15" class="box" required></div>
      </div>
      <div class="row rows">
        <div class="col-sm-3"><label>Department:<label></div>
        <div class="col-sm-5">
          <select name="branch" class="sel">
                <option selected disabled>choose</option>
                <option value="BCA">BCA</option>
                <option value="BSc">BSc</option>
                <option value="BA">BA</option>
                <option value="MSc">MSc</option>
                <option value="MA">MA</option>

              </select></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Email:</label></div>
        <div class="col-sm-5"><input type="email" placeholder="Enter Email" name="txtemail" maxlength="30" class="box" required></div>
      </div>

       <div class="row rows">
        <div class="col-sm-3"><label>Contact No:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Contact Number" minlength="10" maxlength="10" name="conno" class="box" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></div>
      </div>

        <div class="row rows">
        <div class="col-sm-3">Aadhar No.</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Aadhar Number" name="aadharno" minlength="12" maxlength="12" class="box" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></div>
      </div>
       

       <div class="row rows">
        <div class="col-sm-3"><label>Address:</label></div>
        <div class="col-sm-5"><textarea name="address" class="box" required></textarea></div>
      </div>

     

       
       <div class="row rows">
        <div class="col-sm-3"><label>User ID:</label></div>
        <div class="col-sm-5"><input type="text" name="userID" placeholder="Enter User Id"  class="box" maxlength="15" required></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Password:</label></div>
        <div class="col-sm-5"><input type="password" placeholder="Enter Password" name="txtpass" class="box" minlength="4" maxlength="16" required></div>
       </div>
     
       <div class="row rows">
          <div class="col-sm-3">Upload Image</div>
          <div class="col-sm-5"><input type="file" name="textImg" accept="all"></div>
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


<?php include("footer.php"); ?>


</body>
</html>