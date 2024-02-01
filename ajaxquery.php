<?php
	$conn = mysqli_connect('localhost','root','','sms') or die(mysqli_error($conn));

	extract($_POST);// $var = $_POST['fname']; for all
	//Insert Records
	if (isset($_POST['records'])&& isset($_POST['branch']) && isset($_POST['semester'])) 
	{
		$data = ' <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
              <th>SNo</th>
              <th>Profile</th>
              <th>Name</th>
              <th>Branch</th>
              <th>Year</th>
              <th>Action</th>
        
            </tr></thead>';
				 
		$sel_query="SELECT * FROM student WHERE branch='$branch' && sem = '$semester' ORDER BY sno ASC";
                $sel_query_res= mysqli_query($conn,$sel_query) OR die(mysqli_error($conn));
		if (mysqli_num_rows($sel_query_res) > 0) 
		{
			$i = 1;  
			while ($row = mysqli_fetch_array($sel_query_res)) 
			{	
				$image =  $row['sno'].".".$row['image'];
			
				$data .='<tr>
							<td>'.$i.'</td>
							<td><img src="image/'.$image.'"  class="img"></td>
							<td>'.$row['name'].'</td>
							<td>'.$row['branch'].'</td>
							<td>'.$row['sem'].'</td>
							<td>
								<button onclick="GetUserDetails('.$row['sno'].')" class="btn btn-warning">view</button>
							
								<button onclick="DeleteUser('.$row['sno'].')" class="btn btn-danger">Delete</button>
							</td>

						</tr>';
						$i++;

			}
		}
		$data.='</table>';
		echo $data;
	} 
	//delete records
	if (isset($_POST['deleteid'])) 
	{
		$userid = $_POST['deleteid'];
		$del_query = "DELETE FROM student WHERE sno ='$userid'";
		 mysqli_query($conn,$del_query);
	}
	//delete records
	if (isset($_POST['id'])) 
	{
		$userid = $_POST['id'];
		$query = "SELECT * FROM student WHERE sno ='$userid'";
		$result = mysqli_query($conn,$query);
		$row_data = mysqli_fetch_array($result);	
		$profile =  $row_data['sno'].".".$row_data['image'];
						if($row_data["gender"] == 1)
			            {
			             
			              $gender= "Male";
			            }
			            else
			            {
			              if($row_data["gender"] == 2)
			              {
			                $gender= "Female";
			              }
			               else
			              {
			                $gender= "Transgender";
			              }
			            }
			
		$view ='<table class="table table-bordered table-hover" id="tbl">
        
          
			          <tr>
			            <td>Profile Picture</td>
			           <td><img src="image/'.$profile.'"  class="img"></td>
			          </tr>

			          <tr>
			            <td>Name</td>
			            
			            <th>'. $row_data['name'].'
			            
			            </th>
			          </tr>

			          <tr>
			            <td>Fathers name</td>
			            <th>'. $row_data['f_name'].'</th>
			          </tr>

			          <tr>
			            <td>Gender</td>
			            <th>'. $gender.'</th>
			          </tr>

			          <tr>
			            <td>DOB</td>
			            <th>'.$row_data['dob'].'</th>
			          </tr>
			          <tr>
			            <td>Branch</td>
			            <th>'.$row_data['branch'].'</th>
			          </tr>
			          <tr>
			            <td>Year</td>
			            <th>'.$row_data['sem'].'</th>
			          </tr>
			          
			        

			          <tr>
			            <td>Contact No</td>
			             <th>'.$row_data['contact'].'</th>
			          </tr>

			          <tr>
			            <td>Email</td>
			             <th>'.$row_data['email'].'</th>
			          </tr>

			          <tr>
			            <td>Parents Contact No</td>
			             <th>'.$row_data['p_contact'].'</th>
			          </tr>

			          <tr>
			            <td>Address</td>
			             <th>'.$row_data['address'].'</th>
			          </tr>

			          <tr>
			            <td>UserID</td>
			             <th>'.$row_data['student_id'].'</th>
			          </tr>

			 

			          <tr>

			            <td>Submission Date</td>
			             <th>'.$row_data['date'].'</th>
			          </tr>
			       
			        

			  
		</table>';
		echo $view;

	}

?>