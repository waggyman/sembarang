<?php
session_start();
error_reporting(0);

?>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <div id="head">
    <a href="#"><img src="img/BBT.png" id="logo"/></a>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php" class="active">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="comment.php">Guestbook</a></li>

        <?php
        if(!isset($_SESSION['user'])){?>
        <li><a href="login.php">Login</a></li>
      <?php
    }
  else{
    ?>
        <li><a href="logout.php">Logout</a><li>
  <?php
      }?>
      </ul>
    </div>
  </div>
<div class="container">
  <form class="form-signin" method="post" action="postin.php">
  <h2 class="form-signin-heading">Login</h2>
    <label for="inputEmail" class="sr-only">Email</label>
    <input id=inputEmail type="email" name="email" class="form-control" placeholder="Email">
    <label for="inputPassword" class="sr-only">Password</label>
    <br><input id="inputPassword" type="password" name="password" class="form-control" placeholder="Password"></br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p>Dont have an account ?<a href="signup.php">Sign Up</a></p>
  </form>
</div>
  <?php
    echo $_SESSION['msger'];
  ?>

</body>
</html>
<?php
session_unset();
 ?>
