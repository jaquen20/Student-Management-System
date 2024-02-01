<?php
  
  session_start();
  $conn = mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));

  if(isset($_POST['submit']))
{ 

  $User_Id =$_POST['uname'];
  $Password =$_POST['pwd'];


  $sel_query ="SELECT * FROM `student` WHERE user_id='$User_Id' && password = '$Password'";
  $sel_query_res= mysqli_query($conn,$sel_query) or die(mysqli_error($conn));


  
   $total=mysqli_num_rows($sel_query_res);

   echo $total;

   if($total==1)
   {  
    $_SESSION['user_id']=$User_Id;
    header('location:student_home.php?status1=success');
   }
   else
   {
    header("location:studentlogin.php?status=wrong email password");
   }
  

}


?>