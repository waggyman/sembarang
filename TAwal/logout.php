<?php
session_start();
error_reporting(0);


 ?>
 <?php
session_destroy();
header('Location:home.php');
?>
<html>
<head><title>Logout</title></head>
<body>
  <form action="login.php">
    <input type="submit" value="Login">
  </form>
</body>
</html>
