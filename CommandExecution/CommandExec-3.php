<html>
  <head>
    <link rel="shortcut icon" href="../Resources/hmbct.png" />
    <title>CommandExec-3</title>
  </head>
  <body>
    <div style="background-color:#afafaf;padding:15px;border-radius:20px 20px 0px 0px">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='commandexec.html';">Main Page</button>
    </div>
    <div style="background-color:#c9c9c9;padding:20px;">
      <h1 align="center">Think more!</h1>
    <form align="center" action="CommandExec-3.php" method="$_GET">
      What's my keyword:
      <input align="center" type="text" name="typeBox" value=""><br>
      <input align="center" type="submit" value="Submit">
    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">
    <?php
    if(isset($_GET["typeBox"])){
      $target =$_GET["typeBox"];
      $substitutions = array(
        '&&'=>'',
        '& ' => '',
        '&& ' => '',
        ';'  => '',
        '|' => '',
        '-'  => '',
        '$'  => '',
        '('  => '',
        ')'  => '',
        '`'  => '',
        '||' => '',
        '/' => '',
        '\\' => '',
      );
      $target = str_replace(array_keys($substitutions),$substitutions,$target);
      echo shell_exec($target);
      if($_GET["typeBox"] == "flag")
        echo "You did again! Impressive.";
    }

    ?>
  </div>
  </body>
</html>
