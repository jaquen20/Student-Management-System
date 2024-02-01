<?php 
 $conn=mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));  

 $page =(isset($_GET['page']) && $_GET['page'] > 0) ? (int)$_GET['page']:1;

 $perpage = 3;

 $sel_query="SELECT * FROM `notification` LIMIT 30";
 $sel_query_res= mysqli_query($conn,$sel_query) or die(mysqli_error($conn));

 $row_data= mysqli_fetch_array($sel_query_res);
 echo $row_data;
?>