<?php
include_once("config.php");
include_once("login.php");
// Get form data
$e = $_POST['email'];
$p = $_POST['password'];

// Create connection
$conn = new mysqli('localhost','root','','begnas');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .connect_error);
}

else {
    $stmt= $conn->prepare("insert into barjabare(email,Password)values(?,?)");
    $stmt->bind_param("ss",$e,$p, );
    $stmt->execute ();
    echo "Ok Done <br> Thank you so much";
    $stmt->close();
}
?>