
<?php include("header.php"); ?>
<style type="text/css">
  /**
 * 01/28/2016
 * This pen is years old, and watching at the code after all
 * those years made me fall from my chair, so I:
 * - changed all IDs to classes
 * - converted all units to pixels and em units
 * - changed all global elements to classes or children of
 *   .login
 * - cleaned the syntax to be more consistent
 * - added a lot of spaces that I so hard tried to avoid
 *   a few years ago
 *   (because it's cool to not use them)
 * - and probably something else that I can't remember anymore
 *
 * I sticked to the same philosophy, meaning:
 * - the design is almost the same
 * - only pure HTML and CSS
 * - no frameworks, preprocessors or resets
 */

/* 'Open Sans' font from Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);



.sel
 {
  width: 100%;
 }
 .rows
 {
  padding: 5px;
 }
 .box{
  width: 100%;
 }
</style>

<div class="nav-item">
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        
                        <!-- <li><a href="#">Notes </a>
                            <ul class="dropdown">
                            </ul>
                        </li> -->
                       
                        <li><a href="./contact.html">About</a></li>
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
    <br>
    <br>
<form action="student_forget_query.php" method="post" autocomplete="off">

    <div class="container">
      <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <?php
if(isset($_REQUEST['status'])==true)
{
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">Confirm Password Not Matched
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
}
?>

<?php
if(isset($_REQUEST['status1'])==true)
{
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">Successfull
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                  </div>';
}
?>

<?php

    if(isset($_REQUEST['status2'])==true)
    {
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">wrong <strong>username</strong> and <strong>security Question...</strong>???
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>';
    }
?>
  <h2>Forget Password</h2>
  <br>
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
        <div class="col-sm-5"><input type="password"  name="txtnew" class="box" minlength="4" maxlength="16" required></div>
      </div>
       <div class="row rows">
        <div class="col-sm-3"><label>Confirm password:<label></div>
        <div class="col-sm-5"><input type="password"  name="txtconf" class="box" minlength="4" maxlength="16" required></div>
      </div>
        <div class="row rows">
          <div class="col-sm-3"></div>
          <div class="col-sm-5"><button class="btn btn-success" style="border:1px solid lightgray; color:black;" name="sub-btn">Submit</button></div>
        </div>
    </div>
    <div class="col-sm-2"></div>

  </div>

</form>
<?php include 'footer.php'; ?>