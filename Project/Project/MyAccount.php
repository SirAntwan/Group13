<?php 

session_start();

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address']) && isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>My Account</title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Account2.css">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;600;800&display=swap"
      rel="stylesheet"
    />



</head>

<body style="background-color:#212529;">
    <div class = "container-fluid">

    <h1>
        <a href="home.php" class="glyphicon glyphicon-cd"> HOME</a>
        <span class="text-center">My Account</span>
    </h1>

        <form>
            <div>
                <label class="columnname">First Name:</label>
                <input name="name" type="text" size="30" value= <?php echo $_SESSION['FirstName']; ?> readonly="readonly">
            </div>

            <div>
                <label class="columnname">Last Name:</label>
                <input name="name" type="text" size="30" value= <?php echo $_SESSION['LastName']; ?> readonly="readonly">
            </div> 
            
            <div style="display: none">
                <label class="columnname">Gender:</label>
                <input name="school" type="text" size="30" value="unknown" readonly="readonly">
            </div>
            
            <div>
                <label class="columnname">Email:</label>
                <input name="email" type="text" size="30" value= <?php echo $_SESSION['Address']; ?> readonly="readonly">
            </div>
            
            <div>
                <label class="columnname">Username:</label>
                <input name="username" type="text" size="30" value= <?php echo $_SESSION['Username']; ?> readonly="readonly">
            </div>    
            
            <div>
                <label class="columnname">Password:</label>
                <input name="password" type="text" size="30" value="**********" readonly="readonly">
            </div>
            
            <div>
                <label class="columnname">UniqueID:</label>
                <input name="password" type="text" size="30" value= <?php echo $_SESSION['UniqueID']; ?> readonly="readonly">
            </div>
            
            <div>
                <label class="columnname">School/Org:</label>
                <input name="school" type="text" size="30" value="Miami University" readonly="readonly">
            </div>
            
            </form>
        </div>

            </body>
                        
                
                
                
                
                

                
                

<?php

 }else{

header("Location: index.php");

exit();

}

?>