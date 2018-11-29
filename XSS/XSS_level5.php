<!DOCTYPE html>
<html>
<head>
    <title>XSS 5</title>
<link rel="shortcut icon" href="../Resources/hmbct.png" />
</head>
<body>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="Gönder" value="Submit">
</form>

<?php 
if (isset($_GET["username"])) {
    $user = str_replace("<", "", $_GET["username"]);
    echo "Your name is "."$user";
}
 ?>

</body>
</html>
