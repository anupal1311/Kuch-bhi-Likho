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
?>

<!Doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<title>Kuch-Bhi-Likho</title>
</head>
<body>
<?php
if(! isset($_SESSION['username']) && ! isset($_SESSION['password'])) {
	echo '<script>alert("You are not logged in ...")</script>' ;
	header('refresh:0;url=index.php');
} else {
date_default_timezone_set('Asia/Kolkata');
$sql = "UPDATE userdetails SET LastTimeSeen = NOW() WHERE username = '".$_SESSION['username']."'";
$conn -> query($sql) ;
$sql1 = "SELECT * FROM userdetails WHERE LastTimeSeen > DATE_SUB(NOW(), INTERVAL 3 MINUTE)" ;
$result = $conn -> query($sql1) ;
$count = $result->num_rows ;

$sql2 = "SELECT * FROM userdetails" ;
$conn -> query($sql2) ;
$result1 = $conn -> query($sql2) ;
$count1 = $result1 -> num_rows ;

echo'
<div class="container">
<div class="header1"><font color="#E0F2F1"><marquee direction="right" behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"><h1><i>Let\'s Kuch-bhi-likho ...<h1><i></marquee></div>
<div class="header2"> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFE0B2">Online Users : </font>'.$count.'&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFE0B2">Total Users : </font>'.$count1.'
<br><br><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome <font color="#FF9800">'.$_SESSION['username'].'</font>
<img src="l2.png" width="50px" height="50px" style="float:right;">
<br><br>
<form action="logout.php">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="text" name="SignOut" value="Sign out">Sign out</button>
</form>
 </center></div>
<div class="main">
<br><br>
<table width="100%" height="30px">
<tr>
<form action="main.php" method="post">
<td><center><button type="text" name="Miscellaneous" value="Miscellaneous">Miscellaneous</button></center></td>
<td><center><button type="text" name="Confession" value="Confession">Confession</button></center></td>
<td><center><button type="text" name="Crushes" value="Crushes">Crushes</button></center></td>
<td><center><button type="text" name="Teachers" value="Teachers">Teachers</button></center></td>
</form>
</tr>
</table><br>
<b><center><i><font size="5pts" color="red">NOTE : Please refresh the page to get latest comments</font></i></center></b> 
';
include("show_comment.php"); 
echo'<br><br><form action="add_comment.php" method="post">
 &nbsp;&nbsp;&nbsp;&nbsp;<textarea cols="50" rows="2"  name="comment" placeholder="Write your comment here ...."></textarea>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;<button type="text" value="comment">Comment</button>
 </form>
</div>
<div class="footer">
<hr color="#E0F2F1">
<font color="#CCFF90">
<center><p style="display:inline;"><a href="https://www.facebook.com/Acube-1711913345744755/?skip_nax_wizard=true" title="click here" target="_blank" style="text-decoration:none;font-color:yellow;">Contact us</a></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p style="display:inline;"><font color="#E0F2F1">Created and maintained by <a href="https://www.facebook.com/Acube-1711913345744755/?skip_nax_wizard=true" title="click here" target="_blank" style="text-decoration:none;font-color:yellow;">Acube Tech PVT. Ltd.</a></font></p>
</center>
</font>
</div>
</div>';
}
?>
</body>
</html>
