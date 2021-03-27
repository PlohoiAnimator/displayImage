<?php  
	include 'processForm.php';
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
				<form action="index.php" method="post" enctype="multipart/form-data">

					<h3 class="text-center">Create Profile</h3>

					<?php if (isset($msg)): ?>
						<div class="alert <?php echo $css_class ?>">
							<?php echo $msg; ?>
						</div>
					<?php endif; ?>

					<div class="form-group text-center">

						<img src="uploads/image2.gif" id="profileDisplay" onclick="triggerClick()" alt="">
						<label for="profileImage">Profile Image</label>
						<input type="file" name="profileImage" id="profileImage" onchange="displayImage(this)" class="form-control" style="display: none;">
						
					</div>
					<div class="form-group">
						<label for="bio">Bio</label>
						<textarea name="bio" id="bio" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="save-user" class="btn btn-primary btn-block col-12 mt-4">Save User</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="scripts.js"></script>

</body>
</html>