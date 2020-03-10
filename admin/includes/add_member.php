<?php 

	if (isset($_POST['add_member'])) {
		$member_name=$_POST['member_name'];
		$gender=$_POST['gender'];
		$specialization=$_POST['specialization'];
		$licensenumber =$_POST['licensenumber'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		// $post_image=$_FILES['image']['name'];
		// $post_image_temp =$_FILES['image']['tmp_name'];
    

        $query ="INSERT INTO bw_galaxy.member (member_name, gender, specialization, licensenumber, email, password) 
            VALUES ('$member_name', '$specialization', '$licensenumber', '$doctor_email', '$password', '$gender', 'password')";
		
        $create_member_query = mysqli_query($connection, $query);

        if (!$create_member_query) {
        	die("connection failed".mysqli_error($connection));
        }else{
        	echo "New Member Added "."<a href='doctors.php'>View Members</a>";
        }

		
	}
 ?>



<form action="" method="post" enctype="multipart/form-data">
   <div class="col-xs-12">
	  <div class="col-xs-6">
			<div class="form-group">
				<label for="member_name">Member's name</label>
				<input type="text" name="member_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="gender">Gender</label>
				<input type="text" name="gender" class="form-control">
			</div>
			<div class="form-group">
				<label for="specialization">Specialization</label>
				<input type="text" name="specialization" class="form-control">
			</div>

			<div class="form-group">
				<label for="licensenumber">ID Number</label>
				<input type="text" name="licensenumber" class="form-control">
			</div>
			<!-- <div class="form-group">
				<label for="hospital_based">Hospital Based</label>
				<input type="text" name="hospital_based" class="form-control">
			</div> -->

			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="email" name="email" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="password">Password</label>
				<input type="text" name="password" class="form-control">
			</div>
			
			<div class="form-group">
				<input type="submit" name="add_member" class="btn btn-primary" value="Add New Member">
			</div>
			
    </div>
 </div>
</form>