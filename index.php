<?php
session_start() ;
?>
<!Doctype html>
<html>
<head>
<title>HOME</title>

<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
<?php
if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
	header("Location:main.php");	
}
echo'
<div class="container">
<div class="header">
<marquee behavior="alternate" direction="right" onmouseover="this.stop();" onmouseout="this.start();"><font color="#E0F2F1"><i><h1>Welcome to Kuch-Bhi-Likho</h1></i></font></marquee>
<hr color="#E0F2F1">
</div>
<div class="left">
</div>
<div class="ImageView">
	<marquee direction="down" behavior="alternate" height="550px" onmouseover="this.stop();" onmouseout="this.start();">
	<img src="im6.jpg" height="75px" width="100%" class="logo"><br>
	<img src="118.jpg" height="75px" width="100%" class="logo"><br>
	<img src="download11.jpg" height="75px" width="100%" class="logo"><br>
	<img src="sg1-00185.jpg" height="75px" width="100%" class="logo"><br>
	<img src="006Charizard_AG_anime.png" height="75px" width="100%" class="logo"><br>
	<img src="download.jpg" height="75px" width="100%" class="logo"><br>
	<img src="anup1_crop.jpg" height="75px" width="100%" class="logo"><br>
	<img src="Aladin-disney-2420027-560-336.jpg" height="75px" width="100%" class="logo"><br>
	<img src="download (1).jpg" height="75px" width="100%" class="logo"><br>
	<img src="sg1.jpg" height="75px" width="100%" class="logo"><br>
	<img src="sg3-00197.jpg" height="75px" width="100%" class="logo"><br>
	<img src="images (1).jpg" height="75px" width="100%" class="logo"><br>
	</marquee> 
</div>
<div class="right">
	<center>
	<font size="5px" color="#E0E0E0">
	<br>Are you frustrated from <br>your college life??<br>
	let\'s have some fun...<br>
	Share your feelings<br>Tell everyone about your crush ,<br>Do confessions ,
	<br>Comment on teachers , 
	<br>Without disclosing your identity<br>And you can share it with classmates.
	</font>
	<br><br>
	<font color="#FFCDD2"><h1>Login Here</h1></font>
	<form action="login.php" method="post">
	<table border="0px">
	<tr>
	<td><input type="text" name="username" placeholder="username" required></td>
	</tr>
	<tr>
	<td><input type="password" name="password" placeholder="password" required></td></tr>
	</table>
	<br>
	<input type="submit" name="submit" value="Sign in">
	</form>
	<br>

	<div id="abc">
	<!-- Popup Div Starts Here -->
	<div id="popupContact">
	<!-- Contact Us Form -->
	<form action="signup.php" id="form" method="post" name="form">
	<img id="close" src="2.png" onclick ="div_hide()">
	<h2>Sign Up</h2>
	<hr>
	<table border="0px">
	<tr>
	<td><input id="username" name="username" pattern="[a-zA-Z]{3}.+" title="Enter username of min-length 4 ( at-least 3 characters at beginning )" placeholder="Pick a username" type="text" required> 
	</td>
	</tr>
	<tr>
	<td><input id="email" name="email" placeholder="Enter Email ID" type="email" title="format : xyz@abc.pqr" required></td>
	</tr>
	<tr>
	<td><input id="mob_no" name="mob_no" placeholder="Enter mobile number" type="tel" pattern="[7-9]{1}[0-9]{9}" title="format : (7-9)xxxxxxxxx" required></td>
	</tr>
	<tr>
	<td><input type="password" pattern=".{6,}" title="format : min-length is 6" name="password" placeholder="Enter password" required></td>
	</tr>
	</table>
	<br>
	<input type="submit" name="submit" value="Sign Up">
	</form>
	</div>
	<!-- Popup Div Ends Here -->
	</div>
	<!-- Display Popup Button 
	<button id="popup" onclick="div_show()">Popup</button>-->
	<script>
		// Following two functions are for popup signup form -
		function div_show() {
			document.getElementById(\'abc\').style.display = "block";
		}

		function div_hide(){
			document.getElementById(\'abc\').style.display = "none";
		}
	</script>
	<a href="#" onclick="div_show()" title="click here to Sign up">Create new account ...</a>
	</center>
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
?>
</body>
</html>