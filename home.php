<?php 

session_start();

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="Style.css">

</head>

<body>

     <h1>Hello, <?php echo $_SESSION['Username']; ?></h1>

     <a href="logout.php">Logout</a>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
