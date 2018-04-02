<?php
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

$sql = "DELETE FROM comments WHERE id =".$_GET['id'] ;

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Comment deleted successfully....')</script>";
    header( "refresh:0;url=main.php" );
    //header('Location: index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
