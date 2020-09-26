<?php

	include 'dbcon.php';

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$file = $_FILES['image'];

		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$fileerror = $file['error'];

		if($fileerror == 0){
			$destfile = 'upload/'.$filename;
			move_uploaded_file($filepath, $destfile);

			$insertquery = "INSERT INTO imgupload (username, dob, gender, mobile, email, password, image) VALUES ('$username', '$dob', '$gender', '$mobile', '$email', '$password', '$destfile')";
			$query = mysqli_query($con, $insertquery);

			if($query){
				?>
				<script>
					alert("Login Successfully");
					location.replace("index.php");
				</script>
				<?php
			}else{
				?>
				<script>
					alert("Login Successfully");
					location.replace("index.php");
				</script>
				<?php
			}
			//header('Location: index.php');
		}
	}else{
		echo "No Button is Clicked";
	}

?>