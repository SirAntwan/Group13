<?php

include "db_connection.php";

function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

 }


$userID = validate($_POST['userID']);
$name = validate($_POST['name']);
$description = validate($_POST['description']);
$public = validate($_POST['public']);


if (empty($name) || empty($description) || empty($userID)) {
    header("Location: NewPlaylist.php?error=Data field(s) missing");

    exit();
} else {


$sql = "INSERT INTO `playlists` (`userID`, `name`, `description`, `public`) VALUES ('$userID', '$name', '$description', '$public')";
mysqli_query($conn, $sql);

header("Location: home.php");
}
?>