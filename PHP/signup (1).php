<?php
session_start();
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

$username = $_POST['username'] ;
$email = $_POST['email'] ;
$mob_no = $_POST['mob_no'] ;
$password = $_POST['password'] ;

$sql = "INSERT INTO userdetails (username, emailID, mob_no , password)
VALUES ('$username','$email','$mob_no','$password')";

if ($conn->query($sql) === TRUE) {
	$_SESSION['username'] = $username ;
	$_SESSION['password'] = $password ;
    //echo "<script>alert('Signed up successfully...')</script>";
    header( "refresh:0;url=main.php" );
    //header('Location: index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
