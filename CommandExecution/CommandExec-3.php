<?php
session_start();
header("Content-Security-Policy: default-src 'self'; script-src 'self'");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        $message = 'Invalid request. Please try again.';
    } else {
        $allowed_inputs = ['flag'];
        $input = $_POST['typeBox'] ?? '';
        if (in_array($input, $allowed_inputs, true)) {
            $message = "You did again! Impressive.";
        } else {
            $message = 'Incorrect keyword. Try again.';
        }
    }
}
?>
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
    <form align="center" action="CommandExec-3.php" method="POST">
      <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
      What's my keyword:
      <input align="center" type="text" name="typeBox" value=""><br>
      <input align="center" type="submit" value="Submit">
    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">
    <?php
    if ($message !== '') {
        echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    }
    ?>
  </div>
  </body>
</html>
