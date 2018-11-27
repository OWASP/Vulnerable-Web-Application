<!DOCTYPE html>
<html>
<head>
   <title>REFLECTED XSS 2</title>
</head>
<body>
   <form method="GET" action="" name="form">
   <p>Adınız:<input type="text" name="username"></p>
   <input type="submit" name="Gönder">
</form>
<?php
if (isset($_GET["username"])) {
 	$user = str_replace("<script>", "",$_GET["username"]);
	echo "$user";
}
?>


</body>
</html>
