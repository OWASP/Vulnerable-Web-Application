<!DOCTYPE html>
<html>
<head>
   <title>XSS 2</title>
<link rel="shortcut icon" href="../Resources/hmbct.png" />
</head>
<body>
   <form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="Gönder">
</form>
<?php
if (isset($_GET["username"])) {
 	$user = str_replace("<script>", "",$_GET["username"]);
	echo "Your name is "."$user";
}
?>


</body>
</html>
