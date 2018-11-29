<!DOCTYPE html>
<html>
<head>
	<title>XSS 4</title>
</head>
<body>
<form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="Gönder" value="Submit">
</form>
<?php 
if (isset($_GET["username"])) {
    $values = array("script", "prompt", "alert", "h1");

 	$user = str_replace($values, " ",$_GET["username"]);
	echo "$user";
}

 ?>

</body>
</html>
