<?php
session_start() ;
$servername = "mysql4.000webhost.com";
$username = "a7666768_root";
$password = "pass123";
$dbname = "a7666768_user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $username=$_POST['username'];
    $password=$_POST['password'];
$sql = "SELECT * FROM userdetails WHERE username = '$username' AND password = '$password' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$_SESSION['username'] = $username ;
	$_SESSION['password'] = $password ;
	header("refresh:0;url=main.php");
} else {
    echo "<script>alert('Invalid username/password or create new account')</script>" ;
    header('refresh:0;url=index.php');
}
$conn->close();
?>