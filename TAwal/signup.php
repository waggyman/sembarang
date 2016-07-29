<?php
session_start();
?>
<html>
<head><title>sign-up page</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <form method="post" action="postup.php" class="form-signin">
  <h2>Register</h2>
    Name:
    <br><input type="text" name="user" placeholder="your name is ?" class="form-control"></br>
    Email:
    <br><input type="email" name="email" placeholder="email@example.com" class="form-control"></br>
    Password:
    <br><input type="password" name="password" placeholder="use strong password" class="form-control"></br>
    Confirm Password:
    <br><input type="password" name="repassword" placeholder="retype your password" class="form-control"></br>
    <button type="submit" class="btn btn-success">Sign Up</button>
  </form>
<?php
echo $_SESSION['ermsg'];
 ?>

<?php
session_unset();
