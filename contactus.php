<?php

	include 'dbcon.php';

	if(isset($_POST['contact'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$insertquery = "INSERT INTO contactus (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
		$query = mysqli_query($con, $insertquery);

		if($query){
			?>
			<script>
				alert("Send Successfully");
				location.replace("index.php");
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Send Successfully");
				location.replace("index.php");
			</script>
			<?php
		}
		//header('Location: index.php');
	}else{
		echo "No Button is Clicked";
	}

?>