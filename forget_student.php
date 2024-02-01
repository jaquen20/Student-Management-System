<?php include("header.php"); ?>
<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);



.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}
.sel
 {
  width: 100%;
 }

  .rows{
    padding: 5px;
  }
 .box{
  width: 100%;
 }
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="text"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
} 	
</style>

<div class="nav-item">
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        
                        
                        <li><a href="about.php">About</a></li>
                        <li  class="active"><a href="#"ss>Login</a>
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
   
  <h2 style="margin-left: 200px;">Forget Password</h2>
  <br>
  <br>
  
<form action="forgot_student_query.php" method="post" autocomplete="off">

    <div class="container">
      <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <?php
if(isset($_REQUEST['status'])==true)
{
  echo '<script>swal("Confirm password Not Match...", "Press ok button!", "info");</script>';
                    
}
?>
<?php

    if(isset($_REQUEST['status2'])==true)
    {

          echo '<script>swal("Wrong Username and Security Question??", "Press ok button!", "error");</script>';
    }
?>


      <div class="row rows">
        <div class="col-sm-3"><label>Username:</label></div>
        <div class="col-sm-5"><input type="text"  name="uname" class="box" minlength="4" maxlength="16" required></div>
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
        <div class="col-sm-3"><label>New password:<label></div>
        <div class="col-sm-5"><input type="password" id="pwd" name="txtnew" class="box" minlength="4" maxlength="16" required></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Confirm password:<label></div>
        <div class="col-sm-5"><input type="password" id="cpwd"  name="txtconf" class="box" minlength="4" maxlength="16" required><div id="show_error"></div>
        </div>
        
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
<?php
      if(isset($_REQUEST['status1'])==true)
      {
        echo '<script>swal("Wrong username & password", "Press ok button!", "error");</script>';
      }
    ?>
    <?php
      if(isset($_REQUEST['status'])==true)
      {
        echo '<script>swal("Wrong username & password", "Press ok button!", "error");</script>';
      }
    ?>

<?php include("footer.php"); ?>
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