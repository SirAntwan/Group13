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
            <li><a href="MusicPage.php">MUSIC DATABASE</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="AccountCreation2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="MyAccount.php"><span class="glyphicon glyphicon-log-in"></span> My Account</a></li>
            <button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-out"></span><a href="index.php"> Logout</a></button>
          </ul>
        </div>
      </nav>
    </section>
    <div class="container-fluid" id = "welcome">
        <h1>MUSIC DATABASE</h1>  
        <form method="POST">
        <input type="text" name="Search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
</form>
    </div>
      <body>     
           <table>
           <tr>
           <form method="post">
    <th><input type="submit" type="submit" name="title" class="button" value="Title" /></th>
    <th><input type="submit" type="submit" name="Artist" class="button" value="Artist" /></th>
    <th><input type="submit" type="submit" name="Rating" class="button" value="Rating" /></th>
    <th><input type="submit" type="submit" name="Release" class="button" value="Release Date" /></th>
    <th><input type="submit" type="submit" name="Length" class="button" value="Length" /></th>
    <th><input type="submit" type="submit" name="Genre" class="button" value="Genre" /></th>
  
  </tr>
  </form>
  <?php
                
                if ($_POST['title'] != null){
                  $sql = "SELECT * FROM songs ORDER BY songName"; 
                } else if ($_POST['Artist'] != null) {
                  $sql = "SELECT * FROM songs ORDER BY artist";
                } else if ($_POST['Rating'] != null) {
                  $sql = "SELECT * FROM songs ORDER BY ratings";
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
                      ?>
  <tr>
    <td><?php echo $row['songName'] . " "; ?></td>
    <td><?php echo $row['artist'] . " "; ?></td>
    <td><?php echo $row['ratings'] . " "; ?></td>
    <td><?php echo $row['releaseYear'] . " "; ?></td>
    <td><?php echo $row['songLength'] . " "; ?></td>
    <td><?php echo $row['genre'] . " "; }
    }?></td>
  </tr>
  
</table>
        
                      
    </body>

    </div>
    </section>
    <section class="about" id="about">
      <h1>About Us</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat necessitatibus odio, architecto facilis excepturi esse, magnam voluptas delectus nobis voluptatum suscipit tempore earum eius error? Quibusdam quasi maiores facere quam?<br /><br />
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