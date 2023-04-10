<?php 

session_start();

include "db_connection.php";

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TuneUP</title>
    <link rel="stylesheet" href="Homepage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;600;800&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="icon" href="images/triforce-logo.png" /> -->
  </head>
    <script>
     function MyAccountPage() {
			document.location.href = "MyAccount.php";
		}
    </script>
  <body>
    <section class="header" id="header">
      <nav>
        <a href="index.html"><h1>TUNE<b>UP</b></h1></a>
        <div class="nav-links">
          <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#socials">CONTACT US</a></li>
            <li><a href="MusicPage.php">MUSIC DATABASE</a></li>
          </ul>
        </div>
      </nav>
          <body>
           Enjoy our list of music! <br></br>
           <?php
                $sql = "SELECT * FROM logins;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['Username'] . " ";
                        echo $row['Password'] . " ";
                        echo $row['UniqueID'] . "<br>";
                    }
                }
            ?>
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