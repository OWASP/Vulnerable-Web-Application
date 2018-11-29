<!DOCTYPE html>
<html>
<head>
	<title>SQL Injection</title>
	<link rel="shortcut icon" href="../Resources/hmbct.png" />
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
		<p>John -> Doe</p>
		First name : <input type="text" name="firstname">
		<input type="submit" name="submit">
	</form>


<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "db1";

	// Create connection
	$conn = mysqli_connect($servername,$username,$password,$db);

	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	} 
	//echo "Connected successfully";
	
	if(isset($_POST["submit"])){
		$firstname = $_POST["firstname"];
		$sql = "SELECT lastname FROM users WHERE firstname='$firstname'";//String
		$result = mysqli_query($conn,$sql);
		
		if (mysqli_num_rows($result) > 0) {
        // output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
       			echo $row["lastname"];
       			echo "<br>";
    		}
		} else {
    		echo "0 results";
		}
	}
	
 ?>
</body>
</html>
