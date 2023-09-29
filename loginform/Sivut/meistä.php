<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="kirjat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meistä</title>
    <style>
        body{ font: 14px sans-serif; display: flex; justify-content: center;}
    </style>
</head>
<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <a href="../Login/welcome.php"><i class="fa fa-fw fa-home"></i> Etusivu</a>
        <a href="../Sivut/kirjat.php"><i class="fa fa-fw fa-wrench"></i> Kirjat</a>
        <a href=""><i class="fa fa-fw fa-envelope"></i> Meistä</a>

        <a href="reset-password.php" style="font-size: 15px; margin-top: 75vh; background-color: orange; color: black">Resetoi salasana</a>
        <a href="logout.php" style="font-size: 15px; background-color: red; color: black">Kirjaudu ulos</a>
    </div>
</body>
</html>