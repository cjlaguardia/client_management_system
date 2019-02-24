<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Client Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!--<script src="main.js"></script>-->
</head>

<body class="client-login-body">

<form>
    <center class="client-login-form">
    <br>
    <label class="label-login">Client Login</label>
    <br><br>
    <label class="label-login">Username</label>
    <input>
    <br><br>
    <label class="label-login" >Password</label>
    <input>
    <br><br><br>
    <input class="client-login-submit-button" type="submit" name="submit"><br><br>
    <button onclick='location.href="index.php"' type="button">Home</button>
    <button onclick='location.href="client-register.php"' type="button">Register</button>
    

    
    </center>

</form>
    
</body>
</html>