<?php error_reporting(0); ?> 
<?php 

session_start();

include "db_connection.php";

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address'])) {
  
 ?>
<!DOCTYPE html>

<html>

<?php

                if (isset($_GET['id'])) {
                    $songID = $_GET['id'];
                } else {
                    header("Location: home.php");
                }
                $id = $_SESSION['UniqueID']; 

                $sql = "SELECT * FROM songs WHERE songID LIKE '%$songID%';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck) {
                    if ($row = mysqli_fetch_assoc($result)) {
                      $songName = $row['songName'];
                      $artist = $row['artist'];
                      $ratings = $row['ratings'];
                      $releaseYear = $row['releaseYear'];
                      $songLength = $row['songLength'];
                      $genre = $row['genre'];
                      $album = $row['album'];
                      $audio = $row['audio'];
                    }
                }
                      ?>


<head>

    <title><?php echo $songName?></title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="song.css">

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

<body style="background-color:#212529; padding-top: 150px;">
   
<div class = "container-fluid">

    <h1>
        <a href="MusicPage.php" class="glyphicon glyphicon-cd"> SONGS</a>
        <span class="text-center"><?php echo $songName?></span>
    </h1>
                        
            
                        <form>
                        
                        <div class="userinfotable inputcontainer">
                        <div align="center">
                                <img src="./image/<?php echo $album?>" alt="<?php echo $album?>" height="300" width="300">
                                <audio controls>
                                    <source src="./songs/<?php echo $audio?>" type="audio/mpeg">
                                </audio>
                            </div>
                            <div>
                                <label class="columnname">Title:</label>
                                <input name="name" type="text" size="30" value="<?php echo $songName?>" readonly="readonly">
                            </div>

                            <div>
                                <label class="columnname">Artist:</label>
                                <input name="name" type="text" size="30" value="<?php echo $artist?>" readonly="readonly">
                            </div>
                
                            <div>
                                <label class="columnname">Release Date (Year):</label>
                                <input name="email" type="text" size="30" value="<?php echo $releaseYear?>" readonly="readonly">
                                
                                
                            </div>

                            <div>
                                <label class="columnname">Rating:</label>
                                <input name="email" type="text" size="30" value="<?php echo $ratings?>" readonly="readonly">
                                
                                
                            </div>
                
                            <div>
                                <label class="columnname">Length (Seconds):</label>
                                <input name="username" type="text" size="30" value="<?php echo $songLength?>" readonly="readonly">
                                
                                
                            </div>

                            <div>
                                <label class="columnname">Genre:</label>
                                <input name="username" type="text" size="30" value="<?php echo $genre?>" readonly="readonly">
                                
                                
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