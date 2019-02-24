<?php
	include('connect.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>List of Clients</title>
</head>
<body>
	<h1>List of Clients</h1>
	<a href="admin-page.php">Back to Admin Page</a><br>

	<table border=1  style="border-collapse: collapse;">
		<th>Client ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Full Name</th>
		<th>Gender</th>
		<th>Birthdate</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Membership</th>
		<th>Trainer Name</th>
		<th>Emergency Full Name</th>
		<th>Contact Address</th>
		<th>Contact Number</th>
		<th>Relation to Client</th>
		
		<!-- <th>Action</th> -->
		
		<?php
			$get_client = "SELECT * FROM client";
			$get_client_exec = mysqli_query($con, $get_client);
			while ($data = mysqli_fetch_array($get_client_exec)) {
				echo "<tr>";
				echo "<td>".$data['client_id']."</td>";
				echo "<td>".$data['username']."</td>";
				echo "<td>".$data['password']."</td>";
				echo "<td>".$data['fullname']."</td>";
				echo "<td>".$data['gender']."</td>";
				echo "<td>".$data['birthdate']."</td>";
				echo "<td>".$data['address']."</td>";
				echo "<td>".$data['contact_number']."</td>";
				echo "<td>".$data['email']."</td>";
				echo "<td>".$data['membership_type']."</td>";
				
				echo "<td>".$data['trainer_name']."</td>";
				echo "<td>".$data['emergency_fullname']."</td>";
				echo "<td>".$data['emergency_address']."</td>";
				echo "<td>".$data['emergency_relation']."</td>";

				$eid=$data['client_id'];
				echo "<td><a href='edit.php?eid=$eid'>EDIT</a> | <a href='delete.php?eid=$eid'>DELETE</a></td>";
				echo "</tr>";
			}
		?>
	

	</table>

</body>
</html>