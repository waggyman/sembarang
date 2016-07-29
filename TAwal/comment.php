<?php
session_start();
$name=$_SESSION['user'];
$email=$_SESSION['email'];
?>
<html>
<head><title>comment</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
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
  <form method="post" action="postment.php">
    Name:</br>
    <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" readonly></br>
    Email:</br>
    <input class="form-control" type="email" name"email" value="<?php echo $email; ?>" readonly></br>
    Comment:</br>
    <textarea class="form-control" name="comment" rows="5" placeholder="Max 500 character. . . and use tag </br> for start in new line"></textarea></br>
    <?php if(!isset($_SESSION['user'])){?>
    <button class="btn btn-success" type="submit" disabled>Submit</button>
    <p>login first! <a href="login.php">Click Here..</a></p>
  <?php }
  else{ ?>
    <button class="btn btn-success" type="submit">Submit</button>
  <?php } ?>
  </form>
</div>
<?php
$servername="localhost";
$username="root";
$password="root";

$conn=mysql_connect($servername, $username, $password);
if(!$conn){
  die('couldnot connect :'.mysql_error());
}
mysql_select_db('NEWEB');
$sql="SELECT Name, Comment FROM comment;";
$retval=mysql_query($sql, $conn); ?>
  <div class="container"><?php
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{ echo "</br>"; ?>

    <div class="commentBox">
    <p class="commentName"> <?php echo "{$row[0]} Say: "; ?> </p>
    <p class="commentArea"> <?php echo "{$row[1]}"; ?></p>
  </div>

<?php

}
?>
  </div>
  <div id="footer">
    <p style="text-align:center;">Copyright &copy; - 2016 - All Rights Reserved - re-kill.com</p>
  </div>
</body>
</html>
