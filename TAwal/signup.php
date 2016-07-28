<?php
session_start();
?>
<html>
<head><title>sign-up page</title></head>
<body>
  <form method="post" action="postup.php">
    Name:
    <br><input type="text" name="user" placeholder="your name is ?"></br>
    Email:
    <br><input type="email" name="email" placeholder="email@example.com"></br>
    Password:
    <br><input type="password" name="password" placeholder="use strong password"></br>
    Confirm Password:
    <br><input type="password" name="repassword" placeholder="retype your password"></br>
    <input type="submit" value="Sign Up">
  </form>
<?php
echo $_SESSION['ermsg'];
 ?>

<?php
session_unset();
