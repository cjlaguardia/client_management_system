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

	// 	$sql = "INSERT INTO client(firstname, middlename, lastname, gender, birthdate, address, telephone,email,civil_status,username,password) VALUES ('$firstname','$middlename','$lastname','$gender','$birthdate','$address','$telephone','$email','$civil_status','$username','$password')";

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
	<title>Client Registration</title>
</head>
<body>
	<center><h2>Client Registration Form</h2></center>

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
        
		<label>Birthdate</label>
		<input type="date" name="birthdate" required><br><br>

		<label>Address</label>
		<input type="text" name="address" required autocomplete="off"><br><br>

		<label>Contact Number</label>
		<input type="number" name="contact_number" required autocomplete="off"><br><br>

		<label>Email</label>
		<input type="email" name="email"><br><br>

		<label>Membership Type</label>
		<select name="membership_type" required>
			<option value="">--Choose your type--</option>
			<option value="Monthly">Monthly</option>
			<option value="Per-Session">Per Session</option>
			
		</select><br><br>

        <label>Trainer</label>
        <input type="text" name="trainer_name"><br><br><br><br>

        <text>Emergency Contact</text><br><br>
        <label>Full Name</label>
        <input type="text" name="emergency_fullname" required autocomplete="off"><br><br>

        <label>Complete Address</label>
        <input type="text" name="emergency_address" required autocomplete="off"><br><br>

        <label>Contact Number</label>
        <input type="number" name="emergency_contact" required autocomplete="off"><br><br>

        <label>Relation to Client</label>
        <input type="text" name=emergency_relation required autocomplete="off"><br><br>
        
        <button onclick='location.href="client-login.php"' type="button">Back to Login </button>
        <input type="submit" name="submit" value="SUBMIT">
	</form>
</body>
</html>
