<?php 

session_start();

if (isset($_SESSION['UniqueID']) && isset($_SESSION['Username']) && isset($_SESSION['Address'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="Style.css">

</head>
<script>
     function MyAccountPage() {
			document.location.href = "MyAccount.php";
		}
</script>
<body>
     <h1>Hello, <?php echo $_SESSION['Username']; ?></h1>

     <a href="MyAccount.php">My Account</a>

     <body>
          &nbsp;
     </body>

     <a href="logout.php">Logout</a>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>