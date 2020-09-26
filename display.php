<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload</title>
	<?php include 'links/links.php'; ?>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-9 col-12">
				<div class="table-responsive">
					<table class="table-striped text-center table-bordered text-white">
						<thead class="bg-dark text-white">
							<tr>
								<th class="py-3 px-3 text-white">Id</th>
								<th class="py-3 px-3 text-white">Username</th>
								<th class="py-3 px-3 text-white">DOB</th>
								<th class="py-3 px-3 text-white">Gender</th>
								<th class="py-3 px-3 text-white">Mobile</th>
								<th class="py-3 px-3 text-white">Email</th>
								<th class="py-3 px-3 text-white">Password</th>
								<th class="py-3 px-3 text-white">Image</th>
							</tr>
						</thead>
						<?php
							include 'dbcon.php';

							$selectquery = "SELECT * FROM imgupload";

							$query = mysqli_query($con, $selectquery);

							while($result = mysqli_fetch_array($query)){
						?>
						<tbody>
							<tr>
								<td class="text-dark"><?php echo $result['id']; ?></td>
								<td class="text-dark"><?php echo $result['username']; ?></td>
								<td class="text-dark"><?php echo $result['dob']; ?></td>
								<td class="text-dark"><?php echo $result['gender']; ?></td>
								<td class="text-dark"><?php echo $result['mobile']; ?></td>
								<td class="text-dark"><?php echo $result['email']; ?></td>
								<td class="text-dark"><?php echo $result['password']; ?></td>
								<td class="text-dark"><img src="<?php echo $result['image']; ?>" width="100" height="50"></td>
							</tr>
						</tbody>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>