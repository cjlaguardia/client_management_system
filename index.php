<?php
    include('connect.php');
?>


<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Homepage - Client Management System</title>
        <link rel="stylesheet" type="text/css" media="" href="style.css" />
        <!--<script src="main.js"></script>-->
    </head>

    <body class="main-body">

        <header></header>    
    
        <br>
        <button onclick='location.href="admin-login.php"' class="main-admin-button" type="button">ADMIN</button>
        <br><br><br>
        <div class="main-padding-right">
        <img class="main-kyrie-logo" src="images/kyrie_logo3.png" alt="kyrie_logo">   
        <h1 class="system-title">Client Management System</h1> <br>
        <h1 class="main-login-word">LOGIN AREA</h1>
            <div class="main-button">
                <button onclick='location.href="client-login.php"' class="button-client" type="button">CLIENT</button>
                <button onclick='location.href="trainer-login.php"' class="button-trainer" type="button">TRAINER</button>
            </div> 
        </div>
        
        <footer></footer>
    </body>
</html>