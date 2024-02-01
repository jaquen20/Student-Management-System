<?php
$connect = mysqli_connect('localhost', 'root', '', 'sms');



for($i = 0; $i < count($_POST['subject_name']); $i++)
{
    $staff_name = mysqli_real_escape_string($connect, $_POST['staff_name'][$i]);
    $user_id = mysqli_real_escape_string($connect, $_POST['user_id'][$i]);
    $subject_name = mysqli_real_escape_string($connect, $_POST['subject_name'][$i]);
    $subject_code = mysqli_real_escape_string($connect, $_POST['subject_code'][$i]);
    $branch = mysqli_real_escape_string($connect, $_POST['branch'][$i]);
    $semester = mysqli_real_escape_string($connect, $_POST['sem'][$i]);

    if (empty(trim($subject_name))) continue;

    $sql = "INSERT INTO subject_tbl(staff_name,user_id,subject_name, subject_code, branch, semester)
            VALUES('$staff_name','$user_id','$subject_name', '$subject_code', '$branch', '$semester')";
    mysqli_query($connect, $sql);
}

if(mysqli_error($connect))
{
    echo "Data base error occured";
}
else
{
    echo $i . " rows added";
}

?>