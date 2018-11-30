<!DOCTYPE html>
<html>
<head>
    <title>SETUP</title>
<link rel="shortcut icon" href="Resources/hmbct.png" />
</head>
<body>
  <link rel="stylesheet" href="Resources/button.css">
  <div class="button" align="center" style="background-color:#757575;padding:10px;border-radius:80px 80px 0px 0px">
    <button type="button" name="homepagebutton" onclick="location.href='homepage.html'">Home Page</button>
  </div>
  </link>
  <div align="center" style="background-color:#c9c9c9;padding:150px;">

    <form method="POST">
      <label style="font-size:24px;font-family:'Georgia'">Create Database:&ensp;</label>
      <input type="submit" name="submit" value="Enter" style="padding:8px;font-family:'Georgia'"></form>

    <form method="POST">
      <label style="font-size:24px;font-family:'Georgia'">Restore Database:</label>
      <input type="submit" name="submit1" value="Enter" style="padding:8px;font-family:'Georgia'"></form>
  </div>

<div align="center" style="background-color:#afafaf;padding:60px;border-radius:0px 0px 80px 80px">
<?php

if (isset($_POST["submit"])) {

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysqli_error( $conn));
   }
   else
   echo 'Connected successfully  </br>';
   create_database($conn);
   create_tables($conn, "1ccb8097d0e9ce9f154608be60224c7c");
   mysqli_close($conn);
}
if (isset($_POST["submit1"])) {
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if ($conn) {
   	echo "Connected successfully <br>";
   }
   else {
	die('Could not connect: ' . mysqli_error( $conn));
   }

   remove_database($conn);
   create_database($conn);
   create_tables($conn, "1ccb8097d0e9ce9f154608be60224c7c");
   mysqli_close($conn);
}



function create_database($conn){
   $sql = 'CREATE Database 1ccb8097d0e9ce9f154608be60224c7c';
   $retval = mysqli_query( $conn, $sql);

   if(! $retval ) {
      die('Could not create database: ' . mysqli_error( $conn));
   }

   echo "Database 1ccb8097d0e9ce9f154608be60224c7c created successfully </br>";
}

function create_tables($conn, $db_name){
   $sql = 'CREATE TABLE books( '.
      'number INT NOT NULL , '.
      'bookname VARCHAR(50) NOT NULL, '.
      'authorname VARCHAR(50) NOT NULL)';
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query( $conn , $sql);

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }
    #-------------------------------------------------
   echo "Table books created successfully </br>";

   $sql = 'CREATE TABLE flags( '.
      'flag VARCHAR(50) NOT NULL)';
   mysqli_select_db($conn, $db_name);
   $retval = mysqli_query(  $conn , $sql );

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table flags created successfully </br>";
   #---------------------------------------------------
   $sql = 'CREATE TABLE secret( '.
      'username VARCHAR(56) NOT NULL , '.
      'password VARCHAR(56) NOT NULL)';
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query(   $conn, $sql );

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table secret created successfully </br>";
   #---------------------------------------------------
   $sql = 'CREATE TABLE users( '.
      'firstname VARCHAR(50) NOT NULL , '.
      'lastname VARCHAR(50) NOT NULL, '.
      'username  VARCHAR(50) NOT NULL, '.
      'password   VARCHAR(50) NOT NULL )';
   mysqli_select_db($conn, $db_name);
   $retval = mysqli_query( $conn , $sql);

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table users created successfully </br>";
   #---------------------------------------------------

   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (1, "SILMARILLION", "J.R.R TOLKIEN")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (2, "DUNE", "FRANK HERBERT")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (3, "THE HUNGER GAMES", "SUZANNE COLLINS")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (4, "HARRY POTTER \AND THE ORDER OF THE PHONEIX", "J.K ROWLING")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (5, "TO KILL A MOCKINGBIRD", "HARPER LEE")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (6, "TWILIGHT", "STEPHEINE MEYER")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (7, "THE MICE MAN", "GEORGE COCKCROFT")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   #--------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO flags (flag) VALUES ("You hacked me!")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO flags (flag) VALUES ("SQL Injection is easy?")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

   #----------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO secret (username, password) VALUES ("admin", "password")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

   #--------------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("John","Doe", "Admin", "password")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Alice","Carrol", "Rabbit", "White")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Bruce","Batman", "Alfred", "Batmobile")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Dare","Devil", "HackMe", "IfY0UC4N")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}

function remove_database($conn){
   $sql = 'DROP DATABASE 1ccb8097d0e9ce9f154608be60224c7c';
   $retval = mysqli_query($conn, $sql);
   if($retval){
   echo "<br>The database deleted successfully.<br>";
   }
   else{
   echo "Error: ".$sql."<br>". mysqli_error($conn);
   }
}

?>
</div>
  <img src="Resources/hmb.png" align="left" style="width:40%" alt="HummingbirdsCyberTeam">
  <img src="Resources/gazicyber.jpg" align="right" style="width:15%" alt="GaziCyber">

</body>
</html>
