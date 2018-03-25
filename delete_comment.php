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

$check = "SELECT username FROM comments WHERE id = ".$_GET['id'] ;
$result = $conn->query($check) ;
if($result -> num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    if($row['username'] != $_SESSION['username']) {
         echo '<script>alert("You are not authorized to delete this comment . You can delete your comments only ...")</script>' ;
         header('refresh:0;url=main.php');
    } else {
$sql = "DELETE FROM comments WHERE id =".$_GET['id'] ;

if ($conn->query($sql) === TRUE) {
    header( "refresh:0;url=main.php" );
    //header('Location: index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
} else {
        echo '<script>alert("No such comment exists ...")</script>' ;
        header('refresh:0;url=main.php');
}



$conn->close();
?>	