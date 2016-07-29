<?php
session_start();

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
