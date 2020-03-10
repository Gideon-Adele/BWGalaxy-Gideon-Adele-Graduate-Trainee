<?php 
$query ="SELECT * FROM bw_galaxy.member WHERE id='$id'";
$select_query= mysqli_query($connection, $query);
    foreach ($select_query as $value) {
            $id= $value['id'];
           }

$query_doc ="SELECT * FROM bw_galaxy.member WHERE id ='$id'";
$select_mem = mysqli_query($connection, $query_doc);
	foreach ($select_mem as $value) {
            $member_name = $value['member_name'];
           }

	
	if (isset($_POST['add_task'])) {

		$task_done = $_POST['task_done'];
		$final_report =$_POST['final_report'];

        $query ="UPDATE bw_galaxy.member SET task_done = '$task_done', final_report = '$final_report'  WHERE id = $id";
		
        $create_query = mysqli_query($connection, $query);

        if (!$create_query) {
        	die("connection failed".mysqli_error($connection));
        }else{
        	echo "Task Updated";
        }
		
	}
 ?>



<form action="" method="post" enctype="multipart/form-data">
   <div class="col-xs-12">
	  <div class="col-xs-6">
			<div class="form-group">
				<label for="symptoms">Task performed</label>
				<input type="text" name="task_done" class="form-control">
			</div>
			
					
			<div class="form-group">
				<label for="doctor_report">Final Report on task performed</label>
				<textarea class="form-control" name="final_report" style="height: 100px;"></textarea>
				
			</div>
			<div class="form-group">
				<input type="submit" name="add_task" class="btn btn-primary" value="Send Reports">
			</div>
			
    </div>
 </div>
</form>