<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!--<script src="main.js"></script>-->
</head>
<body>

<form>
    <center class="client-login-form">
    <br>
    <label class="label-login">Admin Login</label>
    <br><br>
    <label class="label-login">Username</label>
    <input>
    <br><br>
    <label class="label-login">Password</label>
    <input>
    <br><br><br>
    <input type="submit" name="submit">
    <br><br>
    <button onclick='location.href="index.php"' type="button">Home</button>

    </center>

</form>
    
</body>
</html>