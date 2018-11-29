<!DOCTYPE html>
<html>
<head>
	<title>SQL Injection</title>
	<link rel="shortcut icon" href="../Resources/hmbct.png" />
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
		<p>Give me book's number and I give you book's name in my library.</p>
		Book's number : <input type="text" name="number">
		<input type="submit" name="submit">
		<!--<p>Im learning something, I think?
		    I will sanitize query this time!!
		    //I'm the best web developer.
		     //number is too dangerous. I have to do something.</p>
		-->
	</form>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "db1";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	if(isset($_POST["submit"])){
		$number = $_POST['number'];
		//I'm the best web developer.
		//number is too dangerous. I have to do something.
		if(strchr($number,"'")){
			echo "What are you trying to do?<br>";
			echo "Awesome hacking skillzz<br>";
			echo "But you can't hack me anymore!";
			exit;
		}

		$query = "SELECT bookname,authorname FROM books WHERE number = $number"; 
		$result = mysqli_query($conn,$query);

		if (!$result) { //Check result
		    $message  = 'Invalid query: ' . mysql_error() . "\n";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<hr>";
		    echo $row['bookname']." ----> ".$row['authorname'];    
		}

		if(mysqli_num_rows($result) <= 0)
			echo "0 result";

	}
?> 

</body>
</html>
