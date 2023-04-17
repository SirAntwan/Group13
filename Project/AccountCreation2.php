<?php 

session_start(); 

include "db_connection.php";


?>

<!DOCTYPE html>

<html>

<head>

    <title>New Account</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Account2.css" />


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
            <div class="container-fluid">
                <h2 >
                    → New Account <a href="index.php">Login Page</a>
                    
                </h2>
                <form action="signup.php" method="POST">
                
            <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>
                <label>First Name</label>
                <input type="text" name="fname" placeholder="John"><br>

                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Schmidt"><br>

                <label>email</label>
                <input type="text" name="email" placeholder="jschmidt@gmail.com"><br>

                <label>User Name</label>                    
                <input type="text" name="uname" placeholder="Username"><br>
        
                <label>Password</label>                    
                <input type="password" name="password" placeholder="********"><br> 

                <label>UniqueID</label>                    
                <input type="text" name="unique" placeholder="********"><br> 
        
                <button type="submit">Create New Account</button>
                            
                        </form>
                </div>
                    
                </body>
                </html>

