<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<?php include 'links/links.php'; ?>
<!--	<?php include 'style/style.php'; ?> -->
	<link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
</head>
<body>
	
	<div class="card bg-light">
		
		<article class="card-body mx-auto" style="max-width: 400px;">
		
				<h4 class="card-title mt-3 text-center">Create Account</h4>
			
				<p class="text-center">Get started with your free account</p>
				
			<form action="upload.php" method="POST" enctype="multipart/form-data">
						
				<div class="form-group input-group">
				
					<div class="input-group-prepend">
					
						<span class="input-group-text"><i class="fa fa-user"></i></span>
					
					</div>
				
					<input type="text" class="form-control" name="username" placeholder="Full Name" required autocomplete="off">
				
				</div>

				<div class="form-group input-group">
				
					<div class="input-group-prepend">
					
						<span class="input-group-text"><i class="fa fa-user"></i></span>
					
					</div>
				
					<input type="text" class="form-control" id="dateRangePicker" name="dob" placeholder="dob">
				
				</div>

				<div class="form-group input-group">
				
					<div class="input-group-prepend">
					
						<span class="input-group-text"><i class="fa fa-user"></i></span>
					
					</div>
				
					<!--<input type="text" class="form-control" name="gender" placeholder="gender" required autocomplete="off">-->
					
					<select class="form-control" name="gender" placeholder="gender" >
						<option>--Select Your Gender--</option>
						<option>Male</option>
						<option>Female</option>
					</select>
				
				</div>
				
				<div class="form-group input-group">
				
					<div class="input-group-prepend">
					
						<span class="input-group-text"><i class="fa fa-phone"></i></span>
					
					</div>
				
					<input type="number" class="form-control" name="mobile" placeholder="Phone number" required autocomplete="off">
				
				</div>

				<div class="form-group input-group">
				
					<div class="input-group-prepend">
					
						<span class="input-group-text"><i class="fa fa-envelope"></i></span>
					
					</div>
					
					<input type="email" class="form-control" name="email" placeholder="Email Address" required autocomplete="off">
				
				</div>
				
				<div class="form-group input-group">
				
					<div class="input-group-prepend">
					
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					
					</div>
				
					<input type="password" class="form-control" name="password" placeholder="Create password" required autocomplete="off">
				
				</div>
				
				<div class="form-group input-group">
				
					<div class="input-group-prepend">
					
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					
					</div>
				
					<input type="file" class="form-control" name="image" required autocomplete="off">
				
				</div>

				
				<div class="form-group">
				
					<button type="submit" class="btn btn-block btn-primary mb-3" name="submit">Create Account</button>
					
				</div>
					
			</form>
			
		</article>

	</div>

<script src="jquery-3.5.0.min.js"></script>

<script src="jquery-ui.min.js"></script>

<script>
	$(document).ready(function(){
		$('#dateRangePicker').datepicker({
			format: 'mm-dd-yyyy',
			changeMonth: true,
			changeYear: true,
			startDate: '01/01/1947',
			endDate: '01/01/2047'
		});
	});
</script>

</body>

</html>
