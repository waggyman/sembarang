<?php
session_start();
?>
<html>
<head><title>Login Page</title></head>
<body>
  <form method="post" action="postin.php">
    Username:
    <br><input type="text" name="username"></br>
    Password:
    <br><input type="password" name="password"></br>
    <input type="submit" value="login">
  </form>
  <?php
    echo $_SESSION['msger'];
  ?>
  <p>Dont have an account ?<a href="signup.php">Sign Up</a></p>
</body>
</html>
<?php
session_unset();
 ?>
