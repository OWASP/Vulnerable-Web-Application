<html>
  <head>
    <link rel="shortcut icon" href="../Resources/hmbct.png" />
    <title>CommandExec-1</title>
  </head>
  <body bgcolor="#FFFFD2">
    <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='commandexec.html';">Main Page</button>
      <button type="button" name="nextButton" onclick="location.href='CommandExec-2.php';">Next Level</button>
    </div>
    <div style="background-color:#FEFE9A;padding:20px;">
      <h1 align="center">LOGIN</h1>
    <form align="center" action="CommandExec-1.php" method="$_GET">
      <label>Username:</label><br>
      <input type="text" name="username" value="Admin"><br>
      <label>Password:</label><br>
      <input type="password" name="password" value=""><br>
    <input type="submit">

    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px" align="center">
    <?php
    if(isset($_GET["username"])){
      echo shell_exec( $_GET["username"]);
    }
    if($_GET["username"] == "Admin" && $_GET["password"] == "flag1")
      echo "WELLDONE";
    ?>
  </div>
  </body>
</html>
