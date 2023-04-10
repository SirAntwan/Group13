<?php 

session_start(); 

include "db_connection.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM logins WHERE Username='$uname' AND Password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $uname && $row['Password'] === $pass) {

                echo "Logged in!";

                $_SESSION['Username'] = $row['Username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['UniqueID'] = $row['UniqueID'];
                
                $_SESSION['Password'] = $row['Password'];

                $_SESSION['Address'] = $row['Address'];  
                
                $_SESSION['FirstName'] = $row['FirstName'];  

                $_SESSION['LastName'] = $row['LastName'];  

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}