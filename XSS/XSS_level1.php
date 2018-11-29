<!DOCTYPE html>
<html>
<head>
   <title>XSS 1</title>
<link rel="shortcut icon" href="../Resources/hmbct.png" />
</head>
<body>
   <form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="Gönder" value="Submit">
</form>
<?php
if(isset($_GET["username"]))

	echo("Your name is ".$_GET["username"])?>
</body>
</html>
