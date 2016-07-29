<?php
session_start();
error_reporting(0);
$row="arigi";
?>
<html>
<head><title>About</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=width-device, initial-scale=1">
<body>
  <div id="head">
    <a href="#"><img src="img/BBT.png" id="logo"/></a>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
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
  <h1>About Me</h4>
  <div class="about-img">
    <img src="img/profil.jpg" />
  </div>
  <div class="about-art">
  <h4>Nama</h4>
  <p>arigi wiratama</p>
  <h4>Deskripsi</h4>
  <p>Cowok, lahir di Tarakan pada 8 november 1998, Small boy with an ultra big dream</p>
  <?php
  if(isset($_SESSION['user'])){
  ?><h4>Email</h4>
    <p>mas.awe.awe@gmail.com</p>
    <h4>Phone</h4>
    <p>081240548416</p>
    <h4>Fesbuk</h4>
    <p><a href="https://www.facebook.com/arigi.w">Arigi Wiratama</a></p>

  <?php
} ?>

</div>
</div>
<div id="footer">
  <p style="text-align:center;">Copyright &copy; - 2016 - All Rights Reserved - re-kill.com</p>
</div>
</body>
</html>
