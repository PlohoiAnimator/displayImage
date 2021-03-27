<?php 

	$msg = "";
	$css_class = "";

	$conn = mysqli_connect('localhost','mysql','mysql','registration');

	if (isset($_POST['save-user'])) {
		echo "<pre>", print_r($_FILES['profileImage']['name']) ,"</pre>";

		$bio = $_POST['bio'];
		$profileImageName = time(). " " . $_FILES['profileImage']['name'];

		$target = "uploads/". $profileImageName;

		if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
			$sql = "INSERT INTO users (profile_image,bio) VALUES ('$profileImageName', '$bio')";
			if (mysqli_query($conn, $sql)) {
				$msg = "Image uploaded and saved to database";
				$css_class = "alert-success";
			} else 
			{
				$msg = "Database Error: Failed to save user";
				$css_class = 'alert-danger';
			}

		} 
	}
?>