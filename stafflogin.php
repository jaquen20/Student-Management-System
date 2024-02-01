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
    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Staff Login</h2>

  <form class="login-container" method="post" action="staff_login_query.php">
    <p><input type="text" name="uname" placeholder="Username"></p>
    <p><input type="password" name="pwd" placeholder="Password"></p>
    <div align="center"><a href="forget_staff.php">Forget Password</a></div>
    <p><input type="submit" name="submit"></p>
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
     <?php
    if(isset($_REQUEST['status4'])==true)
    {
      echo '<script>swal("Password Successfully Changed", "Press ok button!", "success");</script>';
                        
    }
    ?>

<?php include("footer.php"); ?>