<?php error_reporting(0); ?> 
<?php 

session_start();

include "db_connection.php";

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address'])) {
  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TuneUP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="musicpage.css" />

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
        <h1>SONGS</h1>  
        <form method="POST">
        <input type="text" name="Search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
</form>
    </div>
      <body>     
           <table>
           <tr>
           <form method="post">
           <th><input type="submit" type="submit" name="Artist" class="button" value="Album" /></th>
           <th><input type="submit" type="submit" name="title" class="button" value="Title    " /></th>
    <th><input type="submit" type="submit" name="Artist" class="button" value="Artist    " /></th>
    <th><input type="submit" type="submit" name="Rating" class="button" value="Rating    " /></th>
    <th><input type="submit" type="submit" name="Release" class="button" value="Release Date (Year)" /></th>
    <th><input type="submit" type="submit" name="Length" class="button" value="Length (Seconds)" /></th>
    <th><input type="submit" type="submit" name="Genre" class="button" value="Genre      " /></th>
    <th><input type="submit" type="submit" name="add" class="button" value="Add" /></th>
  
  </tr>
  </form>
  <?php
                $id = $_SESSION['UniqueID']; 
                if ($_POST['title'] != null){
                  $sql = "SELECT * FROM songs ORDER BY songName"; 
                } else if ($_POST['Artist'] != null) {
                  $sql = "SELECT * FROM songs ORDER BY artist";
                } else if ($_POST['Rating'] != null) {
                  $sql = "SELECT * FROM songs ORDER BY ratings DESC";
                } else if ($_POST['Release'] != null) {
                  $sql = "SELECT * FROM songs ORDER BY releaseYear";
                } else if ($_POST['Length'] != null) {
                  $sql = "SELECT * FROM songs ORDER BY songLength";
                } else if ($_POST['Genre'] != null) {
                  $sql = "SELECT * FROM songs ORDER BY genre";
                } else {
                  $sql = "SELECT * FROM songs"; 
                }
                if (isset($_POST['submit-search'])) {
                  $search = $_POST['Search'];
                  $sql = "SELECT * FROM songs WHERE songName LIKE '%$search%' OR artist LIKE '%$search%' OR ratings LIKE '%$search%' 
                    OR releaseYear LIKE '%$search%' OR songLength LIKE '%$search%' OR genre LIKE '%$search%';";
                }
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $songName = $row['songName'];
                      $artist = $row['artist'];
                      $ratings = $row['ratings'];
                      $releaseYear = $row['releaseYear'];
                      $songLength = $row['songLength'];
                      $genre = $row['genre'];
                      $songID = $row['songID'];
                      $link = "location.href='song.php?id=" . $songID . "'";
                      ?>
  <tr>
  <td> <?php echo '<img src="./image/'.$row['album'].'" width=40 height=40>'?></td>
    <td onclick="<?php echo $link?>"><?php echo $songName . " "; ?></td>
    <td onclick="<?php echo $link?>"><?php echo $artist . " "; ?></td>
    <td onclick="<?php echo $link?>"><?php echo $ratings . " "; ?></td>
    <td onclick="<?php echo $link?>"><?php echo $releaseYear . " "; ?></td>
    <td onclick="<?php echo $link?>"><?php echo $songLength . " "; ?></td>
    <td onclick="<?php echo $link?>"><?php echo $genre . " "; ?>
    <td>

      <form method="GET" action="SongAdd.php">
        <input type=hidden name=id value =<?php echo $songID?>>
        <input type="submit" type="submit" class="button" value="    +    ">
      </form>
    <?php
  }
    }
    

    ?>
</td>
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