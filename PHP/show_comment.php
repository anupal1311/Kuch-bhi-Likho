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

if(isset($_POST['Miscellaneous']))
	$_SESSION['category'] = 'Miscellaneous' ;
if(isset($_POST['Confession']))
	$_SESSION['category'] = 'Confession' ;
if(isset($_POST['Crushes']))
	$_SESSION['category'] = 'Crushes' ;
if(isset($_POST['Teachers']))
	$_SESSION['category'] = 'Teachers' ;

if(isset($_SESSION['category']))
	$category = $_SESSION['category'] ;
else
	$category = 'Miscellaneous' ;

echo '<center><font color="#FAFAFA"><h1>'.$category.'</h1></font></center>' ;
$sql = "SELECT * FROM comments WHERE category = '$category' ORDER BY id ASC" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo'
		<font size="4px">';
		if($row['username'] == $_SESSION['username'])
			echo '&nbsp;&nbsp;&nbsp;&nbsp;You&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;' ;
		else
			echo '&nbsp;&nbsp;&nbsp;&nbsp;User&nbsp;&nbsp;:&nbsp;&nbsp;' ;
		echo'</font><div class="CommentBox" style="display:inline;"><font size="4px" color="black">' ; 
		$str = $row['comment'] ;
		$id = $row['id'] ;
		$count = 0 ;
		if(strlen($str) > 70) {
			for($i = 0 ; $i < strlen($str) ; $i ++) {
				if($i % 70 == 0 && $i != 0) {
					echo '<br>' ;
					$count ++ ;
				}
                                echo $str[$i] ;
			}
			$count ++ ;
		} else {
			echo $str ;
		}

		echo '</font>' ;
                
                echo '<font color="blue">&nbsp;&nbsp;&nbsp;&nbsp;' . $row['time'].'</font>' ;
		if($row['username'] == $_SESSION['username']) {
			echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete_comment.php?id='.$id.'"><img src = "4.png" height = "15px" width = "15px" alt = "delete"></a>' ;
		}
		echo '</div><br><br>' ;
		while($count != 0) {
			echo '<br>' ;
			$count -- ;
		} 
 	}
} else {
    echo '&nbsp;&nbsp;&nbsp;<div class="CommentBox" style="display:inline;"><font size="4px" color="black">No comments available .</font></div>' ;
}
$conn->close();
?>			
