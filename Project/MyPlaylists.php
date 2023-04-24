<?php error_reporting(0); ?> 
<?php 

session_start();

include "db_connection.php";

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address']) && isset($_SESSION['UniqueID'])) {
  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TuneUP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="musicpage1.css" />

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


    

    <!-- <link rel="icon" href="images/triforce-logo.png" /> -->
  </head>
  <body>
    <section class="header" id="header">
      <nav class="navbar-static-top navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="home.php">TuneUP <span class="glyphicon glyphicon-cd"></span></a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#socials">CONTACT US</a></li>
            <li><a href="MusicPage.php"><span class="glyphicon glyphicon-music"></span> SONGS </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="UserPlaylist.php"><span class="glyphicon glyphicon-user"></span> Find Other Users</a></li>
          <li><a href="MyPlaylists.php"><span class="glyphicon glyphicon-th-list"></span> My Playlists</a></li>
          <li><a href="NewPlaylist.php"><span class="glyphicon glyphicon-pencil"></span> New Playlist</a></li>
            <li><a href="MyAccount.php"><span class="glyphicon glyphicon-log-in"></span> My Account</a></li>
            <button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-out"></span><a href="index.php"> Logout</a></button>
          </ul>
        </div>
      </nav>
    </section>

    
    <div class="container-fluid" id = "welcome">

    <h1><?php echo $_SESSION['Username']?>'s Playlists</h1>
    </div>
      <body>     
           <table>
           <tr>
           <form method="post">
    <th><input type="submit" type="submit" name="Name" class="button" value="Name    " /></th>
    <th><input type="submit" type="submit" name="Description" class="button" value="Description    " /></th>
  
  </tr>
  </form>
  <?php
                $id = $_SESSION['UniqueID'];
                if ($_POST['Name'] != null){
                  $sql = "SELECT * FROM playlists WHERE userID = '$id' ORDER BY name"; 
                } else if ($_POST['Description'] != null) {
                  $sql = "SELECT * FROM playlists WHERE userID = '$id' ORDER BY description";
                } else {
                  $sql = "SELECT * FROM playlists WHERE userID = '$id'"; 
                }
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);
                  
                
                if ($resultCheck) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $link = "location.href='playlist.php?id=" . $row['playlistID'] . "'";
                      ?>
  <tr>
    <td onclick="<?php echo $link?>"><?php echo $row['name'] . " "; ?></td>
    <td onclick="<?php echo $link?>"><?php echo $row['description'] . " ";
 }
    }?></td>
  </tr>
  
</table>
        
                      
    </body>

    </div>
    </section>
    <section class="about" id="about">
      <h1>About Us</h1>
      <p>Welcome to TuneUP, the music social media app designed for music enthusiasts like you! Our app was created by a team of music lovers who wanted to create a platform where people could connect over their shared love of music.<br><br>
        
        We believe that music is more than just entertainment - it's a way of life. It has the power to inspire, unite, and transform us in ways that nothing else can. With TuneUP, we aim to make it easy for you to discover new music, connect with other music fans, and share your passion for music with the world.<br><br>
        
        Our team is made up of experienced developers, designers, and music industry professionals who understand the unique needs of music fans. We have created an app that is user-friendly and intuitive, with features that allow you to easily connect with other music fans, discover new music, and stay up-to-date with the latest trends in the music world.<br><br>
        
        At TuneUP, we are dedicated to creating a community of music lovers who can come together to share their love of music. Whether you're a fan of pop, rock, hip hop, or any other genre, there is a place for you on TuneUP. We believe that music has the power to bring people together and we're excited to be a part of that journey with you!
      </p>
    </section>
    <hr />
    <section class="socials" id="socials">
      <h1>Contact Us!</h1>
      <div class="social-links">
        <ul>
          <li><a href= "https://www.youtube.com/watch?v=9cPxh2DikIA">INSTAGRAM</a></li>
          <li>
            <a href= "https://www.youtube.com/watch?v=9PWjqgM_CU8">FACEBOOK</a>
          </li>
          <li><a href = "https://www.youtube.com/watch?v=XPDJKacOwjI">TWITTER</a></li>
          <li>
            <a href="https://www.youtube.com/watch?v=ZXtT3yZPAVc">YOUTUBE</a>
          </li>
        </ul>
      </div>
    </section>
    <hr />
  </body>
</html>

    

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>