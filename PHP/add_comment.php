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

$comment = $_POST['comment'];
$username = $_SESSION['username'];
if(isset($_SESSION['category']))
	$category = $_SESSION['category'] ;
else
	$category = 'Miscellaneous' ;

date_default_timezone_set('Asia/Kolkata');
$time = "".date("d-M-Y , h:i:sa");

$sql = "INSERT INTO comments (comment , username , category , time) 
VALUES ('$comment' , '$username' , '$category' , '$time')";

if ($conn->query($sql) === TRUE) {
    header( "refresh:0;url=main.php");
    //header('Location: index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
