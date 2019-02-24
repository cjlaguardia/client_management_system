<?php 
	include('connect.php');

	// if (isset($_POST['submit'])) {
	// 	$firstname = $_POST['firstname'];
	// 	$middlename = $_POST['middlename'];
	// 	$lastname = $_POST['lastname'];
	// 	$gender = $_POST['gender'];
	// 	$birthdate = $_POST['birthdate'];
	// 	$address = $_POST['address'];
	// 	$telephone = $_POST['telephone'];
	// 	$email = $_POST['email'];
	// 	$civil_status = $_POST['civil_status'];
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];

	// 	$sql = "INSERT INTO employee(firstname, middlename, lastname, gender, birthdate, address, telephone,email,civil_status,username,password) VALUES ('$firstname','$middlename','$lastname','$gender','$birthdate','$address','$telephone','$email','$civil_status','$username','$password')";

	// 	$query = mysqli_query($con, $sql);

	// 	if ($query) {
	// 		echo "<script>alert('You are registered successfully!');</script>";
	// 	}else{
	// 		echo "<script>alert('Oops! An error occured!');</script>";
	// 	}

	// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trainer Registration</title>
</head>
<body>
	<center><h2>Trainer Registration Form</h2></center>

	<form action="index.php" method="POST">
		<label>Username</label>
		<input type="text" name="username" required autocomplete="off"><br><br>

		<label>Password</label>
		<input type="text" name="password" required autocomplete="off"><br><br>
    
        <label>Full Name</label>
		<input type="text" name="fullname" placeholder="" required autocomplete="off"><br><br>

		<label>Gender: </label>
		Male<input type="radio" value="Male" name="gender">
        Female<input type="radio" value="Female" name="gender"><br><br>

		<label>Address</label>
		<input type="text" name="address"><br><br>

		<label>Contact Number</label>
		<input type="number" name="contact_number"><br><br>

		<label>Email</label>
		<input type="email" name="email"><br><br>

        <button onclick='location.href="trainer-login.php"' type="button">Back to Login </button>
        <input type="submit" name="submit" value="SUBMIT">
	</form>
</body>
</html>
