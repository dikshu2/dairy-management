<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nabvar.css">
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="#contact">Contact</a>
        <div class="dropdown">
          <button class="dropbtn">Signin
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="adminlogin.php">Admin Login</a>
            <a href="login.php">User Login</a>
          </div>
        </div>
        <a href="#about">About</a>
        <input type="text" placeholder="Search..">
       
      </div>
</body>
</html>