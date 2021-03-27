<?php  
	include 'processForm.php';

	$sql = "SELECT * FROM users";

	$result = mysqli_query($conn, $sql);
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Avatar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-4 offset-md-4 form-div">
				<table class="table table-bordered">
					<thead>
						<th>Profile image</th>
						<th>Bio</th>
					</thead>
					<tbody>
						<?php foreach ($users as $user): ?>
							<tr> 
								<td>
									<img src="uploads/<?php echo $user['profile_image']; ?> " width="80" >
									
								</td>
								<td>
									<?php echo $user['bio']; ?>
								</td>
							 </tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>