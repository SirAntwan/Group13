<?php 

session_start(); 

include "db_connection.php";


?>

 <!DOCTYPE html>

<html>

<head>

    <title>New Account</title>

    <link rel="stylesheet" type="text/css" href="Style3.css">

</head>


</div><div id="mainbodyareabody" class="overalllayoutalignblock">
                <h2 class="breadcrumbs overalllayoutaligntext">
                    →
                    <span class="currentpagecrumb">New Account</span>
                    <a href="Index.php">Login Page</a>  
                </h2>
                
                <div id="centralarea">
                    <div class="userinfosubsection"> 
                
                        
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
        </html>
