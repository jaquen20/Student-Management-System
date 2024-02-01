    <?php include("header.php"); ?>

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
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li ><a href="index.php">Home</a></li>
                        
                        
                       
                        <li><a href="./contact.html">About</a></li>
                        <li class="active"><a href="#">Login</a>
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
    <div class="container">
        <br>
        <div class="row">
        <div class="col-sm-2"></div>
        <h2>Student Register</h2>
       
        </div>
        <br>
        <div class="row">
          
          <div class="col-sm-4"></div>
           <?php
            if(isset($_REQUEST['status'])==true)
            {
              echo '<script>swal("Successfully Registered", "Press ok button!", "success");</script>';
              
            }
         ?>
          <?php
            if(isset($_REQUEST['status1'])==true)
            {
              echo '<script>swal("User ID is Already Registered", "Press ok button!", "info");</script>';
              
            }
         ?>
         <?php
            if(isset($_REQUEST['status2'])==true)
            {
              echo '<script>swal("Wrong Username & Password", "Press ok button!", "error");</script>';
              
            }
         ?>
        </div>

        


        <br>
        <form action="student_register_query.php" method="post" autocomplete="off" enctype="multipart/form-data">

    <div class="container">
      <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">

        <div class="row rows">
        <div class="col-sm-3"><label>User ID:</label></div>
        <div class="col-sm-5"><input type="text" name="userID" placeholder="Enter User Id"  class="box" maxlength="15" required></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Password:</label></div>
        <div class="col-sm-5"><input type="password" placeholder="Enter Password" name="txtpass" class="box" minlength="4" maxlength="16" required></div>
       </div>

       <div class="row">
          <div class="col-sm-3"></div>
        
        </div>

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
        <div class="col-sm-3"><label>Branch:<label></div>
        <div class="col-sm-5">
           <select name="branch" class="sel">
                <option selected disabled>choose</option>
                <option value="CSE">CSE</option>
                <option value="ET&T">ET&T</option>
                <option value="Electrical">Electrical</option>
                <option value="Metalergy">Metalergy</option>
                <option value="Mechanical">Mechanical</option>
              </select>
        </div>
      </div>
      <div class="row rows">
        <div class="col-sm-3"><label>Semester:<label></div>
        <div class="col-sm-5">
          <select name="sem" class="sel">
                <option selected disabled>choose</option>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6thx">6th</option>
              </select>
        </div>
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
        <div class="col-sm-3"><label>Parents Contact No:</label></div>
        <div class="col-sm-5"><input type="text" placeholder="Enter Contact Number" minlength="10" maxlength="10" name="pconno" class="box" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></div>
      </div>


       
       

       <div class="row rows">
        <div class="col-sm-3"><label>Address:</label></div>
        <div class="col-sm-5"><textarea name="address" class="box" required></textarea></div>
      </div>

     

       
     
     
       <div class="row rows">
          <div class="col-sm-3">Upload Image</div>
          <div class="col-sm-5"><input type="file" name="textImg" accept="jpeg,png,jpg"></div>
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





    









    