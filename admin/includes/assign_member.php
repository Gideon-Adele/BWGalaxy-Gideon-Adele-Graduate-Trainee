<?php 
$assign_member = $_GET['assign_member'];

if (isset($_GET['edit_doctor'])) {

$query = "SELECT * FROM bw_galaxy.member";
$select_mem_by_id = mysqli_query($connection, $query);

foreach ($select_mem_by_id as $value) {
		$mem_id=$value['doctor_id'];
	    $member_name=$value['member_name'];
	    $gender=$value['gender'];
	    $specialization=$value['specialization'];
	    $licensenumber=$value['licensenumber'];
	    $email=$value['email'];	
  }	
}

	if (isset($_POST['sub_edit_doctor'])) {

		$doctor_name=$_POST['doctor_name'];
		$doctor_gender=$_POST['doctor_gender'];
		$specialization =$_POST['specialization'];
		$licensenumber=$_POST['licensenumber'];
		$doctor_email=$_POST['doctor_email'];
		

        $query ="UPDATE bw_galaxy.member SET ass_date = '$ass_date', due_date = '$due_date, task_name = '$task_name', s_descrip = '$s_descrip', d_descrip = '$d_descrip' WHERE id = $assign_member";
		$update_mem_query = mysqli_query($connection, $query);

        if (!$update_mem_query) {
        	die("connection failed".mysqli_error($connection));
        }

		
	}


?>


<form action="" method="post" enctype="multipart/form-data">
   <div class="col-xs-12">
	  <div class="col-xs-6">
	  	    <div class="form-group">
				<label for="s_date">Date Assigned</label>
				<input type="date" name="ass_date" class="form-control">
			</div>
			<div class="form-group">
				<label for="d_date">Due Date</label>
				<input type="date" name="due_date" class="form-control">
			</div>
			<div class="form-group">
				<label for="task_name">Assign Task</label>
				<input type="text" name="task_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="s_description">Short description</label>
				<input type="text" name="s_descrip" class="form-control">
			</div>

			<div class="form-group">
				<label for="d_description">Detailed description</label>
				<textarea name="d_descrip" class="form-control"></textarea>
			</div>
			
			
			<div class="form-group">
				<input type="submit" name="sub_task" class="btn btn-primary" value="Send Task">
			</div>
			
    </div>
 </div>
</form>