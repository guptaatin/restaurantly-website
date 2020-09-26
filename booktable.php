<?php

	include 'dbcon.php';

	if(isset($_POST['book'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$people = $_POST['people'];
		$message = $_POST['message'];
		
		$insertquery = "INSERT INTO booktable (name, email, phone, people, message) VALUES ('$name', '$email', '$phone', '$people', '$message')";
		$query = mysqli_query($con, $insertquery);

		if($query){
			?>
			<script>
				alert("Booked Successfully");
				location.replace("index.php");
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Booked Successfully");
				location.replace("index.php");
			</script>
			<?php
		}
		//header('Location: index.php');
	}else{
		echo "No Button is Clicked";
	}

?>