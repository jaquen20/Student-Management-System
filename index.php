    <?php 
     $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  
     
    include("header.php"); 

    ?>

   <style type="text/css"> 
    .col-sm-3
    {
        padding: 20px;
    }
    .moving-body
    {
        padding-top: 4px;
        height: 300px;
        text-align: left;
    }
    a:hover 
    {   
        color:red;

    }
    
    .list-group-item
    {
        text-align: center;
    }
    .card-header
    {
        background-color:#6262623d;
    }


    </style>


          <div class="nav-item">
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 100%;">
                    <h4 align="center" class="card-header">
                             Important Links
                    </h4>
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="https://digvijay.onlineexamforms.com/" target="_new"> <!-- img src="img/log.jpg" alt="GDCR"  height="45" /-->Exam forms </a></li>
                        <li class="list-group-item"><a href="https://digvijay.onlineexamforms.com/result.aspx" target="_new"> Result</a></li>
                        <li class="list-group-item"><a href="http://www.csvtu.ac.in/" target="_new">Admission</a></li>
                        <li class="list-group-item"><a href="https://cgdte.in/" target="_new">scholership</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card kgh" style="width: 100%;">
                    <img class="card-img-top" style="padding: 5px;" src="img/clgbld.jpg" alt="Card image cap">
                    <div class="card-body">
                     <p class="card-text">Govt. Digvijay Autonomous Post Graduate College, founded in the 13 july 1957, has completed SIXTY years of its existence. The growth of the institution has been remarkable. The College today stands like a colossus, proud of the thousands of alumni that adorn positions of prominence in all walks of life, thanks to the education that they received in their alma mater. The Golden Jubilee of the College was an opportunity for everyone who had passed through its corridors to revisit their temple of learning and contribute to its growth to achieve greater glory. The college celebrated the Silver Jubilee in 1981-82. The college was conferred autonomous status by UGC in 1992-93. The college celebrated the Golden Jubilee in 2007.</p>
                </div>
            </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 100%;">
                    <h4 align="center" class="card-header">
                             Notifications
                    </h4>
                     <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <marquee  behavior="alternate" direction="up" scrollamount="8" class="moving-body"  onmouseover="this.stop();" onmouseout="this.start();">
                                <?php
                $sel_query="SELECT * FROM notification ORDER BY sno DESC limit 15";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
              $i=1;
              $dot=".";
              while ($row_data= mysqli_fetch_array($sel_query_res))
             {
                
              ?>
              <a href="download.php?dataID=<?= $row_data['filename'].$row_data['sno'].$dot.$row_data['notification'] ?>" class="noti">
              <?= $i ?>.
              <b><?= $row_data['description'] ?> </b>
              Upload Date: <label><b style="color:#dd6601;"><?=$row_data['date'] ?></b></label>
              </a><br>
              <br>


          
          <?php $i++; } ?>

                            </marquee>
                            <strong><a href="read_more.php" style="color: #575353;">View All Notifications</a></strong>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <br>
    <br>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
     
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank" data-toggle="modal" data-target="#myModal">SANDEEP VERMA</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->



<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">About Developer</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div><img src="img/35508.jpg"></div>
                        <div>Developer</div>
                        <div>Sandeep Verma</div>
                    </div>
                    <div class="col-sm-6"> 
                        <div><img src="img/35508.jpg"></div>
                        <div>Sandeep Verma</div>
                        <div>Sandeep Verma</div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div><img src="img/35508.jpg"></div>
                        <div>Sandeep Verma</div>
                        <div>Sandeep Verma</div>
                    </div>
                    <div class="col-sm-6"> 
                        <div> <img src="img/35508.jpg"></div>
                        <div>Sandeep Verma</div>
                        <div>Sandeep Verma</div>
                    </div>
                </div>


            </div>
          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



    



    <?php include("footer.php"); ?>





    









    