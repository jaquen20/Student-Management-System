<?php include 'header.php';
 $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  


?>
<style type="text/css">
	
	.tbl
	{
		text-align: center;
	}
</style>


          <div class="nav-item">
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        
                        <!-- <li><a href="#">Notes </a>
                            <ul class="dropdown">
                                <li><a href="#">CSE</a></li>
                                <li><a href="#">Electrical</a></li>
                                <li><a href="#">Mechanical</a></li>
                                <li><a href="#">ET&T</a></li>
                                <li><a href="#">Meta</a></li>
                                <li><a href="#">All Branch</a></li>
                            </ul>
                        </li> -->
                       
                        <li><a href="about.php">About</a></li>
                        <li><a href="#">Login</a>
                            <ul class="dropdown">
                                <li><a href="adminlogin.php">Admin</a></li>
                                <li><a href="stafflogin.php">Staff</a></li>
                                <li><a href="studentlogin.php">Student</a></li>
                                
                               
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
<br>

  <div class="container">
    <!-- <div class="col-xs-12"> -->
    	<h2 align="center">Notification List</h2><br>
          <div class="table-responsive">
          <table class="table table-bordered table-hover tbl">
            <thead class="thead-light">
              <tr>
               <th>Upload Date</th>
              <th>Name</th>
              <th>File Type</th>
             
              <th>Download</th>
        
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
            
              $dot=".";
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>

              <tr>
              
              <td><?= $row_data['date'] ?></td>
            
              <td align="left"><?= $row_data['description'] ?></td>
              <td><?= $row_data['notification'] ?></td>
              
              <td>
          <a href="download.php?dataID=<?= $row_data['filename'].$row_data['sno'].$dot.$row_data['notification'] ?>"><i class="fa fa-download" aria-hidden="true"></i></a> 
            

            </tr> <?php  } ?>
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
                       echo '<li class="page-item"><a class="page-link" href="read_more.php?page='.($page - 1).'">Prev</a></li>';
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
                        echo '<li class="page-item '.$active.'"><a class="page-link" href="read_more.php?page='.$i.'">'.$i.'</a></li>';
                      
                    }
                    if ($total_page > $page) 
                    {
                       echo '<li class="page-item"><a class="page-link" href="read_more.php?page='.($page + 1). '">Next</a></li>';
                    }
                    echo '</ul>';
                  }
                }
               
              ?>

              
             
               
          
                



          </div>

    </div>
  </div>



<?php include 'footer.php'; ?>