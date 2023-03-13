<?php 

session_start(); 

include "db_connection.php";

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address']) && isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db_connection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['Username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['Username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['Address']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['Password']);
        $password = mysqli_real_escape_string($con, $password);
        $UniqueID = stripslashes($_REQUEST['UniqueID']);
        $UniqueID = mysqli_real_escape_string($con, $UniqueID);
        $FirstName = stripslashes($_REQUEST['FirstName']);
        $FirstName = mysqli_real_escape_string($con, $FirstName);
        $LastName = stripslashes($_REQUEST['LastName']);
        $LastName = mysqli_real_escape_string($con, $LastName);
        $query    = "INSERT into `logins` (`Username`, `Password`, `Address`, `UniqueID`, `FirstName`, `LastName`)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$UniqueID', '$FirstName', '$LastName')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="FirstName" class="login-input" name="FirstName" placeholder="First Name">
        <input type="LastName" class="login-input" name="LastName" placeholder="Last Name">
        <input type="UniqueID" class="login-input" name="UniqueID" placeholder="UniqueID">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>

<?php

 }else{

header("Location: index.php");

exit();

}

?>