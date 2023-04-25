<?php

include "db_connection.php";

function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

 }


$first = validate($_POST['fname']);
$lname = validate($_POST['lname']);
$email = validate($_POST['email']);
$uname = validate($_POST['uname']);
$password = validate($_POST['password']);
$unique = validate($_POST['unique']);

$sql = "SELECT * FROM logins WHERE UniqueID='$unique'";

$result = mysqli_query($conn, $sql);

if (empty($first) || empty($lname) || empty($email) || empty($uname) || empty($password) || empty($unique)) {
    header("Location: AccountCreation2.php?error=Data field(s) missing");

    exit();
} else if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['UniqueID'] === $unique) {
        header("Location: AccountCreation2.php?error=Unique ID already chosen");
    }

} else {


$sql = "INSERT INTO `logins` (`Username`, `Password`, `Address`, `UniqueID`, `FirstName`, `LastName`) VALUES ('$uname', '$password', '$email', '$unique', '$first', '$lname')";
mysqli_query($conn, $sql);

header("Location: index.php");
}
?>