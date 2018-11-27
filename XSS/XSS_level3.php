<!DOCTYPE html>
<html>
<head>
	<title>XSS 3</title>
</head>
<body>
<form method="GET" action="" name="form">
   <p>Adınız:<input type="text" name="username"></p>
   <input type="submit" name="Gönder">
</form>
<?php 
if (isset($_GET["username"])) {
	$user = preg_replace("/<(.*)[S,s](.*)[C,c](.*)[R,r](.*)[I,i](.*)[P,p](.*)[T,t]>/i", "", $_GET["username"]);
	echo "$user";
}
 ?>


</body>
</html>
