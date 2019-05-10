<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesheet.css">
  </head>
<body>
<?php
session_name('Website');
session_start();
$host = "localhost";
$user = "ricber18";
$pwd = "y5Dqyz6GOo";
$db = "ricber18_db";
$mysqli = new mysqli($host, $user, $pwd, $db);
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$navigation = <<<END
    <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="product.php">Product</a>
END;

    if (isset($_SESSION['userId']))
    {
      $navigation .= <<<END
      <a href="logout.php">Logout</a>
      <a href="add_product.php">Add Product</a>
      <a href="register.php">Register</a>
      Logged in as {$_SESSION['username']}
END;
}
    else
    {
      $navigation .= <<<END
      <a href="login.php">Login</a>
END;
}
$navigation .= '</nav>';
?>
