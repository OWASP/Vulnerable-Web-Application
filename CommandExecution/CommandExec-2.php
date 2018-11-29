<html>
  <head>
    <link rel="shortcut icon" href="../Resources/hmbct.png" />
    <title>CommandExec-2</title>
  </head>
  <body bgcolor="#FFFFD2">
    <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='commandexec.html';">Main Page</button>
      <button type="button" name="nextButton" onclick="location.href='CommandExec-3.php';">Next Level</button>
      <button type="button" name="prevButton" onclick="location.href='CommandExec-1.php';">Previous Level</button>
    </div>
    <div style="background-color:#FEFE9A;padding:20px;">
      <h1 align="center">HELLO</h1>
    <form align="center" action="CommandExec-2.php" method="$_GET">
      Write Field:<input type="text" name="typeBox" value=""><br>
      <input type="submit">
    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px" align="center">
    <?php
    if(isset($_GET["typeBox"])){
      $target =$_GET["typeBox"];
      $substitutions = array('&&' => '',';'  => '', );
      $target = str_replace(array_keys($substitutions),$substitutions,$target);
      echo shell_exec($target);
    }
    if($_GET["typeBox"] == "flag2")
      echo "Welldone! You did great job.";
     ?>
  </div>
  </body>
</html>
