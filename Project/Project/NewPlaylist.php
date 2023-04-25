<?php 

session_start(); 

include "db_connection.php";


if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address']) && isset($_SESSION['UniqueID'])) {
  
    ?>

<!DOCTYPE html>

<html>

<head>

    <title>New Playlist</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="newplaylist.css" />


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
            <h1>
                <a href="home.php" class="glyphicon glyphicon-cd"> HOME</a>
                <span class="text-center">New Playlist</span>
            </h1>
                <form action="createplaylist.php" method="POST">
                
            <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>
                <label>Playlist Name</label>
                <input type="text" name="name" placeholder="My Playlist"><br>

                <label>Description</label>
                <input type="text" name="description" placeholder="An Awesome Playlist!"><br>
        
                <label>Visibility</label>
                <input type="radio" id="option1" name="public" value="1">
                <label for="option1">Public</label>
                <input type="radio" id="option2" name="public" value="0">
                <label for="option2">Private</label> 

                <input type="hidden" name="userID" value=<?php echo $_SESSION['UniqueID']?>>

                <button type="submit">Create New Playlist</button>
                            
                        </form>
                </div>
                    
                </body>
                </html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>