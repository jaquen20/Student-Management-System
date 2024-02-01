<?php
  session_start();
   $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

  
  $userprofile=$_SESSION['user_id'];

    if (!$_SESSION['user_id']) 
    {
       header("location:index.php");
    }


    if(isset($_POST['submit']))
    {
      $branch=$_POST['branch'];
      $semester=$_POST['semester'];
      
    }
     if(isset($_GET['rowid']))
     {
        $data_id= $_GET['rowid'];
        $del_query="DELETE FROM `student` WHERE sno='$data_id'";
        $del_query_res= mysqli_query($conn,$del_query);
     }

?>

<?php include("header.php"); ?>
<style type="text/css">
    
@media only screen and (min-width: 1200px) and (max-width: 1920px) {
   
    .nav-item .nav-menu li a {
        padding: 16px 35px 15px;
    }
  }
  .img
  {
    width: 60px;
    height: 60px;
  }

  table
  {
    text-align: center;
  }
  #tbl td, #tbl th {
    padding: 3px;
     padding-left: 20px;
  }
  #tbl
  {
    text-align: left;
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
                        <li  class="active"><a href="#">View Records</a>
                            <ul class="dropdown">
                                 <li><a href="viewstaff.php">View Staff</a></li>
                                 <li><a href="view_student_admin.php">View student</a></li>
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
    <!-- Header End -->
    <div class="container" style="margin-top: 40px;">
        <h2 align="center">Student List</h2>
        <br>
        <div id="records_contant" class="table-responsive">
         
           
        </div>
       
           
    </div>
    <!-- Update Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Student Profile</h5>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body table-responsive" id="show_profile" >
                  
              </div>
             
            </div>
            
          </div>
        </div>


 
   

    <?php include("footer.php"); ?>

  <script type="text/javascript">
   $(document).ready(function(){
    readRecords();  //page load k sath data show krne k liye
  });
    //for select and show data
  function readRecords()  
  {
    var records = "readrecords";
    var branch = "<?php echo $branch; ?>";
    var semester = "<?php echo $semester; ?>";
    $.ajax({
      url: "ajaxquery.php",
      type : "post",
      data:
      {   
        records:records,
        semester:semester,
        branch:branch
      },
      success:function(data,status)
      {
        $('#records_contant').html(data); 
      }
    });

  }
  //for delete record
  function DeleteUser(deleteid)
  {
    var conf = confirm("Are You Sure..??");
    if (conf==true)
    {
      $.ajax({
        url:"ajaxquery.php",
        type: "post",
        data:{ deleteid:deleteid },
        success:function(data,status)
        {
          readRecords();
        }
      });
    }
  }

  function GetUserDetails(id)
  {
    $('#myModal').modal("show");
    $.ajax({
        url:"ajaxquery.php",
        type: "post",
        data:{ id:id },
        success:function(data,status)
        {
          $('#show_profile').html(data);
        }
      });
  }


  </script>




    









    