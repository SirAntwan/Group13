<?php 

session_start();

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TuneUP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Homepage.css" />

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
    <script>
     function MyAccountPage() {
			document.location.href = "MyAccount.php";
		}
    </script>
  <body>
    <section class="header" id="header">
      <nav class="navbar-static-top navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">TuneUP <span class="glyphicon glyphicon-cd"></span></a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">HOME</a></li>
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
      <h1>Hello, <?php echo $_SESSION['Username'];?></h1>
    </div>

    <!-- Start Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="TuneUP.jpg" alt="logo">
        </div>
        <div class="item">
          <img src="musiclistener1.jpg" class="img-responsive" alt="listener1">
        </div>
        <div class="item">
          <img src="musiclistener2.jpg"  class="img-responsive" alt="listener2">
        </div>
        <div class="item">
          <img src="musiclistener3.jpg"  class="img-responsive" alt="listener3">
        </div>
      </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- About Us/Contact us -->    
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