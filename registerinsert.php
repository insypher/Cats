<?php
include("database.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO register(fname,lname,email,pass)
VALUES ('$fname','$lname','$email','$pass')";
mysqli_query($conn,$sql);
header("Location: register.html");

mysqli_close($conn);

?>