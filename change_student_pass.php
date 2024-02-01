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
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="student_home.php">Home</a></li>
                        <li><a href="my_student_profile.php">View Profile</a></li>
                         <li><a href="view_CT_student.php">View CT Marks</a></li>
                        
                        
                       <li class="active"><a href="change_student_pass.php">Change Password</a></li>
                        <a href="logout.php" ><button>Logout</button></a>
                        
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
   echo '<script>swal("Confirm Password Not Matched", "Press ok button!", "info");</script>';
                    
}
?>

<?php

    if(isset($_REQUEST['status2'])==true)
    {
       echo '<script>swal("Old Password is Wrong!!", "Press ok button!", "error");</script>';
                    
    }
?>
<div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <?php
                    if(isset($_REQUEST['status1'])==true)
                    {
                       echo '<script>swal("Password Successfully Changed", "Press ok button!", "success");</script>';
                    
                    }
                ?>
            </div>
        
        </div>

<form action="student_pass_query.php" method="post" autocomplete="off" >

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
        <div class="col-sm-5"><input type="password"  name="txtnew" class="box" minlength="4" maxlength="16" required id="pwd"></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Confirm password:<label></div>
        <div class="col-sm-5"><input type="password"  name="txtconf" class="box" minlength="4" maxlength="16" required id="cpwd">
        <div id="show_error"></div>
      </div>
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
          <div class="col-sm-5"><button class="btn btn-success" style="border:1px solid lightgray; color:black;" name="sub-btn" id="Submit">Submit</button></div>
        </div>
    </div>
    <div class="col-sm-2"></div>

  </div>

</form>
</div>
<?php include 'footer.php'; ?>

<script>
    $(document).ready(function(){

      
      $('#Submit').click(function(){
        
        var pass = $('#pwd').val();
        var cpass = $('#cpwd').val();
     
          if (pass!=cpass)
          {
            $('#show_error').html('**  Confirm Password Not Match. ');
            $('#show_error').css('color','red');
            return false;
          }
          
        
        
      });
      
    });

  </script>