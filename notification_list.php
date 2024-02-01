<?php include 'header.php';
 $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

 if(isset($_GET['rowid']))
  {
    $data_id= $_GET['rowid'];
    $del_query="DELETE FROM `notification` WHERE sno='$data_id'";
    $del_query_res= mysqli_query($conn,$del_query);

    if($del_query_res)
    {
      header("location:notification_list.php");

    }
    else
    {
      echo (mysqli_error($conn))."data not delete...<a href='viewstaff.php'>back to list</a>";
    }

    }

?>
<style type="text/css">
	
	.tbl
	{
		text-align: center;
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
                                 <li><a href="view_student_admin.php">View Student</a></li>
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

  <div class="container">
    <!-- <div class="col-xs-12"> -->
    	<h2 align="center">Notification List</h2><br>
          <div class="table-responsive">
          <table class="table table-bordered table-hover tbl">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Uploader</th>
              <th>UserID</th>
              <th>Notification</th>
              <th>File Type</th>
              <th>Upload Date</th>
              <th>Action</th>
        
            </tr></thead>
            <tbody>

              <?php

                 //for pagination
                    $limit=20;
                  
                    if (isset($_GET['page'])) 
                    {
                      $page= $_GET['page'];
                    }
                    else
                    {
                      $page=1;
                    }
                    $offset=($page - 1) * $limit;



                $sel_query="SELECT * FROM notification ORDER BY date DESC LIMIT {$offset},{$limit }";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              $dot=".";
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              <td><?= $offset+1 ?></td>
              
              <td><?= $row_data['name'] ?></td>
              <td><?= $row_data['user_id'] ?></td>
              <td><?= $row_data['description'] ?></td>
              <td><?= $row_data['notification'] ?></td>
              <td><?= $row_data['date'] ?></td>
              <td><a href="?rowid=<?=$row_data['sno']?>"><i class="fa fa-trash" aria-hidden="true"></i></a> || 
          <a href="download.php?dataID=<?= $row_data['filename'].$row_data['sno'].$dot.$row_data['notification'] ?>"><i class="fa fa-download" aria-hidden="true"></i></a> 
            

            </tr> <?php $offset++; } ?>
          </tbody>
          </table>
                  <?php
                  $select= "SELECT * FROM notification";
                  $result= mysqli_query($conn,$select) or die("failed");

                  if (mysqli_num_rows($result) > 0) 
                  {
                    $total_records=mysqli_num_rows($result); 
                   
                    $total_page = ceil($total_records/$limit);
             if ($total_records > 20) 
             {
                      
                    
                    echo '<ul class="pagination justify-content-center">';

                    if ($page > 1) 
                    {
                       echo '<li class="page-item"><a class="page-link" href="notification_list.php?page='.($page - 1).'">Prev</a></li>';
                    }
                   
                    for ($i=1; $i <= $total_page; $i++) 
                    { 
                      if ($i==$page) 
                      {
                        $active="active";
                      }
                      else
                      {
                         $active="";
                      }
                        echo '<li class="page-item '.$active.'"><a class="page-link" href="notification_list.php?page='.$i.'">'.$i.'</a></li>';
                      
                    }
                    if ($total_page > $page) 
                    {
                       echo '<li class="page-item"><a class="page-link" href="notification_list.php?page='.($page + 1). '">Next</a></li>';
                    }
                    echo '</ul>';
                  }
                }
               
              ?>

          </div>

    </div>
  </div>



<?php include 'footer.php'; ?>