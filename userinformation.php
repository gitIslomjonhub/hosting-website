<?php
    $hostname = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "youtubedata";

    $conn = mysqli_connect($hostname, $dbUser, $dbPass, $dbName);

mysqli_select_db($conn,"youtubedata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`massage`) VALUES ('$user','$email','$message') ";

mysqli_query($conn,$query);

echo "MESSAGE IS SENT";

?>