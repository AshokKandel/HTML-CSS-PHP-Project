<?php
include_once("config.php");
// Get form data
$n = $_POST['name'];
$e = $_POST['email'];
$p = $_POST['phone'];
$m = $_POST['message'];
$s = $_POST['subject'];
$a = $_POST['attachment'];


// Create connection
$conn = new mysqli('localhost','root','','begnas');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .connect_error);
}

else {
    $stmt= $conn->prepare("insert into service(s_name,s_email,s_phone,s_message,s_subjest,a_attachment)values(?,?,?,?,?,?)");
    $stmt->bind_param("ssisss",$n,$e,$p,$m,$s,$a);
    $stmt->execute ();
    echo "Ok Done <br> Service Vayo";
    $stmt->close();
}
?>