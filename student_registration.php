
<?php include 'header.php'; ?>
<style type="text/css">


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
                       
                        <li  class="active"><a href="student_registration.php">Student Registration</a></li>
                       
                        
                        <li><a href="change_admin_pass.php">Change Password</a></li>
                        <a href="logout.php"><button>Logout</button></a>
                        
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
<br>

<form action="Registration_query.php" method="post" autocomplete="off" id="myform">

    <div class="container">
       <br>
        <div class="row">
        <div class="col-sm-2"></div>
        <h2>Student Registration</h2>
       
        </div>
        <br>
       <div class="row">
          <div class="col-sm-2"></div>
           <?php
            if(isset($_REQUEST['status'])==true)
            {
              echo'<div class="alert alert-success alert-dismissible fade show" role="alert">Successfully Registerd.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
            }
            if(isset($_REQUEST['status1'])==true)
            {
              echo'<div class="alert alert-danger alert-dismissible fade show" role="alert"> User ID is already Registerd.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
            }
         ?>
        </div>
        
      <div class="row">
    <div class="col-sm-2"></div>
     <div class="col-sm-8">
      <div class="row rows">
        <div class="col-sm-3"><label>Name:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Student name" name="name" class="box" required oninput="this.value = this.value.replace(/[^A-z a-z/.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></div>
      </div>
    
      <div class="row rows">
        <div class="col-sm-3"><label>Branch:</label></div>
        <div class="col-sm-5">
        <select name="branch" class="sel">
                <option selected disabled>choose</option>
                <option value="BCA">BCA</option>
                <option value="BSc">BSc</option>
                <option value="BA">BA</option>
                <option value="MA">MA</option>
                <option value="MSc">MSc</option>

              </select></div>
      </div>

      <div class="row rows">
          <div class="col-sm-3">User ID:</div>
          <div class="col-sm-5"><input type="text"  placeholder="Enter User ID" name="uid" id="uid" required class="box"></div>
        </div>
        <div class="row rows">
          <div class="col-sm-3">Password:</div>
          <div class="col-sm-5"><input type="text"  placeholder="Enter Password" name="password" required class="box"></div>
        </div>
        <div class="row rows">
          <div class="col-sm-3">Session:</div>
          <div class="col-sm-5"><input type="text" id="session"  placeholder="Enter Session Year"  maxlength="7"  name="session" required class="box" oninput="this.value = this.value.replace(/[^0-9-]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">(eg.- 2020-24)</div>
          <div id="show_error"></div>
        </div>
        
        <div class="row rows">
          <div class="col-sm-3"></div>
          <div class="col-sm-5">
            <button class="btn btn-success" style="border:1px solid lightgray; color:black;" name="sub-btn" id="Submit">Submit</button></div>
        </div>
    </div>
    <div class="col-sm-2"></div>

  </div>

</form>

<script>
    $(document).ready(function(){

      
      $('#Submit').click(function(){
        var session = $('#session').val();
        if (session == "") 
        {
          $('#show_error').html('**Username is Required');
          $('#show_error').css('color','red');
          return false;
        }
        else
        {
          if ((session.length <= 7 || session.length >= 7 ))
          {

            $('#show_error').html('**Session length must be 7 Character. ');
            $('#show_error').css('color','red');
            return false;
          }
        }
       
      });
      
    });

  </script>

<?php include("footer.php"); ?>