<?php
    session_start();
      $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn)); 

      $userprofile=$_SESSION['user_id'];
   
              $id=$_REQUEST['dataID'];
                $sel_query="SELECT * FROM staff_tbl WHERE sno='".$id."'";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              
               ($row_data= mysqli_fetch_array($sel_query_res))
?>

<?php include 'header.php'; ?>
 <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<style type="text/css">
    
@media only screen and (min-width: 1200px) and (max-width: 1920px) {
   
    .nav-item .nav-menu li a {
        padding: 16px 40px 15px;
    }
}
.glyphicon
{
  font-size: 20px;
  padding-left: 5px;
  padding-right: 5px;
}

</style>

          <div class="nav-item">
            <div class="">
                
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
                        
                         <li  class="active"><a href="#">Subject Allotement</a>
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
<div class="container">
   <h3 align="center">Allot Subject to <?= $row_data['name']; ?></h3>
   <br />
  
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Subject Name</th>
       <th>Subject Code</th>
       <th>Branch</th>
       <th>Year</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon"><b> + </b></span></button></th>
      </tr>
     </table>
     <div align="center">
      <input type="button" name="submit" id="submit"  class="btn btn-info" value="Submit" />
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<input type="hidden" name="staff_name[]" value="<?php echo $row_data['name']; ?>" class="form-control subject_name" />';
  html += '<input type="hidden" name="user_id[]" value="<?php echo $row_data['user_id']; ?>" class="form-control subject_name" />';
  html += '<td><input type="text" name="subject_name[]" placeholder="Enter Subject Name" class="form-control subject_name" /></td>';
  html += '<td><input type="text" name="subject_code[]" placeholder="Enter Subject Code" class="form-control subject_code" /></td>';
  html += '<td><select name="branch[]" class="form-control branch"><option selected disabled value="not selected">Select</option><option value="BCA">BCA</option><option value="BSc">BSc</option><option value="BA">BA</option><option value="MSc">MSc</option><option value="MA">MA</option></select></td>';
  html += '<td><select name="sem[]" class="form-control sem"><option selected disabled value="not selected">Select</option><option value="1st">1st</option><option value="2nd">2nd</option><option value="3rd">3rd</option></select></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus">-</span></button></td></tr>';
  $('#item_table').append(html);
 });
 
     $(document).on('click', '.remove', function(){
      $(this).closest('tr').remove();
     });
     
     $('#submit').click(function(){
                $.ajax({
                    async: true,
                    url: "add_subject_query.php",
                    method: "POST",
                    data: $('#insert_form').serialize(),
                    success:function(rt)
                    {
                        alert(rt);
                        $('#insert_form')[0].reset();
                    }
                });
        });
 
 
});
</script>

<?php include 'footer.php'; ?>

